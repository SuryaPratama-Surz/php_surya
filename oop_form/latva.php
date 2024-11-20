<html>
    <table border="1">
        <tr>
            <th>Mapel</th>
            <th>Harian</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Rata-rata</th>
            <th>Grade</th>
        </tr>
   
<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['name'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['Jurusan'];

    $nilaimtk1 = $_POST['nilaiharianmtk'];
    $nilaimtk2 = $_POST['nilaitugasmtk'];
    $nilaimtk3 = $_POST['nilaiutsmtk'];
    $nilaimtk4 = $_POST['nilaiuasmtk'];
    
    $nilaiindo1 = $_POST['nilaiharianindo'];
    $nilaiindo2 = $_POST['nilaitugasindo'];
    $nilaiindo3 = $_POST['nilaiutsindo'];
    $nilaiindo4 = $_POST['nilaiuasindo'];

    $nilaiing1 = $_POST['nilaiharianinggris'];
    $nilaiing2 = $_POST['nilaitugasinggris'];
    $nilaiing3 = $_POST['nilaiutsinggris'];
    $nilaiing4 = $_POST['nilaiuasinggris'];

    $nilaipro1 = $_POST['nilaiharianpro'];
    $nilaipro2 = $_POST['nilaitugaspro'];
    $nilaipro3 = $_POST['nilaiutspro'];
    $nilaipro4 = $_POST['nilaiuaspro'];

    class rapotsiswa{
        public $mtk = "Matematika ";
        public $indo = "Indonesia ";
        public $ing = "Inggris ";
        public $pro = "Produktif ";
        public $rata;
        public $grade;
       

        public function biodata($nama1,$kelas1,$jurusan1){

            echo "Nama : $nama1 <br>";
            echo "Kelas : $kelas1 <br>";
            echo "Jurusan : $jurusan1 <br>";

        }

        
        public function mtk($nilaimtkk1,$nilaimtkk2,$nilaimtkk3,$nilaimtkk4){
            $this -> rata = $nilaimtkk1 + $nilaimtkk2 + $nilaimtkk3 + $nilaimtkk4;
            $rata  = $this -> rata / 4;
          
            if ($rata > 87 ) {
                 $grade = "A";
           } elseif ($rata > 75 ) {
                  $grade = "B";
           } elseif ($rata < 75) {
                  $grade = "C";
           } else {
                "Nilai Tidak Valid";
           } 

            echo "<tr>
                   <td>$this->mtk</td>
                   <td>$nilaimtkk1</td>
                   <td>$nilaimtkk2</td>
                   <td>$nilaimtkk3</td>
                   <td>$nilaimtkk4</td>
                   <td>$rata</td>
                   <td>$grade</td>
                 </tr>";
        }

        public function indo($nilaiindoo1,$nilaiindoo2,$nilaiindoo3,$nilaiindoo4){
            $this -> rata = $nilaiindoo1 + $nilaiindoo2 + $nilaiindoo3 + $nilaiindoo4;
            $rata  = $this -> rata / 4;
          
            if ($rata > 87 ) {
                 $grade = "A";
           } elseif ($rata > 75 ) {
                  $grade = "B";
           } elseif ($rata < 75) {
                  $grade = "C";
           } else {
                "Nilai Tidak Valid";
           } 

            echo "<tr>
                   <td>$this->indo</td>
                   <td>$nilaiindoo1</td>
                   <td>$nilaiindoo2</td>
                   <td>$nilaiindoo3</td>
                   <td>$nilaiindoo4</td>
                   <td>$rata</td>
                   <td>$grade</td>
                 </tr>";
        
        }
        public function inggris($ing1,$ing2,$ing3,$ing4){
            $this -> rata = $ing1 + $ing2 + $ing3 + $ing4;
            $rata  = $this -> rata / 4;
          
            if ($rata > 87 ) {
                 $grade = "A";
           } elseif ($rata > 75 ) {
                  $grade = "B";
           } elseif ($rata < 75) {
                  $grade = "C";
           } else {
                "Nilai Tidak Valid";
           } 

            echo "<tr>
                   <td>$this->ing</td>
                   <td>$ing1</td>
                   <td>$ing2</td>
                   <td>$ing3</td>
                   <td>$ing4</td>
                   <td>$rata</td>
                   <td>$grade</td>
                 </tr>";
        
        }
        public function pro($nilaiproo1,$nilaiproo2,$nilaiproo3,$nilaiproo4){
            $this -> rata = $nilaiproo1  + $nilaiproo2 + $nilaiproo3 + $nilaiproo4;
            $rata  = $this -> rata / 4;
          
            if ($rata > 87 ) {
                 $grade = "A";
           } elseif ($rata > 75 ) {
                  $grade = "B";
           } elseif ($rata < 75) {
                  $grade = "C";
           } else {
                "Nilai Tidak Valid";
           } 

            echo "<tr>
                   <td>$this->pro</td>
                   <td>$nilaiproo1</td>
                   <td>$nilaiproo2</td>
                   <td>$nilaiproo3</td>
                   <td>$nilaiproo4</td>
                   <td>$rata</td>
                   <td>$grade</td>
                 </tr>";
        }
        
        
        
    }

    
    $cetak = new rapotsiswa();
    echo "<h3><center>DATA RAPOT SISWA</center></h3>";
    echo $cetak->biodata($nama,$kelas,$jurusan);
    echo $cetak->mtk($nilaimtk1,$nilaimtk2,$nilaimtk3,$nilaimtk4);
    echo $cetak->indo($nilaiindo1,$nilaiindo2,$nilaiindo3,$nilaiindo4);
    echo $cetak->inggris($nilaiing1,$nilaiing2,$nilaiing3,$nilaiing4);
    echo $cetak->pro($nilaipro1,$nilaipro2,$nilaipro3,$nilaipro4);
    
}



?>
 </table>
 </html>
