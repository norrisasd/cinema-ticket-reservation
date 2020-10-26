<?php
    $ticketID="NULL";
    include 'conn.php';
    session_start();
    if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
    }
?>