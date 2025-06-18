<?php
class siswa {
    public $nama; // Properti public yang bisa diakses dari mana saja

    public function __construct ($nama) { // Constructor untuk inisialisasi objek
        $this->nama = $nama; // Mengisi properti nama dengan nilai dari parameter
    }

    public function getNama() { // Method untuk mendapatkan nama siswa
        return "Nama Siswa : " . $this->nama; // Mengembalikan string dengan nama siswa
    }
}

// MEMBUAT OBJEK SISWA
$siswa1 = new siswa("Ardhan"); // Membuat objek siswa1 dengan nama "Ardhan"
echo $siswa1->getNama() . "<br>"; // Menampilkan nama siswa1

// BISA LANGSUNG DIUBAH DARI LUAR CLASS
$siswa1->nama = "Zacky"; // Mengubah nilai properti nama langsung dari luar class
echo $siswa1->getNama() . "<br>"; // Menampilkan nama siswa1 setelah diubah
?>