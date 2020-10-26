<?php include 'server/fetchInfo.php'?>
<div class="modal fade" id="accountModal">
    <div class="modal-dialog modal-lg" style="background-color:gray">
        <div class="modal-content">
            <div class="modal-header">
                <h1>Accounts</h1>
            </div>
            <div class="modal-body" id="modalBody">
                <div id="aBox">
                    <div id="SideNav">
                        <a href="#aboutMe">About Me</a>
                        <a href="#History">History</a>
                        <a href="#Pending">Pending</a>
                        <a href="logout.php">Sign Out</a>
                    </div>
                    <div id="cBox">
                        <div id="aboutMe">
                            <table id="aTable">
                                <tr>
                                    <td>Full Name:</td>
                                    <td style="text-align:left;"><?php echo $fullname; ?></td>
                                </tr>
                                <tr>
                                    <td>Username:</td>
                                    <td style="text-align:left;"><?php echo $username; ?></td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td style="text-align:left;"><?php echo $email; ?></td>
                                </tr>
                            </table> 
                        </div>
                        <br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br><br><br>
                        <div id="History">
                            <h1 class="display-4" style="text-align:center;">No History</h1>
                        </div> 
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br><br><br><br><br><br><br>

                        <div id="Pending">
                            <div id="scrollBox">
                                
                                <?php  include 'forIndex/generateTicket.php';?>
                                <br><br>
                            </div>
                        </div>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    </div>                       
                </div>     
                                        
            </div>
            <div class="modal-footer">
            <h1 class="display-2" style="font-size:25px;margin-right:auto;font-weight:700;">Only The Latest Reservation Can be Edited</h1>
            <button type="submit" id="update" class="btn btn-primary"  name="edit" data-dismiss="modal" onclick="forEdit()">Edit</button>
                                <a href="#" id="hiddenA" style="display:none;" onclick="editTicket()" data-toggle="modal" data-target="#editModal" ></a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="">Close</button>
            </div>
        </div>
    </div>
</div>
<?php  include 'forIndex/editModal.php'; ?>