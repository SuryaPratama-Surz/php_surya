<?php

$pemilik =  [
    [
        "nama" => "Safitri",
        "buah" => [
            [
                "buah" => "Anggur",
                "anak_buah" => [
                    "jenis1" => "Anggur Ijo",
                    "jenis2" => "Anggur Putih"
                ]
            ]
        ]
     ],
    [
        "nama" => "Rahman",
        "buah" => [
                 [
                "buah" => "Alpukat",
                "anak_buah" => [
                    "jenis3" => "Alpuket Buruk",
                    "jenis4" => "Alpuket Biasa"
                ]
                ],
                [
                    "buah" => "Apel",
                    "anak_buah" => [
                    "jenis1" => "Apel Merah",
                    "jenis2" => "Apel Hijau",
                    ]
                ]
            ]
        ]
    ];
     foreach ($pemilik as $buah) {
      echo "Nama Pemilik Buah : " . $buah['nama'] . "<br>";
      echo "Daftar Buah Kesukaan : <br><ul>";
      foreach ($buah['buah'] as $kesukaan) {
     echo "<li>". $kesukaan['buah'] . "</li>";
     foreach ($kesukaan['anak_buah'] as $k) {
        echo "-". $k . "<br>";
     }
      }
      echo "</ul><hr>";
   }
   
?>