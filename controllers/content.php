<?php
$smarty->assign('message', $_SESSION['message']);
unset($_SESSION['message']);

if ($_GET) {

    $topics = new Topic($Conn);
    $alltopics = $topics->getTopics();
    $contentTopics = $topics->getTopic($_GET['id']);
    $mediaURLS = array();

    for ($i = 0; $i < count($contentTopics); $i++) {

        if ($contentTopics[$i]['type'] == 2)
        {
           $result = $topics->getMediaUrls($contentTopics[$i]['content_id']);
            for ($j = 0; $j < count($result); $j++) {

                $mediaURLS[$contentTopics[$i]['content_id']][$j] = $result[$j]['url'];
            }

        }
    }
   // var_dump($mediaURLS);
    $smarty->assign('mediaURLS', $mediaURLS);
    $smarty->assign('allTopics', $alltopics);
    $smarty->assign('contentTopics', $contentTopics);
}


?>
