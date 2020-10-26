<!DOCTYPE html>
<html lang=en>
<head>
<link rel="stylesheet" type="text/css" href="login_style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">

    <div class="fadeIn first">
      <img src="Images/logo.png" id="icon" alt="User Icon" />
    </div>
    <form action="server/loginCheck.php" method="POST">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="login">
      <input type="password" id="passwordd" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In" name="login">
    </form>

    <div id="formFooter">
      <a class="underlineHover" href="#" data-toggle="modal" data-target="#myModal">Sign Up Here!</a>
    </div>

  </div>
</div>
<?php include 'server/register.php';?>
<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" methon="POST">
        <div class="col">
            <label for="fullname">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Fullname" style="margin-left:2rem;" required>
        </div>
        <div class="col">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" style="margin-left:2rem;"required>
        </div>
        <div class="col">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email Address" style="margin-left:2rem;"required>
        </div>
        <div class="col">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password" style="margin-left:2rem;"required>
        </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-Secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="register">Register</button>
      </div>
    </form>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
</body>

</html>