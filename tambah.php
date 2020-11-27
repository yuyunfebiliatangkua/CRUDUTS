<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<center>
		<h2><font color="RED">DATA KARYAWAN PT.IMIP</font></h2>
		<br/>
		<h3>TAMBAH DATA</h3>
		<form method="post" action="tambah-proses.php">
			<table>
				<tr>
					<td>NAMA LENGKAP</td>
					<td><input type="text" name="nama_lengkap"></td>
				</tr>
				<tr>
					<td>JABATAN</td>
					<td><input type="text" name="jabatan"></td>
				</tr>
				<tr>
					<td>NOMOR PONSEL</td>
					<td><input type="number" name="nomor_ponsel"></td>
				</tr>
				<tr>
					<td>ALAMAT</td>
					<td><input type="text" name="alamat"></td>
				</tr>
				<tr>
					<td>PENDIDIKAN TERAKHIR</td>
					<td><input type="text" name="pendidikan_terakhir"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>
			</table>
		</form>
	</center>

</body>
</html>