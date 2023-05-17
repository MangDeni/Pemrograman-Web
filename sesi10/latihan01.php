<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan01</title>
    
    <style type="text/css">
.form-style-5{
	max-width: 500px;
	padding: 10px 20px;
	background: #f4f7f8;
	margin: 10px auto;
	padding: 20px;
	background: #f4f7f8;
	border-radius: 8px;
	font-family: Georgia, "Times New Roman", Times, serif;
    display:flex;
    justify-content:center;
    align-items:center;
}
.form-style-5 fieldset{
	border: none;
}
.form-style-5 legend {
	font-size: 1.4em;
	margin-bottom: 10px;
}
.form-style-5 label {
	display: block;
	margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 select {
	font-family: Georgia, "Times New Roman", Times, serif;
	background: rgba(255,255,255,.1);
	border: none;
	border-radius: 4px;
	font-size: 15px;
	margin: 0;
	outline: 0;
	padding: 10px;
	width: 100%;
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	background-color: #e8eeef;
	color:#8a97a0;
	-webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	margin-bottom: 30px;
}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
	background: #d2d9dd;
}
.form-style-5 select{
	-webkit-appearance: menulist-button;
	height:35px;
}
.form-style-5 .number {
	background: #1abc9c;
	color: #fff;
	height: 30px;
	width: 30px;
	display: inline-block;
	font-size: 0.8em;
	margin-right: 4px;
	line-height: 30px;
	text-align: center;
	text-shadow: 0 1px 0 rgba(255,255,255,0.2);
	border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
	position: relative;
	display: block;
	padding: 19px 39px 18px 39px;
	color: #FFF;
	margin: 0 auto;
	background: #1abc9c;
	font-size: 18px;
	text-align: center;
	font-style: normal;
	width: 100%;
	border: 1px solid #16a085;
	border-width: 1px 1px 3px;
	margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
	background: #109177;
}

button {
  --button_radius: 0.75em;
  --button_color: #e8e8e8;
  --button_outline_color: #000000;
  font-size: 17px;
  font-weight: bold;
  border: none;
  border-radius: var(--button_radius);
  background: var(--button_outline_color);
}

.button_top {
  display: block;
  box-sizing: border-box;
  border: 2px solid var(--button_outline_color);
  border-radius: var(--button_radius);
  padding: 0.75em 1.5em;
  background: var(--button_color);
  color: var(--button_outline_color);
  transform: translateY(-0.2em);
  transition: transform 0.1s ease;
}

button:hover .button_top {
  transform: translateY(-0.33em);
}

button:active .button_top {
  transform: translateY(0);
}

</style>
</head>
<body>

<div class="form-style-5">
    <form action="latihan01.php" method="POST"  onsubmit="return checkform(this)">
        <div>
        <h3>NAMA</h3>
            <input type="text" placeholder="Masukan Nim" name="txNAMA" id="NAMA">
        </div>

        <div>
        <h3>NIM</h3>
            <input type="text" placeholder="Masukan Nim" name="txNIM" id="NIM">
        </div>

        <div>
        <h3>JENIS KELAMIN</h3>
            <input type="radio" name="txJK" id="JK" value="Laki-laki">Laki Laki
            <input type="radio" name="txJK" id="JK" value="perempuan">Perempuan
        </div>

        <div>
        <h3>JURUSAN</h3>
            <select class="form-select-sm" aria-label="Default select example" name="txJURUSAN" id="jurusan">
                <option selected>Pilih Jurusan</option>
                <option value="hukum">Hukum</option>
                <option value="manajemen">Manajemen Akutansi</option>
                <option value="tata">Tata Boga</option>
                <option value="mesin">Teknik Mesin</option>
                <option value="informatika">Teknik Informatika</option>
                <option value="desain">Desain Grafis</option>
            </select>
        </div>

        <div>
            Hobi
            <input type="checkbox" name="txHobi_MANCING" value="mancing">Mancing
            <input type="checkbox" name="txHobi_NYANYI" value="menyanyi">Menyanyi
            <input type="checkbox" name="txHobi_TIDUR" value="tidur">Tidur
            <input type="checkbox" name="txHobi_MANGGANG" value="manggang">Manggang
        </div>

        <div><br>
            <button type="submit">
                <span class="button_top">Kirim Data</span>
            </button>
        </div>
    </form>
    </div>

<script>
    function checkform(frm){
        let F = frm.elements;
        let nama = F.namedItem("txNAMA").value;
        let nim = F.namedItem("txNIM").value;
        let jk = F.namedItem("txJK").value;
        let jurusan = F.namedItem("txJURUSAN").value;
        let hobi_1 = [
            F.namedItem("txHobi_MANCING").checked,
            F.namedItem("txHobi_NYANYI").checked,
            F.namedItem("txHobi_TIDUR").checked,
            F.namedItem("txHobi_MANGGANG").checked
        ]
        console.log("NAMA : "+nama)
        console.log("NIM : "+nim)
        console.log("Jenis Kelamin : "+jk)
        console.log("Jurusan : "+jurusan)
        console.log("Hobi : "+hobi_1)

        return false;
    }
</script>
</body>
</html>