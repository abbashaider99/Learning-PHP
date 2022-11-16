<?php

class abc{
public function  __construct(){
  echo "This is a constructor\n";
}
//--------We can construct and destruct function in creating the mysqli connection---------------!
/*
private $conn;
public function __construct()
{
    $this->conn = mysqli_connect();
}

public function insert(){
    echo "This function will use for inserting query";
}

public function __destruct(){
    mysqli_close($this->conn);
}


//End of creating the connection--- */


public function hello(){
    echo "Hello everyone\n";
}

public function __destruct()
{
    echo "This is destruct function";
}

}



$myabc = new abc();
$myabc->hello();
$myabc->hello();
$myabc->hello();

//destructor run after completing the task