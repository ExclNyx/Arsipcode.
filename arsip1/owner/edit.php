<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include '../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($conn,"SELECT * from siswa where id='$id'");
	while($hasil = mysqli_fetch_array($data)){
		?>
		<form method="POST" action="perbarui.php">
			<table>
				<tr>			
					<td>NIM</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $hasil['id']; ?>">
						<input type="text" name="nim" value="<?php echo $hasil['nim']; ?>">
					</td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?php echo $hasil['nama']; ?>"></td>
				</tr>
				<tr>
					<td>Telp</td>
					<td><input type="number" name="telp" value="<?php echo $hasil['telp']; ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo $hasil['email']; ?>"></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td><input type="text" name="jurusan" value="<?php echo $hasil['jurusan']; ?>"></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>