<?php


if($_POST) {

    $User = new User($Conn);
    /*Validate user data requirements common to sign up/ sign in and profile amend*/
    $response = $User->validateStandardUserData($_POST);

    if (!$_POST['password']) {
        $response->addError('password', 'Password is required');
    }
    /*validate specific sign up requirements*/
    if ( $_POST['action'] == 'signup')
    {
                
        if ($_POST['password'] != $_POST['confirmPassword']) {
            $response->addError('password', 'Password and confirm password must match');
            $response->addError('confirmPassword', null);
        }

        if (!$_POST['email']) {
            $response->addError('email', 'Email is required');
        }

        if (!$_POST['fullName']) {
            $response->addError('fullName', 'Full Name is required');
        }

        if (!$_POST['city']) {
            $response->addError('city', 'City is required');
        }

        if (!$_POST['terms']) {
            $response->addError('terms', 'Acceptance of Terms and Conditions is required');
        }

    }

    if ($response->hasErrors())
    {
        $response->getJSON();
    }


    if ($_POST['action'] == 'signup') {
        //$User = new User($Conn);

        $attempt = $User->checkUserExists($_POST['userName']);
        if ($attempt)
        {
            $response->addError('userName', 'User Name already exists.  Please select another');
            $response->getJSON();

        }
        
        $attempt = $User->createUser($_POST);

        if ($attempt) {
            $_SESSION['message'] = 'Registration complete. Welcome ' . $_POST['fullName'];
            $response->addSuccess('Registration Successful', 'dashboard');
        }
        else{
            $response->addError('userName', 'THere was an error, please try again later');
        }
    } else if ($_POST['action'] == 'signin') {
        $User = new User($Conn);
        $user_data = $User->loginUser($_POST['userName'], $_POST['password']);

        if ($user_data) {
            $_SESSION['is_loggedin'] = true;
            $_SESSION['user_data'] = $user_data;
            $_SESSION['message'] = 'Sign in successful. Welcome ' . $_POST['userName'];;
            $response->addSuccess('User Log In Successful', 'dashboard');
        } else {
            $response->addError('userName', 'Incorrect Email/Password');
        }

    }

    $response->getJSON();
}



?>
