<?php
    $host='localhost';
    $db = 'assignment';
    $dbun = 'root';
    $dbpw = '';
    $dsn = "mysql:host=$host;dbname=$db";
    try {
        $conn = new PDO($dsn, $dbun, $dbpw);
    }catch(PDOException $e) {
        print($e);
    }
    