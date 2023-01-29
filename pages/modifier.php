<?php
include '../includes/Cndb.php'; 
if(isset($_POST['sub'])){
$id=$_GET['id'];
$cne=$_POST['cne'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$ville=$_POST['ville'];
$email=$_POST['email'];

$sql="update etudiants set CNE='$cne',Nom='$nom',Prenom='$prenom',Ville='$ville' ,Email='$email' where id=$id";
 mysqli_query($conn,$sql);

 header("location:acceuil.php");}
?>