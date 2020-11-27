<?php
$koneksi = mysqli_connect("localhost", "root", "", "dbuts_datakaryawan");

//check connection 
if (mysqli_connect_error()){
	echo "koneksi database gagal : " . mysqli_connect_error();
}

?>