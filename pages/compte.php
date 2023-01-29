<?php
include '../includes/Cndb.php'; 
if (isset($_POST['creer'])){ 
    $nom=$_POST['nm'];
    $prenom=$_POST['prn'];
    $cne=$_POST['cne'];
    $code=$_POST['code'];
    $rcode=$_POST['rcode'];
        if($code==$rcode) {
        $sql="insert into Admins (Nom,Prenom,CNE,Code) values ('$nom','$prenom','$cne','$code')";
        $res=mysqli_query($conn,$sql);
        header("location:../index.php");
            }
        else{
                header("location:Signup.php?error=failure");
         }
         
        }
           

?>