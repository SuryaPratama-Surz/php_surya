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
<body class="bg-primary text-light">
<div class="container mt-5">
    <center>
        <img src="smk.png" alt="" width="10%" class="bg-white rounded mb-4">
        <h2>Form Penilaian Siswa</h2>
    </center>
    
    <form action="hasil.php" method="post" class="bg-light text-dark p-4 rounded shadow">
        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" name="name" class="form-control" placeholder="Masukkan Nama" required>
        </div>
        <div class="mb-3">
            <label for="kelas" class="form-label">Kelas</label>
            <input type="text" name="kelas" class="form-control" placeholder="Masukkan Kelas" required>
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select name="jurusan" class="form-select" required>
                <option value="" disabled selected>-- Pilih Jurusan --</option>
                <option value="REKAYASA PERANGKAT LUNAK">REKAYASA PERANGKAT LUNAK</option>
                <option value="TEKNIK SEPEDA MOTOR">TEKNIK SEPEDA MOTOR</option>
                <option value="TEKNIK KENDARAAN RINGAN">TEKNIK KENDARAAN RINGAN</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="indo" class="form-label">Nilai Bahasa Indonesia</label>
            <input type="number" name="indo" class="form-control" placeholder="Masukkan Nilai" required>
        </div>
        <div class="mb-3">
            <label for="inggris" class="form-label">Nilai Bahasa Inggris</label>
            <input type="number" name="inggris" class="form-control" placeholder="Masukkan Nilai" required>
        </div>
        <div class="mb-3">
            <label for="mtk" class="form-label">Nilai Matematika</label>
            <input type="number" name="mtk" class="form-control" placeholder="Masukkan Nilai" required>
        </div>
        <div class="mb-3">
            <label for="produktif" class="form-label">Nilai Produktif</label>
            <input type="number" name="produktif" class="form-control" placeholder="Masukkan Nilai" required>
        </div>
        <button type="submit" class="btn btn-danger" name='proses'>Proses</button>
    </form>

  
</div>

<!-- Optional JavaScript; choose one of the two! -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
