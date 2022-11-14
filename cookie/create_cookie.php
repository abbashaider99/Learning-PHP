<?php

$cookie_name = "user";
$cookie_value = "abbas";

setcookie($cookie_name, $cookie_value, time()+ (86400), "/",);



?>

<h2>
    <?php
    if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie is not set";
    }else{
        echo $_COOKIE[$cookie_name];
        echo "Cookie has been set";
    }
    
    ?>
</h2>