<?php
include ("connect1.php");

$eze = $_GET['id'];
// select that particular one
$sql = "SELECT * FROM project where id='$eze'";
$result = mysqli_query($connect1,$sql) or die("Could Not Selcte".mysqli_error($connect1));
if(mysqli_num_rows($result)){
    while($row=mysqli_fetch_assoc($result))
    {
        $id = $row["id"];
        $project = $row["projectname"];

    }
}
if (isset($_POST['submit'])){
$a = $_POST['projectname'];
	//$b= $_POST['dop'];
	//$c= $_POST['bankname'];
	//$d= $_POST['firstname'];
	//$e= $_POST['middlename'];
	//$f= $_POST['lastname'];
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

	$update = mysqli_query($connect1, "update project set name = '$a' where id = '$eze'") or die ('could mot 
    insert'.mysqli_error($connect1));
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
    St Thomas Aquimas Zones
   <container 
    <div class="row">
        <form method="post">
        <div class="col">Edit project<input type="text" name="projectname" value="<?php echo $project ?>"></div>
        <div class="col"><input type="submit" name="submit" class="btn btn-primary"></div>
        </form>
    </div>
    
</body>
</html>