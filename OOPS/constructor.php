<?php

class person{

    //default values.
    public $name;  // global variable
    public $age; // global varibale

    function __construct($n = "no name", $age=0)
    {
        $this->name = $n;
        $this->age = $age;   
    }

    function show(){
        echo $this->name." - ".$this->age."<br>";
    }
}
$p1 = new person();
$p2 = new person("abbas", 23);

// $p1->name = "abbas";
// $p1->age = 23;

$p1->show();
$p2->show();

