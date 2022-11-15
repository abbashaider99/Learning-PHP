<?php

 trait mytrait{
    public function sayhi(){
        echo "Hello from Trait";
    }
 }

 class mybase{
    public function sayhi(){
        echo "hello from base class";
    }
 }

 class mychild extends base{
    use mytrait;
    public function sayhi()
    {
        echo "hello from child class";
    }
 }

 $myChildObj = new mychild();
 $myChildObj->sayhello();
