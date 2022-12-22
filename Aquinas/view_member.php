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
<td width="81">ID </td>
<td width= "80">Member Name</td>
<td width= "100">Member Zone</td>
<td width= "150">Adress </td>
<td width= "180">Phone No</td>
<td width= "100">Email Address </td>
<td width= "100">date </td>

</tr>
<tr>
<td><?php echo $member_id ?></td>
<td><?php echo $name ?></td>
<td><?php echo $zone ?></td>
<td><?php echo $address?></td>
<td><?php echo $phone ?></td>
<td><?php echo $email ?></td>
<td><?php echo $date ?></td>

</tr>

</table>

</body>
</html>