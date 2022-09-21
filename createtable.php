<?php
include ("connect.php");

$query1= "create table if not exists profile (
    id int primary key not null auto_increment,
    surname varchar(255) not null,
    firstname varchar(255) not null,
    marriage varchar(225) not null,
    degree varchar(225) not null,
    about text not null,
    date datetime

    )";

    mysqli_query($connect, "$query1") or die("could not 
    create profile".mysqli_error($connect));
    if($query1) {echo "profile successfully created"."</br>";}


?>