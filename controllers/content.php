<?php
$smarty->assign('message', $_SESSION['message']);
unset($_SESSION['message']);

if ($_GET) {

    $topics = new Topic($Conn);
    $alltopics = $topics->getTopics();
    $contentTopics = $topics->getTopic($_GET['id']);
    $smarty->assign('allTopics', $alltopics);
    $smarty->assign('contentTopics', $contentTopics);
}


?>
