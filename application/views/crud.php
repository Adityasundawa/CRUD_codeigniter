<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>

<font style="color: red;"><?php echo $this->session->userdata('aksi'); ?></font>

<br>
<!-- Start Button Tambah Data -->
	<a href="<?php echo base_url('welcome/tambah') ?>">Tambah Data</a>
<!-- 	End button Tambah Data -->

<table border="1px solid">
	<tr>
		<td>ID</td>
		<td>Nama</td>
		<td>Gender</td>
		<td>Alamat</td>
		<td>Aksi</td>
	</tr>

<?php foreach ($pelajar as $pla): ?>
		<tr>
		<td><?php echo $pla->id ?></td>
		<td><?php echo $pla->nama ?></td>
		<td><?php if ($pla->gender == 1) {
			echo "Laki Laki";
		}else if($pla->gender == 2){
			echo "Perempuan";
		}else{
			echo "Ga Ada Kelamin";
		} ?></td>
		<td><?php echo $pla->alamat ?></td>
		<td><a href="<?php echo base_url('welcome/edit/') ?><?php echo $pla->id ?>">Edit</a> <a href="<?php echo base_url('welcome/hapus/') ?><?php echo $pla->id ?>">Hapus</a></td>
	</tr>

<?php endforeach ?>

</table>
</body>
</html>