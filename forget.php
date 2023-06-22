<?php

require_once("connection.php");



    $jsondata = file_get_contents("php://input");
    $data = json_decode($jsondata, true);


    $uname =  ($data['uname']);
    $npass = ($data['npass']);

    

    $query = "UPDATE `dart` SET `pass`='$npass',`uname`='$uname' WHERE `uname`='$uname' ";

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
      
