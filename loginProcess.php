<?php
    session_start();
    if(isset($_POST['submit'])){
        if(($_POST['username'] == isset($_SESSION['S_username']))&&($_POST['password'] == isset($_SESSION['S_password']))){
            header("location:home.php");
        }else{
            echo "<body style='background-color : D9D7F1' justify-content:'center' margin:'auto'>";
            echo "<h1>Username atau Password anda tidak valid, silahkan Login ulang.</h1><br/>";
            echo "<a href='login.php' 
            style = 'text-decoration:none; color:black; padding: 1em; 
            background-color: #FFCBCB;
            border-radius:5px;
            border: 1px solid;
            font-weight:bold;'>
            Kembali</a>";
        }

    }
?>