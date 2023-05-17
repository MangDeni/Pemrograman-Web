<?php
    $usr = "";
    $ps = "";
    $eusr = "";
    $eps = "";
    if(isset($_POST["txUSER"])){
        $usr = $_POST["txUSER"];
        $ps = $_POST["PASKY"];
        if ($usr==""){
            $eusr = "<div style='color:red;font-size: 10px:'>Field User Masih Kosong</div>";
        }

        if ($ps==""){
        $eps = "<div style='color:red;font-size: 10px:'>Field Password Masih Kosong</div>";
        }
    }

?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Form Method POST</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form method="POST" action="latihan02.php">
        <div>
            User name
            <input type="text" name="txUSER">
            <?=$eusr;?>
        </div>
        <div>
            Password
            <input type="password" name="PASKY">
            <?=$eps;?>
        </div>
        <div>
            <button>Login</button>
        </div>
        </form>

        <div>
            Isi Dari Form : <br>
                1. User Name : <?=$usr?><br>
                2. Password : <?=$ps?><br>
        </div>
    </body>
</html>