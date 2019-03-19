<html>
<head>
<title>.::Contoh Seleksi Kondisi::.</title>
</head>
<body>
<font face=verdana size=2>

<?php

		if(!empty($_POST['proses'])){
			$nilai = $_POST['nilai'];

		if ($nilai<50){
			echo "nilai ujian anda : $nilai <br> ";
			echo "anda tidak lulus<br>";}
		
		elseif($nilai<70) {
			echo "nilai ujian anda : $nilai <br> ";
			echo "anda lulus tapi tidak bagus <br>";}

		elseif($nilai>=70){
			echo "selamat anda lulus murni <br>";}

		}

?>
</body>
</html>