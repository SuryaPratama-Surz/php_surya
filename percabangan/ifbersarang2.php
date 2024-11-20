<?php

$provinsi = "Jawa Barat";
$kota = "Garut";

if ($provinsi == "Jawa Barat") {
    echo "Welcome To Jawa Barat<br>";
     if ($kota == "Bandung") {
        echo "Welcome To Bandung City";
     } elseif ($kota == "Garut") {
        echo "Welcome To Garut City";
     } elseif ($kota == "Bogor") {
        echo "Welcome To Bogor City";
     } elseif ($kota == "Tasik") {
        echo "Welcome To Tasik City";
     } elseif ($kota == "Sumedang") {
        echo "Welcome To Sumedang City";
     } else {
        echo "Kota tidak di ketahui";
     }
} elseif ($provinsi == "Jawa Timur") {
    echo "Welcome To Jawa Timur<br>";
    if ($kota == "Malang") {
        echo "Welcome To Malang City";
     } elseif ($kota == "Kediri") {
        echo "Welcome To Kediri City";
     } elseif ($kota == "Madiun") {
        echo "Welcome To Madiun City";
     } elseif ($kota == "Blitar") {
        echo "Welcome To Blitar City";
     } elseif ($kota == "Surabaya") {
        echo "Welcome To Surabaya City";
     } else {
        echo "Kota tidak di ketahui";
     }
} elseif ($provinsi == "Jawa Tengah") {
    echo "Welcome To Jawa Tengah<br>";
    if ($kota == "Cilacap") {
        echo "Welcome To Cilacap City";
     } elseif ($kota == "Kebumen") {
        echo "Welcome To Kebumen City";
     } elseif ($kota == "Purbalingga") {
        echo "Welcome To Purbalingga City";
     } elseif ($kota == "Surakarta") {
        echo "Welcome To Surakarta City";
     } elseif ($kota == "Sleman") {
        echo "Welcome To Sleman City";
     } else {
        echo "Kota tidak di ketahui";
     }
} else {
    echo "Provinsi tidak di ketahui";
}



?>