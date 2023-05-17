<?php
    
    
    function TentangAplikasi(){
        echo "<h3>Aplikasi apa saja</h3>" ;
        echo "<sup>versi 1.0</sup>";
    }
    function cetaklabel01($tx){
        echo "ini Label: ".$tx;
    }
    function cetaklabel02($tx="isikan label"){
        echo "isi Label: ".$tx;
    }
    function jumlahkan($angka1=0, $angka2=0){
        return $angka1+$angka2;
    }