<?php
        include 'conn.php';
        session_start();
        if (isset($_POST['username'])){
            $username = stripslashes($_REQUEST['username']);
            $username = mysqli_real_escape_string($db,$username);

            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($db,$password);

            $query = "SELECT * FROM user WHERE username='$username'
and password='".md5($password)."' limit 1";

            $result = mysqli_query($db,$query);
            $rows = mysqli_num_rows($result);
            if($rows==1){
               $_SESSION['username'] = $username;
               header("Location: ../index.php");
            }else{
                echo '<script>
            alert("Invalid Credentials");
            window.location.href="../login.php"
            </script>';
                
            }
        }
?>