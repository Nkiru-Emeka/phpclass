<?php 
$name= array('Vin', 'Gozie', 'Amara', 'Favou');
$english= array(81,75,70,90);
$maths= array(50,89,70,20);
$igbo= array(20,30,59,70);

$count= count($name);
$sn=1;
$subject= array(100,40,70,65);
$number= count($subject);
$grade= 70;



?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Students Exam</title>
</head>

<body>
	<table width="500" border="1">
		<tr>
			<td width="113">S/N</td>
			<td width="113">Name</td>
			<td width="377">English</td>
			<td width="377">Maths</td>
			<td width="377">Igbo</td>
			
			<td width="377">Avg</td>
			<td width="377">Grade</td>
		
		</tr>
		<?php for($a=0; $a<$count;$a++) {?>
		<tr>
			<td width="113"><?php echo $sn++ ?></td>
			<td width="113"><?php echo $name[$a]; ?></td>
			<td width="377"><?php echo $english[$a]; ?></td>
			<td width="377"><?php echo $maths[$a]; ?></td>
			<td width="377"><?php echo $subject[$a]; ?></td>
		</tr>
		<?php }?>	
</table>
	<?php for($grade=70; $grade<=100; $grade++){
		{ echo 'A';}
		elseif($grade>=60){ echo 'B';}
		elseif($grade>=50){ echo 'C';}
		elseif($grade>=45){ echo 'D';}
		else{echo'F';}
	}

	 <form action="" method="post">
		 <select>
		 <option selected="selected">Year</option>
			 <?php for($b=2017; $b<=2030; $b++) {?>
			 <option value="<?php echo $b;?>"><?php echo $b;?></option>
			 <?php }?>
		 </select>
		<select>
		 <option selected="selected">State</option>
			<?php for ($c=0; $c<$number;$c++) {?>
			<option><?php echo $subject[$c];?></option>
		 <?php }?>
		 </select>
		
		</form>
 

</body>
</html>