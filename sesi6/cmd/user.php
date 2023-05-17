<?php
    include("database/konkeksi.php");
    function createuser($nama, $email, $user, $password){

        $stt = false;
        $iduser = md5($user);
        $sql = "INSERT INTO tbuser(nama, email, usename, passkey, iduser) 
        VALUES(
            '$nama',
            '$email',
            '$user',
            '$password',
            '$iduser'
        );";
        $cnn =  mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("Koneksi ke DBMS Mysql gagal");
        $stt = mysqli_query($cnn, $sql);
        return $stt;
    }
?> 