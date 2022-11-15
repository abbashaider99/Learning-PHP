<?php

 trait mytrait1{
    public function sayhi(){
        echo "Hello from Trait1";
    }
 }

 trait mytrait2{
    public function sayhi(){
        echo "Hello from Trait2";
    }
 }

 class mybase1{
    use mytrait1, mytrait2{
        mybase1::sayhi instanceof mytrait2;
    }
 }


 $myobj2 = new mybase1();
 $myobj2->sayhi();
