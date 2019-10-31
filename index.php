<?php
require_once(__DIR__ . '/includes/boot.include.php');
if ($_GET['p']) {
    $smarty->display('pages/' . $_GET['p'] . '.tpl');
} else {
    $smarty->display('pages/home.tpl');
}
