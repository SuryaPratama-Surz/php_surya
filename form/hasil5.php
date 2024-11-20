<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Latihan!</title>
</head>
<body>
<center>
<h3 class="mt-4">Struk Gaji</h3>    
    <table class="bg-white text-primary mt-2 p-5 p-2  rounded shadow" width="5%">
    <?php
    
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $no = $_POST['no'];
        $unitpendidikan = $_POST['pendidikan'];
        $tglgaji = $_POST['tgl'];
        $jabatan = $_POST['jabatan'];
        $bpjs = $_POST['bpjs'];
        $tabungan = $_POST['tabungan'];
        $pinjaman = $_POST['pinjaman'];
        $lainnya = $_POST['lainnya'];
        $status = $_POST['status'];
        $lama = $_POST['lama'];

    
    
        echo"<tr><td class='bg-light pt-3 ms-5 pb-3 text-center' colspan='4' >$nama</td><td></td></td><tr><td><br></td></tr>";
        echo "<tr><td></td><td class='text-center pt-3 pb-3'><h4>Primary Card Title</h4></td></tr>";
        echo "<tr><td class='ps-5'>No</td><td>:</td><td class='pe-5'>$no</td></tr>";
        echo "<tr><td class='ps-5'>Nama</td><td>:</td><td class='pe-5'>$nama</td></tr>";
        echo "<tr><td class='ps-5' >Unit Pendidikan</td><td>:</td><td class='pe-5'>$unitpendidikan</td></tr>";
        echo "<tr><td class='ps-5'>Tanggal Gaji</td><td>:</td><td class='pe-5'>$tglgaji</td></tr>";
        echo "<tr><td></td><td class='text-center  pt-3'><h4>Gaji</h4></td></tr>";
        echo "<tr><td class='ps-5'>Jabatan</td><td>:</td><td class='pe-5'>$jabatan</td></tr>";
    
        $kepsek = 1000000;
        $wakasek = 7500000;
        $guru = 5000000;
        $ob = 2500000;

        if ($jabatan == "Kepala Sekolah") {
            echo "<tr><td class='ps-5'>Gaji</td><td>:</td><td class='pe-5'>Rp.10.000.000</td></tr>";
    
        } elseif ($jabatan == "Wakasek") {
            echo "<tr><td class='ps-5'>Gaji</td><td>:</td><td class='pe-5'>Rp.
            7.500.000</td></tr>";
    
        } elseif ($jabatan == "Guru") {
            echo "<tr><td class='ps-5'>Gaji</td><td>:</td><td class='pe-5'>Rp.
            5.000.000</td></tr>";
    
        } elseif ($jabatan == "OB") {
            echo "<tr><td class='ps-5'>Gaji</td><td>:</td><td class='pe-5'>Rp.
            2.500.000</td></tr>";
    
        } else {
            echo "pilih jabatan";
        }

        echo "<tr><td class='ps-5'>Lama Kerja</td><td>:</td><td class='pe-5'>$lama Tahun</td></tr>";

        if ($lama > 5 ) {
            $tunjang = 1000000;
            echo "<tr><td class='ps-5'>Tunjangan Lama Kerja</td><td>:</td><td class='pe-5'>Rp.1.000.000</td></tr>";

        } else {
            $tunjang = 0;
            echo "<tr><td class='ps-5'>Tunjangan Lama Kerja</td><td>:</td><td class='pe-5'>-</td></tr>";
        }

        echo "<tr><td class='ps-5'>Status Kerja</td><td>:</td><td class='pe-5'>$status</td></tr>";
      


        if ($status == 'Menetap') {
            $bonus = 500000;
            echo "<tr><td class='ps-5'>Bonus</td><td>:</td><td class='pe-5'>Rp.500.000</td></tr>";
        } else {
            $bonus = 0;
            echo "<tr><td class='ps-5'>Bonus</td><td>: $bonus</td><td class='pe-5'>-</td></tr>";
        }




        if ($jabatan == "Kepala Sekolah") {
            $gajikotor = $kepsek + $tunjang + $bonus;
            echo "<tr><td class='ps-5'>Gaji Kotor</td><td>:</td><td class='pe-5'> Rp.".number_format($gajikotor)."</td></tr>";
    
        } elseif ($jabatan == "Wakasek") {
            $gajikotor = $wakasek + $tunjang + $bonus;
            echo "<tr><td class='ps-5'>Gaji Kotor</td><td>:</td><td class='pe-5'>".number_format($gajikotor)."</td></tr>";
    
        } elseif ($jabatan == "Guru") {
            $gajikotor = $guru + $tunjang + $bonus;
            echo "<tr><td class='ps-5'>Gaji Kotor</td><td>:</td><td class='pe-5'>".number_format($gajikotor)."</td></tr>";

        } elseif ($jabatan == "OB") {
             $gajikotor = $ob + $tunjang + $bonus;
            echo "<tr><td class='ps-5'>Gaji Kotor</td><td>:</td><td class='pe-5'>Rp ".number_format($gajikotor)."</td></tr>";
        } else {
            $gajikotor = $ob + $tunjang ;
            echo "<tr><td class='ps-5'>Gaji Kotor</td><td>:</td><td class='pe-5'>".number_format($gajikotor)."</td></tr>";
        }
    }

        echo "<tr><td></td><td class=' pt-3 text-center '><h4>Potongan</h4></td></tr>";
        echo "<tr><td class='ps-5'>Bpjs</td><td>:</td><td class='pe-5'>Rp. ".number_format($bpjs)."</td></tr>";
        echo "<tr><td class='ps-5'>Pinjaman</td><td>:</td><td class='pe-5'>". number_format($pinjaman)."</td></tr>";
        echo "<tr><td class='ps-5'>Tabungan</td><td>:</td><td class='pe-5'>". number_format($tabungan)."</td></tr>";
        echo "<tr><td class='ps-5'>Lainnya</td><td>:</td><td class='pe-5'>Rp.". number_format($lainnya)."</td></tr>";
        $totalpotongan = $pinjaman + $pinjaman + $tabungan + $lainnya;
        echo "<tr><td class='ps-5 fw-bold'>Total Potongan</td><td>:</td><td class='pe-5'>Rp". number_format($totalpotongan)."</td></tr>";
        echo "<tr><td class='ps-5'></td><td class='text-center  pt-3'><h3>Total</h3></td></tr>";
        $potongan = $bpjs + $pinjaman + $tabungan + $lainnya ;
        $total = $gajikotor - $potongan;

        echo "<tr><th class='ps-5'>Gaji Bersih</th><td>:</td><td class='pe-5'>Rp.". number_format($total)."</td></tr><tr><td><br><br></td></tr>";
        
    
      
        
        
    
    
    
    ?>
       
       </table>
       <div><br><br><div>