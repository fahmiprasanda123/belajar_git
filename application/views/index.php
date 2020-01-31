<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter</title>
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter</h1></center>
	
	<center><a href="<?php echo site_url('Main/tambah');?>">Tambah Data</a></center>
	<table border="1" style="margin: 20px auto;">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Instansi</th>
			<th>Kegiatan</th>
			<th>Check In</th>
			<th>Check Out</th>
			<th>Action</th>
		</tr>
			<?php foreach ($tamu as $tm) {
			?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $tamu->nama ?></td>
			<td><?php echo $tamu->instansi ?></td>
			<td><?php echo $tamu->kegiatan ?></td>
			<td><?php echo $tamu->check_in ?></td>
			<td>
				<?php 
					$tes = $tamu->check_out;
				if($tes!=""){
					echo $tes;
			}else{
				echo "Belum Check Out";
			} 
			?>
			
			</td>
			<td>
				<?php echo anchor('Main/check_out/'.$tamu->id_bukutamu,'Check Out'); ?> ||
				<?php echo anchor('Main/edit/'.$tamu->id_bukutamu,'Edit '); ?> ||
				<?php echo anchor('Main/hapus/'.$tamu->id_bukutamu,'Hapus'); ?>	
			</td>
		</tr>
		<?php  } ?>
	</table>
</body>
</html>