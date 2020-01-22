<?php
include ("dbconnection.php");
if(isset($_POST['sub'])){
    $type=$_POST['type'];
    $date=$_POST['date'];
    $place=$_POST['p'];
    $issue=$_POST['issue'];
    $e=$_POST['e'];
    $sql="INSERT INTO `reprot`  VALUES ('$type', '$date', '$place', '$e', '$issue')";
    $result=$con->query($sql);
    if($result){
        echo 'sucess';
        header("location:..\boot.html");
        exit();
    }
    else{
        echo 'fail';
        header("location:..\boot.html");
    }
    exit();
}
else
    echo 'php err';
