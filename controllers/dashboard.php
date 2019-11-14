<?php

$smarty->assign('message', $_SESSION['message']);
unset($_SESSION['message']);

$topic = new Topic($Conn);
$topics = $topic->getTopics();
$smarty->assign('topics', $topics);

if ($_POST) {

    $response = new Response();
    
    if ($_POST['action'] == 'topic') {


        if (!$_POST['title']) {
            $response->addError('title', 'Title is required');
        } else {
            if (strlen($_POST['title']) > 255) {
                $response->addError('title', 'Title must not exceed 255 characters');
            }
        }

        if (!$_POST['description']) {
            $response->addError('description', 'description is required');
        }

        if ($response->hasErrors()) {
            $response->getJSON();
        }

        //$topic = new Topic($Conn);

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

    $response->getJSON();
}







?>
