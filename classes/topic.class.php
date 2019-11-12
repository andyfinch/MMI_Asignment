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
        $query = "INSERT INTO topics (title, description, user_id) VALUES (:title, :description, :user_id)";
        $stmt = $this->Conn->prepare($query);

        return $stmt->execute(array(
            'title' => $topic_data['title'],
            'description' => $topic_data['description'],
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

}

?>
