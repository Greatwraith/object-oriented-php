<?php


class buku {
    
    public $judul; 
    public $penulis; 
    public $jumlah_halaman; 

    
    public function bukahalaman(){
        return " buka halaman $this->jumlah_halaman"; 
    }
    // method yang ada adalah bukahalaman() dan bacaisi()
    
    public function bacaisi(){
        return "bacalah isi dari $this->judul"; 
    }
}

// //////////////////////////////////////////
// PEMANGGILAN! (Memanggil kelas)
// //////////////////////////////////////////


$buku1 = new buku(); 


$buku1->judul = "Matematika dasar"; 
$buku1->penulis = "Pak Andi"; 
$buku1->jumlah_halaman =  200; 


echo "Judul buku : " . $buku1->judul . "<br>";
echo "nama penulis : " . $buku1->penulis . "<br>";
echo "jumlah halaman : " . $buku1->jumlah_halaman . "<br>"; 


echo $buku1->bukahalaman()."<br>"; 
echo $buku1->bacaisi()."<br>"; 


echo "<br>";


$buku2 = new buku(); 


$buku2->judul = "pancasila"; 
$buku2->penulis = "bu riska";
$buku2->jumlah_halaman =  252; 


echo "Judul buku : " . $buku2->judul . "<br>"; 
echo "nama penulis : " . $buku2->penulis . "<br>"; 
echo "jumlah halaman : " . $buku2->jumlah_halaman . "<br>"; 


echo $buku2->bukahalaman()."<br>"; 
echo $buku2->bacaisi()."<br>"; 

?>
