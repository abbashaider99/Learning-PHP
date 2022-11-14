<?php

//indexed array
$arr = array(10, 20, 30);

echo '<pre>';
print_r($arr);

//print with the help of foreach loop
foreach ($arr as $mylist) {
    echo $mylist;
    echo '<br>';
}


//print the index numbers
foreach ($arr as $mykey => $val) {
    echo $mykey;
    echo '<br>';
}

// ------Associative array-----------

$arr1 = array("name" => "Abbas", "city" => "Delhi");
echo "<pre>";
print_r($arr1);

echo $arr1['city'];


//Multidimensional array

$arr2 = array(
    "abbas" => array(
        "id" => "4223",
        "class" => "MCA",
        "pata" => "Delhi"
    ),
    "raza" => array(
        "id" => "43543",
        "kaktsha" => "BBA",
        "address" => "Mumbai",
    ),
    "john" => array(
        "Sr.No." => 25,
        "class" => "MBA",
        "city" => "Noida"
    )
);

echo "<pre>";
print_r($arr2);


print_r($arr2['raza']['address']);

foreach ($arr2 as $name => $details) {
    echo $name . " and " . $details;
}


$arraynum = array(21, 385, 23, 345, 34);

//sorting the array
// sort($arraynum);

//sort in reverse order
// ksort($arraynum);


//count in the array
echo "<br>";
echo "Count of complete array: ".count($arraynum);
echo "<br>";
print_r($arraynum);

//select the city

$arrCities = array("Mumbai", "Delhi", "Noida");
sort($arrCities); 
?>

<select>
  <option>Select City</option>
    <?php 
    foreach($arrCities as $city){
    echo "<option> $city </option>";
    }
    ?>
  </option>
</select>
<br><br>



<?php

//while loop

for($k=0; $k<count($arrCities); $k++){
   echo $arrCities[$k];
   echo "<br>";
}

?>