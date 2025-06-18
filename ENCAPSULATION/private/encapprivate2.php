<?php

class siswa { // Mendefinisikan class siswa untuk merepresentasikan data siswa
    private $nilai; // Properti private untuk menyimpan nilai siswa, tidak bisa diakses langsung dari luar class

    public function __construct($nilai) { // Constructor untuk menginisialisasi nilai saat objek dibuat
        $this->nilai = $nilai; // Mengisi properti nilai dengan parameter yang diberikan
    }

    public function getNilai() { // Method untuk mendapatkan nilai siswa
        return "nilai siswa : " . $this->nilai; // Mengembalikan string yang berisi nilai siswa
    }

    public function setNilai($nilaibaru) { // Method untuk mengubah nilai dengan validasi
        if($nilaibaru >= 0 && $nilaibaru <= 100) { // Memeriksa apakah nilai baru berada dalam rentang 0-100
            $this->nilai = $nilaibaru; // Jika valid, mengubah nilai siswa
        } else {
            echo "Nilai harus antara 0 - 100!<br>"; // Jika tidak valid, menampilkan pesan error
        }
    }
}


$siswa1 = new siswa(90); // Membuat objek siswa dengan nilai awal 90
echo $siswa1->getNilai() . "<br>"; // Menampilkan nilai siswa pertama


$siswa1->setNilai(75);// Mengubah nilai siswa menjadi 75 melalui method setNilai()
echo $siswa1->getNilai() . "<br>";// Menampilkan nilai siswa setelah diubah

?>
