<?php
include ("connect1.php");
//delete
if(isset ($_GET['id']))
{
    $a= $_GET['id'];
    $del= "DELETE from member where id= '$a'";
    $remove= mysqli_query($connect1, $del) or die ("Could not delete".mysqli_error($connect1));
}

$z= $_GET['zoneid'];
//selection to get the name of the zone with id=$z
$sqlz= mysqli_query($connect1, "SELECT * FROM zone where id= '$z'") or die 
("couldnt Not Selectzone".mysqli_error($connect1));
if(mysqli_num_rows($sqlz)) {
    //fetch each value
    while($row= mysqli_fetch_assoc($sqlz))

    {
        //select whatever is in the table
        $idz = $row ["id"];
        $memberzonez = $row ["name"];
       
    }

}




//select query for member under each zone
$sql= mysqli_query($connect1, "SELECT * FROM member where status='active' and memberzone='$memberzonez' order by id desc") or die 
("couldnt Not Selectzone".mysqli_error($connect1));

$count = 0; //count is used to identify the first value
//check if there is something in the table
if(mysqli_num_rows($sql)>$count) {
    //fetch each array
    while($row= mysqli_fetch_assoc($sql))

    {
        //select whatever is in the table
        $id[] = $row ["id"];
        $membername[] = $row ["membername"];
        $memberzone[] = $row ["memberzone"];
        $memberadd[] = $row ["memberadd"];
        $memberphone[] = $row ["memberphone"];
        $memberemail[] = $row ["memberemail"];
        $membership_no[] = $row ["membership_no"];

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
    <table width= "800"  align="centre" height="40">
        <tr>
            <td>List of members in <?php echo $memberzonez ?></td>
        </tr>
    </table>
    <table width= "800" border="1" align="centre"> 
        <tr>
            <td width="40">SN</td>
            <td width="85">Member Name </td>
            <td width="85">Pledges Made</td>
            
            </tr>
        <?php for($s=0; $s<$count;$s++) {?>
        <tr>
            <td><?php echo $sn++ ?></td>
            <td><?php echo $membername[$s] ?></td>
            
            <td><a href="view_pledge.php?id=<?php echo $id[$s] ?>">View Pledge </a></td>
           
        </tr>
        <?php  } ?>
    </table>
    
</body>
</html>