<?php

try {
    $Conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    $Conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $Conn->setAttribute(PDO::ATTR_PERSISTENT, true);
} catch (PDOException $e) {
    echo $e->getMessage();
    exit();
}



