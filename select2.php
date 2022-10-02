<?php
 include ("connect db with mysqli.php");

if(isset($_GET['id']))
 {
 $a= $_GET['id'];
 $del= "DELETE from profile where id= '$a'";
 $remove= mysqli_query($connect,$del) or die("Could not delete".mysqli_error($connect));
 
 }


//Select Query 
$sql = mysqli_query($connect,"SELECT * FROM profile order by id desc") or die ("Could Not Select profile".mysqli_error($connect));
		
		$count = 0;//$count is used to identify the first value
		//check if there is something in the table
		if(mysqli_num_rows($sql)>$count){
			//fetch each array
		while($row= mysqli_fetch_assoc($sql))
		
		{
			//select whatever is in the table
			$id[] = $row["id"];
			$surname[] = $row["surname"];
			$firstname[] = $row["firstname"];
			
			$count++;
		}
		}
		$sn= 1;
		

		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript" src="jquery-2.1.1.min.js"></script>


</head>

<body>

<table width="800" border="1" align="center">
  <tr>
    <td width="85">SN</td>
    <td width="496">Name</td>
    <td width="114">&nbsp;</td>
    <td width="87">&nbsp;</td>
	<td></td>
  </tr>
  <?php for($s=0; $s<$count;$s++) {?>
  <tr>
    <td><?php echo $sn++ ?></td>
    <td><?php echo $surname[$s].' '. $firstname[$s] ?></td>
    <td><a href="update2.php?id=<?php echo $id[$s]?>">Edit</a></td>
    <td ><a href="select2.php?id=<?php echo $id[$s]?>">Delete</a></td>

	<td><a href="view2_mysqli.php?id=<?php echo $id[$s]?>">View</a></td>
  </tr>
  <?php }?>
</table>

</body>
</html>
