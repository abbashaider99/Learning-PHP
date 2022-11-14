<?php

function add($a, $b)
{
       return $a+$b;
    // echo $a + $b;
}

echo add(8, 2);  //parameter should be same


//if we dont that value will be passed or not
function subs($c, $d=4)
{
    //    return $c+$d;
    echo $c - $d;
}

subs(8);  //parameter should be same


//--------------Scope of function-----------


$x = 10; 
function addfun(){
    global $x;  //to use out of scope variable we've to use global keyword
    echo "<br>";
    echo "Before updating the global variable: ".$x;
    $x = 20; //We're able to update this value because we put the global keywords before $x
}

addfun();
echo "<br>";
echo "After updating the global variable: ".$x;
