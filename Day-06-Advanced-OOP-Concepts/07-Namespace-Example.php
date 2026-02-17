<?php


require 'Products.php';
require 'Testing.php';

function wow(){
    echo "This is a wow function from main file" . "<br>";
}

$object1 = new Product\Product();
$object2 = new Testing\Test();

Product\wow();

wow();

?>