<?php
include ("connect.php");

//if(isset($_COOKIE["oka"]))$user=$_COOKIE["oka"];else header("location:login_mysqli_password varified.php");


//this type of setting cookie is used to give access to the page but //user can not perform a certain  task like comment without login in

/*
include ("connect db with mysqli.php");
if(isset($_COOKIE["oka"]))
{
	$cookie = $_COOKIE["oka"];
	$query2 = "select * from admin where username = '$cookie'";
	$result2 = mysqli_query($connect,$query2) or die(mysqli_error($connect));
	while($row=mysqli_fetch_assoc($result2))
	{
		$user = $row["username"];
		
	}
	
	//other codes can come here
	
	
}*/



//absulute value converts negative to positive;

	$a= -4;
	echo abs($a).'<p>';
	
	
	
	//square root of values.
	$b= 81;
	echo sqrt($b).'<p>';
	
	//it can still work like this.
	echo sqrt(81).'<p>';
	
	//raised to power/exponential
	echo pow(10,4).'<p>';
	
	//can still work this way
	$c= 10;
	echo pow($c,0).'<p>';
	

		//give u random numbers
		echo rand(100,10000000).'<p>';
		$chars = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),0,2);
		 $c= 'ESUT/'.date('Y').'/'.' MEC /'.rand(1000,2000).strtoupper($chars);
			echo $c.'<p>';
		
		
		//round is used for approximation
		$kas= 10.5673;
		echo round($kas).'<p>';
		echo round($kas,2).'<p>';
		//value of pi
		echo pi().'<p>';	
		
		 //floor is used to get the lowest value
		$kas= 10.9808;
		echo floor($kas).'<p>';	
		
		// ceil is used to round fraction up
		$kas= 10.1;
		echo ceil($kas).'<p>';
	
		
		
		
		//Almighty formular
		/*$b= -9;
	$a= 2;
	$c= 6;
	
	$d= pow($b,2);
	$e= 4*$a*$c;
	$f= $d-$e;
	$g= sqrt($f);
	$h= ($b*$g)/2*$a;
	echo $h;
	*/
/*
	$b= 9;
	$a= 2;
	$c= 6;
	$d= (-$b+sqrt(pow($b,2)-(4*$a*$c)))/2*$a;
	echo $d;
	*/	
	foreach (range(1, 150) as $number) {
		//to get reg numbers from 1-150 without 0 prefix
    //echo 'ESUT/'.date('Y').'/'.' MEC /'.$number.'<br>';
	
	////to get reg numbers from 1-150 with 0 prefix
	if($number<10){echo 'ESUT/'.date('Y').'/'.' MEC /'.'00'.$number.'<br>' ;}
	elseif($number>=10 && $number<100){echo 'ESUT/'.date('Y').'/'.' MEC /'.'0'.$number.'<br>' ;}
	else{echo 'ESUT/'.date('Y').'/'.' MEC /'.$number.'<br>';}
		//echo $number.'<br>';
}


echo '<p>';
foreach (range(0, 100,10) as $number) {
    echo $number.',';
}
echo '<p>';
foreach (range('a', 'i') as $letter) {
    echo $letter.'<p> ';
}
	
	
		
for ($i = 0; $i < 200; $i++) {
    $value = rand(100, 300);
	// to indicate even and odd numbers
    if ($value % 2 == 0) { 
        echo $value." is even </br>"; 
    } else { 
        echo $value." is odd </br>"; 
    }
	
	//to get all the values
	//echo $value."<p>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1><?php if(isset($user)) {echo $user. ' Welcome '; } ?></h1>
<a href="logout.php">Log out</a>

<?php if(isset($_COOKIE["oka"]))
{
	$cookie = $_COOKIE["oka"];
	$query2 = "select * from admin where username = '$cookie'";
	$result2 = mysqli_query($connect,$query2) or die(mysqli_error($connect));
	while($row=mysqli_fetch_assoc($result2))
	{
		$user = $row["username"];
		
	}
?>


<?php
	if(isset($_POST['submit'])){
		$a= $_POST['a'];
		$b= $_POST['b'];
		$c= $_POST['c'];
		$ans1= (-$b+ sqrt(pow($b,2)-(4*$a*$c)))/2*$a;
		$ans2= (-$b- sqrt(pow($b,2)-(4*$a*$c)))/2*$a;
		echo $ans1.' '.$ans2;
		
	}
	
}

else {
	echo 'Makke sure you log i touse this form';}
?>
<p>Almighty Formular</p>
<form method="post">
	<input type="text" placeholder="Enter A" name="a">
	<p><input type="text" placeholder="Enter B" name="b"></p>
	<p><input type="text" placeholder="Enter C" name="c"></p>
	<p><input type="submit" value="Calculate" name="submit"></p>
</form>



</body>
</html>
