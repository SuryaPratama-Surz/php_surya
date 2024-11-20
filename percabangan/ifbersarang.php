<?php
$jurusan="RPL";
$kelas="10 RPL";



if ($jurusan == "RPL") {
 
    echo "Selamat datang di jurusan RPL<br>";

    if ($kelas == "10 RPL") {
       echo "Selamat datang di kelas 10 RPL";
        } elseif ($kelas == "11 RPL") {
           echo "Selamat datang di kelas 11 RPL";
        } elseif ($kelas == "12 RPL") {
            echo "Selamat datang di kelas 12 RPL";
        } else {
            echo "Kelas tidak ada";
     }   
    
    } elseif ($jurusan == "TKRO") {
      echo "Selamat datang di jurusan TKRO<br>";
      if ($kelas == "10 TKRO") {
        echo "Selamat datang di kelas 10 TKRO";
         } elseif ($kelas == "11 TKRO") {
            echo "Selamat datang di kelas 11 TKRO";
         } elseif ($kelas == "12 TKRO") {
             echo "Selamat datang di kelas 12 TKRO";
         } else {
             echo "Kelas tidak ada";
      }   
        
    }elseif ($jurusan == "TBSM") {
         echo "Selamat datang di jurusan TBSM<br>";
         if ($kelas == "10 TBSM") {
            echo "Selamat datang di kelas 10 TBSM";
             } elseif ($kelas == "11 TBSM") {
                echo "Selamat datang di kelas 11 TBSM";
             } elseif ($kelas == "12 TBSM") {
                 echo "Selamat datang di kelas 12 TBSM";
             } else {
                 echo "Kelas tidak ada";
          }   
         } else {
       echo "Tidak ada jurusan tersebut<br>";
        }
    


?>