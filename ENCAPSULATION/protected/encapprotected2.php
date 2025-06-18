<?php

class siswa {  // Mendefinisikan class siswa
    protected $namaorangtua;  // Mendeklarasikan property $namaorangtua dengan visibility protected

    public function __construct($namaorangtua) {  // Constructor untuk inisialisasi objek
        $this->namaorangtua = $namaorangtua;  // Mengisi property $namaorangtua dengan nilai parameter
    }
}

// Mendefinisikan class anak yang mewarisi class siswa
class anak extends siswa {  
    public function tampilkanorangtua(){  // Method untuk menampilkan nama orang tua
        return "nama orang tua : " . $this->namaorangtua;  // Mengembalikan string dengan nama orang tua
    }
}

$anak1 = new anak("pak budi");  // Membuat objek baru dari class anak dengan parameter "pak budi"
echo $anak1->tampilkanorangtua() . "<br>";  // Menampilkan hasil method tampilkanorangtua() dari objek $anak1

?>