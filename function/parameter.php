<?php

function biodata($nama,$tlahir,$tglahir,$jk,$agama,$alamat,$hobi){
    echo "Nama : $nama <br>";
    echo "Tempat Lahir : $tlahir <br>";
    echo "Tanggal Lahir : $tglahir <br>";
    echo "Jenis Kelamin : $jk <br>";
    echo "Agama : $agama <br>";
    echo "Alamat : $alamat <br>";
    echo "Hobi : $hobi <br>";

}

biodata("Surya","Bandung","04 Maret 2008","Laki-laki","Islam","Jl.Baru Raya","Nu Aya");


function tambah($angka1,$angka2){
    echo "Bilangan 1 : $angka1 <br>";
    echo "Bilangan 2 : $angka2 <br>";
    $hasil = $angka1 + $angka2 ;
    echo "Hasilnya : $hasil";

}

tambah(10,20);


?>