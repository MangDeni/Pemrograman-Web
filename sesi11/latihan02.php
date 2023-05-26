<?php
    $dta[0]["NIM"] = "2233445566";
    $dta[0]["NAMA"] = "Wayan Jarjit Singh";
    $dta[0]["JKEL"] = "L";
    $dta[0]["JURUSAN"] = "MTI";
    $dta[0]["ALAMAT"] = "JL JALAN JALAN";
    $dta[0]["QUOTES"] = "SENGGOL DONG";

    $dta[1]["NIM"] = "3925612874365289";
    $dta[1]["NAMA"] = "Komang Koming";
    $dta[1]["JKEL"] = "P";
    $dta[1]["JURUSAN"] = "DKV";
    $dta[1]["ALAMAT"] = "JL DALEM";
    $dta[1]["QUOTES"] = "GINI AJA";

    $dta[2]["NIM"] = "3428965287965";
    $dta[2]["NAMA"] = "BUDI INI";
    $dta[2]["JKEL"] = "L";
    $dta[2]["JURUSAN"] = "MTI";
    $dta[2]["ALAMAT"] = "JL KELUAR JALAN";
    $dta[2]["QUOTES"] = "BUDI NIH BOS";

    $dta[3]["NIM"] = "7465728944";
    $dta[3]["NAMA"] = "MAYUN";
    $dta[3]["JKEL"] = "L";
    $dta[3]["JURUSAN"] = "MTI";
    $dta[3]["ALAMAT"] = "JL NE PENTING YAKIN";
    $dta[3]["QUOTES"] = "SORRY BUD";

    $dta[4]["NIM"] = "748657845436";
    $dta[4]["NAMA"] = "ALIT";
    $dta[4]["JKEL"] = "L";
    $dta[4]["JURUSAN"] = "MTI";
    $dta[4]["ALAMAT"] = "JL BANTENG";
    $dta[4]["QUOTES"] = "BANTENG NOMER 1";

    header("Content-type: application/json charset: utf-8");
    echo json_encode($dta);