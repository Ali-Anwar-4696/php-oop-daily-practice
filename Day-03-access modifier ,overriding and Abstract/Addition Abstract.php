<?php
abstract class add{
    protected $a;
    protected $b;

    abstract protected function calc($a, $b);

}
class sum extends add{
    public function calc($a, $b){
        return $a + $b;
    }
}
$test = new sum();
echo $test->calc(10, 20);



?>