<?php
class base1{
    public $name = "Parent class";
    public function calc($a, $b){
        return $a*$b;
    }
}

class derived1 extends base1{
    public $name = "Child class";
    public function calc($a, $b){
        return $a+$b;
    }
}

$b1 = new derived1();
// $b1 = new base1();

echo $b1->calc(5, 7);


