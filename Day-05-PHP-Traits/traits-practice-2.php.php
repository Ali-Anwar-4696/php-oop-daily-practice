<?php

trait hello{
    private function sayhello(){
        echo "hello world";
    }
}

class base{
    use hello{
        hello::sayhello as public newhello;
    }

}

$test = new base();
$test ->newhello();
?>