<?php 
    // development connection   
    $host="remotemysql.com";
    $user="mhqemp7H6Z";
    $pass="TiUbD1D6UY";
    $data="mhqemp7H6Z";
    //local
//     $host="localhost";
//     $user="root";
//     $pass="";
//     $data="movie";
    $db = mysqli_connect($host,$user,$pass,$data);
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>
