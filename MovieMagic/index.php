<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Index</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="icon" href="Images/logo.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <?php include 'server/auth.php'?>
        <?php include 'forIndex/nav.php'; ?>
        
        <?php include 'forIndex/slider.php';?>
        <?php include 'forIndex/content.php';?>
        <?php include 'forIndex/footer.php';?>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="Main.js"></script>
        <?php include 'server/editTicket.php'?>
        <?php include 'server/deleteTicket.php'?>
    </body>
</html>
