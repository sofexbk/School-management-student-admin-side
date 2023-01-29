<?php 
include '../includes/Cndb.php'; 
include '../includes/session.php'; 

if(isset($_POST['sub'])){
$cne=$_POST['cne'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$ville=$_POST['ville'];
$email=$_POST['email'];

$sql="insert into etudiants (CNE,Nom,Prenom,Ville,Email) values ('$cne','$nom','$prenom','$ville','$email')";
$res=mysqli_query($conn,$sql);
header('location:acceuil.php');

}
?>