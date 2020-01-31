<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo site_url('Main/Create');?>" method="post">
		<table style="margin:20px auto;" border="1">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Instansi</td>
				<td><input type="text" name="instansi"></td>
			</tr>
			<tr>
				<td>Kegiatan</td>
				<td><input type="text" name="kegiatan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Check In"></td>
			</tr>
		</table>
	</form>	
</body>
</html>