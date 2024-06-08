<?php
include("koneksi.php");
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$kd_mk = $_POST['kd_mk'];
$nm_mk = $_POST['nm_mk'];
$jumlah_sks = $_POST['jumlah_sks'];
$semester = $_POST['semester'];

// proses simpan database

$sql = "insert into tb_krs values('$nim','$nama','$prodi','$kd_mk','$nm_mk','$jumlah_sks','$semester')";
$proses = mysqli_query($koneksi, $sql);
if ($proses) {
    header("location:tampil_4tib.php");
}
