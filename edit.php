<?php
include 'database.php';
$db = new database();
?>

<h1>CRUD OOP PHP</h1>
<h3>Edit data user</h3>

<form action="proses.php?aksi=update" method="POST">
<?php
foreach($db->edit($_GET['nis']) as $d){
?>
<table>
    <tr>
        <td>NIS</td>
        <td>
            <input type="number" name="nis" value="<?php echo $d['nis'] ?>">
        </td>
    </tr>
    <tr>
        <td>NamaS</td>
        <td>
            <input type="text" name="nama" value="<?php echo $d['nama'] ?>">
        </td>
    </tr>
    <tr>
        <td>Rayon</td>
        <td>
            <input type="text" name="rayon" value="<?php echo $d['rayon'] ?>">
        </td>
    </tr>
    <tr>
        <td>Rombel</td>
        <td>
            <input type="text" name="rombel" value="<?php echo $d['rombel'] ?>">
        </td>
    </tr>
    <tr>
        <td>Gambar</td>
        <td>
            <input type="file" name="gambar" value="<?php echo $d['gambar'] ?>">
        </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
    </tr>
</table>
<?php } ?>
</form>