<?php
if (isset($_POST['sub'])){ 
    $email=$_POST['email'];
    $cmnt=$_POST['comment'];
    if($file= fopen('reclamation','a+')){
        $tab = array($email,$cmnt);
        $ligne = implode('|',$tab);
        fputs($file,"\n".$ligne);
        header("location:acceuil.php")
    }
    fclose($file);}

?>
<html>
<head>
    <title>Réclamation</title>
    <link rel="icon" type="image/jpg" href="../src/images/icons/Ensat.jpg"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body{ 
            background-image: linear-gradient(to right, white , pink );
        }
    </style>
</head>
<body>
<form method="post">

  <!-- Email input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form4Example2">Email address d'étudiant</label>
    <input type="email" id="form4Example2" class="form-control name="  name="name" />
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
  <label class="form-label" for="form4Example3">Message from Admin</label>
    <textarea class="form-control" id="form4Example3" rows="4" name="comment"></textarea>
  </div>

  <!-- Submit button -->
  <button type="submit" name="sub" class="btn btn-primary btn-block mb-4">
    Send
  </button>
</form>
</body>
</html>