<?php
class vehicle {
    public $name;

    function __construct($name){
        $this->name = $name;
    }
}

class car extends vehicle {
    function display(){
        echo "The name of car is: $this->name";
    }
}

class bike extends vehicle {
    function show(){
        echo "The name of bike is : $this->name";
    }
}

$car = new car("Toyota");
$car->display();
echo "<br>";

$bike = new bike("Honda");
$bike->show();


?>