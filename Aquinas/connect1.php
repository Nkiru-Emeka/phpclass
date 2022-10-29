<?php
$connect1 = mysqli_connect("localhost", "root", "","aquinas");
if (!$connect1) {
    die("connectionfailed: " .mysqli_connect_error());
}
//else echo 'connect1 connected' ."</br>";
?>