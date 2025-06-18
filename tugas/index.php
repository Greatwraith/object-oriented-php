<?php
// didalam class ini ada banyak public, public untuk properties dan public untuk method berupa function
class orang { 

    //atribut (properties)
    public $nama;
    public $umur;
    public $jenis_kelamin;


    //METHOD TIDUR
    public function tidur(){
        return "$this->nama sedang tidur.  ";
    }

    //METHOD UNTUK BERBICARA
    public function berbicara(){
        return "$this->nama sedang berbicara. ";
    }

    //METHOD UNTUK BERJALAN
    public function berjalan(){
        return "$this->nama sedang berjalan. ";
    }
   

}

//membuat object dari class orang
$orang = new orang();

//mengisi atribut dari object $orang
// isi object orang
$orang->nama = "Budi";
$orang->umur = 20 ;
$orang->jenis_kelamin = "Laki-laki";

//Menampilkan data dari object $orang
// menampilkan/memanggil object orang
echo "Nama : ".  $orang->nama . "<br>"; //output nama: budi
echo "Umur : " . $orang->umur . " tahun<br>"; //output umur : 20
echo "Jenis Kelamin :" . $orang->jenis_kelamin . "<br>"; //output jenis_kelamin : laki2


//manggil method dari object $orang
//

echo $orang->tidur(). "<br>";//output budi sedang tidur
echo $orang->berbicara(). "<br>";//output budi sedang berbicara
echo $orang->berjalan(). "<br>";//output budi sedang berjalan



?> 