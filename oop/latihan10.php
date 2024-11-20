
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gajih</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    
<?php

class penggajihan{

  public $gaji;
  public $tunjangan;
  public $potongan;
  public $gajibersih;


  public function gaji($nama,$jabatan){
    if ($jabatan == "Direktur" ) {
        $this->gajipokok = 10000000;
    } elseif ($jabatan == "Manager") {
        $this->gajipokok = 7500000;
    } elseif ($jabatan == "Karyawan") {
        $this->gajipokok = 5000000;
    }  elseif ($jabatan == "OB") {
        $this->gajipokok = 2500000;
    } else {
        $this->gajipokok = 0;
    }
    
    echo "Nama Karyawan : $nama <br>";
    echo "Jabatan : $jabatan <br>";
    echo "Gaji Pokok : Rp.". number_format($this->gajipokok) ."  <br>";
  
}


  public function tunjangan($pendidikan){
     if ($pendidikan == "S1") {
        $this->tunjangan = 1000000;
     } elseif ($pendidikan = "SMK") {
        $this->tunjangan = 7500000;
     } elseif ($pendidikan = "SMP") {
        $this->tunjangan = 500000;
     } elseif ($pendidikan = "SD") {
        $this->tunjangan = 250000;
     }
     echo "Pendidikan : $pendidikan <br>";
     echo "Tunjangan Pendidikan : Rp. " . number_format($this->tunjangan). "<br>";
  }

  public function potongan($tabungan,$pinjaman){

    $this -> potongan = $tabungan + $pinjaman;

    echo "Tabungan : Rp.". number_format($tabungan) ." <br>";
    echo "Pinjaman : Rp.". number_format($pinjaman) ." <br>";
    echo "Total Potongan :Rp. " . number_format($this->potongan)." <br>";

  } 

  public function gajibersih(){
    $this->gajibersih = $this->gajipokok + $this->tunjangan - $this->potongan;
    echo "Total Gaji Bersih : Rp.". number_format($this->gajibersih) ." <br>";
  }


}

$cetak = new penggajihan();
// echo "<h2><center>Penggajihan Karyawan</center></h2>";
// echo "<b> Gaji Pokok</b> <br><br>" ;
// echo $cetak->gaji("Agus","OB");
// echo "<hr>";
// echo "<b> Tunjangan Pendidikan</b> <br><br>" ;
// echo $cetak->tunjangan("S1");
// echo "<hr>";
// echo "<b> Potongan </b> <br><br>" ;
// echo $cetak->potongan(50000,100000);
// echo "<hr>";
// echo "<b> Total Gaji Bersih </b> <br><br>" ;
// echo $cetak->gajibersih();
// echo "<hr>";
echo "<div class='container'>";
echo "<h2>Penggajihan Karyawan</h2>";

echo "<div class='card'>";
echo "<div class='card-header'>Gaji Pokok</div>";
echo "<div class='card-content'>";
echo $cetak->gaji("Agus", "Direktur");
echo "</div></div>";

echo "<div class='card'>";
echo "<div class='card-header'>Tunjangan Pendidikan</div>";
echo "<div class='card-content'>";
echo $cetak->tunjangan("S1");
echo "</div></div>";

echo "<div class='card'>";
echo "<div class='card-header'>Potongan</div>";
echo "<div class='card-content'>";
echo $cetak->potongan(50000, 100000);
echo "</div></div>";

echo "<div class='card'>";
echo "<div class='card-header'>Total Gaji Bersih</div>";
echo "<div class='card-content result'>";
echo $cetak->gajibersih();
echo "</div></div>";

echo "</div>"; // Close container



?>
</body>
</html>
