<?php
include ("connect.php");

$eze = $_GET['id'];
// select that particular one
$sql = "SELECT * FROM pegant where id='$eze'";
$result = mysqli_query($connect,$sql) or die("Could Not Selcte".mysqli_error($connect));
if(mysqli_num_rows($result)){
    while($row=mysqli_fetch_assoc($result))
    {
        $id = $row["id"];
        $firstname = $row["firstname"];
        $middlename = $row["middlename"];
        $lastname = $row["lastname"];
        $teller = $row["teller"];
        $bankname = $row["bankname"];

    }
}
if (isset($_POST['submit'])){
$a = $_POST['teller'];
	//$b= $_POST['dop'];
	$c= $_POST['bankname'];
	$d= $_POST['firstname'];
	$e= $_POST['middlename'];
	$f= $_POST['lastname'];
	/*
    $g= $_POST['dob'];
	$h= $_POST['mstatus'];
	$i= $_POST['address1'];
	$j= $_POST['address2'];
	$k= $_POST['state'];
	$l= $_POST['nok'];
	$m= $_POST['nokr'];
	$n= $_POST['occupation'];
	$o= $_POST['address_nok'];
	$p= $_POST['phone_nok'];
	$q= $_POST['about'];
	$r= $_POST['agree'];
	*/

	$update = mysqli_query($connect, "update pegant set teller = '$a', bankname = '$c', firstname = '$d', middlename = '$e', lastname = '$f' where id = '$eze'") or die ('could mot 
    insert'.mysqli_error($connect));
    if($update) {echo 'succeful';}
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MISS 042 PEGENT</title>
</head>

<body>
	<table  width="100%" height="100" bgcolor="white">
<tr align="center">
	<td width="100"> <font size="+3" color="#3D3BD1" font style="Tahoma">MISS 042 PEGENT</font></td>
</tr>
	
</table>

	<table width="1200" align="center">
		<tr>
			<td> Registration Step1
			<hr style="color: red">
			
			</td>
			
		</tr>
	</table>
	
	<table width="1200" align="center">
		<tr>
			<td>
					<form method="post" action="" enctype="multipart/form-data">
	<table width="100%">
	<tr>
		<td width="12%">Bank Teller No</td>
		<td width="20%"><input type="text" size="30" name="teller" value="<?php  echo $teller ?>"></td>
		<td width="15%"> Date of Payment </td>
		<td> <input type="date" name="dop"></td>
		
  
 	 <td width="15%"></td>
		
		<td> </td>
		
	</tr>
	</table>
	
	
	<table width="100%"> 
		<tr>
			<td width="12%">Branch:  </td> 
			<td > <input type="text" size="80" name="bankname" value= "<?php echo $bankname ?>"></td>	
			
		</tr>
	</table>
	
	
	<table width="100%">
		<tr>
			<td width="12%">First Name: </td>
			<td width="20%"> <input type="text" size="30" maxlength="10" name="firstname" value= "<?php echo $firstname ?>"></td>
		<td width="15%"> Middle Name: </td>
		<td width="20%"> <input type="text" size="30" maxlength="10" name="middlename" value= "<?php echo $middlename ?>"></td>
		<td width="15%">Last Name:</td> 
		<td> <input type="text" size="30" maxlength="10" name="lastname" value= "<?php echo $lastname?>"></td>
	
		</tr>
	</table>
	
	
	
	<table width="100%">
		<tr>
		
			<td width="12%">Date of birth: </td>
			<td width="3%"></td>
			<td width="8%">
			<input type="date" name="dob">
  </td>
  <td width="3%"></td>
  <td width="10%">
  </td>
  <td width="3%"> </td>
  <td width="15%">
    </td> 
  <td width="10%">Marital Status:</td>
  <td> 
 <select name="mstatus" value= "<?php if(isset($h)) echo $h ?>">
 <option>
 		-Please Select
 	</option>
 	<option>
 		Single
 	</option>
 	<option>Married</option>
	 <option>Divorced</option>
	 <option>widowed</option>
	 
 	
 </select>
  </td>
		</tr>
	</table>
	
	
	<table width="100%">
		<tr>
			<td width="12%">Contact Address</td>
			<td><input type="text" name="address1" value= "<?php if(isset($i)) echo $i ?>" size="60"></td>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td width="12%">Contact Address2 </td>
			<td><input type="text" name="address2" value= "<?php if(isset($j)) echo $j ?>" size="60"></td>
		</tr>
	</table>
	
	<table width="100%">
		<tr>
			<td width="12%">State of Origin</td>
			<td><input type="text" name="state" value= "<?php if(isset($k)) echo $k ?>"></td>
	
			
		</tr>
	</table>
	<table width="100%">
		<tr>
		<td>Registrattion Step2 <hr style="color: red"></td>
			
		</tr>
	</table>
	
	
	<table>
		<tr><td>Guardian/Next Of Kin:</td>
			<td><input type="text" name="nok" value= "<?php if(isset($l)) echo $l ?>"></td>
		</tr>
	</table>
	<table>
		<tr>
			<td>Relationship to Guardian/Next of Kin:</td>
			<td><input type="text" name="nokr" value= "<?php if(isset($m)) echo $m ?>"></td>
			<td>Occupation:</td>
			<td><input type="text" name="occupation" value= "<?php if(isset($n)) echo $n ?>"></td>
		</tr>
	</table>
	<table>
		<tr>
			<td>Address Of Guardian/Next of Kin:</td>
			<td><input type="text" name="address_nok" value= "<?php if(isset($o)) echo $o ?>"></td>
		</tr>
	</table>
	<table>
		<tr>
			<td>Phone No. Of Guardian/Next of Kin:</td>
			<td><input type="tex" name="phone_nok" value= "<?php if(isset($p)) echo $p ?>"></td> 
			 
			
		</tr>
	</table>
	
	
	<table width="100%">
		<tr>
			<td> Resgistration Step3 <hr style="color: red"></td> 
			
		</tr>
	</table>
	<table>
		<tr>
			<td>Tell us about yourself in less than 200 words</td>
	
		</tr>
	</table>
	<table>
		<tr>
			
			<textarea rows="10" cols="50" name="about" value= "<?php if(isset($q)) echo $q ?>"></textarea>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td>Registration Step4 <hr style="color: red"></td>
			
		</tr>
	</table>
	<table>
		<tr>
			<td><input type="checkbox" value="yes" name="agree" checked> I agree that all the information provided above is accurate. I have read and understood the rules and regulations set forth by the Miss 042 Pageant committee and agree to abide by them.
I further agree to abide by the rules regulation set forth the Miss 042 Pageant committee. I will accept the decision of the judges as final and binding, and I understand that such decisions are not questionable.

I hereby consent that the organisers of the Miss 042 Pageant reserve the right to use all information; person or general, text, images submitted by me before or during the pageant in any medium, print or electronic in the advancement of The Miss 042 Pageant.

</td>
		</tr>
	</table>
	<table>
		<tr>
			<td><input type="submit" value="Submit" name="submit"> 
			<input type="reset" value="Reset"></td>
	
		</tr>
	</table>
	<hr>
	<table>
		<tr>
			<td align="center"> <strong><font color="blue">Powered By STUDIO 042</font></strong></td>
		</tr>
	</table>
</form>
			</td>
		</tr>
	</table>
	
</body>


</html>
