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



    $query2= "create table if not exists pegant (
        id int primary key not null auto_increment,
        teller varchar(20) not null,
        dop date,
        bankname varchar(50) not null,
        firstname varchar(255) not null,
        middlename varchar(255) not null,
        lastname varchar(255) not null,
        dob date,
        mstatus varchar(225) not null,
        address1 varchar(225) not null,
        address2 varchar(225) not null,
        state varchar(225) not null,
        nok varchar(225) not null,
        nokr varchar(225) not null,
        occupation varchar(225) not null,
        address_nok varchar(225),
        phone_nok varchar(20) not null,
        about text not null,
        agree varchar(10),
        date datetime
    
        )";
    
        mysqli_query($connect, "$query2") or die("could not 
        create pegant".mysqli_error($connect));
        if($query2) {echo "pegant created"."</br>";}





?>