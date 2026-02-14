<?php

interface A{
   public function add($a, $b);
}

interface B{
    public function sub($a, $b);

}

class C implements A, B{
    public function add($a, $b){
        echo "addition is: ".  ($a + $b);
    }


    public function sub($a, $b){
        echo "subtraction is: ". ($a - $b);
    }

}

$test = new C();
$test->add(20, 5);
echo "<br>";
$test->sub(20, 5);







?>