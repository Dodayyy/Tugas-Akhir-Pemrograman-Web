<?php
// Koneksi ke database
include("koneksi.php");

// Cek apakah kode_daftar sudah disubmit melalui form
if (isset($_POST['upload'])) {
    // Mendapatkan kode_daftar dari input form
    $kodeDaftar = $_POST['kode_daftar'];

    // Query untuk mendapatkan data NIM berdasarkan kode_daftar
    $sql = "SELECT nim FROM tb_registrasi WHERE kode_daftar = '$kodeDaftar'";
    $result = $koneksi->query($sql);

    // Periksa apakah data ditemukan
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nim = $row['nim'];
    } else {
        // Jika data tidak ditemukan, set nim menjadi empty string
        $nim = "";
    }
} else {
    $nim = "";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portal - Bootstrap 5 Admin Dashboard Template For Developers</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="logo.ico">
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">
</head>

<body class="app app-404-page">
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 col-md-11 col-lg-7 col-xl-6 mx-auto">
                <div class="app-branding text-center mb-5">
                    <a class="app-logo" href="index.php"><img class="logo-icon me-2" src="assets/images/Logo.png" alt="logo"><span class="logo-text">UNIVERSITAS OMBUS-OMBUS</span></a>
                </div><!--//app-branding-->
                <div class="app-card p-5 text-center shadow-sm">
                    <h3 class="page-title mb-4">Ganti Nama</h3>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kode Daftar</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="kode_daftar" value="<?php echo isset($kodeDaftar) ? $kodeDaftar : ''; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label text-start">NIM</label>
                            <input type="text" class="form-control <?php if (empty($nim) && isset($kodeDaftar)) {
                                                                        echo 'is-invalid';
                                                                    } ?>" id="nim" aria-describedby="namaAdminHelp" value="<?php echo isset($nim) ? $nim : ''; ?>" name="nim" readonly>
                            <?php if (empty($nim) && isset($kodeDaftar)) { ?>
                                <?php if ($nim === '') { ?>
                                    <div class="invalid-feedback">Registrasi Gagal</div>
                                <?php } else { ?>
                                    <div class="invalid-feedback">Anda belum terdaftar</div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                        <button type="submit" name="upload" class="btn app-btn-primary">Lihat</button>
                        <a name="upload" class="btn app-btn-primary" href="index2.php">Kembali</a>
                    </form>

                </div>
            </div><!--//col-->
        </div><!--//row-->
    </div><!--//container-->
    <!-- Javascript -->
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Charts JS -->
    <script src="assets/plugins/chart.js/chart.min.js"></script>
    <script src="assets/js/charts-custom.js"></script>
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script>
</body>

</html>