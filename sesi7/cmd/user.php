<?php
    include("database/konkeksi.php");
    function createuser($nama, $email, $user, $password){

        $stt = false;
        $iduser = md5($user);
        $sql = "INSERT INTO tbuser(nama, email, username, passkey, iduser)
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

    function ceklogin($user, $pwd){
        global $cnn;
        $hsl["STATUS"] = false;

        $sql = "SELECT nama, email, username, passkey, iduser FROM tbuser WHERE username='$user';";
        $hs = mysqli_query($cnn, $sql);
        $jdata = mysql_num_rows($hs);

        echo $jdata;

        if($jdata > 0){
            $h = mysqli_fetch_assoc($hs);
            if($h["passkey"] == $pwd){
                $hsl["STATUS"] = true;
                $hsl["NAMA"] = $h["nama"];
                $hsl["EMAIL"] = $h["email"];
                $hsl["IDUSER"] = $h["iduser"];
            }
        }
        return $hsl;
    }
?> 