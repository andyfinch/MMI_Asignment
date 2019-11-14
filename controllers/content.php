<?php
$smarty->assign('message', $_SESSION['message']);
unset($_SESSION['message']);

if ($_GET) {

    $topic = new Topic($Conn);
    $topic = $topic->getTopic($_GET['id']);
    $smarty->assign('topic', $topic);
}


?>
