<?php

class orang { // Mendefinisikan class orang
    private $nama; // Mendeklarasikan properti private $nama

    public function setNama($nama){ // Method setter untuk mengatur nilai $nama
        $this->nama = $nama; // Mengisi nilai properti $nama dengan parameter yang diberikan
    }

    public function getNama(){ // Method getter untuk mengambil nilai $nama
        return $this->nama; // Mengembalikan nilai dari properti $nama
    }
}

$orang1 = new orang(); // Membuat objek baru dari class orang
$orang1->setNama("Budi"); // Memanggil method setNama untuk mengisi nilai nama dengan "Budi"
echo $orang1->getNama(); // Menampilkan nilai nama dengan memanggil method getNama (Output: Budi)

?>