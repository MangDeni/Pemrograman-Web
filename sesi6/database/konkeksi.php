<?php
    include("konfigurasi.php");

    $cnn =  mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT) or die("Koneksi ke DBMS Mysql gagal");
    
        // echo("Koneksi ke DBMS Mysql sukses");
        
    // $cnn =  mysqli_connect(DBHOST,DBUSER,DBPASS);
    // if($cnn){
    //     echo("Koneksi ke DBMS Mysql sukses");
    // }else{
    //     echo("Koneksi ke DBMS Mysql gagal");
    // }
    // mysqli_close($cnn);