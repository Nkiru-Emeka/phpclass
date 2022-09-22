<?php
include ("connect.php");
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
    $a= strtoupper ($_POST['surname']);
    $b= $_POST['firstname'];
    $c= $_POST['marriage'];
    $d= $_POST['degree'];
    $e= $_POST['about'];

    $insert= mysqli_query($connect, "insert into profile 
    (surname, firstname, marriage, degree, about, date)
    values ('$a', '$b', '$c', '$d', '$e', now())") or die ('could mot 
    insert'.mysqli_error($connect));
    if ($insert) {echo 'succeful';}
}
?>

<form action="" method="post" enctype="multipart/form-data">
<p>

<input name="surname" type="text" id="surname" placeholder="surname" value="<?php
if(isset($a)) {echo $a;}?>" />
</p>

<p>
    <input type="text" name="firstname" value="<?php
if(isset($b)) {echo $b;}?>" placeholder="firstname">
</p>

<p>
    <input type="text" name="degree" value="<?php if(isset($d)) echo $d ;?>" placeholder="degree">
</p>

<?php $marriage= array('select-!', 'single', 'married', 'Divorced', 'widowed');?>
<select name="marriage" id="marriage">
<?php for ($t=0; $t<count($marriage); $t++) {?>
<option <?php if (isset($c)) if($c==$marriage[$t]) echo 'selected="selected"'; ?>><?php echo $marriage [$t];?></option>
<?php }?>
</select>
<p>
<textarea name="about" id="about"><?php if (isset($e)) echo $e ?></textarea>
</p>

<p>
<label>
<input name="submit" type="submit" id="submit" value="Submit" />
</label>
</p>

</form>
</body>
</html>




