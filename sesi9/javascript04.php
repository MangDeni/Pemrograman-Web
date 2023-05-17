<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
    <style>
        form{
            display: flex;
            /* align-items:center; */
            justify-content:center;
            flex-direction:column;
        }
        .container{
            align-items:center;
            justify-content:center;
            display:flex;
            height:90vh;
        }
    </style>
</head>
<body>
    
    <div class="container">
    <form>
        
        <div>
            Masukan Alas
            <input type="number" id="alas" name="alas">
        </div>

        <div>
            Masukan Tinggi
            <input type="number" id="tinggi" name="tinggi">
        </div>

        <div>
            <button type="button" onclick="hasil()">TAMPILKAN HASIL</button>
        </div>

        <div id="hh"></div>

    </form>

    
    </div>

    <script>
        function hasil(){
            let nn = document.getElementById("alas").value;
            let nm = document.getElementById("tinggi").value;
            let luas = 0.5 * nn * nm;
            alert("alas segitiga : "+nn);
            alert("tinggi segitiga : "+nm);
            alert("hasil segitiga : "+luas);
            document.getElementById("hh").innerHTML = "hasinya : "+luas;
        }
    </script>

</body>
</html>