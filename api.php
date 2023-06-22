<?php

require_once("connection.php");
$jsondata=file_get_contents("php://input");
$data=json_decode($jsondata,true);

$uname=  ($data['uname']);
$pass= ($data['pass']);
$mob= ($data['mob']);
$email= ($data['email']);



$query = "INSERT  INTO `$tablename`(`uname`,`pass`,`mob`,`email`) value('$uname','$pass','$mob','$email')";

$result = mysqli_query($conn, $query);

if($result==1){
  $status=1;
  $message='Change Suuccessful';


}  
else{
    $status=0;
    $message='Something went wrong';
}

$arr=[
    'message'=>$message,
    'status'=>$status
];

echo json_encode($arr,JSON_PRETTY_PRINT);


?>