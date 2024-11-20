<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Latihan!</title>
</head>
<body>
<div class="container mt-5">
    <div class="text-center mb-4">
        <img src="WEL.jpeg" alt="" width="12%">
        <h4>PENGGAJIHAN <br> GURU/KARYAWAN YAYASAN ASSALAAM BANDUNG</h4>
    </div>

    <form action="hasilnyoba.php" method="post">
        <div class="bg-white text-dark p-4 rounded shadow">
            <h5 class="mb-3">Data Penggajihan</h5>
            
            <div class="mb-3">
                <label for="no" class="form-label">No</label>
                <input type="number" name="no" id="no" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama" required maxlength="100">
            </div>

            <div class="mb-3">
                <label for="pendidikan" class="form-label">Unit Pendidikan</label>
                <select name="pendidikan" id="pendidikan" class="form-select" required>
                    <option value="">-Pilih Unit-</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMK">SMK</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="tgl" class="form-label">Tanggal Gaji</label>
                <input type="date" name="tgl" id="tgl" class="form-control" required>
            </div>

            <h5 class="mt-4">Gaji & Potongan</h5>
            <div class="row mb-3">
                <div class="col">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <select name="jabatan" id="jabatan" class="form-select" required>
                        <option value="">-Pilih Jabatan-</option>
                        <option value="Kepala Sekolah">Kepala Sekolah</option>
                        <option value="Wakasek">Wakasek</option>
                        <option value="Guru">Guru</option>
                        <option value="OB">OB</option>
                    </select>
                </div>
                <div class="col">
                    <label for="bpjs" class="form-label">BPJS</label>
                    <input type="number" name="bpjs" id="bpjs" class="form-control" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="lama" class="form-label">Lama Kerja (tahun)</label>
                    <input type="number" name="lama" id="lama" class="form-control" required>
                </div>
                <div class="col">
                    <label for="pinjaman" class="form-label">Pinjaman</label>
                    <input type="number" name="pinjaman" id="pinjaman" class="form-control" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="status" class="form-label">Status Kerja</label>
                    <select name="status" id="status" class="form-select" required>
                        <option value="">-Pilih Status-</option>
                        <option value="Menetap">Tetap</option>
                        <option value="Kontrak">Kontrak</option>
                    </select>
                </div>
                <div class="col">
                    <label for="tabungan" class="form-label">Tabungan</label>
                    <input type="number" name="tabungan" id="tabungan" class="form-control" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="lainnya" class="form-label">Lainnya</label>
                <input type="number" name="lainnya" id="lainnya" class="form-control">
            </div>

            <div class="text-end">
                <input type="submit" name="simpan" class='btn btn-primary' value="Simpan">
            </div>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
