<?php
session_start();

// print_r($_SESSION);

?>

<h2><?php 
if(isset($_SESSION['username'])){
    echo "Welcome back! ".$_SESSION['username']; 
}else{
    echo "Sorry, You have been logout!";
}


?></h2>