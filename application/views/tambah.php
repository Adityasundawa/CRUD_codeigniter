<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
</head>
<body>
<form method="post" action="<?php echo base_url('welcome/aksi_tambah') ?>">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>:</td>
			<td><select name="gender">
				<option value="1">Laki Laki</option>
				<option value="2">Perempuan</option>
			</select></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		
		<tr>
			<td><button type="submit">Tambah</button></td>
		</tr>

	</table>
</form>
</body>
</html>