<html>
    <head>
<style>
        body
        {
            background: linear-gradient(to right, aqua, green);
        }
</style>
    <title>ACCEUIL</title>
    <link rel="icon" type="image/jpg" href="../src/images/icons/Ensat.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<center>
 <nav>
    <ul class="nav bg-primary d-flex justify-content-center">
       <li><a href="acceuiletu.php" class="btn btn-secondary">Acceuil</a></li> 
       <li><a href="logoutetu.php" class="btn btn-danger" >Logout</a> </li> 
       <li><a href="# "class="btn btn-dark">Réclamation</a></li>

    </ul>
</nav>
 </center>

<img height="100" width="200" src="uploads\Ensat.jpg">
 <h1 class="text-center my-3 ">-Emploi du Temps-</h1>

<?php
include '../includes/sessionetu.php'; 
$conn=mysqli_connect('localhost','Sos','18901890','ensatdata');
    $sql="select * from emploi";
    $res=mysqli_query($conn,$sql);
    ?>

    <div class="container">
    <table class="table my-3 py-3 bg-warning  ">
        <thead>
        <tr class ="bg-secondary">
            <th scope="col">ID</th>
            <th scope="col">Prof</th>
            <th scope="col">Salle</th>
            <th scope="col">Matiére</th>
        </tr>            
        </thead>
        <tbody>
        <?php while($v=mysqli_fetch_array($res)) { ?>
        <tr>
            <td scope="col"><?=$v[0]?></td>
            <td scope="col"><?=$v[1]?></td>
            <td scope="col"><?=$v[2]?></td>
            <td scope="col"><?=$v[3]?></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>        
    </div>

</body>
</html>

