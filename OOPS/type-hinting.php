<?php
function fruits(array $myarr){
    foreach ($myarr as $names) {
     echo $names. "<br>";
    }
}

$test = ["Apple"];
fruits($test);
 
?>