<?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    
    echo "Umur dari Peter " . $age["Peter"]. " Tahun <br>";

    echo "<hr>";

    foreach($age as $nama=> $umur){
        echo "Umur dari " . $nama . " : " . $umur . "<br>";
    };