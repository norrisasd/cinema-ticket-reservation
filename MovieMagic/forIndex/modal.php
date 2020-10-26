<?php include 'server/ticket.php';?>
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg" style="background-color:gray">
        <div class="modal-content">
            <div class="modal-header">
                <h1>Reserve Ticket</h1>
            </div>
            <div class="modal-body" id="modalBody">
            <form>
                <img src="Poster/BW.jpg" alt="Black Widow" id="image">
                <h3 style="text-align:center;">Movies</h3>
                <div class="dropdown" style="text-align:center;">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:50%" >
                        <span id="ddText"></span>   
                    </button>
                    <input type="text" style="display:none;" id="Movie" name="movies" required>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                        <button class="dropdown-item" type="button" onclick="BW()">Black Widow</button>
                        <button class="dropdown-item" type="button" onclick="BS()">Bloodshot</button>
                        <button class="dropdown-item" type="button" onclick="BBFL()">Bad Boys For Life</button>
                        <button class="dropdown-item" type="button" onclick="OW()">Onward</button>
                        <button class="dropdown-item" type="button" onclick="UW()">Underwater</button>
                        <button class="dropdown-item" type="button" onclick="EH()">Enola Holmes</button>
                    </div>
                </div>               
                <br> 
                    <div class="form-row">
                        <div class="col">
                            <h3 style="margin-left:60%;">Adults</h3>
                            <input type="number" name="adult" class="form-control" placeholder="0" min="0" max="50" style="width:23%;margin-left:60%;" required>
                        </div>
                        <div class="col">
                            <h3 style="margin-left:2.5rem;">Children</h3>
                            <input type="number" name="children" class="form-control" placeholder="0" min="0" max="50" style="width:23%;margin-left:3rem;" required>
                        </div>
                    </div>
                    

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Special Instruction</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="special" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                <button type="submit" name="reserve" class="btn btn-primary">Reserve</button>
            </div>
            </form>
        </div>
    </div>
</div>
