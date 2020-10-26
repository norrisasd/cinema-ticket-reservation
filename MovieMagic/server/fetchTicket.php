<?php
    if(isset($_GET['edit'])){
        $ticketID=$_GET['ticketID'];
        $query="SELECT * FROM ticket WHERE ticketID=$ticketID";
        $res = mysqli_query($db,$query)or die(mysqli_error($db));
        $resCh = mysqli_num_rows($res);
        if($resCh>0){
            while($row = mysqli_fetch_assoc($res)){
                $movies= $row['movies'];
                $adult= $row['adult'];
                $children=$row['children'];
                $special=$row['special'];
            }
        }
    }
?>
