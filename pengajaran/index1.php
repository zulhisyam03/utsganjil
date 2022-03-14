<?php
  print("Hari Ini Adalah Tanggal ".date("d F Y"));
  print("<br>");
  printf("Tanggal Hari Ini Adalah %s <br>",date("d F Y"));
  echo "Hari Ini Adalah Tanggal ".date("d F Y");
  echo "<p>";

  define("SALAM","HALO APA KABAR"); //Konstanta
  $nama = "Zul Hisyam"; //Variabel

  echo SALAM." Nama Saya Adalah ".$nama;
  printf("Tanggal Hari Ini Adalah %s %s <br>",date("d F Y"), $nama);
  echo "Hello ", "Zul Hisyam <p>";

  $gaji = "500000 Rupiah";
  $gajib = (int)$gaji;
  $gajid = (double)$gaji;

  printf("Gaji String : %s <br>",$gaji) ;
  printf("Gaji Integer : %d <br>",$gajib) ;
  printf("Gaji Double : %d <p>",$gajid) ;

  printf ("1 + 5 = %d <br>", 1+5);
  print ("2 * 5 = "); print(2*5);
  print("<br>");
  echo "10 / 2 = ",10/2,"<br>";
?>