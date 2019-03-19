<html>
<head>
	<title>Variabel dalam PHP</title>
</head>
<body>
<?php
//variabel bertipe integer
$a="5";
//variabel bertipe real
$b="2.5";
//variabel bertipe string
$komentar="Selamat Datang di PHP";
echo ("Nilai variabel a adalah  $a <br>"); //variabel bertipe integer
echo ("Nilai variabel b adalah  $b <br>"); //variabel bertipe real
echo ("Nilai variabel komentar adalah $komentar <br>"); //variabel bertipe string
$hasil=$a+$b;
echo ("Hasil jumlah a dan b adalah $hasil <br>"); //variabel bertipe double
$tgl = date("d F Y"); //variabel bertipe tanggal
$nama = "mabes TNI";
$garis= "=====================================";
echo "<p>";
echo $garis."<br>";
echo $komentar. "<br> Di Kelas Pemrogaman </br>" . $nama."<br>  Belajar dengan giat ya.... </br>";
echo $garis."<b>";
echo "<br>Tanggal </br>" .$tgl;
?>
</html>
