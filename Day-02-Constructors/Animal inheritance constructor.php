<?php
class animal{
    public $name;

    function __construct($n){
        $this->name = $n;
    }
    
    function display(){
        echo "The name of the animal is: $this->name";
    }
}

class dog extends animal {
    function bark(){
        echo "\n woof woof";
    }
}

class cat extends animal {
    function meow(){
        echo "\n meow meow";
    }
}
$animal = new animal("lion");
$animal->display();
echo "<br>";

$dog = new dog("buddy");
$dog->display();
$dog->bark();
echo "<br>";

$cat = new cat("whiskers");
$cat->display();
$cat->meow();



?>