<?php
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
    $db->input($_POST['nis'], $_POST['nama'], $_POST['rayon'], $_POST['rombel']);
    header("location:tampil.php");
}else if($aksi == "hapus"){
    $db->hapus($_GET['nis']);
    header("location:tampil.php");
}else if($aksi == "update"){
    $db->update($_POST['nis'], $_POST['nama'], $_POST['rayon'], $_POST['rombel']);
    header("location:tampil.php");
}