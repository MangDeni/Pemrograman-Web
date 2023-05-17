<?php
    $usr = "";
    $ps = "";
    if(isset($_GET["txUSER"])){
        $usr = $_GET["txUSER"];
        $ps = $_GET["PASKY"];
    }

?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Form Method GET</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form method="GET" action="latihan01.php">
        <div>
            User name
            <input type="text" name="txUSER" required>
        </div>
        <div>
            Password
            <input type="password" name="PASKY" required>
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