<html>
<head>
    <title>Form Data Gue</title>
</head>
<body>
    <form action="index.php" method="POST">
        <fieldset>
        <legend>Biodata Mahasiswa</legend>
        <p>
            <label>NIM:</label>
            <input type="text" name="nim" placeholder="Ketikkan NIM" />
        </p>
        <p>
            <label>Nama:</label>
            <input type="text" name="nama" placeholder="Ketikkan Nama" />
        </p>
        <p>
            <label>Jenis Kelamin</label>
            <input type="radio" name="jk" value="l"/>Laki-laki
            <input type="radio" name="jk" value="p"/>Perempuan
        </p>
        <p>
            <label>Jurusan</label>
            <select name="jurusan">                        
                <option value= "TI">Teknik Informatika</option>
                <option value= "SI">Sistem Informasi</option>
                <option value= "TK">Teknik Komputer</option>
                <option value= "MI">Manajemen Informatika</option>
                <option value= "KA">Kompterisasi Akuntansi</option>            
            </select>




       </p>
        <p>
            <input type="submit" name="submit" value="Submit" />
        </p>
        </fieldset>
    </form>
</body>
</html>
<?php

 include 'connect.php';
// menyimpan data kedalam variabel
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$jk             = $_POST['jk'];
$jurusan        = $_POST['jurusan'];
// query SQL untuk insert data
$query="INSERT INTO biodata (nim, nama, jk, jurusan) VALUES($nim,'$nama','$jk','$jurusan')";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
// header("location:index.html");

?>