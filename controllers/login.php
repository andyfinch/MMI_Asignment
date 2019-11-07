<?php

/*$errorClass = new Errors();
$errorClass->addMessage('email', 'too short');
$errorClass->addMessage('email', 'too big');
$errorClass->addMessage('userName', 'too long');
$errorClass->addMessage('userName', 'too wide');
$errorClass->getJSON();*/
//echo json_encode($errorClass->fieldsInError);
//echo json_encode($errorClass);
//echo json_encode(array_values($errorClass->fieldsInError));
//var_dump($errorClass);

if($_POST) {

    $errorClass = new Errors();
    if ( $_POST['action'] == 'signup' || $_POST['action'] == 'signin')
    {


        if(!$_POST['userName']){
            $error = "User Name not set";
            $smarty->assign('error', $error);
            $errorClass->addMessage('userName', 'User Name is required');
        }
        else {
            if(strlen($_POST['userName']) < 8) {
                $error = "User Name must be at least 8 characters in length";
                $errorClass->addMessage('userName', 'User Name must be at least 8 characters in length');
            }
        }

        if(!$_POST['password']){
            $error = "password not set";
            $smarty->assign('error', $error);
            $errorClass->addMessage('password', 'Password is required');
        }


    }

    if ( $_POST['action'] == 'signup')
    {
        if(!$_POST['email']){
            $error = "Email not set";
            $smarty->assign('error', $error);
            $errorClass->addMessage('email', 'Email is required');
        }
        else {
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $error = "Email is not valid";
                $errorClass->addMessage('email', 'Email is not valid');
            }
        }
        if($_POST['password']){
            if($_POST['password'] != $_POST['confirmPassword']) {
                $error = "Password and confirm password must match";
                $errorClass->addMessage('password', 'Password and confirm password must match');
                $errorClass->addMessage('confirmPassword', null);
            }else if(strlen($_POST['password']) < 8) {
                $error = "Password must be at least 8 characters in length";
                $errorClass->addMessage('password', 'Password must be at least 8 characters in length');
            }
        }

    }


    $errorClass->getJSON();

    if ( !$errorClass->hasErrors())
    {
        if ( $_POST['action'] == 'signup')
        {
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


    if ( $_POST['action'] == 'signin')
    {

    }




    /*else{
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


    }*/

}



?>
