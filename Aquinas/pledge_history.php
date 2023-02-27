<?php
include ("connect1.php");
//get the transfered ID



$a= $_GET['id'];  //ID of Pledge
$member_id= $_GET['member_id']; // ID of member
if(isset($_GET['paymentid'])){
$paymentid= $_GET['paymentid']; // ID of payment

    
    $erase= mysqli_query($connect1, "delete  FROM payment where id='$paymentid' ") or
    die("Could Not delete ".mysqli_error ($connect1));
    
    
    
    }


//select a particular profile
$sql=mysqli_query($connect1, "SELECT * FROM member where id='$member_id' ") or
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



//selecting amount paid for a particular pledge

//select info of member from pledge table

$sql3=mysqli_query($connect1, "SELECT * FROM payment where pledgeid='$a'   ") or
die("Could Not Select ".mysqli_error ($connect1));
$count3=0;
if(mysqli_num_rows($sql3)>$count3 ) 
{
    while($row=mysqli_fetch_assoc($sql3))

    {
$id3[]= $row["id"];
$memberid3[]= $row["memberid"];
$amount3[]= $row["amount_paid"];
$amount_pledged3[]= $row["amount_pledged"];
$payment_date3[]= date('jS M Y',strtotime( $row["payment_date"]));
$count3++;
     

    }
}
$sn3= 1;


// selecting to get the total of payments made

$sqlT=mysqli_query($connect1, "SELECT sum(amount_paid) as total FROM payment where pledgeid='$a'  ") or
die("Could Not Select ".mysqli_error ($connect1));
$countT=0;
if(mysqli_num_rows($sqlT)>$countT ) 
{
    while($row=mysqli_fetch_assoc($sqlT))

    {

$amountT= $row["total"];
$countT++;
    // echo $amountT;

    }
}




/////////////////////////////////////////////////////////

//selecting to get the ID of the pledge
$sql4=mysqli_query($connect1, "SELECT * FROM pledge where id='$a' ") or
die("Could Not Select ".mysqli_error ($connect1));
if(mysqli_num_rows($sql4)) {
    while($row=mysqli_fetch_assoc($sql4))

    {
$id4= $row["id"];
$projectid4= $row["projectid"];
$pledged4= $row["amount"];
    }
}

//selecting to get the name of the project
$sql5=mysqli_query($connect1, "SELECT * FROM project where id='$projectid4' ") or
die("Could Not Select ".mysqli_error ($connect1));
if(mysqli_num_rows($sql5)) {
    while($row=mysqli_fetch_assoc($sql5))

    {
$id5= $row["id"];
$projectname5= $row["projectname"];

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
   <h2> Pledges made by <?php echo $name ?></h2>
   <p>Amount pledged in <?php echo $projectname5 ?> is <?php echo $pledged4 ?></p>


<!-- table for amount paid -->

<div style="width:60%; height:auto; float:left;margin-left:2%;">
<table width= "100%" border="1" align="centre"> 
<tr>
<td width= "100">SN</td>

<td width= "150">Amount paid </td>
<td width= "100">date of Payment </td>
<td width= "100">Edit </td>
<td width= "100">Delete </td>
</tr>
<?php for($i=0;$i<$count3; $i++) {?>
<tr>
<td><?php echo $sn3++ ?></td>

<td><?php echo $amount3[$i] ?></td>
<td><?php echo $payment_date3 [$i]?></td>
<td><a href="edit_makepay.php?id=<?php echo $id3[$i]?>">Edit</a></td>
<td onclick="return confirm('Do you wish to delete')"><a href="pledge_history?id=<?php echo $a ?>&member_id=<?php echo $id ?>&paymentid=<?php echo $id3[$i]?>">Delete</a></td>
</tr>
<?php }?>
</table>
<p></p>
<table width= "100%" border="1" align="centre">
    <tr>
        <td width= "143">Total Payment Made</td>
        <td width= "212"><?php echo $amountT ?></td>
        <td width= "100">Balance: </td>
        <td><?php echo $pledged4 - $amountT ?></td>
    </tr>
</table>

</div>

</body>
</html>