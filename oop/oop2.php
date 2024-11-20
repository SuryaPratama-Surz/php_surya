<?php

class ppdb{

 public function data_diri($jurusan,$nama,$jk,$temlahir,$tanglahir,$notlp,$email){
    echo "<h4>Data Diri:</h4>";
    echo "Jurusan : $jurusan <br>";
    echo "Nama Peserta : $nama <br>";
    echo "Jenis Kelamin : $jk <br>";
    echo "Tempat Lahir : $temlahir <br>";
    echo "Tanggal Lahir : $tanglahir <br>";
    echo "Nomor Telepon : $notlp <br>";
    echo "Email : $email <br>";
 }
 
 public function alamat($provinsi,$kabkota,$kecamatan,$desa,$alamat,$kode){
    echo "<h4>Alamat Peserta:</h4>";
    echo "Provinsi : $provinsi <br>";
    echo "Kab/Kota : $kabkota <br>";
    echo "Kecamatan: $kecamatan <br>";
    echo "Desa/Kelurahan : $desa <br>";
    echo "Alamat : $alamat <br>";
    echo "Kode Pos : $kode <br>";
 }

 public function asalsekolah($assek,$alsek){
    echo "<h4>Asal Sekolah</h4>";
    echo "Asal Sekolah : $assek <br>";
    echo "Alamat Sekolah : $alsek <br>";

 }
 
 public function dataortu($nama,$pekerjaan,$nohp,$alamatleng){
    echo "<h4>Data Orang Tua:</h4>";
    echo "Nama Lengkap Ayah/Ibu : $nama <br>";
    echo "Pekerjaan : $pekerjaan <br>";
    echo "Nomor Telpon : $nohp Telpon <br>";
    echo "Alamat : $alamatleng <br>";

 }

}

$cetak = new ppdb();

echo $cetak->data_diri
     ("RPL","Agus Sitopang","Laki-laki","Bandung","09 Januari 2004","0877434333","gussitopang@gmail.com");
echo "<hr>";
echo $cetak->alamat("Jawa Barat","Kab.Bandung","Arjasari","Makalang","Jl.AgusSitok No 99","3333");
echo "<hr>";
echo $cetak->asalsekolah("SMP 33 Madiun","Jl.Madiun Utara No 33");
echo "<hr>";
echo $cetak->dataortu("Agus Simalang","Petani","08737733777","Jl.AgusSitok No 99");

 

?>