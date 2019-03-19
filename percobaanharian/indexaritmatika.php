<!DOCTYPE html>
<html lang="en">
<head>
	<title>Perhitungan Aritmatika</title>
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

	<form action=indexaritmatika method=post>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Perhitungan Aritmatika
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Variabel_A</span>
					<input class="input100" type="text" name='a' placeholder="Masukan Angkanya">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Name is required">
					<span class="label-input100">Variabel_b</span>
					<input class="input100" type="text" name='b' placeholder="Masukan Angkanya">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Perhitungannya</span>
					<div>
						<select class="selection-2" name='operasi'>
							<option value=>Tentukan Pilihan Anda</option>
							<option value=1>Penjumlahan [a+b]</option>
							<option value=2>Pengurangan [a-b]</option>
							<option value=3>Perkalian [a*b]</option>
							<option value=4>Pembagian [a/b]</option>
						</select>

					</div>
					<span class="focus-input100"></span>
				</div>

				<div class>
					<!-- <span class="label-input100">Budget</span> -->
					<!-- <div>
						<select class="selection-2" name="budget">
							<option>Select Budget</option>
							<option>1500 $</option>
							<option>2000 $</option>
							<option>2500 $</option>
						</select>
					</div> -->
					<span class="focus-input100"></span>
				</div>

				<!-- <div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Hasilnya</span>
					

					<span class="focus-input100"></span>
				</div> -->

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" name="submit">
							<span> Submit <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
					<?php


if(isset($_POST['submit'])){
	$a = $_POST['a'];
	$b = $_POST['b'];
	$operasi = $_POST['operasi'];


}


	if ($operasi==1)
	{
		$c=$a+$b;
		$oper='[a + b]';
	}
	elseif ($operasi==2)
	{
		$c=$a-$b;
		$oper='[a - b]';
	}
	elseif ($operasi==3)
	{
		$c=$a*$b;
		$oper='[a * b]';
	}
	else
	{
		$c=$a/$b;
		$oper='[a / b]';
	}
	echo "<br>";
	echo "<center>Nilai A adalah = $a dan Nilai B adalah = $b<br>";
	echo "<b>Hasil Operasi $oper adalah = $c<br></b></center>";
?>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
