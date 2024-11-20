<?php

if (isset($_POST['daftar'])) {
    
    // Data Peserta Didik
    $jurusan = $_POST['Jurusan'];
    $name = $_POST['name'];
    $jk = $_POST['jk'];
    $tlahir = $_POST['tlahir'];
    $tglahir = $_POST['tglahir'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];

    // Alamat
    $provinsi = $_POST['provinsi'];
    $kota = $_POST['kabupaten_kota'];
    $kecamatan = $_POST['kecamatan'];
    $desa = $_POST['desa'];

    // Data Sekolah Asal
    $sekolahasal = $_POST['namaasal'];
    $alamatsekolahasal = $_POST['asalsekolah'];

    // Data Orang Tua/Wali
    $ortu = $_POST['ortu'];
    $namaortu = $_POST['name2'];
    $pekerjaan = $_POST['pekerjaan'];
    $nohp2 = $_POST['nohp2'];
    $alamatlengkap = $_POST['alamat_ortu'];

    class PPDB {
        
        public function datadiri($name, $jk, $tlahir, $tglahir, $nohp, $email) {
            echo "
            <h2 class='section-title'><i class='fas fa-user'></i> Data Diri</h2>
            <div class='mb-4'>
                <div class='data-row'><span class='label'>Nama:</span><span class='value'>$name</span></div>
                <div class='data-row'><span class='label'>Jenis Kelamin:</span><span class='value'>$jk</span></div>
                <div class='data-row'><span class='label'>Tempat Lahir:</span><span class='value'>$tlahir</span></div>
                <div class='data-row'><span class='label'>Tanggal Lahir:</span><span class='value'>$tglahir</span></div>
                <div class='data-row'><span class='label'>No Handphone:</span><span class='value'>$nohp</span></div>
                <div class='data-row'><span class='label'>Email:</span><span class='value'>$email</span></div>
                <hr>
            </div>";
        }

        public function alamat($provinsi, $kota, $kecamatan, $desa) {
            echo "
            <h2 class='section-title'><i class='fas fa-map-marker-alt'></i> Alamat</h2>
            <div class='mb-4'>
                <div class='data-row'><span class='label'>Provinsi:</span><span class='value'>$provinsi</span></div>
                <div class='data-row'><span class='label'>Kota/Kabupaten:</span><span class='value'>$kota</span></div>
                <div class='data-row'><span class='label'>Kecamatan:</span><span class='value'>$kecamatan</span></div>
                <div class='data-row'><span class='label'>Desa/Kelurahan:</span><span class='value'>$desa</span></div>
                <hr>
            </div>";
        }

        public function sekolahAsal($sekolahasal, $alamatsekolahasal) {
            echo "
            <h2 class='section-title'><i class='fas fa-school'></i> Sekolah Asal</h2>
            <div class='mb-4'>
                <div class='data-row'><span class='label'>Sekolah Asal:</span><span class='value'>$sekolahasal</span></div>
                <div class='data-row'><span class='label'>Alamat Sekolah:</span><span class='value'>$alamatsekolahasal</span></div>
                <hr>
            </div>";
        }

        public function dataOrtu($namaortu, $pekerjaan, $nohp2, $alamatlengkap) {
            echo "
            <h2 class='section-title'><i class='fas fa-users'></i> Data Orang Tua/Wali</h2>
            <div class='mb-4'>
                <div class='data-row'><span class='label'>Nama Orang Tua/Wali:</span><span class='value'>$namaortu</span></div>
                <div class='data-row'><span class='label'>Pekerjaan:</span><span class='value'>$pekerjaan</span></div>
                <div class='data-row'><span class='label'>No Handphone:</span><span class='value'>$nohp2</span></div>
                <div class='data-row'><span class='label'>Alamat:</span><span class='value'>$alamatlengkap</span></div>
            </div>";
        }
    }

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>DATA PPDB</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css'>
        <style>
            body {
                background-color: #f4f6f9;
                color: #333;
                font-family: Arial, sans-serif;
            }
            .card {
                max-width: 850px;
                margin: 40px auto;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            }
            .card-header {
                background-color: #3c8dbc;
                color: #fff;
                padding: 15px;
                font-size: 24px;
                text-align: center;
                font-weight: bold;
            }
            .card-body {
                padding: 40px;
            }
            .section-title {
                font-size: 20px;
                color: #3c8dbc;
                margin-bottom: 20px;
                border-bottom: 2px solid #3c8dbc;
                padding-bottom: 5px;
            }
            .data-row {
                display: flex;
                justify-content: space-between;
                padding: 8px 0;
                border-bottom: 1px dashed #ddd;
            }
            .data-row .label {
                font-weight: bold;
                color: #555;
            }
            .data-row .value {
                color: #333;
            }
            hr {
                margin: 20px 0;
                border: 0;
                border-top: 1px solid #ddd;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='card'>
                <div class='card-header'>DATA SISWA PPDB</div>
                <div class='card-body'>";

    $ppdb = new PPDB();
    $ppdb->datadiri($name, $jk, $tlahir, $tglahir, $nohp, $email);
    $ppdb->alamat($provinsi, $kota, $kecamatan, $desa);
    $ppdb->sekolahAsal($sekolahasal, $alamatsekolahasal);
    $ppdb->dataOrtu($namaortu, $pekerjaan, $nohp2, $alamatlengkap);

    echo "          </div>
            </div>
        </div>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js'></script>
    </body>
    </html>";
}
?>
