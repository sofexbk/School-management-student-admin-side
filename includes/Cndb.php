<?php  
$dbservername="localhost";
$dbusername="Sos";
$dbpassword="18901890";
$dbname="ensat";
$conn=mysqli_connect("localhost","Sos","18901890","ensatdata");
if(!$conn){
    die(mysqli_error($conn));
}

?>