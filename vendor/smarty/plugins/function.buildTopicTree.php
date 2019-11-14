

<?php

/*
 * Smarty plugin
 * -------------------------------------------------------------
 * File:     function.eightball.php
 * Type:     function
 * Name:     eightball
 * Purpose:  outputs a random magic answer
 * -------------------------------------------------------------
 */

function smarty_function_buildTopicTree($params, Smarty_Internal_Template $template)
{
    try {
        $Conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        $Conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $Conn->setAttribute(PDO::ATTR_PERSISTENT, true);
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }
    $user_id = $_SESSION['user_data']['id'];
    $query = "SELECT * FROM topics where user_id = :user_id order by level asc";
    $stmt = $Conn->prepare($query);
    $stmt->execute(array(':user_id' => $user_id));
    $result = $stmt->fetchAll();


    $baseArray = array();
    changeArray($result, $baseArray);
    recursiveArrayToList($baseArray);

}

function changeArray($result, &$baseArray)
{
    foreach ($result as $row) {
        $level = $row["level"];
        $parent_id = $row["parent_id"];
        $row_id = $row["id"];

        $contentObject = array(
            "id" => $row_id,
            "title" => $row["title"],
            "level" => $row["level"],
            "parent_id" => $parent_id,
            "contentArray" => array()
        );

        if ($level == 0) {
            array_push($baseArray, $contentObject);
            //$baseArray[$row_id] = $contentObject;
        } else if ($level == 1) {

            foreach ($baseArray as $key => &$value) {

                if ($value['id'] === $parent_id) {
                    array_push($value['contentArray'], $contentObject);
                }
            }
        } else if ($level == 2) {
            
             foreach ($baseArray as $key => &$value) {
                 $contentArray = &$value['contentArray'];
                 foreach ($contentArray as $key2 => &$value2) {
                     $contentArray1 = &$value2['contentArray'];
                     if ($value2['id'] === $parent_id) {
                         array_push($contentArray1, $contentObject);
                     }

                 }
            }
        } else if ($level == 3) {

            foreach ($baseArray as $key => &$value) {
                $contentArray = &$value['contentArray'];
                foreach ($contentArray as $key2 => &$value2) {
                    $contentArray1 = &$value2['contentArray'];
                    foreach ($contentArray1 as $key3 => &$value3) {
                        $contentArray2 = &$value3['contentArray'];
                        if ($value3['id'] === $parent_id) {
                            array_push($contentArray2, $contentObject);
                        }

                    }

                }
            }
        }


    }
}

/*Source based on examaple from stackoverflow*/
function recursiveArrayToList(Array $array = array())
{
    echo '<ul class="list-group">';
    foreach ($array as $key => $value) {
        echo '<li class="list-group-item" id="tree-' . $value['id'] . '">' . '<a href="./index.php?p=content&id=' . $value['id'] . '">' . $value['title'] . '</a>' . '</li>';
        //var_dump($value);
        if (is_array($value['contentArray'])) {
            recursiveArrayToList($value['contentArray']);
        }
    }
    echo '</ul>';
}
?>

