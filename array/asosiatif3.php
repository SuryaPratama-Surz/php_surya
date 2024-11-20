<?php

$siswa = [
    [
    "nis" => 1212,
    "nama" => "agus",
    "kelas" => "x rpl",
    "eskul" =>      [  

         "1" => "<ul><li>Tari</li>","<li>Band</li>","<li>kendang</li></ul><hr>"
    

    ]
    ],
    [
    
        "nis" => 112122,
        "nama" => "kosidah",
        "kelas" => "x rpl",
        "eskul" =>      [  
    
             "2" => "<ul><li>Tari</li></ul><hr>",
        
    
         ]

          ],
        ];

    
     foreach ($siswa as $hp) {
         echo "nis :" . $hp['nis']. "<br>";
         echo "nama :" . $hp['nama']. "<br>";
         echo "kelas :" . $hp['kelas']. "<br>";
          echo  "eskul: <br>";
         foreach ($hp['eskul'] as $hp2['eskul']) {
            echo   $hp2['eskul'];
           
         }
     } 
    

     


?>