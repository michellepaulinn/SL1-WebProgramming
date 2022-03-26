<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        <?php include "style.css" ?>
    </style>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <?php
        session_start();
    ?>
    <header>
        <h2>Aplikasi Pengelolaan Keuangan</h2>
    </header>
    <div  class="content">
        <div class="greeting">
            <h1>Selamat Datang di Aplikasi Pengelolaan Keuangan</h1>
        </div>
        <div class="menu">
            <div class="login-button btn">
                <a href="login.php">Login</a>
            </div>
            <div class="register-button btn">
                <a href="register.php">Register</a>
            </div>
        </div>
</div>
        
</body>
</html>