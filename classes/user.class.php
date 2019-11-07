<?php

class User
{
    protected $Conn;

    public function __construct($Conn)
    {
        $this->Conn = $Conn;
    }

    public function createUser($user_data)
    {

        $sec_password = password_hash($user_data['password'], PASSWORD_DEFAULT);

        $query = "INSERT INTO users (email, password, name) VALUES (:email, :password, :name)";
        $stmt = $this->Conn->prepare($query);

        return $stmt->execute(array(
            'email' => $user_data['email'],
            'password' => $sec_password,
            'name' => $user_data['userName']
            ));


    }

    public function loginUser($user_name, $user_password)
    {

        $query = "SELECT * FROM users WHERE name = :name";
        $stmt = $this->Conn->prepare($query);

        $stmt->execute(array(':name' => $user_name));
        $attempt = $stmt->fetch();
        if($attempt && password_verify($user_password, $attempt['password'])) {
            return $attempt;
        }else{
            return false;
        }


    }

}

?>
