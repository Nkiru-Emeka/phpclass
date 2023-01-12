<?php
include ("connect1.php");

if(isset ($_GET['id']))
{
    $a= $_GET['id'];
    $del= "DELETE from project where id= '$a'";
    $remove= mysqli_query($connect, $del) or die ("Could not delete".mysqli_error($connect1));
}

//select query
$sql= mysqli_query($connect1, "SELECT * FROM project order by id desc") or die 
("couldnt Not Selectzone".mysqli_error($connect));

$count = 0; //count is used to identify the first value
//check if there is something in the table
if(mysqli_num_rows($sql)>$count) {
    //fetch each array
    while($row= mysqli_fetch_assoc($sql))

    {
        //select whatever is in the table
        $id[] = $row ["id"];
        $project[] = $row ["projectname"];
        

        $count++;

    }

}
$sn= 1;
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
    <table width= "800" border="1" align="centre"> 
        <tr>
            <td width="40">SN</td>
            <td width="85">Name of project </td>
            <td width="85">Edit</td>
            <td width="85">Delete</td>
            </tr>
        <?php for($s=0; $s<$count;$s++) {?>
        <tr>
            <td><?php echo $sn++ ?></td>
            <td><?php echo $project[$s] ?></td>
            
            <td><a href="project_edit.php?id=<?php echo $id[$s] ?>">Edit</a></td>
            <td onclick="return confirm ('Are you sure to delete?')"><a href="project_edit.php?id=<?php echo $id[$s]?>">Delete</a></td>
            
        </tr>
        <?php  } ?>
    </table>
    
</body>
</html>