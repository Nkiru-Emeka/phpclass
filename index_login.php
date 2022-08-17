<?php 
$uname= $_POST['uname'];
$pass= $_POST['pass'];
$error= " ";
$success= " ";


if (isset($_POST['submit'])){
    if ($uname== "admin");{
        if($pass== "password"){
            $error= "";
            $success= "Welcome Admin";
           }
            else{
                $error= "";
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
	
       /../ <table>
            <tr>
                <td>
                <form method="post" action="" enctype="multipart/form-data">
                <td width="12%">Username</td>
		<td width="20%"><input type="text" size="30" maxlength="10" name="username"></td>
		<td width="15%"> Password </td>
		<td width="10%">Day: <select name="password">
                </td>
            </tr>
        </table>/../
 

</body>
</html>