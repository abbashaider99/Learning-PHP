<?php

class base{
    protected $name;
    function __construct($n)
    {
        $this->name = $n;
    }

    protected function show(){
        echo "Your Name : ".$this->name;
    }
}

class derived extends base{
    public function get(){
        echo "Your Name : ".$this->name."<br>";
    }
}

$b1 = new derived("Abbas");
$b1->name = "Vian";
$b1->get();


//Public -> can access from anywhere.
//Protected -> can access only within in the base class or derived class (inherited class).
//Private -> can access only within the class. not even derived class.
