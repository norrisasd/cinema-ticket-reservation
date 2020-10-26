<?php
    $db = mysqli_connect('localhost','root','','movie');
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (isset($_REQUEST['username'])){
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($db,$username); 

        $fullname = stripslashes($_REQUEST['fullname']);
        $fullname = mysqli_real_escape_string($db,$fullname); 

        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($db,$email); 

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($db,$password);

        $query = "INSERT into `user` (fullname, username, email, password) VALUES('$fullname', '$username','$email','".md5($password)."')";
        $result = mysqli_query($db,$query);
        if($result){
            echo '<script>
            window.location.href="login.php";
            alert("Account Created!!!!");
            </script>';
        }
    }

?>