<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        <?php include "style.css" ?>
    </style>
</head>
<body>
    <header>
        <h2>Login</h2>
    </header>
    <div class="form-login-container">
        <form action="loginProcess.php" method="post">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name = "username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name = "password"></td>
                </tr>
            </table>
            <div class="button">
                <div class="kembali">
                    <a href="welcome.php">Kembali</a>
                </div>
                <input type="submit" name = "submit" value="Login">
            </div>
        </form>
    </div>
</body>
</html>