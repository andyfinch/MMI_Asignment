<?php

class Errors
{
    public $fieldsInError = array();

    public function addMessage($fieldName, $errorMessage)
    {
        $error_object = array(
            "name" => $fieldName,
            "message" => $errorMessage
        );
        array_push($this->fieldsInError, $error_object);
    }

    public function getJSON()
    {
        echo json_encode($this->fieldsInError);
    }

    public function hasErrors()
    {
        return count($this->fieldsInError) > 0;
    }



}

?>
