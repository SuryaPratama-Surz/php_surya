<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <center>
        <h2>Rapot Siswa</h2>
        <form action="latva.php" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>
                    <select name="kelas" id="">
                    <option value="10">10 (Sepuluh) </option>
                    <option value="11">11 (Sebelas) </option>
                    <option value="12">12 (Dua Belas) </option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td>
                    <select name="Jurusan" id="">
                    <option value="RPL">Rekayasa Perangkat Lunak</option>
                    <option value="TSM">Teknik Sepeda Motor</option>
                    <option value="TKR">Teknik Kendaraan Ringan</option>
                    </select>
                   </td>
                </tr>
                <tr><td><h4>Nilai Matematika</h4></td></tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="nilaiharianmtk"></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="nilaitugasmtk"></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="nilaiutsmtk"></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="nilaiuasmtk"></td>
                </tr>
                <tr><td><h4>Nilai Bahasa Indonesia</h4></td></tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="nilaiharianindo"></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="nilaitugasindo"></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="nilaiutsindo"></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="nilaiuasindo"></td>
                </tr>
                <tr><td><h4>Nilai Inggris</h4></td></tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="nilaiharianinggris"></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="nilaitugasinggris"></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="nilaiutsinggris"></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="nilaiuasinggris"></td>
                </tr>
                <tr><td><h4>Nilai Produktif</h4></td></tr>
                <tr>
                    <td>Nilai Harian</td>
                    <td>:</td>
                    <td><input type="number" name="nilaiharianpro"></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td>:</td>
                    <td><input type="number" name="nilaitugaspro"></td>
                </tr>
                <tr>
                    <td>Nilai UTS</td>
                    <td>:</td>
                    <td><input type="number" name="nilaiutspro"></td>
                </tr>
                <tr>
                    <td>Nilai UAS</td>
                    <td>:</td>
                    <td><input type="number" name="nilaiuaspro"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="simpan"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
