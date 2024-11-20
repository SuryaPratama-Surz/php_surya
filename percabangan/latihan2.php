<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <center class="mt-5 pt-5">
    <div>
  <table class="table-hover mt-5 mb-5 me-5 ms-5"> 
   <tr>
<?php
 
$nama = "Kimin";
$jk = "Laki-laki";
$jenis = "Makanan";
$menu = "Ayam Goreng";
$jumlah = 2;

echo "~~~~~~~~~~RESTORAN MAMIH~~~~~~~~~~<br>
     -------------------------------------------------------<br><br>";

echo "  <td>  Nama </td>
        <td>  : </td>
        <td>  $nama </td>
        </tr><tr>";
        
echo "  <td>  Jenis Kelamin </td>
        <td>  : </td>
        <td>  $jk </td>
        </tr><tr>";
   



    if ($jenis == "Makanan") {
        echo "<tr><td>Jenis </td><td>:</td><td> Makanan</td>";
   
    if ($menu == "Nasi Goreng") {
        $nas = 10000;
        $harga = $nas * $jumlah;
        echo "<tr><td>Menu</td><td>:</td><td>Nasi Goreng</td></tr>";
        if ($harga > 50000) {
            $harga = $nas * $jumlah;
            $diskon = $harga * 0.2 ;
            $harga1 = $harga - $diskon;
            echo "<tr><td>Harga</td> <td>:</td><td>$nas</td></tr>";
            echo "<tr><td>Jumlah </td><td>:</td><td> $jumlah </td></tr>";
            echo "<tr><td>Total </td><td>:</td><td> $harga </td></tr>";
            echo "<tr><td>Diskon 20% </td><td>:</td><td> $diskon</td></tr>";
            echo "<tr><td>Total Bayar</td><td>:</td><td> $harga1 </td></tr>";
        } else {
            echo "<tr><td>Harga</td><td>: </td><td>$nas </td></tr>";
            echo "<tr><td>Jumlah </td><td>:</td><td> $jumlah </td></tr>";
            echo "<tr><td>Diskon 20% </td><td>:</td><td> 0 </td></tr>";
            echo "<tr><td>Total Bayar </td><td>:</td><td> $harga </td></tr>";
           

        } 
    } elseif ($menu == "Mie Goreng") {
        $mi=15000;
        $harga = $mi * $jumlah;
        echo "<tr><td>Menu </td><td>:</td><td>Mie Goreng</td>";
        if ($harga >= 50000) {
            $harga = $nas * $jumlah;
           $diskon = $harga * 0.2 ;
           $harga1 = $harga - $diskon;
            echo "<tr><td>Harga</td> <td>:</td><td>$mi</td></tr>";
            echo "<tr><td>Jumlah </td><td>:</td><td> $jumlah </td></tr>";
            echo "<tr><td>Total </td><td>:</td><td> $harga </td></tr>";
            echo "<tr><td>Diskon 20% </td><td>:</td><td> $diskon</td></tr>";
            echo "<tr><td>Total Bayar</td><td>:</td><td> $harga1 </td></tr>";
        } else {
            echo "<tr><td>Harga</td><td>: </td><td>$mi </td></tr>";
            echo "<tr><td>Jumlah </td><td>:</td><td> $jumlah </td></tr>";
            echo "<tr><td>Diskon 20% </td><td>:</td><td> 0 </td></tr>";
            echo "<tr><td>Total Bayar </td><td>:</td><td> $harga </td></tr>";
            
           

        } 
        
    } elseif ($menu == "Ayam Goreng") {
        echo "<tr><td>Menu </td><td>:</td><td>Ayam Goreng</td>";
        $ayam = 20000;
        $harga = $ayam * $jumlah;
        if ($harga > 50000) {
            $harga = $ayam * $jumlah;
           $diskon = $harga * 0.2 ;
           $harga1 = $harga - $diskon;
            echo "<tr><td>Harga</td> <td>:</td><td>$ayam</td></tr>";
            echo "<tr><td>Jumlah </td><td>:</td><td> $jumlah </td></tr>";
            echo "<tr><td>Total </td><td>:</td><td> $harga </td></tr>";
            echo "<tr><td>Diskon 20% </td><td>:</td><td> $diskon</td></tr>";
            echo "<tr><td>Total Bayar</td><td>:</td><td> $harga1 </td></tr>";
        } else {
            echo "<tr><td>Harga</td><td>: </td><td>$ayam</td></tr>";
            echo "<tr><td>Jumlah </td><td>:</td><td> $jumlah </td></tr>";
            echo "<tr><td>Diskon 20% </td><td>:</td><td> 0 </td></tr>";
            echo "<tr><td>Total Bayar </td><td>:</td><td> $harga </td></tr>";
           

        } 
    } else {
        echo "<tr><td>Menu </td><td>:</td><td> Tidak Ada</td>";
    }

    } elseif ($jenis == "Minuman") {
    echo "<tr><td>Jenis </td><td>:</td><td> Minuman</td>";
    if ($menu == "Air") {
        $air = 5000;
        $harga = $air * $jumlah;
        echo "<tr><td>Menu</td><td>:</td><td>Air Mineral</td></tr>";
        if ($harga > 50000) {
            $harga = $air * $jumlah;
            $diskon = $harga * 0.2 ;
            $harga1 = $harga - $diskon;
            echo "<tr><td>Harga</td> <td>:</td><td>$air</td></tr>";
            echo "<tr><td>Jumlah </td><td>:</td><td> $jumlah </td></tr>";
            echo "<tr><td>Total </td><td>:</td><td> $harga </td></tr>";
            echo "<tr><td>Diskon 20% </td><td>:</td><td> $diskon</td></tr>";
            echo "<tr><td>Total Bayar</td><td>:</td><td> $harga1 </td></tr>";
        } else {
            echo "<tr><td>Harga</td><td>: </td><td>$air </td></tr>";
            echo "<tr><td>Jumlah </td><td>:</td><td> $jumlah </td></tr>";
            echo "<tr><td>Diskon 20% </td><td>:</td><td> 0 </td></tr>";
            echo "<tr><td>Total Bayar </td><td>:</td><td> $harga </td></tr>";
           

        } 
    } elseif ($menu == "Fresh Tea") {
        $fresh=7000;
        $harga = $fresh * $jumlah;
        echo "<tr><td>Menu </td><td>:</td><td>Fresh Tea</td>";
        if ($harga > 50000) {
            $harga = $fresh * $jumlah;
           $diskon = $harga * 0.2 ;
           $harga1 = $harga - $diskon;
            echo "<tr><td>Harga</td> <td>:</td><td>$fresh</td></tr>";
            echo "<tr><td>Jumlah </td><td>:</td><td> $jumlah </td></tr>";
            echo "<tr><td>Total </td><td>:</td><td> $harga </td></tr>";
            echo "<tr><td>Diskon 20% </td><td>:</td><td> $diskon</td></tr>";
            echo "<tr><td>Total Bayar</td><td>:</td><td> $harga1 </td></tr>";
        } else {
            echo "<tr><td>Harga</td><td>: </td><td>$fresh </td></tr>";
            echo "<tr><td>Jumlah </td><td>:</td><td> $jumlah </td></tr>";
            echo "<tr><td>Diskon 20% </td><td>:</td><td> 0 </td></tr>";
            echo "<tr><td>Total Bayar </td><td>:</td><td> $harga </td></tr>";
            
           

        } 
    } elseif ($menu == "Jus") {
        echo "<tr><td>Menu </td><td>:</td><td>Jus</td>";
        $jus = 12000;
        $harga = $jus * $jumlah;
        if ($harga > 50000) {
            $harga = $jus * $jumlah;
           $diskon = $harga * 0.2 ;
           $harga1 = $harga - $diskon;
            echo "<tr><td>Harga</td> <td>:</td><td>$jus</td></tr>";
            echo "<tr><td>Jumlah </td><td>:</td><td> $jumlah </td></tr>";
            echo "<tr><td>Total </td><td>:</td><td> $harga </td></tr>";
            echo "<tr><td>Diskon 20% </td><td>:</td><td> $diskon</td></tr>";
            echo "<tr><td>Total Bayar</td><td>:</td><td> $harga1 </td></tr>";
        } else {
            echo "<tr><td>Harga</td><td>: </td><td>$jus</td></tr>";
            echo "<tr><td>Jumlah </td><td>:</td><td> $jumlah </td></tr>";
            echo "<tr><td>Diskon 20% </td><td>:</td><td> 0 </td></tr>";
            echo "<tr><td>Total Bayar </td><td>:</td><td> $harga </td></tr>";
           

        } 

    } else {
        echo "<tr><td>Menu </td><td>:</td><td> Tidak Ada</td>";
    }

    } else {
    echo "<tr><td>Jenis </td><td>:</td><td> Tidak Ada</td>";
    }  


echo "</tr>
</table class='mb-2'>";
echo "<br>~~~~~~~~~~~~TerimaKasih~~~~~~~~~~~~<br>
     --------------------------------------------------------<br>";
  
?>
</div>
</center>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

