<?php

  //  Variable menyimpan data
   $nama = "Surya Pratama";
   $tgl = "04 Maret 2008";
   $jk = "Laki-Laki";
   $agama = "Islam";
   $alamat = "Jl.Baru Raya";
   $hobi = "Dzikir";
   $a =10;
   $b =5;

  //  Menampilkan
   echo "Nama : $nama<br>";
   echo "Tanggal Lahir : $tgl<br>";
   echo "Jenis Kelamin : $jk<br>";
   echo "Agama : $agama<br>";
   echo "Alamat : $alamat<br>";
   echo "Hobi: $hobi<br>";
   echo 'Opsional Hobies :  <br> <video width="150px" height="300px"  controls>
   <source src="wel.mp4" type="video/webm" />
   Browsermu tidak mendukung tag ini, upgrade donk!
 </video>';
   echo "<hr>";

  //  Operator Aritmatika
   echo "Penjumlahan<br>";
   echo "$a + $b <br>";
   $tambah = $a + $b ;
   echo "Hasilnya : $tambah <br>";

   echo "Pengurangan<br>";
   echo "$a - $b <br>";
   $kurang = $a - $b ;
   echo "Hasilnya : $kurang <br>";

   echo "Perkalian<br>";
   echo "$a x $b <br>";
   $kali = $a * $b ;
   echo "Hasilnya : $kali <br>";

   echo "Pembagian<br>";
   echo "$a / $b <br>";
   $pembagian = $a / $b ;
   echo "Hasilnya : $pembagian <br>";

   echo "Modulus<br>";
   echo "$a % $b <br>";
   $mod = $a % $b ;
   echo "Hasilnya : $mod <br>";
  ?>
 