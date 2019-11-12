<?php

class Response
{
    public $fieldsInError = array();
    public $successMessage;
    public $redirectPage;

    public function addError($fieldName, $errorMessage)
    {
        $error_object = array(
            "name" => $fieldName,
            "message" => $errorMessage
        );
        array_push($this->fieldsInError, $error_object);
    }

    public function addSuccess($message, $redirectPage)
    {
        $this->successMessage = $message;
        $this->redirectPage = $redirectPage;
    }

    public function getJSON()
    {
        echo json_encode($this);
        exit();

    }

    public function hasErrors()
    {
        return count($this->fieldsInError) > 0;
    }



}

?>
