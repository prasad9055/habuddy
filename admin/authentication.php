<?php
session_start();
include('links.php');
include($link.'/config/dbconfig.php'); 
if(!isset($_SESSION['auth']))
{
    $_SESSION['message']="Allowed Login Users Only !" ;
    header("Location: ../login.php");
    exit(0);
}
else{
       if($_SESSION['role_as'] != "1"){
        $_SESSION['message']="You are Not Authorized  Like a Admin  !" ;
        header("Location: ../login.php");
        exit(0);
       }

}


?>