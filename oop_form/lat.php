<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PPDB - SMK Assalaam</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    
    <style>
        .card {
            max-width: 1100px; 
            margin: 20px auto; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .card-header {
            background-color: #f8f9fa; 
        }
    </style>
</head>
<body>
    <form action="hasillat.php" method="post">
        <div class="card">
            <div class="card-body">
                <h3>PPDB SMK ASSALAAM BANDUNG</h3>
            </div>
        </div>
          <!-- Description -->
          <section id="description" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Informasi</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="card-text">
                                <p>Apabila anda telah melakukan pendaftaran, silahkan klik tombol "Cek Status Pendaftaran"</p>
                                <button class="btn btn-primary mr-1 mb-1 waves-effect waves-light" id="cekstatus">Cek Status Pendaftaran</button>
                                <a href=" https://ppdb.smkassalaambandung.sch.id " class="btn btn-warning mr-1 mb-1 waves-effect waves-light">Kembali ke Home</a>
                                <a href="https://smkassalaambandung.sch.id" class="btn btn-danger mr-1 mb-1 waves-effect waves-light">Situs Resmi SMK
                                    ASSALAAM</a>
                            </div>
                        </div>
                    </div>
                </section>
        <div class="card">
            <h4 class="card-header">Data Diri Calon Peserta Didik</h4>
            <div class="card-body">
                <div class="mb-3">
                    <label for="jurusan" class="form-label">
                        <h5>Jurusan</h5>
                    </label>
                    <select name="Jurusan" class="form-select">
                        <option value="Pilih Jurusan">Pilih Jurusan</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                        <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                    </select>  
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label"><h5>Nama</h5></label>
                    <input type="text" name="name" class="form-control" placeholder="Masukan Nama">
                </div>
                <div class="mb-3">
                    <label for="jk" class="form-label"><h5>Jenis Kelamin</h5></label>
                    <div class="form-check">
                        <input class="form-check-input" name="jk" type="radio" value="Laki-Laki">
                        <label class="form-check-label">Laki-Laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="jk" type="radio" value="Perempuan">
                        <label class="form-check-label">Perempuan</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="tempatlahir" class="form-label"><h5>Tempat Lahir</h5></label>
                    <input type="text" name="tlahir" class="form-control" placeholder="Tempat Lahir">
                </div>
                <div class="mb-3">
                    <label for="tglahir" class="form-label"><h5>Tanggal Lahir</h5></label>
                    <input type="date" name="tglahir" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="nohp" class="form-label"><h5>Nomor Handphone Aktif</h5></label>
                    <input type="text" name="nohp" class="form-control" placeholder="No HP">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label"><h5>Alamat Email</h5></label>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
            </div>
        </div>
        <div class="card">
            <h4 class="card-header">Alamat Calon Pendaftar</h4>
            <div class="card-body">
                <div class="mb-3">
                    <label for="provinsi" class="form-label"><h5>Provinsi</h5></label>
                    <select name="provinsi" id="" class="form-select">
                        <option value="-">Pilih Provinsi</option>
                        <option value="Aceh">Aceh</option>
                        <option value="Sumatera Utara">Sumatera Utara</option>
                        <option value="Sumatera Barat">Sumatera Barat</option>
                        <option value="Riau">Riau</option>
                        <option value="Kepulauan Riau">Kepulauan Riau</option>
                        <option value="Jawa Barat">Jawa Barat</option>
                        <option value="Jawa Tengah">Jawa Tengah</option>
                        <option value="Jawa Timur">Jawa Timur</option>
                        <option value="Bali">Bali</option>
                        <option value="Papua">Papua</option>
                    </select>
                    <label for="kota" class="form-label mt-1"><h5>Kota/Kab</h5></label>
                    <select name="kabupaten_kota" id="" class="form-select">
                        <option value="-">Pilih Kota</option>
                        <option value="Bandung">Bandung</option>
                        <option value="Bandung Barat">Bandung Barat</option>
                        <option value="Bekasi">Bekasi</option>
                        <option value="Bogor">Bogor</option>
                        <option value="Ciamis">Ciamis</option>
                        <option value="Cianjur">Cianjur</option>
                        <option value="Cimahi">Cimahi</option>
                        <option value="Cirebon">Cirebon</option>
                        <option value="Garut">Garut</option>
                        <option value="Indramayu">Indramayu</option>
                    </select>
                    <label for="kecamatan" class="form-label mt-1"><h5>Kecamatan</h5></label>
                    <select name="kecamatan" id="" class="form-select">
                        <option value="Pilih Kecamatan">Pilih Kecamatan</option>
                        <option value="Andir">Andir</option>
                        <option value="Antapani">Antapani</option>
                        <option value="Arcamanik">Arcamanik</option>
                        <option value="Astanaanyar">Astanaanyar</option>
                        <option value="Babakan Ciparay">Babakan Ciparay</option>
                        <option value="Bandung Kidul">Bandung Kidul</option>
                        <option value="Bandung Kulon">Bandung Kulon</option>
                        <option value="Bandung Wetan">Bandung Wetan</option>
                        <option value="Batununggal">Batununggal</option>
                        <option value="Bojongloa Kaler">Bojongloa Kaler</option>
                    </select>
                    <label for="desa" class="form-label mt-1"><h5>Desa</h5></label>
                <td>
                    <select name="desa" id="" class="form-select">
                        <option value="Pilih Desa">Pilih Desa</option>
                        <option value="Ciburial">Ciburial</option>
                        <option value="Cileunyi">Cileunyi</option>
                        <option value="Ciparay">Ciparay</option>
                        <option value="Margaluyu">Margaluyu</option>
                        <option value="Mekarsari">Mekarsari</option>
                        <option value="Cangkuang">Cangkuang</option>
                        <option value="Pangalengan">Pangalengan</option>
                        <option value="Rancamanyar">Rancamanyar</option>
                        <option value="Sukamaju">Sukamaju</option>
                        <option value="Sukasari">Sukasari</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card">
            <h4 class="card-header">Data Asal Sekolah</h4>
            <div class="card-body">
                <div class="mb-3">
                    <label for="namaasal" class="form-label"><h5>Nama Sekolah Asal</h5></label>
                    <input type="text" name="namaasal" class="form-control" placeholder="Asal Sekolah">
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Alamat Sekolah" name="asalsekolah" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Alamat Sekolah Asal</label>
                </div>
            </div>
        </div>
        <div class="card">
            <h4 class="card-header">Data Orang Tua / Wali Peserta Didik</h4>
            <div class="card-body">
                <div class="mb-3">
                    <label for="ortu" class="form-label">
                        <h5>Orang Tua</h5>
                    </label>
                    <select name="ortu" class="form-select">
                        <option value="Ayah">Ayah</option>
                        <option value="Ibu">Ibu</option>
                        <option value="Wali">Wali</option>
                    </select>  
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label"><h5>Nama</h5></label>
                    <input type="text" name="name2" class="form-control" placeholder="Masukan Nama">
                </div>
                <div class="mb-3">
                    <label for="pekerjaan" class="form-label"><h5>Pekerjaan</h5></label>
                    <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan">
                </div>
                <div class="mb-3">
                    <label for="nohp" class="form-label"><h5>Nomor Handphone Aktif</h5></label>
                    <input type="text" name="nohp2" class="form-control" placeholder="No HP">
                </div>
                <div class="form-floating">
                    <textarea class="form-control" name="alamat_ortu" placeholder="Alamat Lengkap" id="floatingTextarea"></textarea>
                    <label for="floatingTextarea">Alamat Lengkap</label>
                </div>
                <div class="button submit pt-3">
                <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light" name="daftar" id="kirim">Daftar</button>
                    <a href="#" class="btn btn-outline-warning mr-1 mb-1 waves-effect waves-light" onclick="location.reload()">Reset</a>
                </div>
                
            </div>
        </div>
    </form>
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
