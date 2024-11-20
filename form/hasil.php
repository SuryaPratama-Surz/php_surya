
<style>
.mt-5 {
    margin-top: 30px;
}

.text-center {
    text-align: center;
}

.table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
    border-radius: 8px;
    overflow: hidden; /* Agar sudut tabel melengkung terlihat */
}

.table-light {
    background-color: #f8f9fa;
}

.table-striped tr:nth-child(odd) {
    background-color: #e9ecef; /* Warna latar untuk baris ganjil */
}

.table td {
    padding: 12px;
    border: 1px solid #dee2e6;
    text-align: left;
}

.alert {
    background-color: #ffcccc;
    color: #d8000c;
    padding: 10px;
    margin-top: 20px;
    border-radius: 5px;
    border: 1px solid #d8000c;
    text-align: center;
}
</style>

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

        echo "<div class='mt-5'><h4 class='text-center'>Hasil Nilai</h4>";
        echo "<table class='table table-light table-striped'>";
        echo "<tr><td>Nama</td><td>:</td><td>$nama</td></tr>";
        echo "<tr><td>Kelas</td><td>:</td><td>$kelas</td></tr>";
        echo "<tr><td>Jurusan</td><td>:</td><td>$jurusan</td></tr>";
        echo "<tr><td>Nilai Bahasa Indonesia</td><td>:</td><td>$indo</td></tr>";
        echo "<tr><td>Nilai Bahasa Inggris</td><td>:</td><td>$inggris</td></tr>";
        echo "<tr><td>Nilai Matematika</td><td>:</td><td>$mtk</td></tr>";
        echo "<tr><td>Nilai Produktif</td><td>:</td><td>$produktif</td></tr>";
        echo "<tr><td>Nilai Rata-rata</td><td>:</td><td>$rata2</td></tr>";
        echo "<tr><td>Keterangan</td><td>:</td><td>$keterangan</td></tr>";
        echo "</table></div>";
    }
    ?>