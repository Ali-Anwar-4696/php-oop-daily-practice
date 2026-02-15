<?php
trait add {
    public function add($a, $b){
        echo "Addition Result is: ". ($a + $b) . "<br>";   
         }
}
trait sub {
    public function sub($a, $b){
        echo "Subtraction Result is: ". ($a - $b) .  "<br>";   
         }
}

trait mult {
    public function mult($a, $b){
        echo "Multiplication Result is: ". ($a * $b) . "<br>";   
         }
}

trait div {
    public function div($a, $b){
        echo "Division Result is: ". ($a / $b) . "<br>";   
         }
}


class calculator {
    use add;
    use sub;
    use mult;
    use div;
}

$calc = new calculator();
$calc->add(5, 10);
$calc->sub(10, 5);
$calc->mult(5, 10);
$calc->div(10, 5);




?>