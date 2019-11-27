<?php
$smarty->assign('message', $_SESSION['message']);
unset($_SESSION['message']);

if ($_GET) {

    $topics = new Topic($Conn);
    $alltopics = $topics->getTopics();
    $contentTopics = $topics->getTopic($_GET['id']);

    for ($i = 0; $i < count($contentTopics); $i++) {

        //get contents for each topic
        $result = $topics->getContents($contentTopics[$i]['id']);
        //Add to topic
        $contentTopics[$i]['contents'] = $result;

        //loop round each content to get any media urls
        for ($j = 0; $j < count($contentTopics[$i]['contents']); $j++) {


            $mediaResult = $topics->getMediaUrls($contentTopics[$i]['contents'][$j]['id'], 1);
            $contentTopics[$i]['contents'][$j]['images'] = $mediaResult;

            $mediaResult = $topics->getMediaUrls($contentTopics[$i]['contents'][$j]['id'], 2);
            $contentTopics[$i]['contents'][$j]['videos'] = $mediaResult;

        }

    }
    /*ini_set('xdebug.var_display_max_depth', '10');
    ini_set('xdebug.var_display_max_children', '256');
    ini_set('xdebug.var_display_max_data', '1024');
    var_dump($contentTopics);*/
    $smarty->assign('allTopics', $alltopics);
    $smarty->assign('contentTopics', $contentTopics);
}

if ($_POST) {
   
    $response = new Response();
    $topic = new Topic($Conn);
    //$topic = new Topic($Conn);
    if ($_POST['function'] == 'create') {
        $attempt = $topic->insertContent($_POST['topic_id'], $_POST['content']);
        if ($attempt) {
            $_SESSION['message'] = 'Content created ';
            $response->addSuccess('Content created', 'content&id=' . $_POST['topic_id']);
        } else {
            $response->addError('title', 'failed');
        }
    } else if ($_POST['function'] == 'edit') {


        $attempt = $topic->editContent($_POST['id'], $_POST['content']);
        if ($attempt) {
            $_SESSION['message'] = 'Content Edited ';
            $response->addSuccess('Content Edited', 'content&id=' . $_POST['topic_id']);
        } else {
            $response->addError('title', 'failed');
        }
    } else if ($_POST['function'] == 'delete') {
        $attempt = $topic->deleteContent($_POST['id']);
        if ($attempt) {
            $_SESSION['message'] = 'Content Deleted ';
            $response->addSuccess('Content Deleted', 'content&id=' . $_POST['topic_id']);
        } else {
            $response->addError('title', 'failed');
        }
    }


    $response->getJSON();
}


?>
