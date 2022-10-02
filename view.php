<?php
include ("connect.php");
//get the transfered ID
$a= $_GET['id'];

//select a particular profile
$sql=mysqli_query($connect, "SELECT * FROM pegant where id='$a' ") or
die("Could Not Select ".mysqli_error ($connect));
if(mysqli_num_rows($sql)) {
    while($row=mysqli_fetch_assoc($sql))

    {
$id= $row["id"];
$teller= $row["teller"];
$dop= $row["dop"];
$bankname= $row["bankname"];
$firstname= $row["firstname"];
$middlename= $row["middlename"];
$lastname= $row["lastname"];
$dob= $row["dob"];
$mstatus= $row["mstatus"];
$address1= $row["address1"];

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
<td width="81">%nbps;</td>
<td width= "80">Teller No</td>
<td width= "100">Bank Location</td>
<td width= "150">firstname</td>
<td width= "180">middlename</td>
<td width= "100">lastname</td>
<td width= "170">Marital Status</td>
<td width= "300">Name</td>
</tr>
<tr>
<td></td>
<td><?php echo $teller ?></td>
<td><?php echo $bankname ?></td>
<td><?php echo $firstname?></td>
<td><?php echo $middlename ?></td>
<td><?php echo $lastname ?></td>
<td><?php echo $mstatus?></td>
<td><?php echo $firstname. ' '. $middlename. ' '. $lastname ?></td>
</tr>

</table>

</body>
</html>