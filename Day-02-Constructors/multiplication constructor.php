<?php
class mul{
    public $a;
    public $b;
    public $c;

    function __construct($x, $y){
        $this->a=$x;
        $this->b= $y;
        $this->c=$this->a * $this->b;

    }

    function display(){
        echo "The multiplication of $this->a and $this->b is : $this->c";

    }

}

$multiply = new mul(12, 23);
$multiply->display();



?>