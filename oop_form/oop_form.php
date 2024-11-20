<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <center>
        <h2>Menghitung Luas Persegi Panjang</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Panjang</td>
                    <td>:</td>
                    <td><input type="number" name="panjang"></td>
                </tr>
                <tr>
                    <td>Lebar</td>
                    <td>:</td>
                    <td><input type="number" name="lebar"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="hitung" value="Hitung"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php

if (isset($_POST['hitung'])) {
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];

    class persegipanjang{

        public $luas;

        public function luas_persegi_panjang($P,$L){

           $this->luas = $P * $L;

           echo "Panjang : ". $P . "<br>";
           echo "Lebar : ". $L . "<br>";
           echo "Hasil : ". $this->luas;
        }
    }

    $cetak = new persegipanjang();

    echo $cetak->luas_persegi_panjang($panjang,$lebar);

}

?>