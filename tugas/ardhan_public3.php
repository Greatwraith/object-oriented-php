<?php
class Orang {
    private $nama; // Better encapsulation

    function set_name($new_nama) {
        $this->nama = $new_nama;
    }

    function get_name() {
        return $this->nama;
    }
}

$orang1 = new Orang();
$orang1->set_name('Nunung Wijaya'); // Use setter method
echo "Hai " . $orang1->get_name();  // Use getter method
?>
