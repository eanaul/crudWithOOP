<?php

include 'database.php';
$db = new database();

?>

<h1>CRUD OOP PHP</h1>
<h3>Data User</h3>

<a href="input.php">Input Data</a>
<table border="1">
    <tr>
        <th>Gambar</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Rayon</th>
        <th>Rombel</th>
        <th>Aksi</th>
    </tr>

<?php foreach($db->tampil_data() as $x){ ?>

    <tr>
        <td><img src="gambar/<?php echo $x['gambar'];?>" width="250"></td>
        <td><?php echo $x['nis']; ?></td>
        <td><?php echo $x['nama']; ?></td>
        <td><?php echo $x['rayon']; ?></td>
        <td><?php echo $x['rombel']; ?></td>
        <td>
            <a href="edit.php?nis=<?php echo $x['nis']; ?>&aksi=edit">Edit | </a>
            <a href="proses.php?nis=<?php echo $x['nis']; ?>&aksi=hapus"> Hapus</a>
        </td>
    </tr>
    <?php
}
?>

</table>