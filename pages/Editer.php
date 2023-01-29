<!DOCTYPE html>
<head>
    <title> Saisie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            background-image: linear-gradient(to left, rgba(255,0,0,0), rgb(102, 0, 255));
        }
    </style>
</head>
<body >
<center>
 <nav>
    <ul class="nav bg-primary d-flex justify-content-center">
       <li><a href="acceuil.php" class="btn btn-secondary">Acceuil</a></li> 
       <li><a href="inserer.php" class="btn btn-success">Ajouter un étudiant</a></li>
       <li><a href="emploietu.php" class="btn btn-warning" >Emploi Etudiant</a> </li>  
       <li><a href="logout.php" class="btn btn-danger" >Logout</a> </li> 
       <li><a href="#" class="btn btn-dark">Réclamation</a></li>

    </ul>
</nav>
 </center>
<img height="100" width="200" src="uploads\Ensat.jpg">
<?php
include '../includes/session.php'; 
    $conn=mysqli_connect('localhost','Sos','18901890','ensatdata');
    $id=$_GET['id'];
    $sql="select * from Etudiants where id='$id'";
    $res=mysqli_query($conn,$sql);
    $v=mysqli_fetch_row($res);
    ?>

    <div class="container d-flex justify-content-center my-5 py-5 px-5 ">

          <form action="modifier.php?id=<?=$id?>" method="POST">

          <table   class=" container d-flex justify-content-center bg-light  mt-5 mb-4 ps-3 p-4 rounded border shadow-lg fw-bold">
          <tr class="container d-flex justify-content-center fw-bold text-decoration-underline"> 
            
            <td><legend class="text-decoration-underline"></legend></td>
        </tr> 
        <tr>
            <td>Cne:</td>
            <td ><input type="text" name="cne" value="<?=$v[1]?>"></td>
        </tr> 
        <tr >
            <td>Nom:</td> 
            <td > <input type="text" name="nom" value="<?=$v[2]?>"></td>
        </tr>
        <tr>
            <td>Prenom:</td>
            <td><input type="text" name="prenom" value="<?=$v[3]?>"></td>
        </tr>
        <tr>
            <td>Ville</td>
            <td><input type="text" name="ville"  value="<?=$v[4]?>" > </td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email"  value="<?=$v[5]?>"> </td>

        </tr>
        <tr  class=" container d-flex justify-content-center justify-content-between " >
           <td><button type ="submit" class="btn btn-outline-primary my-3  fw-bold"  name="sub" >Envoyer</button></td> 
           <td ><button type ="reset" class="btn btn-outline-primary  my-3  fw-bold" name="res" >Annuler</button></td>
        </tr>
    </table>                   

    </form>
    </div>
   
</body>
</html>