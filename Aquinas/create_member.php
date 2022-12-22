<?php
include ("connect1.php");

$sqlA = "SELECT * FROM zone order by name";
$resultA = mysqli_query($connect1,$sqlA) or die("Could Not Selcte".mysqli_error($connect1));
$count=0;
if(mysqli_num_rows($resultA)>$count){
    while($row=mysqli_fetch_assoc($resultA))
    {
        $idA[] = $row["id"];
        $zone[] = $row ["name"];
        $count++;

    }
}
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
    $a= mysqli_real_escape_string($connect1,strtoupper ($_POST['membername']));
    $b= mysqli_real_escape_string($connect1,$_POST['zone']);
    $c= $_POST['memberadd'];
    $d= $_POST['memberphone'];
    $e= $_POST['email'];
    $reg= rand(1000,2000);
    $f= date('Y').'/'.'AQ'.'/'.$reg;

    $insert= mysqli_query($connect1, "insert into member 
    (membername, memberzone, memberadd, memberphone, memberemail, membership_no,status, date)
    values ('$a', '$b', '$c', '$d', '$e', '$f','active', now())") or die ('could mot 
    insert'.mysqli_error($connect1));
    if ($insert) {echo 'member inserted succefully';}
}
?>

<form action="" method="post" enctype="multipart/form-data">
<p>

<div class="row">Name of Member <input name="membername" type="text" id="membername" placeholder="insert member name" value="<?php
if(isset($a)) {echo $a;}?>" /> </div>
</p>


<div class="select"> Select Zone  <select name="memberzone">
            <?php for($z=0;$z<$count;$z++){?>
            <option><?php echo $zone[$z]?></option>
            <?php }?>
        </select> </div>

<p>
    <div class="col">Address <input type="text" name="memberadd" value="<?php if(isset($c)) echo $c ;?>" placeholder="input your address"></div>
</p>
<p>
    <div class="col">Phone <input type="text" name="memberphone" value="<?php if(isset($d)) echo $d ;?>" placeholder="phone no"></div>
</p>
<p>
    <div class="col">Member Email  <input type="text" name="email" value="<?php if(isset($e)) echo $e ;?>" placeholder="Input your email"></div>
</p>
<p>
<label>
<input name="submit" type="submit" id="submit" value="Submit" />
</label>
</p>

</form>
</body>
</html>




