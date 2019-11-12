<?php
$smarty->assign('message', $_SESSION['message']);
unset($_SESSION['message']);

if ($_POST) {

    $User = new User($Conn);
    /*Validate user data requirements common to sign up/ sign in and profile amend*/
    $response = $User->validateStandardUserData($_POST);

    /*validate specific sign up requirements*/
    if (!$_POST['email']) {
        $response->addError('email', 'Email is required');
    }

    if (!$_POST['fullName']) {
        $response->addError('fullName', 'Full Name is required');
    }

    if (!$_POST['city']) {
        $response->addError('city', 'City is required');
    }

    if ($response->hasErrors()) {
        $response->getJSON();
    }

    $attempt = $User->editUser($_POST, $_SESSION['user_data']['id']);


    if ($attempt) {
        $_SESSION['user_data']['full_name'] = $_POST['fullName'];
        $_SESSION['user_data']['email'] = $_POST['email'];
        $_SESSION['user_data']['city'] = $_POST['city'];
        $_SESSION['message'] = 'Profile information updated';
        $response->addSuccess('Profile information updated', 'profile');
    }

    $response->getJSON();
}


?>
