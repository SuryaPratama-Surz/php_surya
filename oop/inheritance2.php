<?php

class bangundatar{
    public $luas_persegi_panjang;
    public $luas_segitiga;
    public $persegi;
    public $lingkaran;

    public $kelilings;
    public $kelilingling;
    public $kelilingp;
    public $kelilingpj;

}
    class luas extends bangundatar{
    public function persegipanjang($p,$l){
            echo "<b>Menghitung Luas Persegi Panjang</b><br>";
            echo "Panjang : $p <br>";
            echo "Lebar : $l <br>";
        $this->luas_persegi_panjang = $p*$l;
            echo "Hasilnya : $this->luas_persegi_panjang <br>";
    }
         public function segitiga($a,$t){
            echo "<b>Menghitung  Luas Segitiga</b><br>";
            echo "Panjang : $a <br>";
            echo "Tinggi : $t <br>";
            $this->luas_segitiga = $a*$t/2;
            echo "Hasilnya : $this->luas_segitiga <br>";
    }
        public function persegi($s){
            echo "<b>Menghitung Luas Persegi</b><br>";
            echo "Sisi : $s <br>";
            $this->persegi = $s*$s;
            echo "Hasilnya : $this->persegi <br>";
     }
        public function lingkaran($r){
            echo "<b>Menghitung Luas Lingkaran</b><br>";
            echo "Jari-jari : $r <br>";
            $this->lingkaran = $r*$r*3.14;
            echo "Hasilnya : $this->lingkaran <br>";
    }

    
  }

  class keliling extends bangundatar{
    public function persegipanjang($p,$l){
        echo "<b>Menghitung Lingkaran Persegi Panjang</b><br>";
        echo "Panjang : $p <br>";
        echo "Lebar : $l <br>";
        $this->kelilingpj = 2*$p+$l;
        echo "Hasilnya : $this->kelilingpj <br>";
 } 
    public function segitiga($a,$b,$c){
        echo "<b>Menghitung Keliling Segitiga</b><br>";
        echo "Sisi A : $a <br>";
        echo "Sisi B : $b <br>";
        echo "Sisi C : $c <br>";
        $this->kelilings = $a+$b+$c;
        echo "Hasilnya : $this->kelilings <br>";
 }
    public function persegi($s){
        echo "<b>Menghitung Keliling Persegi</b><br>";
        echo "Sisi : $s <br>";
        $this->kelilingp = 4*$s;
        echo "Hasilnya : $this->kelilingp <br>";
 }
    public function lingkaran($r){
        echo "<b>Menghitung Keliling Lingkaran</b><br>";
        echo "Jari-jari : $r <br>";
        $this->kelilingling = 2*22/7*$r;
        echo "Hasilnya : $this->kelilingling <br>";
 }

     
  

        
  }

  $cetak = new luas();
  echo "<h3>Luas Bangun Datar :</h3>";
  echo $cetak -> persegipanjang(2,4);
  echo "<br>";
  echo $cetak -> segitiga(6,4);
  echo "<br>";
  echo $cetak -> persegi(4);
  echo "<br>";
  echo $cetak -> lingkaran(4);
  echo "<br>";

  $cetak2 = new keliling();
  echo "<h3>Keliling Bangun Datar :</h3>";
  echo $cetak2 -> persegipanjang(2,4);
  echo "<br>";
  echo $cetak2 -> segitiga(6,4,3);
  echo "<br>";
  echo $cetak2 -> persegi(4);
  echo "<br>";
  echo $cetak2 -> lingkaran(4);
  echo "<br>";


?>