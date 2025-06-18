<?php

class Orang {  // Mendefinisikan class Orang sebagai class induk
    protected $nama;  // Mendeklarasikan property $nama dengan visibility protected

    public function setNama($nama) {  // Method untuk mengatur nilai property $nama
        $this->nama = $nama;  // Mengisi nilai property $nama dengan parameter yang diberikan
    }

    public function sapa() {  // Method untuk mengembalikan salam dengan menyertakan nama
        return "halo, saya $this->nama";  // Mengembalikan string yang berisi salam dan nama
    } 
}

class Anak extends Orang {  // Mendefinisikan class Anak yang mewarisi class Orang
    public function perkenalan() {  // Method untuk melakukan perkenalan
        return $this->sapa();  // Memanggil method sapa() dari class induk dan mengembalikan nilainya
    }
}

$anak1 = new Anak();  // Membuat objek baru dari class Anak
$anak1->setNama("Dewi");  // Mengatur nama objek $anak1 menjadi "Dewi"
echo $anak1->perkenalan();  // Menampilkan hasil perkenalan dari objek $anak1

?>