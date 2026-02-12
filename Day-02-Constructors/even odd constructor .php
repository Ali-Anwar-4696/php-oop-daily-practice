<?php
class Evenodd{
    public $a;
   function __construct($x){
     $this->a = $x;
   }

   function check(){
    if($this->a % 2 == 0){
        echo "the number $this->a is Even";

    }else{
        echo "the number $this->a is Odd";
    }
   }
}

$evenodd = new Evenodd((24));
$evenodd->check();


?>