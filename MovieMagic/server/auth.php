<?php
    $db = mysqli_connect('localhost','root','','movie');
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
    session_start();
    if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
    }
?>