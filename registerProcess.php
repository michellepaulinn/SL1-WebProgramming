<?php
session_start();
    if(isset($_POST['submit'])){
        $msg; //parameter notifikasi kesalahan pengisian
        //isi form
        $fileName = $_FILES['prof_pic']['name'];
        $tempName = $_FILES['prof_pic']['tmp_name'];

        $nama1 = $_POST['nama_dpn'];
        $nama2 = $_POST['nama_tgh'];
        $nama3 = $_POST['nama_blkg'];
        $tempatLahir = $_POST['tpt_lahir'];
        $tanggalLahir = $_POST['tgl_lahir'];
        $NIK = $_POST['nik'];
        $WN = $_POST['wn'];
        $email = $_POST['email'];
        $nohp = $_POST['nohp'];
        $alamat = $_POST['alamat'];
        $kodePos = $_POST['kd_pos'];
        $username = $_POST['username'];
        $password = $_POST['password1'];
        
        echo "<body style='background-color : #D9D7F1; justify-content:center'>";
        //validasi
        if(($nama1=='') || $nama1 < 3){
            $msg = "Nama Depan tidak valid";
            alert($msg);
        }
        else if($nama2==''){
            $msg = "Nama Tengah tidak valid";
            alert($msg);
        }
        else if($nama3==''){
            $msg = "Nama Belakang tidak valid";
            alert($msg);
        }
        else if($tempatLahir=='' || strlen($tempatLahir) < 4){
            $msg = "Lokasi tidak valid";
            alert($msg);
        }
        else if(!val_date($tanggalLahir)){
            $msg = "Tanggal Lahir tidak valid. Pastikan Anda berusia lebih dari 15 tahun";
            alert($msg);
        }
        else if(!val_nik($NIK)){
            $msg = "NIK tidak valid";
            alert($msg);
        }
        else if($WN=='' || strlen($WN) < 4){
            $msg = "Negara tidak valid";
            alert($msg);
        }
        else if(!val_email($email)){
            $msg = "Email tidak valid";
            alert($msg);
        }
        else if(($nohp=='') || (strlen($nohp) !=12) || (!is_numeric($nohp) ) ){
            $msg = "No HP tidak valid";
            alert($msg);
        }
        else if(($alamat =='') || (strlen($alamat) < 4) || !str_starts_with($alamat, 'Jalan')){
            $msg = "Lokasi tidak valid. Pastikan lokasi dimulai dengan 'Jalan'";
            alert($msg);
        }
        else if(($kodePos=='') || (strlen($kodePos) !=5 ) || (!is_numeric($kodePos))){
            $msg = "Kode Pos tidak Valid";
            alert($msg);
        }
        else if(!is_uploaded_file($tempName)){
            $msg = "Harap tambah Foto profil";
            alert($msg);
        }
        else if($username ==''|| strlen($username)<3){
            $msg = "username tidak valid";
            alert($msg);
        }
        else if(($password=='') || (strlen($password) < 8) || (! ctype_alnum($password))){
            $msg = "Password 1 tidak valid. Harap gunakan alpha numeric.";
            alert($msg);
        }
        else if(($_POST['password2']=='') || ($_POST['password2'] != $password)){
            $msg = "Password 2 tidak sesuai";
            alert($msg);
        }
        else{
            //Register berhasil
            $_SESSION['S_nama1'] = $nama1;
            $_SESSION['S_nama2'] = $nama2;
            $_SESSION['S_nama3'] = $nama3;
            $_SESSION['S_tempatLahir'] = $tempatLahir;
            $_SESSION['S_tanggalLahir'] = $tanggalLahir;
            $_SESSION['S_NIK'] = $NIK;
            $_SESSION['S_WN'] = $WN;
            $_SESSION['S_email'] = $email;
            $_SESSION['S_nohp'] = $nohp;
            $_SESSION['S_alamat'] = $alamat;
            $_SESSION['S_kodePos'] = $kodePos;
            $_SESSION['S_username'] = $username;
            $_SESSION['S_password'] = $password;
            $dir = "profPic";
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }
            $upload = move_uploaded_file($tempName, $dir."/".$fileName);
            $_SESSION['profpic'] = $dir."/".$fileName;
            header("location:welcome.php");
        }
    }

    function alert($msg){
        echo "<h1 style='text-align:center'>".$msg."</h1><br/>";
        echo "<a href='register.php' 
        style = 'text-decoration:none; color:black; padding: 1em; 
        background-color: #FFCBCB;
        border-radius:5px;
        border: 1px solid;
        font-weight:bold;'>
        Kembali</a>";
    }
    function val_date($tglLahir){
        // echo $tglLahir."<br>";
        if($tglLahir==""){
            return false;
        }
        $batasUmur = ((int)date("Y")-15)."-".date("m-d");
        // echo $tglLahir."   ".$batasUmur;
        if($tglLahir > $batasUmur){
            return false;
        }
        return true;
    }
    function val_email($email){
        if($email=="") return false;
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }
        return false;
    }
    function val_NIK($NIK){
        if($NIK == "") return false;
        if(strlen($NIK)==16 && is_numeric($NIK)){
            return true;
        }
        return false;
    }
?>