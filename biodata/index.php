<?php
include 'koneksi.php';
$db = new database();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<a href="tambah.php" class="btn2">ADD SISWA</a>
    <table >
        <thead>
              <tr class="tr-thead">
                   <td>NO</td>
                   <td>Nama</td>
                   <td>Kelas</td>
                   <td>Jurusan</td>
                   <td>Gender</td>
                   <td>alamat</td>
              </tr>
        </thead>

        <tbody>
                <?php
                $no = 1;
               foreach ($db->tampil_data() as $s) {
                  ?>
                <tr class="tr-tbody">
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $s['nama']; ?></td>
                    <td><?php echo $s['kelas']; ?></td>
                    <td><?php echo $s['jurusan']; ?></td>
                    <td><?php echo $s['jenis_kelamin']; ?></td>
                    <td><?php echo $s['alamat']; ?></td>
                </tr>
             <?php
              }
              ?>    
        </tbody>
        

        
    </table>
</body>
</html>