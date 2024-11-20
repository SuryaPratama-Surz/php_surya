<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Form Penilaian Siswa</title>
    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang yang lembut */
        }
        .container {
            margin-top: 50px;
            display: flex;
            justify-content: center;
        }
        .form-container, .result-container {
            background-color: #ffffff; /* Warna putih untuk form dan hasil */
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px; /* Membatasi lebar form dan hasil */
        }
        h2 {
            color: #343a40; /* Warna teks judul */
        }
        .result-message {
            display: none; /* Sembunyikan pesan awalnya */
            font-size: 1.2em;
            margin-top: 15px;
            text-align: center;
        }
        .fade-in {
            animation: fadeIn 1s forwards;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        .thumbs-up, .thumbs-down {
            display: none; /* Sembunyikan gambar awalnya */
            margin-top: 15px;
            width: 250px; /* Ukuran gambar yang lebih kecil */
            animation: fadeIn 1s forwards; /* Tambahkan animasi */
            display: block; /* Pastikan gambar ditampilkan sebagai block */
            margin-left: auto; /* Untuk memusatkan gambar */
            margin-right: auto; /* Untuk memusatkan gambar */
        }
    </style>
</head>
<body>
<div class="container d-flex justify-content-center">
    <div class="form-container">
        <center>
            <h2>Form Penilaian Siswa</h2>
        </center>

        <form action="" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" name="name" class="form-control" placeholder="Masukkan Nama" required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select name="jurusan" class="form-select" id="jurusan" required onchange="this.form.submit()">
                    <option value="" disabled selected>-- Pilih Jurusan --</option>
                    <option value="REKAYASA PERANGKAT LUNAK" <?= (isset($_POST['jurusan']) && $_POST['jurusan'] == 'REKAYASA PERANGKAT LUNAK') ? 'selected' : '' ?>>REKAYASA PERANGKAT LUNAK</option>
                    <option value="TEKNIK SEPEDA MOTOR" <?= (isset($_POST['jurusan']) && $_POST['jurusan'] == 'TEKNIK SEPEDA MOTOR') ? 'selected' : '' ?>>TEKNIK SEPEDA MOTOR</option>
                    <option value="TEKNIK KENDARAAN RINGAN" <?= (isset($_POST['jurusan']) && $_POST['jurusan'] == 'TEKNIK KENDARAAN RINGAN') ? 'selected' : '' ?>>TEKNIK KENDARAAN RINGAN</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <select name="kelas" class="form-select" required>
                    <option value="" disabled selected>-- Pilih Kelas --</option>
                    <?php
                    if (isset($_POST['jurusan'])) {
                        $jurusan = $_POST['jurusan'];
                        $kelas = [];
                        if ($jurusan == 'REKAYASA PERANGKAT LUNAK') {
                            $kelas = ['RPL 1', 'RPL 2', 'RPL 3'];
                        } elseif ($jurusan == 'TEKNIK SEPEDA MOTOR') {
                            $kelas = ['TSM 1', 'TSM 2', 'TSM 3'];
                        } elseif ($jurusan == 'TEKNIK KENDARAAN RINGAN') {
                            $kelas = ['TKR 1', 'TKR 2', 'TKR 3'];
                        }
                        foreach ($kelas as $kelas) {
                            echo "<option value='$kelas'>$kelas</option>";
                        }
                    }
                    ?>
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
            <button type="submit" class="btn btn-danger" name="proses">Proses</button>
        </form>
    </div>

    <div class="result-container">
        <?php
        if (isset($_POST['proses'])) {
            $nama = $_POST['name'];
            $kelas = $_POST['kelas'];
            $jurusan = $_POST['jurusan'];
            $indo = $_POST['indo'];
            $inggris = $_POST['inggris'];
            $mtk = $_POST['mtk'];
            $produktif = $_POST['produktif'];

            $rata2 = ($indo + $inggris + $mtk + $produktif) / 4;
            $keterangan = $rata2 > 75 ? "Tuntas" : "Tidak Tuntas";
            $message = $rata2 > 75 ? "Selamat, Anda Tuntas!" : "Maaf, Anda Tidak Tuntas.";
            $thumbsImage = $rata2 > 75 ? "thumbs-up.png" : "thumbs-down.png"; // Ganti dengan path gambar sesuai

            echo "<h4 class='text-center'>Hasil Nilai</h4>";
            echo "<table class='table table-striped table-bordered'>";
            echo "<tr><td>Nama</td><td>:</td><td>$nama</td></tr>";
            echo "<tr><td>Kelas</td><td>:</td><td>$kelas</td></tr>";
            echo "<tr><td>Jurusan</td><td>:</td><td>$jurusan</td></tr>";
            echo "<tr><td>Nilai Bahasa Indonesia</td><td>:</td><td>$indo</td></tr>";
            echo "<tr><td>Nilai Bahasa Inggris</td><td>:</td><td>$inggris</td></tr>";
            echo "<tr><td>Nilai Matematika</td><td>:</td><td>$mtk</td></tr>";
            echo "<tr><td>Nilai Produktif</td><td>:</td><td>$produktif</td></tr>";
            echo "<tr><td>Nilai Rata-rata</td><td>:</td><td>$rata2</td></tr>";
            echo "<tr><td>Keterangan</td><td>:</td><td>$keterangan</td></tr>";
            echo "</table>";
            echo "<div class='result-message fade-in'>$message</div>";
            echo "<img src='$thumbsImage' class='thumbs-" . ($rata2 > 75 ? "up" : "down") . " fade-in' alt='Thumbs'>"; // Menampilkan gambar jempol
        }
        ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Menampilkan pesan hasil dengan animasi
    document.addEventListener("DOMContentLoaded", function() {
        const resultMessage = document.querySelector('.result-message');
        if (resultMessage) {
            resultMessage.style.display = 'block'; // Tampilkan pesan hasil
        }
    });
</script>
</body>
</html>
