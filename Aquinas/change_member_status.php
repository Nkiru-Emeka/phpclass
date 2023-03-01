<?php
include ("connect1.php");

$eze = $_GET['id'];


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
    
    $c= $_POST['status'];
    $d= $_POST['date_move'];
    $k= date('Y-m-d');
    /*echo $d;
    echo "<br/>";
    echo $k;*/
    if($d>$k){
        $update = mysqli_query($connect1, "update member
        set status = '$c'
        where id = '$eze'") or die ('could mot update'.mysqli_error($connect1));
    
        $insert= mysqli_query($connect1, "insert into member_movement 
        (member_id, date_move)
        values ('$eze', '$d')") or die ('could mot 
        insert'.mysqli_error($connect1));
        if ($insert) {echo 'member moved succefully';}
    }  
else{
    echo "choose correct date";
}
    

   /* $update = mysqli_query($connect1, "update member
    set status = '$c'
    where id = '$eze'") or die ('could mot update'.mysqli_error($connect1));

    $insert= mysqli_query($connect1, "insert into member_movement 
    (member_id, date_move)
    values ('$eze', '$d')") or die ('could mot 
    insert'.mysqli_error($connect1));
    if ($insert) {echo 'member moved succefully';} */
}
?>

<form action="" method="post" enctype="multipart/form-data">



<div class="select"> Select Zone  <select name="status">
            <option>active</option>
            <option>tranfer</option>
            <option>death</option>
            <option>Non Catholic</option>
        </select> </div>

<p>
    <div class="col">date out <input type="date" name="date_move"  placeholder="yyyy/mm/dd"></div>
</p>


<p>
<label>
<input name="submit" type="submit" id="submit" value="Submit" />
</label>
</p>

</form>
</body>
</html>




