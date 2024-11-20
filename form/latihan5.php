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
<div class="container mt-5">
    <center>
        <img src="../form/WEL.jpeg" alt="" width="12%" h class="bg-white">
        <h4>PENGGAJIHAN <br> GURU/KARYAWAN YAYASAN ASSALAAM BANDUNG</h4>
    
    <form action="hasil5.php" method="post">
      <table class="bg-white text-dark mt-5 p-5  rounded shadow">
        <tr>
            <td class='bg-light pt-3  ps-3 fw-bold pb-3'>
                <i>Data Penggajihan</i>
            </td>   
            <td class='bg-light'></td>
            <td class='bg-light'></td>
        </tr>
        <tr>
            <td class='ps-3 pt-4'>No</td>
        </tr>
        <tr>
            <td class='ps-3' colspan='2' ><input type="number" name='no' class="form-control" required></td>
            <td class="pe-3"></td>
        </tr>
         <tr>
            <td class='ps-3'>Nama</td>
        </tr>
        <tr>
            <td class='ps-3' colspan='2'><input type="text" name="nama" class='form-control'  required></td>
        </tr>
        <tr>
            <td class='ps-3'>Unit Pendidikan</td>
        </tr>
        <tr>
            <td class='ps-3'>
                <select name="pendidikan" id="" class="form-select"  required>
                    <option value="-Pilih Unit-">Pilih Unit Pendidikan</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMK">SMK</option>
               </select>
            </td>
        </tr>
        <tr>
            <td class='ps-3'>Tanggal Gaji</td>
        </tr>
        <tr>
            <td class='ps-3'><input type="date" name='tgl' class="form-control"  required></td>
        </tr>
        <tr>
            <td class='ps-5'>
               <h4 class="pt-4 ps-5"><i>Gaji</i></h4>
            </td>
            <td class='ps-3'>
               <h4 class="pt-4 ps-5"><i>Potongan</i></h4>
            </td>
        </tr>
        <tr>
            <td class='ps-3'>Jabatan</td>
            <td class="ps-2">Bpjs</td>
        </tr>
        <tr>
            <td class='ps-3'>
            <select name="jabatan" id="" class="form-select"  required>
                    <option value="-Pilih Jabatan-">Pilih Jabatan</option>
                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                    <option value="Wakasek">Wakasek</option>
                    <option value="Guru">Guru</option>
                    <option value="OB">OB</option>
               </select>
               <td>
                <input type="number" name='bpjs' class="form-control ms-2 "  required>
               </td>
            </td>
        </tr>
        <tr>
            <td class='ps-3'>Lama Kerja (Tahun)</td>
            <td class="ps-2">Pinjaman</td>
        </tr>
        <tr>
            <td class='ps-3'><input type="number" class='me-3 form-control' name='lama'  required></td>
            <td><input type="number" name='pinjaman' class="form-control ms-2 me-2"  required></td>
        </tr>
        <tr>
            <td class='ps-3'>Status Kerja</td>
            <td class="ps-2">Tabungan</td>
        </tr>
        <tr>
            <td class='ps-3'>
                <select name="status" id="" class="form-select"  required>
                    <option value="Pilih Status Kerja">Pilih Status Kerja</option>
                    <option value="Menetap">Tetap</option>
                    <option value="Kontrak">Kontrak</option>
                </select>
            </td>
            <td>
                <input type="number" name="tabungan" class="ms-2 form-control"  required>
            </td>
        </tr>
        <tr>
            <td></td>
            <td class="ps-2">Lainnya</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="number" name="lainnya" id="" class="form-control ms-2"  required></td>
        </tr>
        <tr>
            <td></td>
            <td class='pe-5 '>
                <input type="submit" name="simpan" class='mt-2 ms-2 mb-4 btn btn-success text-center ' id="">
            </td>
        </tr>
      </table>
    </form>
    </center>
</div>

<div><br><br><br></div>

<!-- Optional JavaScript; choose one of the two! -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
