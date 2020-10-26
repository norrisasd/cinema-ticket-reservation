<?php
    include 'conn.php';
    include 'fetchInfo.php';
    if (isset($_REQUEST['reserve'])){
        $movie = stripslashes($_REQUEST['movies']);
        $movie = mysqli_real_escape_string($db,$movie); 

        $adult = stripslashes($_REQUEST['adult']);
        $adult = mysqli_real_escape_string($db,$adult); 

        $children = stripslashes($_REQUEST['children']);
        $children = mysqli_real_escape_string($db,$children); 

        $special = stripslashes($_REQUEST['special']);
        $special = mysqli_real_escape_string($db,$special); 

        
        $ID = mysqli_real_escape_string($db,$ID);

        $query = "INSERT into ticket (movies, adult, children, special,ID) VALUES('$movie', '$adult','$children','$special','$ID')";
        $result = mysqli_query($db,$query);
        if($result){
            echo '<script>
            alert("Ticket Reserved!");
            window.location.href="index.php";
            </script>';
            
        }
    }

?>
