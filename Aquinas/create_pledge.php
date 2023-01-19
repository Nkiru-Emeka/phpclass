<?php
include ("connect1.php");
$a= $_GET["id"]; 
$sqlA = "SELECT * FROM project order by projectname";
$resultA = mysqli_query($connect1,$sqlA) or die("Could Not Selcte".mysqli_error($connect1));
$count=0;
if(mysqli_num_rows($resultA)>$count){
    while($row=mysqli_fetch_assoc($resultA))
    {
        $idA[] = $row["id"];
        $project[] = $row ["projectname"];
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
    //$a= mysqli_real_escape_string($connect1,strtoupper ($_POST['memberid']));
    $b= mysqli_real_escape_string($connect1,$_POST['projectid']);
    $c= $_POST['amount'];
    $d= $_POST['project_date'];
       // $reg= rand(1000,2000);
   // $f= date('Y').'/'.'AQ'.'/'.$reg;

    $insert= mysqli_query($connect1, "insert into pledge 
    (memberid, projectid,amount, project_date)
    values ('$a', '$b', '$c', '$d')") or die ('could mot 
    insert'.mysqli_error($connect1));
    if ($insert) {echo 'pledge inserted succefully';}
}
?>

<form action="" method="post" enctype="multipart/form-data">

<div class="select"> Select project  <select name="projectid">
            <?php for($z=0;$z<$count;$z++){?>
            <option value="<?php echo $idA[$z]?>"><?php echo $project[$z]?></option>
            <?php }?>
        </select> </div>

<p>
    <div class="col">Amount <input type="text" name="amount" value="<?php if(isset($c)) echo $c ;?>" placeholder="input amount"></div>
</p>
<p>
    <div class="col">Project Date <input type="date" name="project_date" value="<?php if(isset($d)) echo $d ;?>" placeholder="Date of Project"></div>
</p>
<p>
<label>
<input name="submit" type="submit" id="submit" value="Submit" />
</label>
</p>

</form>
</body>
</html>




