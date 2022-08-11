<?php echo 'Nkiruka'.'<p>';
$name='Peace'; //string
echo gettype($name).'<p>';

$age= 70; //Integer 
echo $age."<p>";

$age= 30.2; //float
	
$state= array('Abia', 'Anambra', 'Enugu');
echo $state [0].'<p>'; //call only Abia
foreach($state as $a) { echo $a. '<br>';} //called all using loop

$b= NULL; //Special type

$food= "Rice";
$$food= "Meat";
$$$food= "Bean";
//echo $food." and ".$$food. '<p>';
echo $Rice . '<p>';
echo $Meat. '<p>';
//echo $Rice. '.$Meat;

//constant 
$a= 30; //variable can chnage
$a+= 10;
echo $a;

define("school", "UNN"); // Constant does not chnage
echo school;

$fname= "Nkiru"; #global variable
$name= "Oti";
function name()
{ $middlename= "Pep"; #local variable 
 global $fname, $name;
 echo $fname." ".$name.' '.$middlename;

}

name();
?> 

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php name()?>
</body>
</html>