<?php
class clesius {
    public $celsius;

    function __construct($celsius){
        $this->celsius = $celsius;
    }

    function convertToFahrenheit(){
        $fahrenheit = ($this->celsius * 9/5) + 32;
        echo "The tempreature of $this->celsius degree cesius is equal to : $fahrenheit degree fahrenheit";
    }
}

$temperature = new clesius(25);
$temperature->convertToFahrenheit();



?>