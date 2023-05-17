<?php
    include("cmd/user.php");
    $psn = "";
    // cek pengiriman form
    if(isset($_POST["txPASS1"])){
        if($_POST["txPASS1"] == $_POST["txPASS2"]){
            $nama = $_POST["txNAMA"];
            $email = $_POST["txEMAIL"];
            $user = $_POST["txUSER"];
            $pass = $_POST["txPASS1"];
            
            if(createuser($nama, $email, $user, $pass)){
                $psn = "Create Data User Sukses";
            }else{
                $psn = "Create Data User Gagal";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM REGISTER</title>
    <style>
        .form-style-4{
	width: 450px;
    margin:auto;
    margin-top:350px;
	font-size: 16px;
	background: #495C70;
	padding: 30px 30px 15px 30px;
	border: 5px solid #53687E;
}
.form-style-4 input[type=submit],
.form-style-4 input[type=button],
.form-style-4 input[type=text],
.form-style-4 input[type=email],
.form-style-4 textarea,
.form-style-4 label
{
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
	color: #fff;

}
.form-style-4 label {
	display:block;
	margin-bottom: 10px;
}
.form-style-4 label > span{
	display: inline-block;
	float: left;
	width: 150px;
}
.form-style-4 input[type=text],
.form-style-4 input[type=email] 
{
	background: transparent;
	border: none;
	border-bottom: 1px dashed #83A4C5;
	width: 275px;
	outline: none;
	padding: 0px 0px 0px 0px;
	font-style: italic;
}
.form-style-4 textarea{
	font-style: italic;
	padding: 0px 0px 0px 0px;
	background: transparent;
	outline: none;
	border: none;
	border-bottom: 1px dashed #83A4C5;
	width: 275px;
	overflow: hidden;
	resize:none;
	height:20px;
}

.form-style-4 textarea:focus, 
.form-style-4 input[type=text]:focus,
.form-style-4 input[type=email]:focus,
.form-style-4 input[type=email] :focus
{
	border-bottom: 1px dashed #D9FFA9;
}

.form-style-4 input[type=submit],
.form-style-4 input[type=button]{
	background: #576E86;
	border: none;
	padding: 8px 10px 8px 10px;
	border-radius: 5px;
	color: #A8BACE;
}
.form-style-4 input[type=submit]:hover,
.form-style-4 input[type=button]:hover{
background: #394D61;
}
    </style>
</head>
<body>
    <form class="form-style-4" method="POST" action="register.php">
    <?php
        echo "<div>$psn</div>";
    ?>
    <label for="field1">
        <span>Nama Lengkap</span><input type="text" name="txNAMA" required="true" />
    </label>

    <label for="field2">
        <span>Email</span><input type="email" name="txEMAIL" required="true" />
    </label>

    <label for="field3">
        <span>User Name</span><input type="text" name="txUSER" required="true" />
    </label>

    <label for="field4">
        <span>Password</span><input type="password" name="txPASS1" required="true" />
    </label>

    <label for="field5">
        <span>Verifikasi Password</span><input type="password" name="txPASS2" required="true" />
    </label>

    <label>
        <span> </span><input type="submit" value="Submit" />
    </label>
    </form>
</body>
</html>