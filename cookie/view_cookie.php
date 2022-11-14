<?php

echo "Cookie value: ".$_COOKIE['user'];


//delete cookie

setcookie('user', "", time()-(86400), "/");

?>