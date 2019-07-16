<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
</head>
<body>

	<h2>Tabel Tambah Barang</h2>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama Merek</th>
			<th>Warna</th>
			<th>Jumlah</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tambah");
		while($d = mysqli_fetch_array($data)){
		?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama_merek']; ?></td>
				<td><?php echo $d['warna']; ?></td>
				<td><?php echo $d['jumlah']; ?></td>
			</tr>
			<?php 
			}
			?>
	</table>

	<br/>
	<br/>
	<a href="tambah.php">Tambah Data</a>
	<br/>
</body>
</html>