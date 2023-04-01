<?php

/*earning if statememt*/

/*$username=$_POST('usernane');
$passowed=$_POST('password'); */

if(isset($_POST['username'])
&&(isset($_POST['password'])))
{
    $user=$_POST['username'];
    $pass=$_POST['password'];
    echo $user." ".$pass;
    echo "chechk the above codes";
}

?>