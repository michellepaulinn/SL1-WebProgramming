<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
    <div class="prof-content">
        <table>
            <tr>
                <td class="c-1">Nama Depan</td>
                <td class="c-2"><?php echo $_SESSION['S_nama1']; ?></td>
                <td class="c-1">Nama Tengah</td>
                <td class="c-2"><?php echo $_SESSION['S_nama2']; ?></td>
                <td class="c-1">Nama Belakang</td>
                <td class="c-2"><?php echo $_SESSION['S_nama3']; ?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td class="c-2"><?php echo $_SESSION['S_tempatLahir']; ?></td>
                <td>Tanggal Lahir</td>
                <td class="c-2"><?php echo $_SESSION['S_tanggalLahir']; ?></td>
                <td>NIK</td>
                <td class="c-2"><?php echo $_SESSION['S_NIK']; ?></td>
            </tr>
            <tr>
                <td>Warga Negara</td>
                <td class="c-2"><?php echo $_SESSION['S_WN']; ?></td>
                <td>E-mail</td>
                <td class="c-2"><?php echo $_SESSION['S_email']; ?></td>
                <td>No HP</td>
                <td class="c-2"><?php echo $_SESSION['S_nohp']; ?></td>
            </tr>
            <tr>
                <td>Alamat </td>
                <td class="c-2"><?php echo $_SESSION['S_alamat']; ?></td>
                <td>Kode Pos</td>
                <td class="c-2"><?php echo $_SESSION['S_kodePos']; ?></td>
                <td>Foto Profil</td>
                <td class="c-2"><?php 
                        $image=$_SESSION['profpic']; 
                        echo "<img src='$image' width='50%' height='50%'>";
                    ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>