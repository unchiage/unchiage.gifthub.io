<?php
include "koneksi.php";
$foto = $_FILES['foto']['name'];
$file_tmp = $_FILES['foto']['tmp_name'];
$nama = $_POST['nama'];
move_uploaded_file($file_tmp,'file/'.$foto);
$query = "INSERT INTO SISWA SET
                                nama = '$nama',
                                foto = '$foto'
";
mysqli_query($conn, $query)
    or die("SQL Error" .mysqli_error());
    header('location:gambar.php');
?>