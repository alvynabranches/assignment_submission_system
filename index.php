<?php
    require_once('views/student.html');
    if($_POST['username'] === '' || $_POST['password'] === '') {
        echo "<script type='javascript'>alert('Empty Parameters')</script>";
    }
    else {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
?>