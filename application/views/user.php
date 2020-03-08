
<!-- berikut adalah halaman untuk menmapilan halaman user berfungsi untuk menampilkan data dari database, Buat sebuah view dengan nama user.php. pada view ini kita akan menampilkan data dari database yang kita parsing -->
<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
	<link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.css');?>">
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter | MalasNgoding.com</h1>
	<!-- ini tabel yang menampilkan data dari database -->
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			
		</tr>
		<!-- menampilkan data variabel $user akan menjadi $u. $user adalah variabel yang di parsing dari controller
		tadi dan berisi data user dalam bentuk array -->
		<?php foreach($user as $u){ ?>
		<tr>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->pekerjaan ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>