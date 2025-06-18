<?php
include 'koneksi.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == 'tambah') {
    $insert = $db->input($_POST['nama'], $_POST['kelas'], $_POST['jurusan'], $_POST['jenis_kelamin'], $_POST['alamat']);

    if ($insert) {
        echo '<script>alert("Data berhasil ditambahkan."); window.location = "index.php";</script>';
        exit();
    } else {
        echo '<script>alert("Gagal menambahkan data."); window.history.back();</script>';
        exit();
    }
}
?>
