<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Username: <input type="text" name="username" placeholder="Username"/><br>
        Password: <input type="text" name="password" placeholder="Password"/><br>
        <input type="submit" name="submit" />
    </form>
 
    <?php
    if(isset($_POST['submit'])){
        echo $_POST['username'];
        echo "<br>";
        echo $_POST['password'];
    }
    ?>

</body>
</html> 