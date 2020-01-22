<?php
include('dbconnection.php');
if(isset($_POST['signupadmin']))
{
    $dep=$_POST['dep'];
    $pass=$_POST['p'];
  //echo $pass;
   $sql="INSERT INTO `police_officers`  VALUES  ('".$_POST['id']."','".$_POST['fname']."','".$_POST['mname']."','".$_POST['lname']."','".$_POST['sex']."', '".$_POST['age']."', '".$_POST['pno']."', '','$dep','$pass', '".$_POST['adminstatus']."')";
    $result=$con->query($sql);
    //echo $sql;
    if($result)
    {
        echo 'success';
        exit();
    }
    else
    {
        echo 'fail';
        exit();
    }
}

else
    echo 'php err';


?>