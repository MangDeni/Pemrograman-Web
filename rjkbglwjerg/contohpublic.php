<?php
class Kendaraan{
    public $nama;
    public function start(){
        echo "Kendaraan dimulai. ";
    }
}

$mobil = new Kendaraan();
$mobil->nama = "Mobil\n";
echo $mobil->nama;  //Output:Mobil
$mobil->start();    //Output:Kendaraan dimulai
?>