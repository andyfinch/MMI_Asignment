<?php

class Topic
{
    protected $Conn;

    public function __construct($Conn)
    {
        $this->Conn = $Conn;
    }

    public function createTopic($topic_data)
    {
        
        $user_id = $_SESSION['user_data']['id'];
        $parent_id = $topic_data['parent_id'];

        $this->Conn->beginTransaction();
        $query = "INSERT INTO topics (title, description,level,parent_id, user_id, type) VALUES (:title, :description,:level, :parent_id, :user_id, 1)";
        $stmt = $this->Conn->prepare($query);
        $result  =$stmt->execute(array(
            'title' => $topic_data['title'],
            'description' => $topic_data['description'],
            'level' => $topic_data['level'],
            'parent_id' => $parent_id,
            'user_id' => $user_id,
        ));

        if (isset($topic_data['content']) )
        {
            $query = "INSERT INTO contents (type, content, topic_id) VALUES (:type, :content, LAST_INSERT_ID());";
            $stmt = $this->Conn->prepare($query);

            $result = $stmt->execute(array(
                'content' => $topic_data['content'],
                'type' => '1'
            ));

        }
        $this->Conn->commit();

        return $result;

    }

    public function editTopic($topic_data)
    {

        $user_id = $_SESSION['user_data']['id'];

        $this->Conn->beginTransaction();
        $query = "UPDATE topics set title=:title, description=:description where id = :id and user_id = :user_id";
        $stmt = $this->Conn->prepare($query);

        $stmt->execute(array(
            'id' => $topic_data['id'],
            'title' => $topic_data['title'],
            'description' => $topic_data['description'],
            'user_id' => $user_id
        ));

        $query = "UPDATE contents set content=:content where topic_id = :id";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute(array(
            'id' => $topic_data['id'],
            'content' => $topic_data['content']
        ));
        $this->Conn->commit();

        return $stmt;
    }

    public function deleteTopic($topic_data)
    {
        
        $user_id = $_SESSION['user_data']['id'];
        $query = "DELETE from topics where id = :id and user_id = :user_id and path like concat( (select path from topics st where st.id = :id),'%')";
        $stmt = $this->Conn->prepare($query);

        return $stmt->execute(array(
            'id' => $topic_data['id'],
            'user_id' => $user_id
        ));


    }

    public function getTopics()
    {
        $user_id = $_SESSION['user_data']['id'];
        $query = "SELECT *,
                   (
               CASE WHEN EXISTS(SELECT id FROM topics t2 WHERE t2.parent_id=t1.id)
                  THEN 'Y' 
                  ELSE 'N'
               END 
              )AS has_child 
       FROM topics t1 where t1.user_id = :user_id order by path";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute(array(':user_id' => $user_id));
        return $result = $stmt->fetchAll();
    }

    public function getTopic($id)
    {
        $user_id = $_SESSION['user_data']['id'];
        $query = "select  t.*, c.content, c.type from topics t LEFT OUTER JOIN contents c on c.topic_id = t.id                   
                    where   path like concat( (select path from topics st where st.id = :id),'%') and user_id = :user_id                   
                    order by path";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute(array(
                ':user_id' => $user_id,
                ':id' => $id)
        );
        return $result = $stmt->fetchAll();
    }

}
     /*select  *
from    (select * from topics t1
         order by parent_id, id) topics_sorted,
        (select @pv := '1') initialisation
where   find_in_set(parent_id, @pv)
and     length(@pv := concat(@pv, ',', id))
order by concat(parent_path, id)*/

/*select  *
from    (select * from topics t1
         order by parent_id, id) topics_sorted,
        (select @pv := '1') initialisation
where   (find_in_set(parent_id, @pv) or id = @pv) and user_id = 1
and     length(@pv := concat(@pv, ',', id))
order by concat(parent_path, id)*/
?>
