<?php
include('dbconnection.php');
if(isset($_POST['sub']))
{
    $id=$_POST['id'];
    $password=$_POST['pass'];
    $sql="SELECT * FROM police_officers WHERE pid='$id' and password='$password' and admin_status='no' ";
    $result=$con->query($sql);
    if($result -> num_rows>0)
    {
            header("location:..\police21.html");

        exit();
    }
    else
    {
        header("location:..\police officer.html");
        exit();
    }


}

else
    echo 'php err';


?>