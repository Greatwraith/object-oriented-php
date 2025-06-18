<?php

class Siswa {
    public $nama;

    //constructor dengan nilai default
    public function __construct($nama = "Siswa default") {
        $this->nama = $nama;
        echo "Objek {$this->nama} telah dibuat<br>";
    }

    //destructor
    public function __destruct() {
        echo "Objek {$this->nama} telah dihapus/hancurkan! <br>";
    }
}

//membuat objek dengan nilai default
$siswa1 = new Siswa();
//membuat objek dengan nilai yang ditentukan
$siswa2 = new Siswa("budi");

//membuat objek dengan nilai default
$siswa3 = new Siswa();
//membuat objek dengan nilai yang ditentukan
$siswa4 = new Siswa("ardhan");

echo "<b>program sedang berjalan.........</b><br>"
?>