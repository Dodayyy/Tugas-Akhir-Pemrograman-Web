<?php
session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard Mahasiswa</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers" />
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media" />
    <link rel="shortcut icon" href="logo.ico" />

    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

</head>

<body class="">




    <?php
    include("koneksi.php");
    $sql = "select * from tb_pendaftar ";
    $proses = mysqli_query($koneksi, $sql);
    ?>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered" id="dataTable">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Kode Daftar</th>
                        <th scope="col">Nama Pendaftar</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Sekolah Asal</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Biaya Daftar</th>
                        <th scope="col">Tanggal Daftar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($isi = mysqli_fetch_assoc($proses)) : ?>
                        <tr>
                            <td><?php echo $isi['kode_daftar']; ?></td>
                            <td><?php echo $isi['nama_pendaftar']; ?></td>
                            <td><?php echo $isi['jenkel']; ?></td>
                            <td><?php echo $isi['tgl_lahir']; ?></td>
                            <td><?php echo $isi['alamat']; ?></td>
                            <td><?php echo $isi['telepon']; ?></td>
                            <td><?php echo $isi['sekolah_asal']; ?></td>
                            <td><?php echo $isi['pilih_jurusan']; ?></td>
                            <td><?php echo $isi['biaya_daftar']; ?></td>
                            <td><?php echo $isi['tgl_daftar']; ?></td>
                        </tr>
                    <?php
                    endwhile;
                    ?>
                </tbody>
            </table>
            <div class="col-auto">
                <a type="button" class="btn text-white" style="background-color: #0079FF" href="tampil_mahasiswa.php">
                    Kembali</a>
            </div>
        </div>
    </div>
    </div>

    <!--//row-->

    <!--//app-wrapper-->

    <!-- Javascript -->
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Charts JS -->
    <script src="assets/plugins/chart.js/chart.min.js"></script>
    <script src="assets/js/index-charts.js"></script>

    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>


    <!-- Page level custom scripts -->
    <script src="assets/js/Table.js"></script>

</body>

</html>