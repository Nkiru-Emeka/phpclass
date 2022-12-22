<?php
include ("connect1.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST['submit']))
{
    $a= strtoupper ($_POST['membername']);
    $b= $_POST['zone'];
    $c= $_POST['memberadd'];
    $d= $_POST['memberphone'];
    $e= $_POST['email'];
    $f= $_POST['membership_no'];

    $insert= mysqli_query($connect1, "insert into member 
    (membername, memberzone, memberadd, memberphone, memberemail, membership_no, date)
    values ('$a', '$b', '$c', '$d', '$e', '$f', now())") or die ('could mot 
    insert'.mysqli_error($connect1));
    if ($insert) {echo 'member inserted succefully';}
}
?>

<form action="" method="post" enctype="multipart/form-data">
<p>

<div class="row">Name of Member <input name="membername" type="text" id="membername" placeholder="insert full name" value="<?php
if(isset($a)) {echo $a;}?>" /> </div>
</p>

<?php $zone= array('select', 'St Ann', 'St Catherine', 'St Rita', 'St Theresa');?>
<div class="select"> Select Zone  <select name="zone" id="zone">
<?php for ($t=0; $t<count($zone); $t++) {?>
<option <?php if (isset($b)) if($b==$zone[$t]) echo 'selected="selected"'; ?>><?php echo $zone [$t];?></option>
<?php }?>
</select> </div>

<p>
<<<<<<< HEAD
    <div class="col">Address <input type="text" name="memberadd" value="<?php if(isset($d)) echo $d ;?>" placeholder="input your address"></div>
=======
    <div class="col">Address <input type="text" name="memberadd" value="<?php if(isset($d)) echo $d ;?>" placeholder="input address"></div>
>>>>>>> 5af3da4e443f29bdcc1f500354ae734098d8f3a2
</p>
<p>
    <div class="col">Phone <input type="text" name="memberphone" value="<?php if(isset($d)) echo $e ;?>" placeholder="phone no"></div>
</p>
<p>
<<<<<<< HEAD
    <div class="col">Member Email  <input type="text" name="email" value="<?php if(isset($d)) echo $f ;?>" placeholder="Input your email"></div>
</p>
<p>
    <div class="col">Membership No <input type="text" name="membership_no" value="<?php if(isset($d)) echo $f ;?>" placeholder="Input your Zone Id"></div>
=======
    <div class="col">Membership No <input type="text" name="membership_no" value="<?php if(isset($d)) echo $f ;?>" placeholder="Input your Zone "></div>
</p>
<p>
    <div class="col">Membership email <input type="text" name="memberemail" value="<?php if(isset($d)) echo $f ;?>" placeholder="Input your email "></div>
>>>>>>> 5af3da4e443f29bdcc1f500354ae734098d8f3a2
</p>

<p>
<label>
<input name="submit" type="submit" id="submit" value="Submit" />
</label>
</p>

</form>
</body>
</html>




