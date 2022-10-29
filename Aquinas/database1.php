<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$connect1 = mysqli_connect("localhost", "root", "");
if (!$connect1) {
    die("connectionfailed: " .mysqli_connect_error());
}

$_create = mysqli_query($connect1, "create database if not exists aquinas") or die("could not
create aquinas".mysqli_error ($connect1));
if($_create) echo "Databse created successfully";


?>
<body>
    
</body>
</html>