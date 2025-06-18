<?php
class Mobil {
    public $merk;
    public $warna;
    public $harga;

    public function __construct($merk = "Toyota", $warna = "Merah", $harga = "750jt"){
        $this->merk = $merk;
        $this->warna = $warna;
        $this->harga = $harga;
    }

    public function tampilkaninfo(){
        echo "Mobil : $this->merk, Warna : $this->warna, Harga : $this->harga<br>";
    }
}

//membuat objek tanpa memberikan parameter (pakai default)
$mobil1 = new Mobil();
$mobil1->tampilkaninfo();//output mobil : Toyota, Warna: Merah, Harga: 100000000

//membuat objek dengan memberikan parameter
$mobil2 = new Mobil("Honda", "Biru","550jt");
$mobil2->tampilkaninfo();//output mobil : Honda, Warna: Biru, Harga: 200000000


?>