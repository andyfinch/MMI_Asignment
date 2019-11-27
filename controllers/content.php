<?php
$smarty->assign('message', $_SESSION['message']);
unset($_SESSION['message']);

if ($_GET) {

    $topics = new Topic($Conn);
    $alltopics = $topics->getTopics();
    $contentTopics = $topics->getTopic($_GET['id']);
    $mediaURLS = array();
    $contents = array();

    for ($i = 0; $i < count($contentTopics); $i++) {

        $result = $topics->getContents($contentTopics[$i]['id']);

        for ($j = 0; $j < count($result); $j++) {


            $contents[$result[$j]['topic_id']][$result[$j]['id']] = $result[$j]['content'];
        }

        if ($contentTopics[$i]['type'] == 2) {
            $result = $topics->getMediaUrls($contentTopics[$i]['content_id']);
            for ($j = 0; $j < count($result); $j++) {

                $mediaURLS[$contentTopics[$i]['content_id']][$j] = $result[$j]['url'];
            }

        }
    }

    $smarty->assign('mediaURLS', $mediaURLS);
    $smarty->assign('contents', $contents);
    $smarty->assign('allTopics', $alltopics);
    $smarty->assign('contentTopics', $contentTopics);
}

if ($_POST) {

    $response = new Response();
    $topic = new Topic($Conn);
    //$topic = new Topic($Conn);
    if ($_POST['function'] == 'create') {
        $attempt = $topic->insertContent($_POST['topic_id'], $_POST['contentType'], $_POST['content']);
        if ($attempt) {
            $_SESSION['message'] = 'Content created ';
            $response->addSuccess('Content created', 'content&id=' . $_POST['topic_id']);
        } else {
            $response->addError('title', 'failed');
        }
    } else if ($_POST['function'] == 'edit') {
        $attempt = $topic->editTopic($_POST);
        if ($attempt) {
            $_SESSION['message'] = 'Topic Edited ' . $_POST['title'];;
            $response->addSuccess('Topic Edited', 'content&id=' . $_POST['id']);
        } else {
            $response->addError('title', 'failed');
        }
    } else if ($_POST['function'] == 'delete') {
        $attempt = $topic->deleteTopic($_POST);
        if ($attempt) {
            $_SESSION['message'] = 'Topic Deleted ' . $_POST['title'];;
            $response->addSuccess('Topic Deleted', 'content&id=' . $_POST['id']);
        } else {
            $response->addError('title', 'failed');
        }
    }


    $response->getJSON();
}


?>
