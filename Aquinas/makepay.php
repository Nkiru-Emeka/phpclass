<?php
include ("connect1.php");


$a= $_GET['id']; $member_id= $_GET['member_id'];
//echo $a,$member_id; 
//selection to get the name of the zone with id=$z
$sqlz= mysqli_query($connect1, "SELECT * FROM pledge where id= '$a'") or die 
("couldnt Not pledge".mysqli_error($connect1));
if(mysqli_num_rows($sqlz)) {
    //fetch each value
    while($row= mysqli_fetch_assoc($sqlz))

    {
        //select whatever is in the table
        $idz = $row ["id"];
        $amount_pledge = $row ["amount"];
        $pro_date = $row ["project_date"];
       
    }

}

if(isset($_POST['submit']))
{
    $paid= $_POST['amount_paid'];
    $date_payment= $_POST['payment_date'];
    

    $insert= mysqli_query($connect1, "insert into payment 
    (memberid, pledgeid, amount_pledged, amount_paid, project_date, payment_date)
    values ('$member_id', '$a', '$amount_pledge', '$paid', '$pro_date', '$date_payment')") or die ('could mot 
    insert'.mysqli_error($connect1));
    if ($insert) {echo 'payment inserted succefully';}
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
   <form method="post">
    <input type="text" name="amount_paid" placeholder="Enter Amount">
    <p>Date of Payment <input type="date" name="payment_date" ></p>
    <p><input type="submit" name="submit" value="submit" ></p>
   </form>
    
</body>
</html>