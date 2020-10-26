<nav id="NavBar">
            <ul id="NavBar-nav">
                <li>
                    <a href="index.php" id="Nav-Link">
                        <i class="fas fa-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="Nav-Link" data-toggle="modal" data-target="#myModal">
                        <i class="fas fa-ticket-alt"></i>
                        <span>Reserve</span>
                    </a>
                </li>
                <li>
                    <a href="#" id="Nav-Link" data-toggle="modal" data-target="#accountModal" >
                        <i class="fas fa-address-card"></i>
                        <span>Account</span>
                    </a>
                </li>
            </ul>
            <a href="#" id="down">
                <i class="fas fa-angle-double-down"></i>
            </a>
</nav>
<?php include 'modal.php'; ?>
<?php include 'accounts.php'; ?>