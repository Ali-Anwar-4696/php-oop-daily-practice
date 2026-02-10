<?php
class calculator{
Public $a, $b, $c;
public function add(){
     $this->c = $this->a + $this->b;
     return $this->c;
}
     public function sub(){
     $this->c = $this->a - $this->b;
     return $this->c;

     }
     public function mul(){
     $this->c = $this->a * $this->b;
     return $this->c;

     }
     public function div(){
     $this->c = $this->a / $this->b;
     return $this->c;

}
}

$a1 = new calculator();
$a1-> a = 10;
 $a1-> b = 5;
 
 $a2 = new calculator();
 $a2-> a = 10;
 $a2-> b = 5;

$a3 = new calculator();
 $a3-> a = 10;
 $a3-> b = 5;

 $a4 = new calculator();
 $a4-> a = 10;
 $a4-> b = 5;

 echo "addition is : " . $a1->add() . PHP_EOL;
 echo "subtraction is : " . $a2->sub() . PHP_EOL;
 echo "multiplication is : " . $a3->mul() . PHP_EOL;
 echo "division is : " . $a4->div() . PHP_EOL;


?>