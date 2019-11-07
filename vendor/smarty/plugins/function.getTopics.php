

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
function smarty_function_getTopics($params, Smarty_Internal_Template $template)
{
    try {
        $Conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        $Conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $Conn->setAttribute(PDO::ATTR_PERSISTENT, true);
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }

    $stmt = $Conn->query('SELECT * FROM test');
    $result = $stmt->fetchAll();

    echo '<table class="table table-striped"> <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created</th>
                    </tr>
                    </thead>
                    <tbody>';

    foreach($result as $row){
        echo '<tr>';
        echo '<td>'.$row["Title"].'</td>';
        echo '<td>'.$row["Description"].'</td>';
        echo '<td>'.$row["Created"].'</td>';
        echo '</tr>';
    }
    echo '</tbody></table>';
}
?>

