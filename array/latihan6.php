<?php


    $baba = [[
        "Judul" => "Dilan Wo Ai Ni",
        "Penulis" => "Pidi Baiq",
        "Tanggal" => "20 Oktober 2023",
        "Penerbit" => "Ojayan",
    ],
    [
        "Judul" => "Kiki 2020",
        "Penulis" => "Surya Baiq",
        "Tanggal" => "22 Mei 2024",
        "Penerbit" => "Simuntar",
    ],
    [
        "Judul" => "Kiki dan kiyem",
        "Penulis" => "Maman Racing",
        "Tanggal" => "1 Juni 2024",
        "Penerbit" => "Ojayan",
    ],
    [
        "Judul" => "Aqua ajaib",
        "Penulis" => "Amaba",
        "Tanggal" => "20 Oktober 1999",
        "Penerbit" => "Mentari",
    ],
    [
        "Judul" => "Sandi And The Gang",
        "Penulis" => "Keyndra Basreng",
        "Tanggal" => "20 Oktober 2020",
        "Penerbit" => "Ojayan",
     ]
    ];




    foreach ($baba as $buku) {
    

 echo "<p>  Judul Buku : " . $buku['Judul'] . "</p>";
 echo "<p> Penulis : " . $buku['Penulis'] . "</p>";
 echo "<p> Tanggal Rilis : " . $buku['Tanggal'] . "</p>";
 echo "<p> Penerbit : " . $buku['Penerbit'] .  "</p><hr>";
 
 
    }
?>