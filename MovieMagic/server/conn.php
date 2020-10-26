<?php 
    // development connection   
    // $host="remotemysql.com";
    // $user="NJmpAKp3n4";
    // $pass="f7voxHjh3q";
    // $data="NJmpAKp3n4";
    //local
    $host="localhost";
    $user="root";
    $pass="";
    $data="movie";
    $db = mysqli_connect($host,$user,$pass,$data);
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>