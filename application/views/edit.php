<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo site_url('Main/update');?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id_bukutamu" value="<?php echo $u->id_bukutamu ?>">
					<input type="text" name="nama" value="<?php echo $u->nama ?>">
				</td>
			</tr>
			<tr>
				<td>Instansi</td>
				<td><input type="text" name="instansi" value="<?php echo $u->instansi ?>"></td>
			</tr>
			<tr>
				<td>Kegiatan</td>
				<td><input type="text" name="kegiatan" value="<?php echo $u->kegiatan ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>