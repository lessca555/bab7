<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <select name="pilihtable" id="">
            <option value="mhs">Mahasiswa</option>
            <option value="fakultas">Fakultas</option>
            <option value="jurusan">Jurusan</option>
            <option value="matkul">Mata Kuliah</option>
            <option value="krs">KRS</option>
            <option value="audit">Audit Nilai</option>
        </select>

        <button type="submit" name="cari">Cari Laporan Table</button>
        <br><br>
    </form>
</body>
</html>
<?php
include 'proses.php';
if(isset($_POST['cari'])){
    $switch = $_POST['pilihtable'];
    switch($switch){
        case "mhs":
            echo "<table border=1>";
            echo "<tr>";
            echo "<th>NIM</th>";
            echo "<th>Nama</th>";
            echo "<th>Tempat Lahir</th>";
            echo "<th>Tanggal Lahir</th>";
            echo "<th>Alamat</th>";
            echo "<th>Kode Jurusan</th>";
            echo "</tr>";
            while ($row = $stmt4->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
                echo "<td>".$row['NIM']."</td>";
                echo "<td>".$row['Nama']."</td>";
                echo "<td>".$row['TempatLahir']."</td>";
                echo "<td>".$row['TanggalLahir']."</td>";
                echo "<td>".$row['Alamat']."</td>";
                echo "<td>".$row['KodeJurusan']."</td>";
                echo "</tr>";
            }
                echo "</table>";
        break;

        case "fakultas":
            echo "<table border=1>";
            echo "<tr>";
            echo "<th>Kode Fakultas</th>";
            echo "<th>Nama Fakultas</th>";
            echo "</tr>";
            while ($row = $stmt3->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>".$row['KodeFakultas']."</td>";
                echo "<td>".$row['NamaFakultas']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        break;  

        case "jurusan":
            echo "<table border=1>";
            echo "<tr>";
            echo "<th>Kode Jurusan</th>";
            echo "<th>Nama Jurusan</th>";
            echo "<th>Kode Fakultas</th>";
            echo "</tr>";
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>".$row['KodeJurusan']."</td>";
                echo "<td>".$row['NamaJurusan']."</td>";
                echo "<td>".$row['KodeFK']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        break;  

        case "matkul":
            echo "<table border=1>";
            echo "<tr>";
            echo "<th>Kode Mata Kuliah</th>";
            echo "<th>Nama Mata Kuliah</th>";
            echo "<th>Jumlah SKS</th>";
            echo "</tr>";
            while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>".$row['kodeMK']."</td>";
                echo "<td>".$row['namaMK']."</td>";
                echo "<td>".$row['SKS']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        break; 
        
        case "krs":
            echo "<table border=1>";
            echo "<tr>";
            echo "<th>NIM</th>";
            echo "<th>Nama Mata Kuliah</th>";
            echo "<th>Nilai UTS</th>";
            echo "<th>Nilai UAS</th>";
            echo "</tr>";
            while ($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>".$row['NIM']."</td>";
                echo "<td>".$row['kodeMK']."</td>";
                echo "<td>".$row['NilaiUTS']."</td>";
                echo "<td>".$row['NilaiUAS']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        break;

        case "audit":
            echo "<table border=1>";
            echo "<tr>";
            echo "<th>NIM</th>";
            echo "<th>Kode Mata Kuliah</th>";
            echo "<th>Nilai UTS Sebelum</th>";
            echo "<th>Nilai UAS Sebelum</th>";
            echo "<th>Nilai UTS Update</th>";
            echo "<th>Nilai UAS Update</th>";
            echo "<th>Tanggal Update</th>";
            echo "</tr>";
            while ($row = $stmt5->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>";
                echo "<td>".$row['NIM']."</td>";
                echo "<td>".$row['kodeMK']."</td>";
                echo "<td>".$row['NilaiUTSAsal']."</td>";
                echo "<td>".$row['NilaiUASAsal']."</td>";
                echo "<td>".$row['NilaiUTSUpd']."</td>";
                echo "<td>".$row['NilaiUASUpd']."</td>";
                echo "<td>".$row['TanggalUpd']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        break;  
    }
}

?>