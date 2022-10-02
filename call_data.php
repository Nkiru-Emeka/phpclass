<?php
include ("connect.php");

if(isset ($_GET['id']))
{
    $a= $_GET['id'];
    $del= "DELETE from pegant where id= '$a'";
    $remove= mysqli_query($connect, $del) or die ("Could not delete".mysqli_error($connect));
}

//select query
$sql= mysqli_query($connect, "SELECT * FROM pegant order by id desc") or die 
("couldnt Not Selectpegant".mysqli_error($connect));

$count = 0; //count is used to identify the first value
//check if there is something in the table
if(mysqli_num_rows($sql)>$count) {
    //fetch each array
    while($row= mysqli_fetch_assoc($sql))

    {
        //select whatever is in the table
        $id[] = $row ["id"];
        $teller[] = $row ["teller"];
        $firstname[]= $row ["firstname"];
        $lastname[]= $row ["lastname"];

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
            <td width="85">SN</td>
            <td width="85">Teller No</td>
            <td width="450">Name</td>
            <td width="85"></td>
            <td width="85"></td>
            <td width="87"></td>
        </tr>
        <?php for($s=0; $s<$count;$s++) {?>
        <tr>
            <td><?php echo $sn++ ?></td>
            <td><?php echo $teller[$s] ?></td>
            <td><?php echo $lastname[$s]. ' '. $firstname[$s] ?></td>
            <td>Edit</td>
            <td onclick="return confirm ('Are you sure to delete?')"><a href="call_data.php?id=<?php echo $id[$s]?>">Delete</a></td>
            <td><a href="view.php?id=<?php echo $id[$s] ?>">view</a></td>
        </tr>
        <?php  } ?>
    </table>
    
</body>
</html>