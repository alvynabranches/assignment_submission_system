<?php
    require_once('views/login.html');
    if(empty($_POST['username']) || empty($_POST['password'])) {
        echo "<script type='javascript'>alert('Empty Parameters')</script>";
    }
    else {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
    require_once('php/config.php');
?>