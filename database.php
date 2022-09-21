<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$connect = mysqli_connect("localhost", "root", "");
if (!$connect) {
    die("connectionfailed: " .mysqli_connect_error());
}

$_create = mysqli_query($connect, "create database if not exists jenny") or die("could not
create jenny".mysqli_error ($connect));
if($_create) echo "Databse created successfully";


?>
<body>
    
</body>
</html>