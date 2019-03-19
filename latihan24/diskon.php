<html>
 <head>
  <title>.:: Program Menghitung Discount ::.</title>
 </head>
 <body>
 <font face=verdana size=2>
 <form action=diskon method=post>Jumlah Bayar :
 <input type=text name=totalbeli><br><br>
 <input type="submit" value="Hitung Discount">
 </form>
        <?php
            $toyar=$_POST['totalbeli'];
           {$diskon=0;
           if ($toyar>=500000)
            $diskon=(0.5*$toyar);
          else
          if ($toyar>=100000)
            $diskon=(0.1*$toyar);
          else
          if ($toyar>=50000)
            $diskon=(0.05*$toyar);
  
  printf ("<b><br>Jumlah Bayar = Rp. $toyar</b>");
  printf ("<b><br>Diskon = Rp. $diskon</br></b>");
  $jumlahbayar=$toyar-$diskon;
  printf ("<b>Total Bayar = Rp. $jumlahbayar</b>");
 }
 ?>
 </body>
</html>