<?php

class ibu{

   protected $jenis ="Buah-buahan";
   public function makananfavorit(){
    echo "Makanan Favorite Mangga";
    } 
}
    class anak extends ibu{
        public function emamen(){
        echo $this->makananfavorit();
        echo "<br>";
        echo "Jenis Makanan : $this->jenis <br>";
    }

}

$cetak = new anak();
echo $cetak -> emamen();

?>