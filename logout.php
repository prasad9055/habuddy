<?php
session_start();

if(isset($_POST['logout_btn']))
{
    unset($_SESSION['auth']);
    unset($_SESSION['role_as']);
    unset($_SESSION['auth_user']);
    
    $_SESSION['message']="You Logout Sucessfully !";
    header("Location: login.php");
}

?>