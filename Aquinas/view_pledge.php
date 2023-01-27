<?php
include ("connect1.php");
//get the transfered ID
$a= $_GET['id'];

//select a particular profile
$sql=mysqli_query($connect1, "SELECT * FROM member where id='$a' ") or
die("Could Not Select ".mysqli_error ($connect1));
if(mysqli_num_rows($sql)) {
    while($row=mysqli_fetch_assoc($sql))

    {
$id= $row["id"];
$name= $row["membername"];
$zone= $row["memberzone"];
$address= $row["memberadd"];
$phone= $row["memberphone"];
$email= $row["memberemail"];
$member_id= $row["membership_no"];
$date= date('jS M,Y',strtotime( $row["date"]));
//echo $date;


    }
}

//select info of member from pledge table

$sql2=mysqli_query($connect1, "SELECT * FROM pledge where memberid='$a'  order by id desc ") or
die("Could Not Select ".mysqli_error ($connect1));
$count=0;
if(mysqli_num_rows($sql2)>$count ) 
{
    while($row=mysqli_fetch_assoc($sql2))

    {
$id2[]= $row["id"];
$memberid[]= $row["memberid"];
$projectid[]= $row["projectid"];
$amount[]= $row["amount"];
$project_date[]= date('jS M Y',strtotime( $row["project_date"]));
$count++;


    }
}

$sn=1;
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
   <h2> Pledges made by <?php echo $name ?></h2>
<table width= "800" border="1" align="centre"> 
<tr>
<td width= "100">SN</td>
<td width= "100">Project Name</td>
<td width= "150">Amount Pledged </td>
<td width= "100">date </td>

</tr>
<?php for($x=0;$x<$count; $x++) {?>
<tr>
<td><?php echo $sn++ ?></td>
<td><?php $projectid[$x] ?>
<?php 
//selecting to get the name of the project
$sql3=mysqli_query($connect1, "SELECT * FROM project where id='$projectid[$x]' ") or
die("Could Not Select ".mysqli_error ($connect1));
if(mysqli_num_rows($sql3)) {
    while($row=mysqli_fetch_assoc($sql3))

    {
$id= $row["id"];
$projectname= $row["projectname"];
echo $projectname;
    }
}

?>

</td>
<td><?php echo $amount[$x] ?></td>
<td><?php echo $project_date [$x]?></td>
<td><a href="makepay?id=<?php echo $id2[$x] ?>&member_id=<?php echo $a?>"> make payment</a></td>
</tr>
<?php }?>
</table>

</body>
</html>