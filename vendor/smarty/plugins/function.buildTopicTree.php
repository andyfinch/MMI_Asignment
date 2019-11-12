

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
    $query = "SELECT * FROM topics where user_id = :user_id";
    $stmt = $Conn->prepare($query);
    $stmt->execute(array(':user_id' => $user_id));
    $result = $stmt->fetchAll();


    $baseArray = array();

    foreach ($result as $row) {

        
        $attempt = searchArray($row["parent_id"], $baseArray);
        if (!$attempt)
        {
            $employee_object = new stdClass;
            $employee_object->id = $row["id"];
            $employee_object->title = $row["title"];
            $employee_object->contentArray = array();
            $baseArray[$row["id"]] = $employee_object;
        }
        else{

            $employee_object = new stdClass;
            $employee_object->id = $row["id"];
            $employee_object->title = $row["title"];
            $employee_object->contentArray = array();
            $attempt->contentArray[$row["id"]] = $employee_object;
        }

        

    }
    var_dump($baseArray);
    echo json_encode($baseArray);
    recursiveArrayToList($baseArray);

    echo '<table class="table table-striped"> <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created</th>
                        <th>Parent_ID</th>
                    </tr>
                    </thead>
                    <tbody>';

    foreach($result as $row){
        echo '<tr>';
        echo '<td>' . $row["id"] . '</td>';
        echo '<td>'.$row["title"].'</td>';
        echo '<td>'.$row["description"].'</td>';
        echo '<td>'.$row["created"].'</td>';
        echo '<td>' . $row["parent_id"] . '</td>';
        echo '</tr>';
    }
    echo '</tbody></table>';

   
}



function searchArray($key, $array)
{
    //var_dump($array);
    if (array_key_exists($key, $array)) // $key = 2;
    {
        return $array[$key];
    } else {

        foreach ($array as $row) {
            if ( is_array($row))
            {
                return searchArray($key, $row);
            }

        }

        return false;

    }

    //return false;
}

function recursiveArrayToList(Array $array = array())
{
    echo '<ul>';
    foreach ($array as $key => $value) {
        echo '<li>' . $key . '</li>';
        //var_dump($value);
        if (is_array($value->contentArray)) {
            recursiveArrayToList($value->contentArray);
        }
    }
    echo '</ul>';
}
?>

