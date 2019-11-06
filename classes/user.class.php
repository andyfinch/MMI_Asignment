<?php

class User
{
    protected $Conn;

    public function _construct($Conn)
    {
        $this->Conn = $Conn;
    }

    public function createUser($user_data)
    {
        $sec_password = password_hash($user_data['password'], PASSWORD_DEFAULT);

        $query = "INSERT INTO users (email, password, name) VALUES (:user_email, :user_pass, :user_name)";
        $stmt = $this->Conn->prepare($query);

        return $stmt->execute(array(
            'email' => $user_data['email'],
            'password' => $sec_password,
            'name' => $user_data['fullName']
            ));


    }

}

?>
