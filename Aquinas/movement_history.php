<?php
include ("connect1.php");

    $a= $_GET['id'];
    
//selection to get the name of the zone with id=$z
$sqlz= mysqli_query($connect1, "SELECT * FROM member where id= '$a'") or die 
("couldnt Not Selectzone".mysqli_error($connect1));
if(mysqli_num_rows($sqlz)) {
    //fetch each value
    while($row= mysqli_fetch_assoc($sqlz))

    {
        //select whatever is in the table
        $idz = $row ["id"];
        $namez = $row ["membername"];
       
    }

}




//select query for movement out
$sql= mysqli_query($connect1, "SELECT * FROM member_movement where member_id='$a' order by id desc") or die 
("couldnt Not Selectzone".mysqli_error($connect1));

$count = 0; //count is used to identify the first value
//check if there is something in the table
if(mysqli_num_rows($sql)>$count) {
    //fetch each array
    while($row= mysqli_fetch_assoc($sql))

    {
        //select whatever is in the table
        $id[] = $row ["id"];
        $memberid[] = $row ["member_id"];
        $membermove[] = $row ["date_move"];
        

        $count++;

    }

}


//select query for movement return
$sql2= mysqli_query($connect1, "SELECT * FROM member_return where member_id='$a' order by id desc") or die 
("couldnt Not Selectzone".mysqli_error($connect1));

$count2= 0; //count is used to identify the first value
//check if there is something in the table
if(mysqli_num_rows($sql)>$count2) {
    //fetch each array
    while($row= mysqli_fetch_assoc($sql2))

    {
        //select whatever is in the table
        $id2[] = $row ["id"];
        $memberid2[] = $row ["member_id"];
        $memberreturn[] = $row ["date_return"];
        

        $count2++;

    }

}
$sn= 1;
$sn2= 1;
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
    <table width= "800"  align="centre" height="40">
        <tr>
            <td>List of movements made  by <?php echo $namez ?></td>
        </tr>
    </table>
    <table width= "800" border="1" align="centre"> 
        <tr>
            
            <td width="85">Out</td>
            <td width="85">Return</td>
            
            </tr>
        
        <tr>
            <td>
            <?php for($s=0; $s<$count;$s++) {?>
                <table width="100%">
                    <tr>
                        <td><?php echo $sn++?></td>
                        <td><?php echo  $membermove[$s] ?></td>
                    </tr>
                </table>
                <?php  } ?>
            </td>

            <td>
            <?php for($x=0; $x<$count2;$x++) {?>
                <table width="100%">
                    <tr>
                        <td><?php echo $sn2++?></td>
                        <td><?php echo  $memberreturn[$x] ?></td>
                    </tr>
                </table>
                <?php  } ?>
            </td>
           
        </tr>
       
    </table>
    
</body>
</html>