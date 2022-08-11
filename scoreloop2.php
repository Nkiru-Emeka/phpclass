<?php

//numeric array
$score= array(200,30,40,500,'dona','Emeka');
echo $score[0].'<p>';
foreach($score as $a) {echo $a.'<br>';}
echo '<p>';
foreach($score as $a=>$v) {echo $a.'=> '.$v. '<br>';}
echo '<p>';
print_r($score);
 
 
 
 
 //Associate array
$salaries = array( "chime" => 2000, "rita" => 1000, "grace" => 500);
echo $salaries['chime'].'<p>';
 foreach($salaries as $v) {echo $v. '<br>';}
 echo '<p>';
 foreach($salaries as $a=>$v) {echo $a.'=> '.$v. '<br>';}




//example of array count.
	$score= array(200,30,40,500);
	echo count ($score).'<p>';
	echo array_sum($score).'<p>';
	
	
	
//example of array sort	
	$score= array(200,30,40,500);
	sort($score);
	foreach ($score as $value) {echo $value.' ';}
	echo '<br/>';
	
	$score= array(200,30,40,500);
	rsort($score);
	foreach ($score as $value) {echo $value.'<br>';}
	
	
	//Multi-dimensional Array with integar

	$v = array("one"=>array(1,2,3,4,5),
				"two"=>array(6,7,8,9,10),
				"three"=>array(11,12,13,14,15)
				);
	//print_r($v);
	echo '<p>';			
	echo $v["three"][2];
	echo '<p>';
	echo $v["two"][2];
	echo '<p>';
	echo $v["three"][1];
	echo '<p>';
	echo "-------------------------------------------"."<p>";
	foreach ($v['three'] as $z) {echo $z.'<br> '; }
	//echo '<p>';
echo "-------------------------------------------"."<p>";
	foreach($v as $value) {
	foreach ($value as $m){echo $m."<br/>";}
	}
	
	 
	
	$name= array('Onyie','Mildred','Amaka');
	$sco= array(0=>array('Eng'=>30,'maths'=>100,'Agr'=>50),
				1=>array('Eng'=>60,'maths'=>40,'Agr'=>100),
				2=>array('Eng'=>50,'maths'=>20,'Agr'=>80)
				);
				echo $sco[0]['maths'].'<p>';
				echo array_sum($sco[0]).'<p>';
		$average= array(array_sum($sco[0])/3,array_sum($sco[1])/3,array_sum($sco[2])/3);
	
		/*$grade= 71;
				if(grade>=70){ echo 'A';}
				elseif($grade>=60){ echo 'B';}
				elseif($grade>=50){ echo 'C';}
				elseif($grade>=45){ echo 'D';}
				else{echo'F';}*/
	
	
	//using for each in Multi-dimensional Array with integar
	/*$v = array("one"=>array(1,2,3,4,5),
			   	"two"=>array(6,7,8,9,10),
			   "three"=>array(11,12,13,14,16)
			  );*/
	//foreach($v as $value) {foreach ($value as $m){echo $m."<br/>";}}
	
	
	
	
	//multi-dimensional array with string
	//$v = array("one"=>array("vex"=>"ben","love"=>"peace"),"two"=>array(6,7,8,9,10),"three"=>array(11,12,13,14,15));
	//echo $v["one"]["vex"];echo $v["two"][2];echo $v["three"][1];
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="100%" border="1">
	<tr>
    	<td>Names</td>
        <td>English</td>
        <td>Maths</td>
        <td>Agric</td>
        <td>Average</td>
        <td>Grade</td>
    </tr>
    
    <tr>
    	<td><?php echo $name[0]?></td>
        <td><?php echo $sco[0]['Eng']?></td>
        <td><?php echo $sco[0]['maths']?></td>
        <td><?php echo $sco[0]['Agr']?></td>
        <td><?php echo $average[0]?></td>
        <td><?php if($average[0]>=70){ echo 'A';}
				elseif($average[0]>=60){ echo 'B';}
				elseif($average[0]>=50){ echo 'C';}
				elseif($average[0]>=45){ echo 'D';}
				else{echo'F';}?></td>
    </tr>
    
     <tr>
    	<td><?php echo $name[1]?></td>
        <td><?php echo $sco[1]['Eng']?></td>
        <td><?php echo $sco[1]['maths']?></td>
        <td><?php echo $sco[1]['Agr']?></td>
        <td><?php echo $average[1]?></td>
        <td><?php if($average[1]>=70){ echo 'A';}
				elseif($average[1]>=60){ echo 'B';}
				elseif($average[1]>=50){ echo 'C';}
				elseif($average[1]>=45){ echo 'D';}
				else{echo'F';}?></td>
    </tr>
    
     <tr>
    	<td><?php echo $name[2]?></td>
        <td><?php echo $sco[2]['Eng']?></td>
        <td><?php echo $sco[2]['maths']?></td>
        <td><?php echo $sco[2]['Agr']?></td>
        <td><?php echo $average[2]?></td>
        <td><?php if($average[2]>=70){ echo 'A';}
				elseif($average[2]>=60){ echo 'B';}
				elseif($average[2]>=50){ echo 'C';}
				elseif($average[2]>=45){ echo 'D';}
				else{echo'F';}?></td>
    </tr>
    
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
    
</table>

</body>
</html>
