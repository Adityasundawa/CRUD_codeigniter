<?php foreach ($edit as $edt): ?>
	<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
<form method="post" action="<?php echo base_url('welcome/aksi_edit/') ?><?php echo $edt->id ?>">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?php echo $edt->nama ?>"></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>:</td>
			<td><select name="gender">

			<?php if ($edt->gender == 1): ?>
					<option value="1" selected="">Laki Laki</option>
				<option value="2">Perempuan</option>
			<?php endif ?>
			<?php if ($edt->gender == 2): ?>
					
				<option value="2" selected="">Perempuan</option>
				<option value="1">Laki Laki</option>
			<?php endif ?>

			</select></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat"  value="<?php echo $edt->nama ?>"></td>
		</tr>
		
		<tr>
			<td><button type="submit">Tambah</button></td>
		</tr>

	</table>
</form>
</body>
</html>
<?php endforeach ?>