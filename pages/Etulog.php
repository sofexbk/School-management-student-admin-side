<!DOCTYPE html>
<html lang="en">
<head>
	<title>ENSAT</title>
<!--===============================================================================================-->	
	<link rel="icon" type="image/jpg" href="../src/images/icons/Ensat.jpg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../src/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../src/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../src/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../src/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../src/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../src/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../src/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../srcvendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../src/css/util.css">
	<link rel="stylesheet" type="text/css" href="../src/css/main.css">
<!--===============================================================================================-->
<style>
	.container-login100{
		background-image:url(uploads/download.jpg)
	}
</style>
</head>
<body>
	<form action="connexionetu.php" method="POST">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Espace d'authentification Etudiant
					</span>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="Nom" required>
						<span class="focus-input100" data-placeholder="Nom"></span>
                    </div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="Cne" required>
						<span class="focus-input100" data-placeholder="Cne"></span>
					</div>


					 <?php
					if(isset($_GET['error'])){
						echo "<h6 class='text text-danger'> Login or password incorect </h6>";
					}
					?>



					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="Entrer">
								Login
							</button>
						</div>
					</div>
					<br> <br> <br> 
					<div class="text-center ">
						<a class="txt2" href="../index.php"> <h3>Espace Admin </h3></a>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>
						<a class="txt2" href="Signupetu.php"> Sign Up </a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../src/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../src/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../src/vendor/bootstrap/js/popper.js"></script>
	<script src="../src/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../src/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../src/vendor/daterangepicker/moment.min.js"></script>
	<script src="../src/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../src/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../src/js/main.js"></script>
	</form>

</body>
</html>