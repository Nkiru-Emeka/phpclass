<?php
session_start();
if (isset($_SESSION["id"]) && isset ($_SESSION ["username"])){


echo "This is my login Page";

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
    <p style="background-color pink; color:white">
<br>
<?php echo 'welcome' .$_SESSION["username"] ?>
<br>
<a href="logout_session.php">Click to log out</a>
</p>

</body>
</html>
<?php
}
else{
    header('location:session.php');
    //exit();
}
?>
