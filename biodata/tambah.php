<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="proses.php?aksi=tambah" method="post" enctype="multipart/form-data">
        <table class="table-tambah">
            <tr class="tr-tambah">
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr class="tr-tambah">
                <td>Kelas</td>
                <td><input type="text" name="kelas" required></td>
            </tr>
            <tr class="tr-tambah">
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" required></td>
            </tr>
            <tr class="tr-tambah">
                <td>Gender</td>
                <td>
                   <input type="radio" name="jenis_kelamin" value="laki-laki" required> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan
                 </td>
           </tr>

            <tr class="tr-tambah">
                <td>Alamat</td>
                <td><input type="text" name="alamat" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button name="submit" type="submit" class="btn2">
                        ADD
                    </button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>



