<?php
$hostname = "localhost";
$user ="id20666411_apitest";
$dbpass ="Sahil@12345#";
$dbname = "id20666411_api";
$tablename = "dart";

$conn = mysqli_connect($hostname,$user,$dbpass,$dbname) or die("CONECTION ...");

    if($conn){
        
    }
    else{
        echo "connection not working..";
    }

?>
