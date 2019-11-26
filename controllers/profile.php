<?php
$smarty->assign('message', $_SESSION['message']);
unset($_SESSION['message']);
$response = new Response();
if ($_POST) {
    
    if (($_POST['function']) == 'editProfile') {
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
    } else if (($_POST['function']) == 'createImage') {

        $image = new Image($Conn);
       
        if ($_FILES['fileToUpload']['name'][0] != '' )
        {
            $uploadResponse = $image->uploadImage($_FILES);

            if ($uploadResponse['success'] == true) {

                $user = new User($Conn);
                $user->updateImageURL('uploads/' . $uploadResponse['filesAdded'][0], $_SESSION['user_data']['id']);
                $_SESSION['user_data']['image_url'] = 'uploads/' . $uploadResponse['filesAdded'][0];
                $_SESSION['message'] = 'Profile image uploaded successfully ';
                $response->addSuccess('Profile image uploaded successfully', 'profile');
                //header('Location: ./index.php?p=profile');

            } else {

                $_SESSION['message'] = 'There was an issue with the file upload';
                $response->addSuccess('Profile image not uploaded successfully', 'profile');
                //header('Location: ./index.php?p=profile');
            }
        }
        else{
            $user = new User($Conn);
            $user->updateImageURL(null, $_SESSION['user_data']['id']);
            unset($_SESSION['user_data']['image_url']);
            $_SESSION['message'] = 'Profile image removed';
            $response->addSuccess('Profile image removed', 'profile');
        }




    } 


    $response->getJSON();
}


?>
