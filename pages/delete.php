<?php
include '../includes/session.php'; 
$conn=mysqli_connect('localhost','Sos','18901890','ensatdata');
$id=$_GET['id'];
$sql="delete from Etudiants where ID=$id ";
$res=mysqli_query($conn,$sql);

header('location:acceuil.php')


?>