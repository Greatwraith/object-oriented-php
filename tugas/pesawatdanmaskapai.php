<?php

echo "<b>ARDHAN</b>";

echo "<br>";
echo "<br>";
// didalam class ini ada banyak public, public untuk properties dan public untuk method berupa function
class pesawat { 

    //atribut (properties)
    public $namamaskapaidanpesawat; 
    public $asalpesawat;
    public $asalmaskapai;


    //METHOD TIDUR
    public function isibahanbakar(){
        return "$this->namamaskapaidanpesawat sedang di isi bahan bakarnya .  ";
    }

    //METHOD UNTUK BERBICARA
    public function disiapkan(){
        return "$this->namamaskapaidanpesawat sedang disiapkan untuk take off. ";
    }

    //METHOD UNTUK BERJALAN
    public function takeoff(){
        return "$this->namamaskapaidanpesawat sedang take off. ";
    }
   

}

//membuat object dari class orang
//1
$pesawat1 = new pesawat();

//mengisi atribut dari object $orang
// isi object orang
$pesawat1->namamaskapaidanpesawat = "Garuda indonesia | Boeing 737";
$pesawat1->asalpesawat = "Amerika Serikat" ;
$pesawat1->asalmaskapai = "Indonesia";

//Menampilkan data dari object $orang
// menampilkan/memanggil object orang
echo "Nama Maskapai & Pesawat : ".  $pesawat1->namamaskapaidanpesawat . "<br>"; //output nama: budi
echo "Asal Pesawat : " . $pesawat1->asalpesawat . "<br>"; //output umur : 20
echo "Asal Maskapai : " . $pesawat1->asalmaskapai . "<br>"; //output jenis_kelamin : laki2


//manggil method dari object $orang
//

echo $pesawat1->isibahanbakar(). "<br>";//output budi sedang tidur
echo $pesawat1->disiapkan(). "<br>";//output budi sedang berbicara
echo $pesawat1->takeoff(). "<br>";//output budi sedang berjalan


//
//
//
echo "<br>";

//////////////////////////////////////////////////////////////////////////

//
//
//




//membuat object dari class orang
//1
$pesawat2 = new pesawat();

//mengisi atribut dari object $orang
// isi object orang
$pesawat2->namamaskapaidanpesawat = "Emirates Airlines | Airbus a380";
$pesawat2->asalpesawat = "Eropa" ;
$pesawat2->asalmaskapai = "UAE";

//Menampilkan data dari object $orang
// menampilkan/memanggil object orang
echo "Nama Maskapai & Pesawat : ".  $pesawat2->namamaskapaidanpesawat . "<br>"; //output nama: budi
echo "Asal Pesawat : " . $pesawat2->asalpesawat . "<br>"; //output umur : 20
echo "Asal Maskapai : " . $pesawat2->asalmaskapai . "<br>"; //output jenis_kelamin : laki2


//manggil method dari object $orang
//

echo $pesawat2->isibahanbakar(). "<br>";//output budi sedang tidur
echo $pesawat2->disiapkan(). "<br>";//output budi sedang berbicara
echo $pesawat2->takeoff(). "<br>";//output budi sedang berjalan


?> 