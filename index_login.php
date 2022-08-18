<?php 





if (isset($_POST['login'])){
    $uname = $_POST["uname"];
$pass = $_POST["pass"];

    if ($uname== "admin");{
        if($pass== "password"){
           
           }
            else{
               
                $success= "Welcome Admin";
}
    }
    }

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
</head>

<body>
    
    <form method='post'>
            <div class="form-input">
        <input type="text" name = "uname" value="uname" Placeholder= " Enter Username" required><br/>
    <input type ="password" name ="pass" value="uname"  Placeholder=" Enter Password" required><br/>
    <input type= "submit" name= "submit" value ="Login" required><br/>
</div>
   </form>
    	
</body>
</html>