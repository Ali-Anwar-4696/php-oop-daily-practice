<?php
interface A{
    public function mult($a, $b);

}

interface b {
    public function divide($a, $b);
}

class c implements A, b{
    public function mult($a, $b){
        echo "multiplication is: " . ($a * $b);
    }
    public function divide($a, $b){
        echo "division is: " . ($a / $b);
    }
}

$test = new c();
$test->mult(20, 5);
echo "<br>";
$test->divide(20, 5);
?>




