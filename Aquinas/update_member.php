<?php
include ("connect1.php");

$sqlA = "SELECT * FROM zone order by name";
$resultA = mysqli_query($connect1,$sqlA) or die("Could Not Selcte".mysqli_error($connect1));
$count=0;
if(mysqli_num_rows($resultA)>$count){
    while($row=mysqli_fetch_assoc($resultA))
    {
        $idA[] = $row["id"];
        $zone[] = $row ["name"];
        $count++;

    }
}

$eze = $_GET['id'];
// select that particular one
$sql = "SELECT * FROM member where id='$eze'";
$result = mysqli_query($connect1,$sql) or die("Could Not Selcte".mysqli_error($connect1));
if(mysqli_num_rows($result)){
    while($row=mysqli_fetch_assoc($result))
    {
        $id = $row["id"];
        $membername = $row ["membername"];
        $memberzone = $row ["memberzone"];
        $memberadd = $row ["memberadd"];
        $memberphone = $row ["memberphone"];
        $memberemail = $row ["memberemail"];
       

    }
}
if (isset($_POST['submit'])){
$a= mysqli_real_escape_string($connect1, $_POST['membername']);
$b= mysqli_real_escape_string($connect1, $_POST['memberzone']);
$c= mysqli_real_escape_string($connect1, $_POST['memberadd']);
$d= mysqli_real_escape_string($connect1, $_POST['memberphone']);
$e= mysqli_real_escape_string($connect1, $_POST['memberemail']);

	/*
    $g= $_POST['dob'];
	$h= $_POST['mstatus'];
	$i= $_POST['address1'];
	$j= $_POST['address2'];
	$k= $_POST['state'];
	$l= $_POST['nok'];
	$m= $_POST['nokr'];
	$n= $_POST['occupation'];
	$o= $_POST['address_nok'];
	$p= $_POST['phone_nok'];
	$q= $_POST['about'];
	$r= $_POST['agree'];
	*/

	$update = mysqli_query($connect1, "update member
    set membername = '$a',
    memberzone = '$b',
    memberadd = '$c', 
    memberphone = '$d', 
    memberemail = '$e'
     
    where id = '$eze'") or die ('could mot update'.mysqli_error($connect1));
    if($update) {echo 'succeful';}
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
    St Thomas Aquimas Members 
   <container 
    <div class="row">
        <form method="post">
        <div class="col">Update name<input type="text" name="membername" value="<?php echo $membername ?>"></div>
        <div class="col">Zone <select name="memberzone">
            <option selected><?php echo $memberzone ?></option>
            <?php for($z=0;$z<$count;$z++){?>
            <option><?php echo $zone[$z]?></option>
            <?php }?>
        </select></div>
     

        <div class="col">Update Address <input type="text" name="memberadd" value="<?php echo $memberadd ?>"></div>
        <div class="col">Update Phone <input type="text" name="memberphone" value="<?php echo $memberphone ?>"></div>
        <div class="col">Update email <input type="text" name="memberemail" value="<?php echo $memberemail ?>"></div>
      <div class="col"><input type="submit" name="submit" class="btn btn-primary" value="Edit"></div>
        </form>
    </div>
    
</body>
</html>