<?php
class student{
    private $name;
    private $age;

    public function __construct($n, $m){
        $this->name = $n;
        $this->age =$m;
    }

     public function display(){
        echo "the name of student is: $this->name and the age is: $this->age years";


        
}


}
 $student = new student("john", 20);
        $student->display();






?>