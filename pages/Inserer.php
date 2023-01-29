<?php include '../includes/session.php';  ?>
<!DOCTYPE html>
<head>
    <title> Saisie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            background-image: linear-gradient(to left,green,yellowgreen);
        }
    </style>
</head>
<link rel="icon" type="image/jpg" href="../src/images/icons/Ensat.jpg"/>

<body >
<center>
 <nav>
    <ul class="nav bg-primary d-flex justify-content-center">
       <li><a href="acceuil.php" class="btn btn-secondary">Acceuil</a></li> 
       <li><a href="inserer.php" class="btn btn-success">Ajouter un étudiant</a></li>
       <li><a href="emploietu.php" class="btn btn-warning" >Emploi Etudiant</a> </li>   
       <li><a href="logout.php" class="btn btn-danger">Logout</a> </li> 
       <li><a href="Reclamation.php "class="btn btn-dark">Réclamation</a></li>
    </ul>
</nav>
 </center>
 <img height="100" width="200" src="uploads\Ensat.jpg">

 
    <div class="container d-flex justify-content-center my-5 py-5 px-5 ">
          <form action="ajout.php" method="POST">
          <table class="table bg-light  mt-5 mb-4 ps-3 p-4 shadow-lg fw-bold">
        <tr >
            <td>Cne:</td> 
            <td > <input type="text" name="cne"></td>
        </tr>
        <tr>
            <td>Nom:</td>
            <td><input type="text" name="nom"></td>
        </tr>
        <tr>
            <td>Prenom:</td>
            <td ><input type="text" name="prenom"></td>
        </tr>
        <tr>
            <td>Ville</td>
            <td><input type="text" name="ville"> </td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email"> </td>
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