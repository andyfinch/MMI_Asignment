<?php

$errorClass = new Errors();
$errorClass->addMessage('email', 'too short');
$errorClass->addMessage('email', 'too big');
$errorClass->addMessage('userName', 'too long');
$errorClass->addMessage('userName', 'too wide');
echo json_encode($errorClass);
var_dump($errorClass);

if($_POST) {

    $User = new User($Conn);
    /*$jsonErrors = array();
    $jsonErrors['errors'] = array();
    $EmailErrors = new Errors('email');
    $EmailErrors->addMessage('Email Not Set');
    $EmailErrors->addMessage('Email length wrong');
    array_push($jsonErrors, $EmailErrors);*/



    /*$tempErrors['email'] = array();
    array_push($tempErrors['email'], 'Email not set');
    array_push($tempErrors['email'], 'Email length wrong');
    array_push($jsonErrors['errors'], $tempErrors);
    $tempErrors['password'] = array();
    array_push($tempErrors['password'], 'password not set');
    array_push($tempErrors['password'], 'password length wrong');
    array_push($jsonErrors['errors'], $tempErrors);*/






    if(!$_POST['email']){
        $error = "Email not set";
        $smarty->assign('error', $error);
    }else{
        if($_POST['password'] != $_POST['confirmPassword']) {
            $error = "Password and confirm password must match";
        }else if(strlen($_POST['password']) < 8) {
            $error = "Password must be at least 8 characters in length";
        }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error = "Email is not valid";
        }

        if($error) {
            $smarty->assign('error', $error);
        }else {
            $User = new User($Conn);
            $attempt = $User->createUser($_POST);

            if ($attempt) {
                header("Location: index.php?p=dashboard");
                exit();
            } else {
                $smarty->assign('error', "An error occured, please try again later.");

            }

        }


    }

}



?>
