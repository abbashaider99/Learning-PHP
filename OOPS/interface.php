<?php

use childClass as GlobalChildClass;

interface parent1{
    function calc($a, $b);
}

interface parent2{
    function sub($c, $d);
}

class childClass implements parent1, parent2{
    public function calc($a, $b){
        echo $a*$b;
    }

    public function sub($a, $b){
        echo $a-$b;
    }
}

$myObj = new childClass();

$myObj->calc(3,5);
echo "<br>";
$myObj->sub(40, 10);



// Interfaces vs. Abstract Classes

// Interface are similar to abstract classes. The difference between interfaces and abstract classes are:

//     Interfaces cannot have properties, while abstract classes can
//     All interface methods must be public, while abstract class methods is public or protected
//     All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
//     Classes can implement an interface while inheriting from another class at the same time


//parameter should be same as in interface otherwise error will throw.
