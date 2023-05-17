<?php

// Model 1
//  $cars = array("Volvo", "BMW", "Toyota", "Daihatsu")

//Model 2
    $cars[0] = "Volvo";
    $cars[1] = "BMW";
    $cars[2] = "Toyota";
    $cars[3] = "Daihatsu";
    
    $jmldata = count($cars);
    echo "Jumlah Data : ". $jmldata . "<br>";

    for($i=0;$i<3;$i++){
    echo "<br> Kendaraan ". $cars[$i];
    };
    
    echo "<hr>";

    echo "<ol class='mobil'>";
    foreach($cars as $dta){
        echo "<li> Kendaraan " . $dta . "</li>";
    };
    echo "</ol>";