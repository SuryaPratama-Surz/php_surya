<?php
$nama = "Encang subacang kicingkiling";
$kelas = "XI RPL 1"; 
$nilaia = 85;
$nilaib = 80;
$nilaic = 50;
$nilaid = 75;
$rata = $nilaia + $nilaib + $nilaic + $nilaid ;
$ratarata =  $rata / 4;
echo "Nama : $nama <br>";
echo "Kelas : $kelas <br>";
echo "Nilai Bahasa Indonesia : $nilaia<br>";
echo "Nilai Bahasa Inggris : $nilaib<br>";
echo "Nilai Matematika : $nilaic<br>";
echo "Nilai Produktif : $nilaid<br>";
echo "Rata-rata : $ratarata<br>
        -----------------------------------<br>";
 
 if ($ratarata  > 75) {
     echo "Status : *Selamat Kamu Lulus*";
 } else {
     echo "Status : *Anda Tidak Lulus*";
 }

?>