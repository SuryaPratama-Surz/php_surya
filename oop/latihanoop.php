<?php

class bangundatar{

    public $hasil1;
    public $hasil2;
    public $hasil3;
    public $hasil4;

    function segitiga($a,$t){
        echo "<b>Menghitung Luas Segitiga</b><br>";
        echo "Panjang : $a <br>";
        echo "Tinggi : $t <br>";
        $this->hasil1 = $a*$t/2;
        echo "Hasilnya : $this->hasil1 <br>";
    }
    
    function persegi($s){
        echo "<b>Menghitung Persegi</b><br>";
        echo "Sisi : $s <br>";
        $this->hasil2 = $s*$s;
        echo "Hasilnya : $this->hasil2 <br>";
    }
    
    function persegipanjang($p,$l){
        echo "<b>Menghitung Persegi Panjang</b><br>";
        echo "Panjang : $p <br>";
        echo "Lebar : $l <br>";
       $this->hasil3 = $p*$l;
        echo "Hasilnya : $this->hasil3 <br>";
    }
    
    function lingkaran($r){
        echo "<b>Menghitung Lingkaran</b><br>";
        echo "Jari-jari : $r <br>";
       $this->hasil4 = $r*$r*3.14;
        echo "Hasilnya : $this->hasil4 <br>";
    }

}

$cetak = new bangundatar();

echo $cetak->segitiga(6,4);
echo $cetak->persegi(2);
echo $cetak->persegipanjang(7,7);
echo $cetak->lingkaran(2);

?>   