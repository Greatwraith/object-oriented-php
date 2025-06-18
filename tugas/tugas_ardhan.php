<?php
class siswa {
    public $nama;
    public $nis;
    public $jurusan;

    public function __construct($nama, $nis, $jurusan) {
        $this->nama = $nama;
        $this->nis = $nis;
        $this->jurusan = $jurusan;
    }

    public function identitas() {
        echo "<b>Nama:</b> " . $this->nama . "<br>";
        echo "<b>NIS:</b> " . $this->nis . "<br>";
        echo "<b>Jurusan:</b> " . $this->jurusan . "<br>";
    }
}


//PEWARISAN.....

class identitassiswa extends siswa {
    public $alamat;
    public $kota;

    public function __construct($nama, $nis, $jurusan, $alamat, $kota) {
        parent::__construct($nama, $nis, $jurusan);
        $this->alamat = $alamat;
        $this->kota = $kota;
    }

    public function showidentitas() {
        $this->identitas();
        echo "<hr>";
        echo "<b>Alamat:</b> " . $this->alamat . "<br>";
        echo "<b>Kota:</b> " . $this->kota . "<br>";
    }
}

$siswa = new identitassiswa("M. Ardhan Rahman", "543241086", "RPL", "Komplek Mustika Griya Permai", "Banjarbaru");
$siswa->showidentitas();
?>