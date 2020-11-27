<?php
include 'koneksi.php';

$nama = $_POST['nama_lengkap'];
$jabatan = $_POST['jabatan'];
$nomorponsel = $_POST['nomor_ponsel'];
$alamat = $_POST['alamat'];
$pendidikanterakhir = $_POST['pendidikan_terakhir'];

mysqli_query($koneksi,"insert into karyawan (nama_lengkap,jabatan,nomor_ponsel,alamat,pendidikan_terakhir) values('$nama','$jabatan','$nomorponsel','$alamat','$pendidikanterakhir')");

header("location: index.php");

?>