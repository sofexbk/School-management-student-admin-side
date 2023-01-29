<?php
include '../includes/Cndb.php'; 
if(isset($_POST['Entrer'])){ 
    $test=0;
    $Nom = $_POST['Nom'];
    $Cne= $_POST['Cne'];
    $sql = "select * from etudiants where  Nom = '$Nom' &&  CNE= '$Cne' ";
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>=1){
        $line = mysqli_fetch_assoc($res);
        $test=1;
    }

}
 if($test==1){
        session_start();
        $_SESSION['Nom']=$Nom;
		header('location:acceuiletu.php');
		}
else{
header('Location:Etulog.php?error=failure');
}

?>