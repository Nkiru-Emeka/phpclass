<?php
$connect = mysqli_connect("localhost", "root", "","jenny");
if (!$connect) {
    die("connectionfailed: " .mysqli_connect_error());
}
//else echo 'connected';
?>