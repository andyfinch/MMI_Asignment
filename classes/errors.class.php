<?php

class Errors
{
    public $fieldsInError = array();
    /*public function __construct($name)
    {
        $this->$this->messages[$name];
        $this->name = $name;
    }*/

    public function addMessage($fieldName, $errorMessage)
    {

        /*if (  array_key_exists($fieldName, $this->fieldsInError))
        {

            array_push($this->fieldsInError[$fieldName], $errorMessage);
        }
        else{
            
            array_push($this->fieldsInError, array($fieldName => array($errorMessage)));
        }*/
       /* echo count($this->fieldsInError);
        echo $this->fieldsInError[0];*/

        if (array_key_exists($fieldName, $this->fieldsInError)) {

            array_push($this->fieldsInError[$fieldName], $errorMessage);
        }
        else{
            array_push($this->fieldsInError, array($fieldName => $errorMessage));
            //$this->fieldsInError[$fieldName] = array($errorMessage);
        }


        //$this->fieldsInError[$fieldName] = array($errorMessage);

        //$this->fieldsInError[$fieldName] = array('d', 'e', 'f');
        
        /*if (array_key_exists($fieldName, $this->fieldsInError)) {

            array_push($this->fieldsInError[$fieldName], $errorMessage);
        } else {

            array_push($this->fieldsInError[$fieldName], array($fieldName => $errorMessage));
        }*/

    }



}

?>
