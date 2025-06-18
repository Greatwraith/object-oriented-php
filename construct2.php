<?php
class helm {
    public $brand;
    public $tahun;

    public function __construct($brand = "KYT", $tahun = "2023") {
        $this->brand = $brand;
        $this->tahun = $tahun;
    }

    public function tampilkanInfo() {
        echo "Helm: $this->brand, tahun: $this->tahun<br>";
    }
}

// Membuat objek tanpa memberikan parameter (pakai default)
$helm1 = new Helm();
$helm1->tampilkanInfo(); // Output: Mobil: Toyota, Warna: Hitam

// Membuat objek dengan parameter
$helm2 = new Helm("GM", "2022");
$helm2->tampilkanInfo(); // Output: Mobil: Honda, Warna: Merah
?>
