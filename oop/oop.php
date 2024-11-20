<?php

class Motor{
    var $warna;
    var $nama;

  
    public function __construct(){
        echo "Mio Racing <br>";
    }  

    public function spek(){
        echo "Spek Ghoib";
    }
    
    public function keluaran(){
        echo "Keluaran 2009";
    }
    public function __destruct(){
        echo "Suara khas knalpot !Mberrrrr";
    }
    
}
 
 $hasil = new motor();

 echo $hasil -> spek();
 echo "<br>";
 echo $hasil -> keluaran();
 echo "<br>";

 echo $hasil-> Nama = " Nama : Yamaha Mio ZX";
 echo "<br>";
 echo $hasil-> warna = " Warna : Hitam ";
 echo "<br>";


?>