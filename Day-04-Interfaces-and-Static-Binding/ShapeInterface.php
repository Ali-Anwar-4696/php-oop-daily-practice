<?php

interface Shape {
    public function area($a, $b);
}

class Rectangle implements Shape {
    public function area($length, $width) {
        return $length * $width;
    }
}

class Triangle implements Shape {
    public function area($base, $height) {
        return 0.5 * $base * $height;
    }
}

$rectangle = new Rectangle();
echo "Rectangle Area: " . $rectangle->area(10, 5);

echo "<br>";

$triangle = new Triangle();
echo "Triangle Area: " . $triangle->area(10, 5);

?>
