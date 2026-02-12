<?php
class add{
    public $a;
    public $b;
    public $c;

     function __construct($x, $y){
        $this->a=$x;
        $this->b= $y;
        $this->c=$this->a + $this->b;
    }

    function show(){
        echo "The sum of $this->a and $this->b is: $this->c";

    }

}

$add = new add(12, 23);
$add->show();


?>