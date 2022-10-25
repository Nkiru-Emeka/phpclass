<?php
$connect = mysqli_connect("localhost", "root", "","church");
if (!$connect) {
    die("connectionfailed: " .mysqli_connect_error());
}
//else echo 'connected' ."</br>";
?>