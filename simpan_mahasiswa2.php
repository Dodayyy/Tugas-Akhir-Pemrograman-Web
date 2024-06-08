<?php
include("koneksi.php");
$kode = $_POST['kode_daftar'];
$nama = $_POST['nama_pendaftar'];
$jenkel = $_POST['jenkel'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$sekolah_asal = $_POST['sekolah_asal'];
$pilih_jurusan = $_POST['pilih_jurusan'];
$biaya_daftar = $_POST['biaya_daftar'];
$tgl_daftar = $_POST['tgl_daftar'];

// proses simpan database

$sql = "insert into tb_pendaftar values('$kode','$nama','$jenkel','$tgl_lahir','$alamat','$telepon'
,'$sekolah_asal','$pilih_jurusan','$biaya_daftar','$tgl_daftar')";
$proses = mysqli_query($koneksi, $sql);
if ($proses) {
    header("location:pendaftaran.php");
}
