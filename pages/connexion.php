<?php
include '../includes/Cndb.php'; 
if(isset($_POST['Entrer'])){ 
    $test=0;
    $Nom = $_POST['Nom'];
    $Code= $_POST['Code'];
    $sql = "select * from admins where  Nom = '$Nom' &&  Code= '$Code' ";
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>=1){
        $line = mysqli_fetch_assoc($res);
        $test=1;
    }
}
 if($test==1){
        session_start();
        $_SESSION['Nom']=$Nom;
		header('location:../pages/acceuil.php');
		}
else{
header('Location:../index.php?error=failure');
}

?>