<?php
    $usr = "";
    $ps = "";
    if(isset($_REQUEST["txUSER"])){
        $usr = $_REQUEST["txUSER"];
        $ps = $_REQUEST["PASKY"];
    }

?><!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Form dengan Request Handle</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form method="GET" action="latihan03.php">
        <div>
            User name
            <input type="text" name="txUSER">
        </div>
        <div>
            Password
            <input type="password" name="PASKY">
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