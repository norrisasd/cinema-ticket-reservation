<?php
    if(isset($_GET['delete'])){
        $ticketID=$_GET["ticketID"];
        $query = "DELETE FROM ticket WHERE `ticketID` = $ticketID";
        $result=mysqli_query($db, $query);
        if($result){
            echo'<script>alert("Data Deleted!");
            window.location.href="index.php";</script>';
        }else{
            echo'<script>alert("Error!");</script>';
        }
    }
?>
