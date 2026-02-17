<?php
class user {
    public function Ali(){
        echo "This is ali function" . "<br>";
        return $this;
    }

     public function Ahmed(){
        echo "This is ahmed function" . "<br>";
        return $this;
    }

     public function Hassan(){
        echo "This is hassan function" . "<br>";
        return $this;
    }

     public function usman(){
        echo "This is usman function" . "<br>";
        return $this;
    }
}

$object = new user();
$object->Ali()->Ahmed()->Hassan()->Usman();



?>