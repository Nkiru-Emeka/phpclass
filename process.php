<?php
if(isset($_POST["submit"])){
	$a= $_POST["sname"];
	$b= $_POST["fname"];
	$c= $_FILES["pic"] ["name"];
	$d= "picture/".$c;
	move_uploaded_file($_FILES['pic'] ['tmp_name'], $d);
	//echo $a. ' '.$b;

}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<table width="500" align="center" bgcolor="#EDCBCB">
	<tr>
		<td width="152">Firstname</td>
		<td width="336"><?php echo $a ?></td>
	</tr>
	
	<tr>
		<td>Surname</td>
		<td><?php echo $b ?></td>
	</tr>
	
	<tr>
		<td>Passport</td>
		<td><img src="<?php echo $d?>" width="100%" height="200"></td>
	</tr>
</table>
</body>
</html>