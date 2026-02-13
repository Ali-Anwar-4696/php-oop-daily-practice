<?php
class base{
    public $name = "Parent class";
    public function calc($a, $b){
        return $a + $b;
    }
}

class child extends base{
    public $name = "Child class";
    public function calc($a, $b){
        return $a * $b;
    }

}

$test = new child(10, 20);
echo $test->name;
echo "<br>";
echo $test->calc(10, 20);



?>