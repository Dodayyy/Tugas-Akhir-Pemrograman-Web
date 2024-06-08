<?php
include("koneksi.php");
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$kd_mk = $_POST['kd_mk'];
$nm_mk = $_POST['nm_mk'];
$jumlah_sks = $_POST['jumlah_sks'];
$semester = $_POST['semester'];
$sql = "update tb_krs set nama='$nama', prodi='$prodi',kd_mk='$kd_mk',nm_mk='$nm_mk',jumlah_sks='$jumlah_sks',semester='$semester' where nim='$nim'";
$proses = mysqli_query($koneksi, $sql);
if ($proses) {
    header("location:tampil_4tib.php");
}
