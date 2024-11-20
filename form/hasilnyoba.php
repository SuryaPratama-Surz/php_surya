<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Struk Gaji</title>
</head>
<body>
<div class="container mt-5">
    <h3 class="text-center">Struk Gaji</h3>
    <table class="table table-bordered bg-light text-primary mt-2 rounded shadow">
        <?php
        if (isset($_POST['simpan'])) {
            $nama = $_POST['nama'];
            $no = $_POST['no'];
            $pendidikan = $_POST['pendidikan'];
            $tgl = $_POST['tgl'];
            $jabatan = $_POST['jabatan'];
            $bpjs = $_POST['bpjs'];
            $tabungan = $_POST['tabungan'];
            $pinjaman = $_POST['pinjaman'];
            $lainnya = $_POST['lainnya'];
            $status = $_POST['status'];
            $lama = $_POST['lama'];

            echo "<tr><td colspan='3' class='text-center bg-light'><strong>$nama</strong></td></tr>";
            echo "<tr><td>No</td><td>:</td><td>$no</td></tr>";
            echo "<tr><td>Unit Pendidikan</td><td>:</td><td>$pendidikan</td></tr>";
            echo "<tr><td>Tanggal Gaji</td><td>:</td><td>$tgl</td></tr>";

            // Gaji berdasarkan jabatan
            $gaji = ($jabatan == "Kepala Sekolah") ? 10000000 :
                    (($jabatan == "Wakasek") ? 7500000 :
                    (($jabatan == "Guru") ? 5000000 :
                    (($jabatan == "OB") ? 2500000 : 0)));

            echo "<tr><td>Jabatan</td><td>:</td><td>$jabatan</td></tr>";
            echo "<tr><td>Gaji</td><td>:</td><td>Rp." . number_format($gaji, 0, ',', '.') . "</td></tr>";
            echo "<tr><td>Lama Kerja</td><td>:</td><td>$lama Tahun</td></tr>";
            $tunjangan = ($lama > 5) ? 1000000 : 0;
            $bonus = ($status == 'Menetap') ? 500000 : 0;
            $gajiKotor = $gaji + $tunjangan + $bonus;

            echo "<tr><td>Tunjangan</td><td>:</td><td>Rp." . number_format($tunjangan, 0, ',', '.') . "</td></tr>";
            echo "<tr><td>Bonus</td><td>:</td><td>Rp." . number_format($bonus, 0, ',', '.') . "</td></tr>";
            echo "<tr><td>Gaji Kotor</td><td>:</td><td>Rp." . number_format($gajiKotor, 0, ',', '.') . "</td></tr>";

            $potongan = $bpjs + $pinjaman + $tabungan + $lainnya;
            $total = $gajiKotor - $potongan;

            echo "<tr><td colspan='3' class='text-center bg-light'><strong>Potongan</strong></td></tr>";
            echo "<tr><td>Bpjs</td><td>:</td><td>Rp." . number_format($bpjs, 0, ',', '.') . "</td></tr>";
            echo "<tr><td>Pinjaman</td><td>:</td><td>Rp." . number_format($pinjaman, 0, ',', '.') . "</td></tr>";
            echo "<tr><td>Tabungan</td><td>:</td><td>Rp." . number_format($tabungan, 0, ',', '.') . "</td></tr>";
            echo "<tr><td>Lainnya</td><td>:</td><td>Rp." . number_format($lainnya, 0, ',', '.') . "</td></tr>";
            echo "<tr><td>Total Potongan</td><td>:</td><td>Rp." . number_format($potongan, 0, ',', '.') . "</td></tr>";
            echo "<tr><td class='fw-bold'>Gaji Bersih</td><td>:</td><td class='fw-bold'>Rp." . number_format($total, 0, ',', '.') . "</td></tr>";
        }
        ?>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
