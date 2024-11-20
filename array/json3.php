<?php

$data = '[
    { 
       "nama" : "Bobi",
       "kelas" : "XI RPL 1"
    },
    { 
       "nama" : "Agus",
       "kelas" : "XI RPL 1"
    }

]';

  $list = json_decode($data);

  foreach($list as $siswa){
      echo "Nama :  {$siswa->nama} <br>";
      echo "Kelas :  {$siswa->kelas} <br>";
      echo "<hr>";

  }

?>