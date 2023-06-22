<?php

require_once("connection.php");

$jsondata=file_get_contents("php://input");
$data=json_decode($jsondata,true);

$uname = ($data["uname"]);
$pass = ($data["opass"]);
$npass = ($data["npass"]);

$query = "SELECT * FROM $tablename WHERE `uname`= '$uname' AND `pass`= '$pass'" or die("query eroor...");

$result = mysqli_query($conn,$query);

$data=mysqli_fetch_assoc($result);

if(mysqli_num_rows($result)>0){

    $query = "UPDATE `dart` SET `pass`='$npass'  WHERE `uname`='$uname' ";
    $result = mysqli_query($conn, $query);
    if($result==1){
    $status=1; 
    $message='Change Password Suuccessful';

    }else{
    $status=0;
    $message='Something went wrong';
    }


}else{
    $status=0;
    $message= "This User NOt Exist";
    }    



$arr=[
'message'=>$message,
'status'=>$status
];  

echo json_encode($arr,JSON_PRETTY_PRINT);
 
?>