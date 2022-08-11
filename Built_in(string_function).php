<?php

	//this counts the no of characters including space.
	
	$jerry= "obi is a boy. he goes to school every day and fights daily";
	echo strlen($jerry).'<p>';
	

	
	///this reduces the no of characters to displaced
	
	$jerry= "obi is a boy. he goes to school every day and fights daily";
	echo substr($jerry,0,20); echo '<p>';
	
	
	
	
	/// this converts the value of the variable to array

	$jerry= "obi is a boy. he goes to school every day and fights daily";
	$a= str_split($jerry,3);
	print_r($a);
	echo '<p>';
	
	//converts the first character of the value to capital letter
	
	$jerry= "obi is a boy. he goes to school every day and fights daily";
	echo ucfirst($jerry); echo '<p>';
	
	
	
	//converts the first character of each word to capital letter
	
	$jerry= "obi is a boy. he goes to school every day and fight daily";
	echo ucwords($jerry); echo '<p>';
	
	// this converts the letters in capital to small letters

	$jerry= "Obi is A Boy. He Goes To School Every Day And Fights Daily";
	echo strtolower($jerry); echo '<p>';
	
	//this converts everything to capital
	$jerry= "obi is a boy. he goes to school every day and fights daily";
	echo strtoupper($jerry).'<p>';
	
	
	
	//allows you to apply line break or paragraph after a certian no of characters.
	$jerry= "obi is a boy. he goes to school every day and fight daily";
	echo wordwrap($jerry,4,"<p>"); echo '<p>';
	
	
	
	//harshing values
	$pass= 'EEDC';
	echo md5($pass); echo '<p>';
	
	
	
	// this shows the position of a letter in the values of a variabl
	$jerry= "obi is a boy. he goes to school every day and fight daily";
	echo strpos($jerry, "b"); echo '<p>';

	$chars = strtoupper(substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),0,4));
	echo $chars."<p>";
	
	
	/*$jerry= "obi is a boy. he goes to school every day and fight daily";
	echo strrpos($jerry, "t");*/
	

	$array = array('lastname','email','phone');
$get_str = implode("/", $array);
echo $get_str ; echo '<p>';


$str ='lastname|firstname|surname';
print_r(explode('|', $str)); echo '<p>';

//Strip whitespace (or other characters) from the end of a string
$tr= 'obinna /';
echo rtrim($tr,'/'); echo '<p>';

//Strips whitespace (or other characters) from the beginning and end of a string

$tr= '/- obinna -';
echo trim($tr,'/'.' '. '-'); echo '<p>';

//Strip whitespace (or other characters) from the beginning of a string
$tr= '/- obinna -';
echo ltrim($tr,'/-'); echo '<p>';


echo date('jS - M,Y');

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php  //echo car(30,30);?>
<?php
/*
for($a=0;$a<5;$a++)
{?>
<a href="#">beni</a>
<?php
}
*/
?>
&copy;<?php echo date("Y")?>
</body>
</html>
