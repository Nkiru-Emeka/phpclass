<?php
include ('connect.php');
if(isset($_POST['submit']))
{
    $user= $_POST['username'];
    $pass1=$_POST['password'];
    $cpass=$_POST['cpassword'];
    //to harsh the pass if cpass is equal to pass1
    if($cpass==$pass1){
        $pass= password_hash($pass1,PASSWORD_DEFAULT);

        //check if username exsit
        $select= mysqli_query($connect, "select * from admin where username= '$user'") or die('could not select'.mysqli_error($connect));
        $num= mysqli_num_rows($select);
        if($num>0){
            echo " Username exist";
         }
         else{

            $sign= mysqli_query ($connect, "insert into admin (username, 
            password) values('$user', '$pass')")  or die('could not insert'.mysqli_error($connect));
            if($sign) {echo 'registered';}
         }
    
    }
    if ($cpass!=$pass1) {echo 'password does not match';}
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

<p> Confirm password
<label>
    <input type="password" name="cpassword" id="password" />
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
</body>
</html>