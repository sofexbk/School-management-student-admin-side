<?php
include '../includes/Cndb.php'; 
if (isset($_POST['creer'])){ 
    $nom=$_POST['nm'];
    $prenom=$_POST['prn'];
    $ville=$_POST['ville'];
    $email=$_POST['email'];
    $cne=$_POST['cne'];
    $rcne=$_POST['rcne'];
        if($cne==$rcne) {
        $sql="insert into Etudiants (Nom,Prenom,Ville ,Email,CNE) values ('$nom','$prenom','$ville','$email','$cne')";
        $res=mysqli_query($conn,$sql);
        header("location:Etulog.php");
            }
        else{
                header("location:Signupetu.php?error=failure");
         }
         
        }
           

?>