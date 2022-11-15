<?php

class base1{
    protected static $name1 = "Abbas";

    public function show(){
        echo static::$name1;
        echo self::$name1;
    }
}

class derived1 extends base1{
    protected static $name1 = "Raza";
}

$test = new derived1();
$test->show();
