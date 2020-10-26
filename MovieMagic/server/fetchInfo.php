<?php
    $db = mysqli_connect('localhost','root','','movie');
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $session_username = $_SESSION['username'];
    $query = "SELECT * FROM `user` WHERE username='$session_username'";
    $result = mysqli_query($db,$query) or die(mysqli_error($db));
    $resCheck = mysqli_num_rows($result);
    if($resCheck>0){
        while($row = mysqli_fetch_assoc($result)){
            $fullname= $row['fullname'];
            $username= $row['username'];
            $email=$row['email'];
            $ID=$row['ID'];
        }

    }

    
    
?>