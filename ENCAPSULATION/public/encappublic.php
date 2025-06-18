<?php
class orang { // Mendefinisikan class dengan nama 'orang'
    public $nama; // Properti public untuk menyimpan nama

    public function sapa() { // Method untuk menyapa
        return "Halo, saya $this->nama."; // Mengembalikan string sapaan dengan nama
    }
    
    public function berjalan() { // Method untuk menunjukkan aktivitas berjalan
        return "$this->nama sedang berjalan."; // Mengembalikan string aktivitas berjalan
    }
}

$orang1 = new orang(); // Membuat objek baru dari class orang
$orang1->nama = "Budi"; // Mengisi properti nama dengan nilai "Budi"

// PEMANGGILAN METHOD
echo $orang1->sapa(); // Memanggil method sapa() dan menampilkan hasilnya
echo "<br>"; // Membuat baris baru
echo $orang1->berjalan(); // Memanggil method berjalan() dan menampilkan hasilnya
?>