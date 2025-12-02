<?php 
    session_start();
    if(!isset($_SESSION['user'])){
        header("location: ienakt.php"); exit();
    }

    if(isset($_GET['logout'])){
        unset($_SESSION['user']);
        header("location: ienakt.php"); exit();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
</head>
<body>
    <div class="content">
        <h2>Sveiks <?php echo $_SESSION['user']; ?></h2>
        <a href="?logout">Iziet</a>
    </div>

</body>
</html>