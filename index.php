<?php
require_once(__DIR__ . '/includes/boot.include.php');


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($_GET['p']) {

        require_once('controllers/' . $_GET['p'] . '.php');
        if ($_SESSION['is_loggedin'] == false) {
            $smarty->display('pages/login.tpl');
        } else if (empty($_SERVER['HTTP_X_REQUESTED_WITH'])) {
            $smarty->display('pages/' . $_GET['p'] . '.tpl');

        }

    } else {

        require_once('controllers/login.php');
        if (empty($_SERVER['HTTP_X_REQUESTED_WITH'])) {
            $smarty->display('pages/login.tpl');
        }

    }
} else {
    if ($_POST['controller'] == 'signin' || $_POST['controller'] == 'signup') {
        require_once('controllers/login.php');
    }
    else if ($_POST['controller'] == 'topic') {
        require_once('controllers/dashboard.php');
    }
    else if ($_POST['controller'] == 'content') {
        require_once('controllers/content.php');
    }
    else if ($_POST['controller'] == 'profile') {
        require_once('controllers/profile.php');
    }
}





