<?php

class abc{
    public function first(){
        echo "This is the first function\n";
        return $this;
    }
    public function second(){
        echo "This is the second function\n";
        return $this;
    }
    public function third(){
        echo "This is the third function";
    }
}


$abc = new abc();
// $abc->first();
// $abc->second();
// $abc->third();

$abc->first()->second()->third();