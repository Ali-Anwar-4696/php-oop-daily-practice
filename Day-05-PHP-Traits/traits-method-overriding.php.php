<?php
trait hello{
    public function sayhello(){
        echo "Hello from hello trait " . "<br>";
    }
}

trait hi {
    public function sayhello(){
        echo "Hello from hi trait .\n";
    }
}

class base{
    use hello, hi {
        hello :: sayhello insteadof hi;
        hi :: sayhello as newhello;
    }
}

$test = new base();

$test->sayhello();
$test->newhello();


?>