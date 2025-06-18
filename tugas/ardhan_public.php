<?php
class siswa {
    var $nama;

    // Method/function set
    function set_name($new_nama) {
        $this->nama = $new_nama;
    }

    // Method/function get
    function get_name() {
        return $this->nama;
    }
}

$siswa1 = new siswa();
// Properti bisa diakses secara langsung
echo "Hai ".$siswa1->nama='nunung wijaya';
echo "<hr>";
// Method bisa diakses secara langsung
echo $siswa1->get_name();
?>
