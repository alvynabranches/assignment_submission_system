<?php
    $host='localhost';
    $db = 'assignment';
    $dbun = 'root';
    $dbpw = '';
    $dsn = "mysql:host=$host;dbname=$db";
    $conn = new PDO($dsn, $dbun, $dbpw);