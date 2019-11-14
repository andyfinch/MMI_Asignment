<?php
$smarty->assign('message', $_SESSION['message']);
unset($_SESSION['message']);

if ($_GET) {

    $topics = new Topic($Conn);
    $topics = $topics->getTopic($_GET['id']);
    $smarty->assign('topics', $topics);
}


?>
