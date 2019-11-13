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
        $query = "INSERT INTO topics (title, description,content,level,parent_id, user_id) VALUES (:title, :description,:content,:level,:parent_id, :user_id)";
        $stmt = $this->Conn->prepare($query);

        return $stmt->execute(array(
            'title' => $topic_data['title'],
            'description' => $topic_data['description'],
            'content' => $topic_data['content'],
            'level' => $topic_data['level'],
            'parent_id' => $topic_data['parent_id'],
            'user_id' => $user_id
        ));


    }

    public function getTopics()
    {
        $user_id = $_SESSION['user_data']['id'];
        $query = "SELECT * FROM topics where user_id = :user_id";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute(array(':user_id' => $user_id));
        return $result = $stmt->fetchAll();
    }

    public function getTopic($id)
    {
        $user_id = $_SESSION['user_data']['id'];
        $query = "SELECT * FROM topics where user_id = :user_id and id = :id";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute(array(
                ':user_id' => $user_id,
                ':id' => $id)
        );
        return $result = $stmt->fetch();
    }

}

?>
