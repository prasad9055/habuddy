<?php

$host = "localhost";
$user = "u266838232_buddy" ;
$password = "Prasad@9055";
$dbname ="u266838232_buddy";


//$host = "localhost";
//$user = "root" ;
//$password = "Prasad@9055";
//$dbname ="buddy";

$con = mysqli_connect("$host", "$user", "$password", "$dbname");

//echo $con ."Echo output ";

if(!$con){

    header("Location: ../errors/dberror.php");
    die();
}

?>