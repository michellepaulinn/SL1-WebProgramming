<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>
    <?php
        session_start();
    ?>
    <nav>
        <div class="title">Aplikasi Pengelolaan Keuangan</div>
        <div class="nav-bar">
            <a href="home.php">Home</a>
            <a href="profile.php">Profile</a>
            <a href="logout.php">LogOut</a>
        </div>
    </nav>
    <div class="content">
        <h2>Halo <?php echo $_SESSION['S_nama1']." ".$_SESSION['S_nama2']." ".$_SESSION['S_nama3']?> </h2>
        <br>
        <h2>Selamat datang di aplikasi Pengelolaan keuangan!</h2>
</div>  
</body>
</html>