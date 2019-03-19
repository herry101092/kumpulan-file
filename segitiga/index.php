<!DOCTYPE html>
<html lang="en">
<head>
	 
	<title>Project Hitung Luas Segitiga</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="index" method="post">
					<span class="login100-form-title">
						Luas Segitiga
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="alas" ;>
						<input class="input100" type="text" name="alas" placeholder="Input Alas">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "tinggi" ;>
						<input class="input100" type="tinggi" name="tinggi" placeholder="Input Tinggi">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Lupa
						</span>

						<a href="#" class="txt2">
							Nama Kamu / Diri Kamu?
						</a>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit"  >
							hitung
							
						</button>
						

					

					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">	
							Masih Ada Ide Lain?
						</span>

						<a href="#" class="txt3">
								<?php
					if(isset($_POST['submit'])){
						$alas = $_POST['alas'];
						$tinggi = $_POST['tinggi'];
	
						$luas_segitiga = 1/2 * $alas * $tinggi;
	
						echo "Ini Loh Hasilnya alas : $alas, dan tinggi $tinggi <br>";
						echo "yaitu $luas_segitiga";
						}		
						?>
						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>