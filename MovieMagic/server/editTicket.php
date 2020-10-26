<?php

    if(isset($_POST['update'])){
        $uMovies=$_POST['movies'];
        $uAdult=$_POST['adult'];
        $uChildren=$_POST['children'];
        $uSpecial=$_POST['special'];
        $query="UPDATE ticket SET movies='$uMovies',adult='$uAdult',children='$uChildren',special='$uSpecial' WHERE ticketID = $ticketID";
        $result = mysqli_query($db,$query);
        if($result){
            echo'<script> window.location.href="index.php";alert("Edit Succesfully");</script>';
        }else{
            echo'<script> window.location.href="index.php";alert("Edit Error");</script>';
        }
    }


?>