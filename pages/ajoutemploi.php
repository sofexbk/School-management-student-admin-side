<?php 
include '../includes/Cndb.php'; 
if(isset($_POST['valider'])){
$prof=$_POST['Prof'];
$salle=$_POST['Salle'];
$matiére=$_POST['matiére'];
$req="insert into emploi (Prof,Salle,Matiére) values ('$prof', '$salle','$matiére')";
$res=mysqli_query($conn,$req);
header('location:acceuil.php');

}
?>