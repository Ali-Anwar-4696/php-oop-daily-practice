<?php
class multiplication {
    public $a, $b, $c;
    public function mul() {
        $this->c = $this->a * $this->b;
        return $this->c;
    }
}

    $m = new multiplication();
    $m->a = 5;
    $m->b = 5;
    echo "multiplication of a and b is: " . $m->mul();




?>