<?php
include "connect1.php";
if(isset($_POST['submit']))
{
    $project= $_POST['projectname'];
    $sign= mysqli_query ($connect1, "insert into project (projectname) values('$project')")  or die('could not insert'.mysqli_error($connect));
            if($sign) {echo 'project created';}

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
        <div class="col">Create project<input type="text" name="projectname"></div>
        <div class="col"><input type="submit" name="submit" class="btn btn-primary"></div>
        </form>
    </div>
    
</body>
</html>