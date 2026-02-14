<?php
class base {
    protected static $name ="base class";
    public function display(){
        echo static ::$name;
    }
}
    class derived extends base {
        protected static $name = "derived class";

    }


$test = new derived();
$test->display();



?>