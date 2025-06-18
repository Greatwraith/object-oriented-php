<?php
class helm {
    public $brand;
    public $tahun;
    public $kondisi;

    public function __construct($brand = "KYT", $tahun = "2023", $kondisi = "New") {
        $this->brand = $brand;
        $this->tahun = $tahun;
        $this->kondisi = $kondisi;
    }

    public function tampilkanInfo() {
        echo "Helm: $this->brand, tahun: $this->tahun, $this->kondisi<br>";
    }
}

// Membuat objek tanpa memberikan parameter (pakai default)
$helm1 = new Helm();
$helm1->tampilkanInfo(); 

// Membuat objek dengan parameter
$helm2 = new Helm("GM", "2022", "Second");
$helm2->tampilkanInfo(); 

$helm2 = new Helm("ARAI", "2022", "Second");
$helm2->tampilkanInfo(); 

// Membuat objek dengan parameter
$helm4 = new Helm("NHK", "2022", "Second");
$helm4->tampilkanInfo(); 


?>
