<?php
    $dta["NIM"] = "2233445566";
    $dta["NAMA"] = "Wayan Jarjit Singh";
    $dta["JKEL"] = "L";
    $dta["JURUSAN"] = "MTI";
    $dta["ALAMAT"] = "JL JALAN JALAN";
    $dta["QUOTES"] = "SENGGOL DONG";

    header("Content-type: application/json charset: utf-8");
    echo json_encode($dta);