<?php
include ("connect1.php");

$query1= "create table if not exists income (
    id int primary key not null auto_increment,
    username varchar(255),
    password varchar(255)
   

    )";

    mysqli_query($connect1, "$query1") or die("could not 
    create profile".mysqli_error($connect1));
    if($query1) {echo "profile connect1 successfully created"."</br>";}

    //$insert= mysqli_query($connect1,"insert into income values ('1','admin','12345')") or die("could not insert".mysqli_error($connect));
    //if($insert) echo 'admin has been inserted';

    $query2= "create table if not exists zone (
        id int primary key not null auto_increment,
        name varchar(255)
        
    
        )";
    
        mysqli_query($connect1, "$query2") or die("could not 
        create profile".mysqli_error($connect1));
        if($query2) {echo "profile zone successfully created"."</br>";}
?>