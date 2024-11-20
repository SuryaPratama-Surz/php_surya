

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="wl.css">
    
     
    <title>Menu</title>

  </head>
  <body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="img/smk.png" alt="" width="70"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="home.php">Kembali</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   <!--NavbarAkhir-->

   <!--  JUMBROTON -->
   <div class=" text-center pt-5 mt-5">
        <img src="img/smk.png"  alt="ini foto" width="15%">
        <h2 class=" mt-3">Kasir.hub</h2>
        <h3>Menu Pesanan</h3>
      </div>  
      <!-- Jumbrot akhir -->


   <!--Isi-->
   <section>
    <form action="menu.php" method="post">
    <div class="row justify-content-center mt-5">
        <div class="col-sm-4 mt-2">
        <div class="card rounded">
        <div class="card-header">
            Pilih Menu
        </div>
    <div class="card-body">
  <p class="card-select">
  <select class="form-select" name="men" aria-label="Default select example">
  <option selected>-Menu-</option>
  <option value="1" name="1">Makanan</option>
  <option value="2" name="2">Minuman</option>
   </select>
    <p class="card-btn justify-content-center">
     <button class="btn btn-primary" name="submit">Submit</button>
    </p>
     </div>
   </div>
  </div>
</div>
</form>
</section>
        
       
   <!--Akhir Isi-->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>



  <?php

   
  

  if (isset($_POST['submit'])) {
     $m = $_POST['men'];


    if ($m == "2") {

    echo '<section class= "mb-5 pb-5">
    <form action="menu.php" method="post">
    <div class="row justify-content-center">
        <div class="col-sm-4 mt-2">
        <div class="card">
        <div class="card-header">
            Anda memesan minuman
        </div>
    <div class="card-body">
  <p class="card-select">
  <div class= "mb-3">
    <label for="pemesan" class="form-label">Nama Pemesan</label>
    <input type="text" class="form-control" name="nama" placeholder="Nama Pemesan">

  </div>
  <div class="mb-3">
    <label  class="form-label">Menu</label>
    <select class="form-select" name="menu">
    <option selected>-Menu-</option>
    <option value="Air mineral" name="1">Air mineral</option>
    <option value="Fresh Tea" name="2">Fresh Tea</option>
    <option value="Jus" name="3">Jus</option>
     </select>
     <div class="mb-3">
     <label  class="form-label mt-2">Porsi</label>
     <input type="number" class="form-control" name="porsi" placeholder="Porsi">
   </div>
  </div>
  <button type="submit" value="sub"  name="sub" class="btn btn-primary">Submit</button>
     </div>
   </div>
  </div>
</div>
</form>
</section>
';
 


  } elseif ($m == "1") {

    echo '<section class= "mb-5 pb-5">
    <form action="menu.php" method="post">
    <div class="row justify-content-center">
        <div class="col-sm-4 mt-2">
        <div class="card">
        <div class="card-header">
            Anda memesan makanan
        </div>
    <div class="card-body">
  <p class="card-select">
  <div class= "mb-3">
    <label for="pemesan" class="form-label">Nama Pemesan</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Nama Pemesan">

  </div>
  <div class="mb-3">
    <label  class="form-label">Menu</label>
    <select class="form-select" name="menu">
    <option selected>-Menu-</option>
    <option value="Nasi Goreng" name="1">Nasi Goreng</option>
    <option value="Mie Goreng" name="2">Mie Goreng</option>
    <option value="Ayam Goreng" name="3">Ayam Goreng</option>
     </select>
     <div class="mb-3">
     <label  class="form-label mt-2">Porsi</label>
     <input type="number" class="form-control" name="porsi" placeholder="Porsi">
   </div>
  </div>
  <button type="submit" value="sub"  name="sub" class="btn btn-primary">Submit</button>
     </div>
   </div>
  </div>
</div>
</form>
</section>
';
} 



  } else {
    echo "<center class='mt-5'>Anda belum memilih menu</center>";
  }
?>





<?php


if(isset($_POST['sub'])){
    $nama = $_POST['nama'];
    $menu = $_POST['menu'];
    $porsi = $_POST['porsi'];
    //cek ke koneksi
    include_once("koneksi.php");
    //memasukan ke tabel DB
    $result = mysqli_query($koneksi, "INSERT INTO data (nama,menu,porsi) VALUES('$nama',
    '$menu','$porsi')");
}


if (isset($_POST['sub'])) {
  $nama = $_POST['nama'];
  $menu = $_POST['menu'];
  $porsi = $_POST['porsi'];
  if ($nama == "") {
    echo "<center>Silahkan isi nama dengan benar</center>";
  } else {
  echo "<section>
    <div class='card-body'>
  <p class='card-select'>
  <center><a href='rincian.php' class='text-white bg-dark rounded btn mt-5 ps-2 pe-2 pt-2 pb-2' style='text-decoration-none'>Lihat Data</a></center>
     </div>";
  }
  

     if (isset($_POST['sub'])) {
      $nama = $_POST['nama'];
      $menu = $_POST['menu'];
      $porsi = $_POST['porsi'];
      if ($menu == "-Menu-") {
        echo "<center>Silahkan isi pesanan dengan benar</center>";
      } else {
      
        
      if ($porsi == "") {
        echo "<center>Silahkan isi pesanan dengan benar</center>";
      } else {
    
      }

    // echo "<center><a href='pembayaran.php' class='text-white bg-dark rounded mt-5' style='text-decoration-none'>Lihat Pembayaran</a></center>";
   
  }
 }
}


// if ($sub=="") {
//  
//   echo "<center>Silahkan isi pesanan dengan benar</center>";

//  } else {

//   echo "<center><a href='rincian.php' class='text-white bg-dark rounded' style='text-decoration-none'>Lihat Data</a></center>";
//  }



?>
 </html>