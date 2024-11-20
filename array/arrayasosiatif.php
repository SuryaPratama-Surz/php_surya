<?php


 $produk = [
    "Jenis" => "Air Kemasan",
    "Nama" => "Uwater",
    "PT" => "PT.CAHYA UWATER ABADI",
    "Harga" => 2500,
 ];

 echo "<p> Jenis Produk : " . $produk['Jenis'] . "</p>";
 echo "<p> Nama Produk : " . $produk['Nama'] . "</p>";
 echo "<p> Diproduksi Oleh : " . $produk['PT'] . "</p>";
 echo "<p> Harga Satuan : Rp." .number_format($produk['Harga']) . "</p>";
 

?>