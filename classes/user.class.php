<?php

class User
{
    protected $Conn;
    //protected $response;

    public function __construct($Conn)
    {
        $this->Conn = $Conn;
    }

    public function validateStandardUserData($user_data)
    {

        $response = new Response();
        /*if (!$_POST['userName']) {
            $response->addError('userName', 'User Name is required');
        }*/
        if (!$_POST['userName']) {
            $response->addError('userName', 'User Name is required');
        }
        else {

            if (strlen($_POST['userName']) < 8) {
                $response->addError('userName', 'User Name must be at least 8 characters in length');
            }
            else if (strlen($_POST['userName']) > 20) {
                $response->addError('userName', 'User Name must not exceed 20 characters in length');
            }


        }
        if ($_POST['password']) {
            if (strlen($_POST['password']) < 8) {
                $response->addError('password', 'Password must be at least 8 characters in length');
            }
        }

        if ($_POST['email']) {
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $response->addError('email', 'Email is not valid');
            }

        }

        if ($_POST['fullName']) {
            if (strlen($_POST['fullName']) > 255) {
                $response->addError('fullName', 'Full Name must not exceed 255 characters in length');
            }
        }

        if ($_POST['city']) {
            if (strlen($_POST['city']) > 255) {
                $response->addError('city', 'City must not exceed 255 characters in length');
            }
        }


        return $response;


    }

    public function checkUserExists($user_name)
    {


        $query = "SELECT * FROM users WHERE user_name = :user_name";
        $stmt = $this->Conn->prepare($query);
        $stmt->bindParam(':user_name', $user_name);
        $stmt->execute();
        $attempt = $stmt->fetch();
        if ($attempt) {
            return $attempt;
        } else {
            return false;
        }


    }

    public function createUser($user_data)
    {

        $sec_password = password_hash($user_data['password'], PASSWORD_DEFAULT);

        $query = "INSERT INTO users (user_name, password, email, full_name, city) VALUES (:user_name, :password, :email, :full_name, :city)";
        $stmt = $this->Conn->prepare($query);


        return $stmt->execute(array(
            'user_name' => $user_data['userName'],
            'password' => $sec_password,
            'email' => $user_data['email'],
            'full_name' => $user_data['fullName'],
            'city' => $user_data['city']
        ));




    }

    public function editUser($user_data, $user_id)
    {


        $query = "Update users set email=:email, full_name=:full_name, city=:city where id = :id";
        $stmt = $this->Conn->prepare($query);

        return $stmt->execute(array(
            'id' => $user_id,
            'email' => $user_data['email'],
            'full_name' => $user_data['fullName'],
            'city' => $user_data['city']
        ));


    }

    public function updateImageURL($url, $user_id)
    {


        $query = "Update users set image_url=:image_url where id = :id";
        $stmt = $this->Conn->prepare($query);

        return $stmt->execute(array(
            'id' => $user_id,
            'image_url' => $url,
        ));


    }

    public function loginUser($user_name, $user_password)
    {

        $query = "SELECT * FROM users WHERE user_name = :user_name";
        $stmt = $this->Conn->prepare($query);

        $stmt->execute(array(':user_name' => $user_name));
        $attempt = $stmt->fetch();
        if($attempt && password_verify($user_password, $attempt['password'])) {
            return $attempt;
        }else{
            return false;
        }


    }

}

?>
