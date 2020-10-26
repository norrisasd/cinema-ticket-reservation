<?php
    if($ticketID == NULL){
        echo'';
    }else{
        $query="SELECT * FROM ticket WHERE ticketID='$ticketID'";
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
<form action="" method="POST">
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">UPDATE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="form-row">
                <div class="col">
                    <h3 style="margin-left:50%;">Adults</h3>
                    <input type="number" name="adult" class="form-control" placeholder="0" min="0" max="50" value="<?php echo $adult ?>" style="width:23%;margin-left:55%;" required>
                </div>
                <div class="col">
                    <h3 style="margin-left:2.5rem;">Children</h3>
                    <input type="number" name="children" value="<?php echo $children ?>" class="form-control" placeholder="0" min="0" max="50" style="width:23%;margin-left:3rem;" required>
                </div>
                <input type="text" style="display:none;"  name="ticketID" value="<?php echo $ticketID?>">
            </div>
            <h3 style="text-align:center;">Movies</h3>
            <input type="text" name="movies" style="display:block;margin-left:30%;margin-bottom:5%;text-align:center;border:0;" value="<?php echo $movies ?>" id="Movie1"  required>
                <div class="dropdown" style="text-align:center;">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:50%" >
                        <span id="ddText2"></span>
                    </button>
                    
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button" onclick="BW()">Black Widow</button>
                        <button class="dropdown-item" type="button" onclick="BS()">Bloodshot</button>
                        <button class="dropdown-item" type="button" onclick="BBFL()">Bad Boys For Life</button>
                        <button class="dropdown-item" type="button" onclick="OW()">Onward</button>
                        <button class="dropdown-item" type="button" onclick="UW()">Underwater</button>
                        <button class="dropdown-item" type="button" onclick="EH()">Enola Holmes</button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Special Instruction</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="special" rows="3" value="<?php $special ?>"></textarea>
                </div>
        </div>
        <div class="modal-footer">
            <button type="submit" name="update" class="btn btn-primary">Save changes</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
</form>