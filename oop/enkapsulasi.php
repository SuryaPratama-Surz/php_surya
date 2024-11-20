<?php

class mobil{

   private $pemilik = "Agus";
   public function jenis(){
    echo "Jenis Mobil Lambo X 33 <br>";
    echo $this->pemilik;
    
   }

}

$cetak = new mobil();

echo $cetak -> jenis();

  
?>