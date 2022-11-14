<?php

if(isset($_FILES['image'])){
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";

    echo $file_name = $_FILES['image']['name'];
    echo $file_size = $_FILES['image']['size'];
    echo $file_type = $_FILES['image']['type'];
    echo $file_tmp = $_FILES['image']['tmp_name'];
   
    if(move_uploaded_file($file_tmp, "uploads/". $file_name)){
        $upload_status = "File uploaded success";
    }else{
        $upload_status = "Error! File not uploaded";
    }

}

?>


<html>  
<body>
    <h3><?php echo $upload_status ?></h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image"/><br><br>
        <input type="submit">
    </form>
</body>
</html>