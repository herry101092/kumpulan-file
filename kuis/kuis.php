<!DOCTYPE>
<html>
<head>
	<title>
		 BMI Calculator
	</title>
</head>
<body> <center>
			<form action=kuis method=post>
				<h2><center>
					Body Mass Index Anda
				</center></h2>
				<div>
					<p><b> Nama Lengkap </b></p>
					<input type="text" name="namadepan" size="20" placeholder="Nama Depan">
					<input type="text" name="namabelakang" size="20" placeholder="Nama Belakang">
<p><b> Pangkat </b></p>
<select name="Pangkat" size="">
<option>-Pangkat-</option>
<option value="prada">prada</option>
<option value="pratu">pratu</option>
<option value="praka">praka</option>
<option value="kopda">kopda</option>
<option value="koptu">koptu</option>
<option value="kopka">kopka</option>
<option value="serda">serda</option>
<option value="sertu">sertu</option>
<option value="serka">serka</option>
<option value="serma">serma</option>
<option value="pelda">pelda</option>
<option value="peltu">peltu</option>
<option value="Letda">Letda</option>
<option value="Lettu">Lettu</option>
<option value="kapten">kapten</option>
<option value="Mayor">Mayor</option>
<option value="Letkol">Letkol</option>
<option value="Kolonel">Kolonel</option>
<option value="IIa">IIa</option>
<option value="IIb">IIb</option>
<option value="IIc">IIc</option>
<option value="IId">IId</option>
<option value="IIIa">IIIa</option>
<option value="IIIb">IIIb</option>
<option value="IIIc">IIIc</option>
<option value="IIId">IIId</option>
</select>
<p><b> NRP/NIP </b></p>
<input type="text" Name="NRP" size="46" placeholder="NRP/NIP"><br><br>
<p><b> Jabatan </b></p>
<input type="text" Name="text" size="46" placeholder="Jabatan"><br>
<p><b> Satuan Kerja </b></p>
<input type="text" Name="text" size="46" placeholder="Satuan Kerja"><br>
<p><b> Jenis Kelamin </b></p>
<input type="radio" name="Kelamin" value="L">Laki Laki
<input type="radio" name="Kelamin" value="P">Perempuan
<br><br>
				</div>

				<div>
					<center><input type="text" name="berat" placeholder="Berat Anda (Kg)" value="<?php if(!empty($_POST['berat'])){ echo $_POST['berat']; }?>" required></center>
				</div>

				<div><center>
					<input type="text" name="tinggi" placeholder="Tinggi Anda (m)" value="<?php if(!empty($_POST['tinggi'])){ echo $_POST['tinggi']; }?>" required></center>
				</div>

				<div><center>
					<button type="submit" name="hitung" value="hitung">
						Calculate BMI
					</center></button>
				</div>
			</form>

			<?php
				if(!empty($_POST['hitung'])) { 
			    $berat = $_POST['berat'];
			    $tinggi = $_POST['tinggi'];
			    function bmi($berat,$tinggi) {
			        $bmi = $berat/($tinggi*$tinggi);
			        return $bmi;
			    }   
			    $bmi = bmi($berat,$tinggi);
			    if ($bmi <= 18.5) {
			        $output = "UNDERWEIGHT";
			        } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
			        $output = "NORMAL WEIGHT";
			        } else if ($bmi > 24.9 AND $bmi<=29.9) {
			        $output = "OVERWEIGHT";
			        } else if ($bmi > 30.0) {
			        $output = "OBESE";
			    }
			   
			    echo "Your BMI value is  " . $bmi . "<br>  and you are : "; 
			    echo "$output";
			}
			?>
		</center>
</body>
</html>