<?php

class database {

    public $host = "localhost";
    public $uname = "root";
    public $pass = "";
    public $database = "biodatapbo";
    public $koneksi;

    function __construct() {
        $this->koneksi = mysqli_connect($this->host, $this->uname, $this->pass, $this->database);

        if (mysqli_connect_errno()) {
            echo "Koneksi Database Gagal: " . mysqli_connect_error();
        }
    }

    function tampil_data() {
        $data = mysqli_query($this->koneksi, "SELECT * FROM siswa");

        while ($d = mysqli_fetch_array($data)) {
            $hasil[] = $d;
        }

        return isset($hasil) ? $hasil : [];
    }

    function input($nama, $kelas, $jurusan, $jenis_kelamin, $alamat) {
        return mysqli_query($this->koneksi, "INSERT INTO siswa (nama, kelas, jurusan, jenis_kelamin, alamat) VALUES ('$nama', '$kelas', '$jurusan', '$jenis_kelamin', '$alamat')");
    }
    

}

?>