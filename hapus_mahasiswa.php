<?php
include("koneksi.php");
$kode = $_GET['x'];
$sql = "delete from tb_pendaftar where kode_daftar='$kode'";
$aksi = mysqli_query($koneksi, $sql);
if ($aksi) {
    header("location:tampil_mahasiswa.php");
}
