<?php
class user{
    public function __construct(){
        echo "This is a constructor function" . "<br>";
    }

    public function getdata(){
        echo "This is a getdata function" . "<br>";
    }

    public function __destruct(){
        echo "This is a destructor function" . "<br>";
    }
}

$object = new user();
$object->getdata();
$object->getdata();





?>