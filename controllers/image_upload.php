<?php
$smarty->assign('message', $_SESSION['message']);
unset($_SESSION['message']);
var_dump($_FILES);
if (isset($_POST['submit'])) {
    $phpFileUploadErrors = array(
        0 => 'There is no error, the file uploaded with success',
        1 => 'The uploaded file exceeds the max file size of ' . ini_get('upload_max_filesize') . 'B',
        2 => 'The uploaded file exceeds the max file size of ' . ini_get('upload_max_filesize') . 'B',
        3 => 'The uploaded file was only partially uploaded',
        4 => 'No file was uploaded',
        6 => 'There was an issue with the file upload',
        7 => 'There was an issue with the file upload',
        8 => 'There was an issue with the file upload',
    );

    $errorInt = $_FILES['fileToUpload']['error'];
    var_dump($errorInt);
    if ($errorInt != 0)
    {
        $_SESSION['message'] = $phpFileUploadErrors[$errorInt];
        header('Location: ./index.php?p=profile');
        exit();
    }

    $target_dir = "uploads/";
    $file_name = $_FILES['fileToUpload']['name'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];

  
    var_dump($file_name);
    var_dump($file_tmp);
    $uniqueFileName = uniqid() . $file_name;
    if (move_uploaded_file($file_tmp, $target_dir . $uniqueFileName)) {
        echo "<h1>File Upload Success</h1>";
        $user = new User($Conn);
        $user->updateImageURL($target_dir . $uniqueFileName, $_SESSION['user_data']['id']);
        $_SESSION['user_data']['image_url'] = $target_dir . $uniqueFileName;
        $_SESSION['message'] = 'Profile image uploaded successfully ';
        header('Location: ./index.php?p=profile');

    } else {
        $_SESSION['message'] = 'There was an issue with the file upload';
        header('Location: ./index.php?p=profile');
    }
}
