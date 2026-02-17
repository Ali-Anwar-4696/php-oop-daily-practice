<?php
class user {
    public function first(){
        echo "This is the first function" . "<br>";
        return $this;
    }

    public function second(){
        echo "This is the second function" . "<br>";
        return $this;
    }

    public function third(){
        echo "This is the third function" . "<br>";
        return $this;
    }
}

$object = new user();
$object->first()->second()->third();



?>