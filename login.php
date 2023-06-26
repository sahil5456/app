<?php

require_once("connection.php");



    $jsondata = file_get_contents("php://input");
    $data = json_decode($jsondata, true);


    $uname =  trim($data['uname']);
    $pass = trim($data['pass']);

    $query = "SELECT * FROM `dart` WHERE `uname`='$uname' and `pass`='$pass' ";
    

    $result = mysqli_query($conn, $query);
    if($result==1){
        $status=1;
        $message='Data Insert Suuccessful';
    
    }else{
        $status=0;
        $message='Something went wrong';
    }

    $arr=[
    'message'=>$message,
    'status'=>$status
    ];

    echo json_encode($arr,JSON_PRETTY_PRINT);
     
     
 ?>
      
