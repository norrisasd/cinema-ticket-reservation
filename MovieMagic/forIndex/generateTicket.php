<?php 
    $ctr=0;
    $session_ID = $ID;
    $query1 = "SELECT * FROM `ticket` WHERE ID=$session_ID" ;
    $result1 = mysqli_query($db,$query1) or die(mysqli_error($db));
    $resCheck1 = mysqli_num_rows($result1);
    if($resCheck1>0){
        while($row1 = mysqli_fetch_assoc($result1)){
            $movie= $row1['movies'];
            $adult= $row1['adult'];
            $children=$row1['children'];
            $special=$row1['special'];
            $ticketID=$row1['ticketID'];
            $date=$row1['date'];
?>
            
                <table id="bTable">
                    <tr>
                        <td>Movie</td>
                        <td style="padding:0;margin:0;">:</td>
                        <td style="text-align:left;"><?php echo $movie; ?></td>
                    </tr>
                    <tr>
                        <td>Adult</td>
                        <td style="padding:0;margin:0;">:</td>
                        <td style="text-align:left;"><?php echo $adult; ?></td>
                    </tr>
                    <tr>
                        <td>Children</td>
                        <td style="padding:0;margin:0;">:</td>
                        <td style="text-align:left;"><?php echo $children; ?></td>
                    </tr>
                    <tr>
                        <td>Ticket ID#</td>
                        <td style="padding:0;margin:0;">:</td>
                        <td style="text-align:left;"><?php echo $ticketID; ?></td>
                    </tr>
                    <tr>
                        <td>Special Instruction</td>
                        <td style="padding:0;margin:0;">:</td>
                        <td style="text-align:left;"><?php if($special == NULL){
                            echo'none';
                        }else{
                            echo $special;
                        }  ?></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td style="padding:0;margin:0;">:</td>
                        <td style="text-align:left;"><?php echo '&#8369;'; echo($adult*210)+($children*160); ?></td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td style="padding:0;margin:0;">:</td>
                        <td style="text-align:left;"><?php echo $date; ?></td>
                    </tr>
             <form action="">    
                </table> 
                <div style="display:flex">
                <input type="text" style="display:none;"  name="ticketID" value="<?php echo $ticketID?>">
                    <button type="submit" class="btn btn-danger" style="margin-left:50%;margin-top:0" name="delete">Delete</button>
                    
                </div>
            </form>

<?php
        }
    }else{
        echo'<h1 class="display-4" style="text-align:center;margin-top:3.5rem">No Pending</h1>';
    }
    
    
?>