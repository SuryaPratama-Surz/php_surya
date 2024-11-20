<?php

$handphone = [[
    "merk" => "Nokia",
    "keluaran" => "Tahun 1970",
    "produksi" => "Perusahaan Nokia Cyber Mentailong"
     ],
     [
        "merk" => "Samsung",
        "keluaran" => "Tahun 2019",
        "produksi" => "Perusahaan Samsung Universe"
     ],
     ];
    
     foreach ($handphone as $hp) {
         echo "Merk :" . $hp['merk']. "<br>";
         echo "Rilis :" . $hp['keluaran']. "<br>";
         echo "Produksi :" . $hp['produksi']. "<br>";
     }
    

    ?>
