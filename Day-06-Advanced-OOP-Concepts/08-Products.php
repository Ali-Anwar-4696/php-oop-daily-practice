<?php
namespace Product;

class Product {

public function __construct(){
    echo "This is a product class" . "<br>";

    $obj = new \Testing\Test();

}
}

function wow(){
    echo "This is a wow function from product file" . "<br>";
}

?>