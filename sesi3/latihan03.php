<?php

    $mhs = array(
        array("Nama"=>"Boiboy","ID"=>"1234","Kota"=>"Durian Runtuh"),
        array("Nama"=>"Jarjit","ID"=>"3223","Kota"=>"Washington DC"),
        array("Nama"=>"Saman Brembo","ID"=>"7543","Kota"=>"Disney Land"),
        array("Nama"=>"Y","ID"=>"4985","Kota"=>"Bangladesh"),
    );

    // echo $mhs[2]["Nama"];
    // echo "<hr>";
    // print_r($mhs);
    // echo "<hr>";

    // foreach($mhs as $dta){
        
    //     foreach($dta as $lb => $nval){
    //     echo $lb . " : " . $nval . "<br>";
    //     }

    //     echo "<br>";
    // } */

    header("Content-type: application/json");
    echo json_encode($mhs);