<?php
include("koneksi.php");
$nim = $_GET['x'];
$sql = "delete from tb_registrasi where nim='$nim'";
$aksi = mysqli_query($koneksi, $sql);
if ($aksi) {
    header("location:tampil_ruangan.php");
}
