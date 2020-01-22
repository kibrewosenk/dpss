<?php
include('dbconnection.php');
if(isset($_GET['sub'])){
    $sql="select pid from police_officers";
    $reult=$con->query($sql);
    if($reult->num_rows>0){
        while($row=$reult->fetch_assoc()){
            echo "pid: " .$row["pid"]. "<br>";
        }
    }
    else {
        echo '0 results';
    }

    exit();
}
else echo 'no sub';
?>