<?php 
$name= array('Ada', 'Neze', 'Lucy',);
$sco= array(0=>array('Eng'=>30,'maths'=>100,'Agr'=>50),
				1=>array('Eng'=>60,'maths'=>40,'Agr'=>100),
				2=>array('Eng'=>50,'maths'=>20,'Agr'=>80)
				);
				echo $sco[0]['maths'].'<p>';
				echo array_sum($sco[0]).'<p>';
		$average= array(array_sum($sco[0])/3,array_sum($sco[1])/3,array_sum($sco[2])/3);
$count= count($name);
$sn=1;



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
			<td width="377">English</td>
			<td width="377">Maths</td>
			<td width="377">Agric</td>
			<td width="377">Average</td>
		
		</tr>
		<?php for($a=0; $a<$count;$a++) {?>
		<tr>
			<td width="113"><?php echo $sn++ ?></td>
			<td width="113"><?php echo $name[$a]; ?></td>
			<td width="377"><?php echo $English[$a]; ?></td>
			<td width="377"><?php echo $[$a]; ?></td>
			<td width="377"><?php echo $state[$a]; ?></td>
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
			<option><?php echo $state[$c];?></option>
		 <?php }?>
		 </select>
		
		</form>
 

</body>
</html>