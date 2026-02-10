<?php
class sum {
    public $a;
    public $b;
    public $c;

    public function add() {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    public function sub() {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$a1 = new sum();
$a1->a = 23;
$a1->b = 34;

$a2 = new sum();
$a2->a = 50;
$a2->b = 12;

echo "a1 add: " . $a1->add() . PHP_EOL;
echo "a2 sub: " . $a2->sub() . PHP_EOL;

?>
