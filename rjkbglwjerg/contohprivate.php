<?php
class Mobil
{
    private $kecepatan = 0;

    private function tampilkankecepatan()
    {
        return "Kecepatan:" . $this->kecepatan . " km/jam";
    }

    public function tambahkecepatan($nilai)
    {
        $this->kecepatan += $nilai;
        echo $this->tampilkankecepatan();
    }
}

class Contoh
{
    private function privateMethod()
    {
        echo "Ini adalah private method.";
    }

    public function publicMethod()
    {
        //Mengakses private method dari dalam kelas
        $this->privateMethod();
    }
}


$mobil = new Mobil();
$mobil->tambahkecepatan(50); //Output:Kecepatan; 50 km/jam
echo $mobil->$tampilkankecepatan(); //Akan menghasilkan eror karena metode private

$contoh = new Contoh();
$contoh->$publicMethod(); //Ini adalah private method.
