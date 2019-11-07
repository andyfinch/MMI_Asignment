<?php
require_once(__DIR__ . '/includes/boot.include.php');

if ($_GET['p']) {
    require_once('controllers/'.$_GET['p'].'.php');
    var_dump($_SESSION['is_loggedin']);
    if ($_SESSION['is_loggedin'] == false)
    {
        $smarty->display('pages/login.tpl');
    }
    else if (empty($_SERVER['HTTP_X_REQUESTED_WITH'])) {
        $smarty->display('pages/' . $_GET['p'] . '.tpl');

    }

} else {
    require_once('controllers/login.php');
    if (empty($_SERVER['HTTP_X_REQUESTED_WITH']))
    {
        $smarty->display('pages/login.tpl');
    }

}
