<html>
<head>
<title>.::Contoh Seleksi Kondisi::.</title>
</head>
<body>
<font face=verdana size=2>

<?php

		if(!empty($_POST['proses'])){
			$nilai = $_POST['nilai'];
		

		$nilai>70;

		if ($nilai>70){
			echo "nilai ujian anda : $nilai <br> ";
			echo "anda lulus <br>";}
		
		else {
			echo "nilai ujian anda : $nilai <br> ";
			echo "anda tidak lulus <br>";}

		}

?>
</body>
</html>