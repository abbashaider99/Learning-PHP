 <?php

 trait hello{
    public function sayhello(){
        echo "Hello everyone\n";
    }
    public function sayhi(){
        echo "Hi everyone\n";
    }
 }

 trait bye{
    public function bye(){
        echo "Bye everyone\n";
    }
 }

 class base2{
    use hello;
 }

 class base3{
    use hello, bye;
 }


 $test = new base2();
 $test->sayhello();


 $test1 = new base3();
 $test1->sayhello();
 $test1->sayhi();
 $test1->bye();