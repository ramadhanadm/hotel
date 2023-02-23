<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Black Mamba</title>

    <!-- Menghubungkan ke File Koneksi -->
    <link rel="stylesheet" href="koneksi.php">

    <!-- Menghubungkan ke UUID -->
    <link rel="stylesheet" href="asset/libs/vendor/autoload.php">

    <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="asset/css/simple-sidebar.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="assets/img/icon.png" type="image/x-icon">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href=""><span class="text-primary"><b>Hotel Sarah Juli</b></span></a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="admin.php">Tambah Data</a>
                </li>
                <li>
                    <a href="data.php">Data Tamu</a>
                </li>
                <li>
                    <a href="rekapitulasi.php">Rekapitulasi</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li>
                    <a href="logout.php"><span class="text-danger">Keluar</span></a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Selamat Datang</h1>
                        <h5>Silakan pakai dan gunakan aplikasi ini dengan baik ya via, capek tau buatnya !</h5>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Slide bar</a>
                    </div>
                </div>
            </div>

            <!-- Start Head -->
            <div class="head text-center mt-5 mb-5">
                <!-- <img src="assets/img/logo.png" alt="logo" width="300px" style="margin-top: 30px;"> -->
                <h2 class="text-black">Sistem Informasi Buku Tamu <br>Hotel Sarah Juli </h2>
                <h4 class="text-black">Tahun <?=date('Y') ?></h4>
            </div>
            <!-- End Head -->

            <!-- Start Statistik -->
            <div class="row mt-5">
                <div class="col-lg-12 mb-1">
                    <div class="card shadow bg-gradient-info">
                        <div class="card card-body">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">STATISTIK PENGUNJUNG</h1>
                            </div>
                            <?php
                            // deklarasi tanggal
                            
                            // menampilkan tanggal sekarang
                            $tgl_sekarang = date('Y-m-d');

                            // menampilkan tanggal kemarin
                            $kemarin = date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d'))));

                            // menampilkan satu minggu
                            $seminggu = date('Y-m-d h:i:s', strtotime('-1 week +1 day', strtotime($tgl_sekarang)));

                            $sekarang = date('Y-m-d h:i:s');

                            // menampilkan satu bulan
                            $bulan_ini = date('m');

                            // jumlah total
                            $tgl_sekarang = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM ttamu where tanggal like '%$tgl_sekarang%'"));

                            $kemarin = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM ttamu where tanggal like '%$kemarin%'"));

                            $seminggu = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM ttamu where tanggal BETWEEN '%$seminggu%' AND '$sekarang'"));

                            $sebulan = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM ttamu where month(tanggal) = '$bulan_ini'"));

                            $keseluruhan = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM ttamu"));

                            
                            ?>
                            <table class="table table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">Hari ini</th>
                                        <th style="text-align: center;">Kemarin</th>
                                        <th style="text-align: center;">Bulan ini</th>
                                        <th style="text-align: center;">Keseluruhan</th>
                                    </tr>
                                </thead>
                                <tbody style="font-size: 20px; font-weight: bold;">
                                    <tr>
                                        <td><?= $tgl_sekarang[0] ?></td>
                                        <td><?= $kemarin[0] ?></td>
                                        <td><?= $sebulan[0] ?></td>
                                        <td><?= $keseluruhan[0] ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Statistik -->

        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    

    <!-- jQuery -->
    <script src="asset/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="asset/js/bootstrap.min.js"></script>
    
    <!-- Menghubungkan ke CKEditor -->
    <script> src="asset/libs/vendor/ckeditor/ckeditor/ckeditor.js"</script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>

<?php include "footer.php"; ?>