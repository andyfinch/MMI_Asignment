<?php

$smarty->assign('message', $_SESSION['message']);
unset($_SESSION['message']);

$topic = new Topic($Conn);
$alltopics = $topic->getTopics();
$smarty->assign('allTopics', $alltopics);

if ($_POST) {
    //var_dump($_POST);
    $response = new Response();
    if ($_POST['action'] == 'topic') {


        if ($_POST['function'] != 'delete') {

            if (!$_POST['title']) {
                $response->addError('title', 'Title is required');
            } else {
                if (strlen($_POST['title']) > 255) {
                    $response->addError('title', 'Title must not exceed 255 characters');
                }
            }
            /*if (!$_POST['description']) {
                $response->addError('description', 'description is required');
            }*/
            if ($response->hasErrors()) {
                $response->getJSON();
            }
        }

        //$topic = new Topic($Conn);
        if ($_POST['function'] == 'create')
        {
            $attempt = $topic->createTopic($_POST);
            if ( $attempt)
            {
                $_SESSION['message'] = 'Topic created ' . $_POST['title'];;
                $response->addSuccess('Topic created', 'dashboard');
            }
            else{
                $response->addError('title', 'failed');
            }
        }
        else if ($_POST['function'] == 'edit')
        {
            $attempt = $topic->editTopic($_POST);
            if ( $attempt)
            {
                $_SESSION['message'] = 'Topic Edited ' . $_POST['title'];;
                $response->addSuccess('Topic Edited', 'content&id=' . $_POST['id']);
            }
            else{
                $response->addError('title', 'failed');
            }
        }
        else if ($_POST['function'] == 'delete')
        {
            $attempt = $topic->deleteTopic($_POST);
            if ( $attempt)
            {
                $_SESSION['message'] = 'Topic Deleted ' . $_POST['title'];;
                $response->addSuccess('Topic Deleted', 'content&id=' . $_POST['id']);
            }
            else{
                $response->addError('title', 'failed');
            }
        }




    }

    $response->getJSON();
}







?>
