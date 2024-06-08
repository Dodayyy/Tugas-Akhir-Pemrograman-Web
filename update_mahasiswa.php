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
$sql = "update tb_pendaftar set nama_pendaftar='$nama', jenkel='$jenkel', tgl_lahir='$tgl_lahir', alamat='$alamat', telepon='$telepon',
sekolah_asal='$sekolah_asal', pilih_jurusan='$pilih_jurusan',biaya_daftar='$biaya_daftar', tgl_daftar='$tgl_daftar' where kode_daftar='$kode'";
$proses = mysqli_query($koneksi, $sql);
if ($proses) {
    header("location:tampil_mahasiswa.php");
}
