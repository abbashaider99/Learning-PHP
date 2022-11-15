<?php

abstract class parentClass{
    public $name;

    abstract protected function calc($a, $b);
}

class childClass extends parentClass{
    public function calc($a, $b){
        echo $a+$b;
    }
}

$test = new childClass();
$test->calc(10, 20);


?>


<!-- Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.

An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.

An abstract class or method is defined with the abstract keyword: -->