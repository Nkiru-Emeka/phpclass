<?php
if(isset($_POST["submit"])){
	$a= $_POST["sname"];
	$b= $_POST["fname"];
	$c= $_FILES["pic"] ["name"];
	$d= "picture/".$c;
	move_uploaded_file($_FILES['pic'] ['tmp_name'], $d);
	echo $a. ' '.$b;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="" enctype="multipart/form-data">
	<input type='text' name="sname" placeholder="Surname" value="<?php if(isset($a)) echo $a ?>"/><p></p>
	<input type="text" name="fname" placeholder="Firstname"/><p></p>
	<input type="file" name="pic"/>
	<p>
	
		<input type="submit" value="Submt" name="submit"/>
	</p>
</form>
<img src="<?php if(isset($d)) {echo $d ;}?>">
</body>
</html>