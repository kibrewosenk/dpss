<?php
include('dbconnection.php');
if(isset($_POST['sub']))
{
	$password=$_POST['password'];
	//$dec_password=$password;
$sql="SELECT * FROM police_officers WHERE pid='".$_POST['id']."' and password='$password'and admin_status='yes'";
$result=$con->query($sql);
if($result -> num_rows>0)
{
header("location:..\police2.html");
exit();
}
else
{
header("location:..\admin.html");
exit();
}
}

else
    echo 'php err';


?>