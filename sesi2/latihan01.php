<?php
    $judulpage = "Latihan Script PHP";
    $konten = "<h3>Latihan Scrip PHP</h3>";
    $konten .="<p>Dasar Pulisan PHP: <ul><li>Penulisan Script PHP bersifat case sensitive</li><li>Setiap akhir baris ditandai dengan titik koma</li></ul></p>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><<?=$judulpage; ?></title>
</head>
<body>
    <?php
        echo $konten;
    ?>
</body>
</html>