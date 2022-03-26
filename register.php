<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        <?php include "style.css" ?>
    </style>

</head>
<body>
    <header>
        <h2>Register</h2>
    </header>
    <div class="form-regis-container">
        <form action="registerProcess.php" method="post" enctype = "multipart/form-data">
            <div class="form-regis">
                <table>
                    <tr>
                        <td class="c-1">Nama Depan</td>
                        <td class="c-2"><input type="text" name="nama_dpn" id="nama_dpn"></td>
                        <td class="c-1">Nama Tengah</td>
                        <td class="c-2"><input type="text" name="nama_tgh" id="nama_dpn"></td>
                        <td class="c-1">Nama Belakang</td>
                        <td class="c-2"><input type="text" name="nama_blkg" id="nama_blkg"></td>
                    </tr>
                    <tr>
                        <td class="c-1">Tempat Lahir</td>
                        <td class="c-2"><input type="text" name="tpt_lahir" id="tpt_lahir"></td>
                        <td class="c-1">Tanggal Lahir</td>
                        <td class="c-2"><input type="date" name="tgl_lahir" id="tgl_lahir"></td>
                        <td class="c-1">NIK</td>
                        <td class="c-2"><input type="text" name="nik" id="nik"></td>
                    </tr>
                    <tr>
                        <td class="c-1">Warga Negara</td>
                        <td class="c-2"><input type="text" name="wn" id="wn"></td>
                        <td class="c-1">E-mail</td>
                        <td class="c-2"><input type="text" name="email" id="email"></td>
                        <td class="c-1">No HP</td>
                        <td class="c-2"><input type="text" name="nohp" id="nohp"></td>
                    </tr>
                    <tr>
                        <td class="c-1">Alamat </td>
                        <td class="c-2"><input type="text-area" name="alamat" id="alamat"></td>
                        <td class="c-1">Kode Pos</td>
                        <td class="c-2"><input type="text" name="kd_pos" id="text"></td>
                        <td class="c-1">Foto Profil</td>
                        <td class="c-2"><input type="file" name = "prof_pic" id="prof_pic"></td>
                    </tr>
                    <tr>
                        <td class="c-1">Username</td>
                        <td class="c-2"><input type="text" name="username" id="username"></td>
                        <td class="c-1">Password 1</td>
                        <td class="c-2"><input type="password" name="password1" id="password1"></td>
                        <td class="c-1">Password 2</td>
                        <td class="c-2"><input type="password" name="password2" id="password2"></td>
                    </tr>
                </table>
            </div>
            <div class="button">
                <div class="kembali">
                    <a href="welcome.php">Kembali</a>
                </div>
                <div class="register">
                    <input type="submit" name = "submit" value="Register" >
                </div>
            </div>
        </form>
    </div>
</body>
</html>