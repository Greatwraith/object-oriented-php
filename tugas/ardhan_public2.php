<?php
class sneaker {
    public $name;
    public $brand;
    public $color;

    // Method/function set

    //NAMA
    function set_name($new_name) {
        $this->name = $new_name;
    }

    
    function get_name() {
        return $this->name;
    }


    //jeniswarna
    function set_brand($new_brand) {
        $this->brand = $new_brand;
    }

    
    function get_brand() {
        return $this->brand;
    }

    //warna
    function set_color($new_color) {
        $this->color = $new_color;
    }


    function get_color() {
        return $this->color;
    }

}

$sneaker1 = new sneaker();

echo "Name : ".$sneaker1->name='Nike Shox R4';
echo "<br>";
echo "brand : ".$sneaker1->brand='Nike';
echo "<br>";
echo "color : ".$sneaker1->color='Black-Silver-Red';

?>
