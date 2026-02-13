<?php
class student{
    protected $name;
    protected $age;

    public function __construct($n, $m){
        $this->name = $n;
        $this->age =$m;
    }
}
class display extends student {
     public function display(){
        echo "the name of student is: $this->name and the age is: $this->age years";


}
}

$student = new display("john", 20);
$student->display();


?>