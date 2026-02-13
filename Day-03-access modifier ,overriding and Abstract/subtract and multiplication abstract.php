<?php
abstract class sub{
    protected $a;
    protected $b;

    abstract protected function calc($a, $b);
}

class minus extends sub{
    public function calc($a, $b){
        return $a - $b;
    }
}

class multi extends sub{
    public function calc($a, $b){
        return $a * $b;
    }
}

$test = new multi();
echo "Mutiplication: ".$test->calc(20, 10);
echo "<br>";
$test = new minus();
echo "Subtraction: ".$test->calc(20, 10);

?>