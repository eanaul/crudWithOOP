<?php

class database{
    var $host = "localhost",
        $uname = "root",
        $pass = "",
        $db = "oop_euy";

    var $koneksi;

    function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
    }

    function tampil_data(){
        $data = mysqli_query($this->koneksi, 'select * from dream');
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function input($nis, $nama, $rayon, $rombel){
        mysqli_query($this->koneksi, "INSERT INTO dream VALUES('$nis', '$nama', '$rayon', '$rombel')");
    }

    function hapus($nis){
        mysqli_query($this->koneksi, "DELETE FROM `dream` WHERE nis='$nis'");
    }

    function edit($nis){
        $data = mysqli_query($this->koneksi, "SELECT * FROM dream WHERE nis='$nis'");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function update($nis, $nama, $rayon, $rombel){
        mysqli_query($this->koneksi, "UPDATE `dream` SET `nis`='$nis',`nama`='$nama',`rayon`='$rayon',`rombel`='$rombel' WHERE nis='$nis'");
    }

}

?>