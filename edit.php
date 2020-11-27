<!DOCTYPE html>
<html>
<head>
	<title>DATA KARYAWAN</title>
</head>
<body>
	<center>
		<h2><font color="RED">DATA KARYAWAN PT.IMIP</font></h2>
		<br/>
		<h3>EDIT DATA</h3>

		<?php
		include 'koneksi.php';
		$id = $_GET['id'];
		$data = mysqli_query($koneksi,"select * from karyawan where id_kryn='$id'");
		while ($d = mysqli_fetch_array($data)) {
			
			?>

			<form method="post" action="update.php">
				<table>
					<tr>
						<td>NAMA LENGKAP</td>
						<td>
							<input type="hidden" name="id_kryn" value="<?php echo $d['id_kryn'];?>">
							<input type="text" name="nama_lengkap" value="<?php echo $d['nama_lengkap']?>">
						</td>
					</tr>
					<tr>
						<td>JABATAN</td>
						<td><input type="text" name="jabatan" value="<?php echo $d['jabatan']; ?>"></td>
					</tr>
					<tr>
						<td>NOMOR PONSEL</td>
						<td><input type="number" name="nomor_ponsel" value="<?php echo $d['nomor_ponsel']; ?>"></td>
					</tr>
					<tr>
						<td>ALAMAT</td>
						<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
					</tr>
					<tr>
						<td>PENDIDIKAN TERAKHIR</td>
						<td><input type="text" name="pendidikan_terakhir" value="<?php echo $d['pendidikan_terakhir']; ?>"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" value="SIMPAN"><input type="submit" value="KEMBALI"><a href="index.php"></a></td>
					</tr>
				</table>
			</form>
			<?php
}
?>

		
	</center>

</body>
</html>