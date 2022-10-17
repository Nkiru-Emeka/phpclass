<?php
include ("connect.php");
session_start();

if(isset($_POST['submit']))
{
    $user= $_POST['username'];
    $pass= $_POST['password'];


    $select= mysqli_query($connect, "select * from admin where binary 
    username= '$user'")or die("could Not Login".mysqli_error(($connect)));
    $num= mysqli_num_rows($select);
    if(mysqli_num_rows($select))
    while($rows=mysqli_fetch_assoc($select))
    {
        $_SESSION["id"]= $rows['id']; 
        $_SESSION["username"]= $rows['username'];
        $_SESSION["password"]= $rows['password'];
        $nweze= $_SESSION["password"];
        $okey= $_SESSION["password"];


    if(password_verify($pass, $okey)){
        if($num>0)
        {
           // setcookie("oka", $nweze,time()+3600);
            header("location:login.php");
        }
    }
    else{echo "wrong password";}
}
else {echo "wrong username";}
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
<form action="" method="post" enctype="multipart/form-data">
<p>username
<input name="username" type="text" id="username" value="<?php 
if(isset($user)) echo $user;?>" />
</p>
<p>password
<label>
    <input type="password" name="password" id="password" />
</label>
</p>
<p>
    <label>
        <input type="submit" name="submit" id="submit" value="submit" />
    </label>
</p>

<div class="jerry">
    <?php if (isset($sign)) {echo 'Thank You';}?>
</div>


<div><?php if(isset($sign)) {echo "Created";}?></div>

    </form>
    </form>
</body>
</html>