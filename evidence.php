<?php
include ("dbconnection.php");
if(isset($_POST['sub'])){
    $issue=$_POST['issue'];
    $eve=$_POST['eve'];
    $sql="INSERT INTO `evidence`VALUES('$issue', '$eve')  ";
    $result=$con->query($sql);
    if($result){
        echo 'success';
        header("location:..\police3.html");

    }
    else{
        echo 'fail';
    }
    exit();

}
else{
    echo 'php errr';
    exit();
}
