<?php
include ("connect.php");

$query1= "create table if not exists admin (
    id int primary key not null auto_increment,
    username varchar(255),
    password varchar(255)
   

    )";

    mysqli_query($connect, "$query1") or die("could not 
    create profile".mysqli_error($connect));
    if($query1) {echo "profile successfully created"."</br>";}

    //$insert= mysqli_query($connect,"insert into admin values ('1','admin','churchwork')") or die("could not insert".mysqli_error($connect));
    //if($insert) echo 'admin has been inserted';

?>