<?php

class calculation
{
    public $a, $b, $c;

    function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}


$c = new calculation();

$c->a = 10;
$c->b = 20;

echo $c->sum();

//---------Creating second object-------
echo "<br>";

$d = new calculation();

$d->a = 45;
$d->b = 5;

echo $d->sub();
