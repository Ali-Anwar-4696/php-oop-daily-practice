<?php
trait hello{
    public function sayhello(){
        echo "Hello world";
    }
}

class base{
    public function sayhello(){
        echo "hellow from base class";
    }
}

class child extends base {
    use hello;

    public function sayhello(){
        echo "hello from child class";
    }
}

$test = new child();
$test->sayhello();





?>