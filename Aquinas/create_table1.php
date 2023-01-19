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

        $query3= "create table if not exists member (
            id int primary key not null auto_increment,
            membername varchar(255) not null,
            memberzone varchar(255)not null,
            memberadd varchar(255) not null,
            memberphone varchar(255) not null,
            memberemail varchar(255) not null,
            membership_no varchar(255) not null,
            status varchar(255) not null,
            date datetime
            
        
            )";
        
            mysqli_query($connect1, "$query3") or die("could not 
            create member table".mysqli_error($connect1));
            if($query3) {echo "member table successfully created"."</br>";}


            $query4= "create table if not exists member_movement (
                id int primary key not null auto_increment,
                member_id varchar(255) not null,
                date_move date
                
            
                )";
            
                mysqli_query($connect1, "$query4") or die("could not 
                create member_movement table".mysqli_error($connect1));
                if($query4) {echo "member_movement table successfully created"."</br>";}


                
            $query5= "create table if not exists member_return (
                id int primary key not null auto_increment,
                member_id varchar(255) not null,
                date_return date
                
            
                )";
            
                mysqli_query($connect1, "$query5") or die("could not 
                create member_movement table".mysqli_error($connect1));
                if($query5) {echo "member_return table successfully created"."</br>";}



                $query6= "create table if not exists admin (
                    id int primary key not null auto_increment,
                    username varchar(255),
                    password varchar(255)
                   
                
                    )";
                
                    mysqli_query($connect1, "$query6") or die("could not 
                    create profile".mysqli_error($connect1));
                    if($query1) {echo "profile successfully created"."</br>";}
                
                   // $insert= mysqli_query($connect1,"insert into admin values ('1','admin','churchwork')") or die("could not insert".mysqli_error($connect));
                   // if($insert) echo 'admin has been inserted';

                   $query7= "create table if not exists project (
                    id int primary key not null auto_increment,
                    projectname varchar(255)
                    
                
                    )";
                
                    mysqli_query($connect1, "$query7") or die("could not 
                    create profile".mysqli_error($connect1));
                    if($query7) {echo "project successfully created"."</br>";}

                    $query7= "create table if not exists project (
                    id int primary key not null auto_increment,
                    projectname varchar(255)
                    
                
                    )";
                
                    mysqli_query($connect1, "$query7") or die("could not 
                    create proect table".mysqli_error($connect1));
                    if($query7) {echo "project successfully created"."</br>";}

                    $query8= "create table if not exists pledge (
                        id int primary key not null auto_increment,
                        memberid varchar(255),
                        projectid varchar(255),
                        amount varchar(255),
                        project_date varchar(255)
                                                
                    
                        )";
                    
                        mysqli_query($connect1, "$query8") or die("could not 
                        create pledge table".mysqli_error($connect1));
                        if($query8) {echo "Pledge Table successfully created"."</br>";}

?>