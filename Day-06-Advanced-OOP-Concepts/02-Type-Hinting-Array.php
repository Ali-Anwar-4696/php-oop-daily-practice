<?php
function fruits(array $fruit){
    foreach($fruit as $f){
        echo $f . "<br>";
    }
}

$name = ["mango", "banana", "grapes"];
fruits($name);

?>