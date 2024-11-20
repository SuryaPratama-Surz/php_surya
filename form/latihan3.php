<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Latihan 3!</title>
  </head>
  <body>
    <center>
        <img src="smk.png" alt="" width= 10% srcset="" class="mt-5">
    <form action="" method="post" class="pt-1">  
       <table class="form"> 
        <tr>
            <td class="fw-bold">Nama Lengkap</td>
            <td class="pe-2 ps-2">:</td>
            <td><input type="text" name="name" value="" placeholder="        Masukan Nama"></td>
        </tr>
        <tr>
            <td class="fw-bold">Tempat Lahir</td>
            <td class="pe-2 ps-2">:</td>
            <td><input type="text" name="lahir" value="" placeholder="        Tempat Lahir"></td>
        </tr>
        <tr>
            <td class="fw-bold">Tanggal Lahir</td>
            <td class="pe-2 ps-2">:</td>
            <td><input type="datetime-local" name="tgl" value=""></td>
        </tr>
        <tr>
            <td class="fw-bold">Jenis Kelamin</td>
            <td class="pe-2 ps-2">:</td>
            <td>
                <input type="radio" name="jk" value="Laki-laki"> Laki-laki
                <input type="radio" name="jk" value="Perempuan"> Perempuan
            </td>
        </tr>
        <tr>
            <td class="fw-bold">Alamat</td>
            <td class="pe-2 ps-2">:</td>
            <td>
                <textarea name="alamat"></textarea>
            </td>
        </tr>
        <tr>
            <td class="fw-bold">Agama</td>
            <td class="pe-2 ps-2">:</td>
            <td>
                <select name="agama" id="">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
                
            </td>
           </tr>
            <tr>
            <td class="fw-bold">Pendidikan Terakhir</td>
            <td class="pe-2 ps-2">:</td>
            <td>
                <select name="pendidikan" id="">
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMK">SMK/SMA</option>
                    <option value="Perguruan Tinggi">Perguruan Tinggi</option>
                </select>
                
            </td>
            
        </tr>
        <tr>
            <td class="fw-bold">Status</td>
            <td class="pe-2 ps-2">:</td>
            <td>
                <select name="status" id="">
                    <option value="Menikah">Menikah</option>
                    <option value="Belum Menikah">Belum Menikah</option>
                </select>
                
            </td>
        </tr>
        <tr>
            <td class="fw-bold">Hobi</td>
            <td class="pe-2 ps-2">:</td>
            <td>
                <input type="checkbox" name="hobi" value="Membaca"> Membaca
                <input type="checkbox" name="hobi" value="Menulis"> Menulis
                <input type="checkbox" name="hobi" value="Push Rank"> Push Rank
            </td>
        </tr>
        <tr>
            <td class="fw-bold">Cita-cita</td>
            <td class="pe-2 ps-2">:</td>
            <td>
                <select name="cita" id="">
                    <option value="Programmer">Programmer</option>
                    <option value="Guru">Guru</option>
                    <option value="Teknisi">Teknisi</option>
                </select>
            </td>
        </tr>
        <tr>
            <td class="fw-bold">Kata-kata Bijak</td>
            <td class="pe-2 ps-2">:</td>
            <td>
                <textarea name="katakata"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" class="rounded-pill bg-danger" name="proses"></td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        
    
    </form>
    <br><br><br>
    <?php
       
       if (isset($_POST['proses'])) {
        $nama2 = $_POST['name'];
        $lahir = $_POST['lahir'];
        $tgl = $_POST['tgl'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $agama = $_POST['agama'];
        $pendidikan = $_POST['pendidikan'];
        $status = $_POST ['status'];
        $hobi = $_POST['hobi'];
        $cita = $_POST['cita'];
        $kata = $_POST['katakata'];
      
      
        echo "<tr><td>Nama</td><td> : </td> <td> $nama2 </td>";
        echo "<tr><td>Tempat Lahir</td><td> : </td> <td> $lahir </td>";
        echo "<tr><td>Tanggal Lahir</td><td> : </td> <td> $tgl </td>";
        echo "<tr><td>Jenis Kelamin</td><td> : </td> <td> $jk </td>";
        echo "<tr><td>Alamat</td><td> : </td> <td> $alamat </td>";
        echo "<tr><td>Agama</td><td> : </td> <td> $agama </td>";
        echo "<tr><td>Pendidikan Terakhir</td><td> : </td> <td> $pendidikan </td>";
        echo "<tr><td>Status</td><td> : </td> <td> $status </td>";
        echo "<tr><td>Hobi</td><td> : </td> <td> $hobi </td>";
        echo "<tr><td>Cita-cita</td><td> : </td> <td> $cita </td>";
        echo "<tr><td>Kata-Kata Bijak</td><td> : </td> <td> $kata </td>";
        
           
       }
    
    ?>
    </table>
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