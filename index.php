<!DOCTYPE html>
<html>
<head>
	<title>DATA KARYAWAN</title>
</head>
<body>
	<center>
		<h2><font color="RED">DATA KARYAWAN PT.IMIP</font></h2>
		<br/>
		<a href="tambah.php">TAMBAH DATA</a>
		<br/>
		<br/>
		<table border="1">
			<tr>
				<th>NO</th>
				<th>NAMA LENGKAP</th>
				<th>JABATAN</th>
				<th>NOMOR PONSEL</th>
				<th>ALAMAT</th>
				<th>PENDIDIKAN TERAKHIR</th>
				<th>OPSI</th>
			</tr>
			<?php
			include 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi,"SELECT * from karyawan");
			while ($d = mysqli_fetch_array($data)) {
					?>
					<tr>
						<td><?php echo $no++;?></td>
						<td><?php echo $d['nama_lengkap'];?></td>
						<td><?php echo $d['jabatan'];?></td>
						<td><?php echo $d['nomor_ponsel'];?></td>
						<td><?php echo $d['alamat'];?></td>
						<td><?php echo $d['pendidikan_terakhir'];?></td>
						<td>
							<a href="edit.php?id=<?php echo $d['id_kryn']; ?>">EDIT</a> ||
							<a href="hapus.php?id=<?php echo $d['id_kryn']; ?>">HAPUS</a>
						</td>
					</tr>
					<?php
			}
			?>
		</table>
	</center>		

</body>
</html>
