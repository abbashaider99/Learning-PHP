<?php
// error_reporting(0);

// echo '<pre>';
// print_r($_GET);
if (isset($_GET['Add'])) {
    $num1 = $_POST["Num1"];
    $num2 = $_POST["Num2"];
    echo '<pre>';
    print_r($_GET);
}

?>


<h1>Addition</h1>

<form action="" method="get">
    Number 1: <input type="number" name="Num1" placeholder="Enter first number" /><br>
    Number 2: <input type="number" name="Num2" placeholder="Enter second number" /><br>
    <input type="submit" name="Add" value="ADD NOW">
</form>