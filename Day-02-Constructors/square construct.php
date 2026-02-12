<?php
class square{
    public $a;
    public $b;

    function __construct($x){
        $this->a=$x;
        $this->b=$this->a * $this->a;
    }

        function show(){
            echo "The square of  $this->a is: $this->b";

        }
    }

    $square = new square(12);
    $square->show();





?>