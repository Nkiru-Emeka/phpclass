<?php
include ("connect1.php");
$a= $_GET["id"]; // ID of the pledge

// selecting to get the pledge and date
$sqlP = "SELECT * FROM pledge where id='$a' ";
$resultP = mysqli_query($connect1,$sqlP) or die("Could Not Selcte".mysqli_error($connect1));
if(mysqli_num_rows($resultP)){
    while($row=mysqli_fetch_assoc($resultP))
    {
        $idP = $row["id"];
        $projectP= $row ["projectid"];
        $amountP= $row ["amount"];
        $dateP= $row ["project_date"];
        //echo $amountP;

    }
}

// to get the name of the project submitted initially
$sqlP2 = "SELECT * FROM project where id='$projectP' ";
$resultP2 = mysqli_query($connect1,$sqlP2) or die("Could Not Selcte".mysqli_error($connect1));
if(mysqli_num_rows($resultP2)){
    while($row=mysqli_fetch_assoc($resultP2))
    {
        $idP2 = $row["id"];
        $projectP2= $row ["projectname"];
        //echo $projectP2;
        

    }
}




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

    $update= mysqli_query($connect1, "update  pledge SET  projectid='$b', amount='$c', project_date='$d' where id='$a'") or die ('could mot 
    insert'.mysqli_error($connect1));
    if ($update) {echo 'pledge updated succefully';}


    
    $update2= mysqli_query($connect1, "update  payment SET  amount_pledged='$c' where pledgeid='$a'") or die ('could mot 
    insert'.mysqli_error($connect1));
    if ($update2) {echo 'payment updated succefully';}

}
?>

<form action="" method="post" enctype="multipart/form-data">

<div class="select"> Select project  <select name="projectid">
            <option value="<?php echo  $idP2?>"><?php echo $projectP2 ?></option>
            <?php for($z=0;$z<$count;$z++){?>
            <option value="<?php echo $idA[$z]?>"><?php echo $project[$z]?></option>
            <?php }?>
        </select> </div>

<p>
    <div class="col">Amount <input type="number" required name="amount" value="<?php  echo $amountP ;?>" placeholder="amount pledged"></div>
</p>


<p>
    <div class="col">Project Date <input type="date" name="project_date" value="<?php  echo $dateP;?>" placeholder="Date of Project"></div>
</p>
<p>
<label>
<input name="submit" type="submit" id="submit" value="Submit" />
</label>
</p>

</form>
</body>
</html>




