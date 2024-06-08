<?php
include("koneksi.php");
$kode_daftar = $_POST['kode_daftar'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$prodi = $_POST['prodi'];
$semester = $_POST['semester'];
$sql = "update tb_registrasi set nim='$nim',nama='$nama',kelas='$kelas',prodi='$prodi',prodi='$prodi' where kode_daftar='$kode_daftar'";
$proses = mysqli_query($koneksi, $sql);
if ($proses) {
    header("location:tampil_ruangan.php");
}
