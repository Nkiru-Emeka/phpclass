<?php
include ("connect1.php");


$a= $_GET['id']; //ID of payment

//selection to get thepayment
$sqlz= mysqli_query($connect1, "SELECT * FROM payment where id= '$a'") or die 
("couldnt Not pledge".mysqli_error($connect1));
if(mysqli_num_rows($sqlz)) {
    //fetch each value
    while($row= mysqli_fetch_assoc($sqlz))

    {
        //select whatever is in the table
        $idz = $row ["id"];
        $amount_paid = $row ["amount_paid"];
        $payment_date = $row ["payment_date"];
       
    }

}

if(isset($_POST['submit']))
{
    $paid= $_POST['amount_paid'];
    $date_payment= $_POST['payment_date'];
    

    $insert= mysqli_query($connect1, "update payment  set amount_paid='$paid',  payment_date='$date_payment' where id='$a'")
     or die ('could mot update'.mysqli_error($connect1));
    if ($insert) {echo 'payment updated succefully';}
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
    <input type="text" name="amount_paid" placeholder="Enter Amount" value="<?php echo $amount_paid?>">
    <p>Date of Payment <input type="date" name="payment_date"  value="<?php echo $payment_date ?>"></p>
    <p><input type="submit" name="submit" value="submit" ></p>
   </form>
    
</body>
</html>