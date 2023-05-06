<h1>CRUD OOP PHP</h1>
<h3>Tambah data user</h3>
<form action="proses.php?aksi=tambah" method="POST">

<table>
	<tr>
		<td>NIS</td>
		<td><input type="number" name="nis"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Rayon</td>
		<td><input type="text" name="rayon"></td>
	</tr>
	<tr>
		<td>Rombel</td>
		<td><input type="text" name="rombel"></td>
	</tr>
	<tr>
		<td>Gambar</td>
		<td><input type="file" name="gambar"></td>
	</tr>
    <tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>

</form>