<?php 
$name= array('Vin', 'Gozie', 'Amara', 'Favou');
$score= array(81,75,70,90);
$count= count($name);
$sn=1;
$subject= array("English", "Maths", "Agric", "Igbo");
$number= count($subject);

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<table width="500" border="1">
		<tr>
			<td width="113">S/N</td>
			<td width="113">Name</td>
			<td width="377">Score</td>
			<td width="377">State</td>
			<td width="377">Maths</td>
			<td width="377">Agric</td>
			<td width="377">Igbo</td>
			<td width="377">Avg</td>
		
		</tr>
		<?php for($a=0; $a<$count;$a++) {?>
		<tr>
			<td width="113"><?php echo $sn++ ?></td>
			<td width="113"><?php echo $name[$a]; ?></td>
			<td width="377"><?php echo $score[$a]; ?></td>
			<td width="377"><?php echo $subject[$a]; ?></td>
		</tr>
		<?php }?>	
</table>
	

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