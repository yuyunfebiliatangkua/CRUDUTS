<?php
include 'koneksi.php';

$id = $_POST['id_kryn'];
$nama = $_POST['nama_lengkap'];
$jabatan = $_POST['jabatan'];
$nomorponsel = $_POST['nomor_ponsel'];
$alamat = $_POST['alamat'];
$pendidikanterakhir = $_POST['pendidikan_terakhir'];

mysqli_query($koneksi, "update karyawan set nama_lengkap='$nama', jabatan='$jabatan',nomor_ponsel='$nomorponsel',alamat='$alamat',pendidikan_terakhir='$pendidikanterakhir' where id_kryn='$id'");

header("location:index.php");

?>