<?php
include("koneksi.php");
$kode_daftar = $_POST['kode_daftar'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$prodi = $_POST['prodi'];
$semester = $_POST['semester'];

// proses simpan database

$sql = "insert into tb_registrasi values('$kode_daftar','$nim','$nama','$kelas','$prodi','$semester')";
$proses = mysqli_query($koneksi, $sql);
if ($proses) {
    header("location:tampil_ruangan.php");
}
