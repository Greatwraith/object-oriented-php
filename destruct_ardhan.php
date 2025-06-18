<?php
class NamaClass{

    public $sistemoperasi;
    public function __construct($sistemoperasi = 
    "WINDOWS SERIES") {
        $this->sistemoperasi = $sistemoperasi;
        echo "Objek {$this->sistemoperasi} telah dibuat<br>";
    }
    
    public function __destruct(){
        echo "Windows telah di shutdown!<br>";
    }
}

//membuat objek dari class NamaClass
$windows10 = new NamaClass();

echo "Windows sedang Memulai....<br>";

//membuat objek dari class NamaClass
$windows7 = new NamaClass();

echo "Windows sedang Memulai....<br>";

//membuat objek dari class NamaClass
$windows8 = new NamaClass();

echo "Windows sedang Memulai....<br>";

//membuat objek dari class NamaClass
$windowsXP = new NamaClass();

echo "Windows sedang Memulai....<br>";

?>