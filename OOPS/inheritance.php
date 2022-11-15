<?php
class employee{
    public $age;
    public $name;
    public $salary;
    function __construct($a, $n, $s)
    {
        $this->age = $a;
        $this->name = $n;
        $this->salary = $s;
    }

    function info(){
        echo "<h1>Employee Profile</h1>";
        echo "Employee Name : ".$this->name."<br>";
        echo "Employee Age : ".$this->age."<br>";
        echo "Employee Salary : ".$this->salary."<br>";
    }

}

//second class which will inherit the employee class

class manager extends employee{
    public $ta=1000;
    public $phone = 300;
    public $totalsalary;
    function info(){
        $this->totalsalary = $this->ta + $this->phone+$this->salary;
        echo "<h1>Manager Profile</h1>";
        echo "Manager Name : ".$this->name."<br>";
        echo "Manager Age : ".$this->age."<br>";
        echo "Manager Total Salary : ".$this->totalsalary."<br>";
    }
}


$e1 = new employee(23, "abbas", 30000);
$e2 = new manager(30, "Tapas", 45000);

$e1->info();
$e2->info();



