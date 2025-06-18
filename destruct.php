<?php
class NamaClass{
    public function __construct() {
    echo "objek telah dibuat!<br>";
    }
    
    public function __destruct(){
        echo "objek telah dihapus!<br>";
    }
}

//membuat objek dari class NamaClass
$objek = new NamaClass();

echo "Program sedang berjalan....<br>";

?>

<!-- Destructor dalam OOP
Destructor adalah method khusus yang dijalankan otomatis saat objek dihapus atau program selesai.
Fungsi:
1. Membersihkan atau menutup koneksi database
2. Menghapus data sementara yang tidak diperlukan
3. Menampilkan pesan sebelum objek dihapus
• Ditulis dengan _destruct(). -->