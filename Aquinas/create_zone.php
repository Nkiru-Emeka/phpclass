<?php
include "connect1.php";
if(isset($_POST['submit']))
{
    $zone= $_POST['name'];
    $sign= mysqli_query ($connect1, "insert into zone (name) values('$zone')")  or die('could not insert'.mysqli_error($connect));
            if($sign) {echo 'Zone created successfully';}

}

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Welecome to St Thomas Aquinas Chaplaincy Portal
   <container 
    <div class="row">
        <form method="post">
        <div class="col">Create Zone<input type="text" name="name"></div>
        <div class="col"><input type="submit" name="submit" class="btn btn-primary"></div>
        </form>
    </div>
    
</body>
</html>