<?php
class school{
    public function getNames(student $names){
        echo "<ul>";
        foreach ($names->Names() as $name) {
            echo "<li>" . $name ."</li>";
        }
        echo "</ul>";
    }
}

class student{
    public function names(){
        return ["John", "jane", "doe"];
    }
}

class library{

}

$lib = new library();
$stu = new student();
$sch = new school();

$sch->getNames($stu);


?>