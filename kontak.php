<?php include "header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hotel Sarah Juli</title>

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
                    <a href="dashboard.php">Beranda</a>
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
                    <a href="bantuan.php">Bantuan</a>
                </li>
                <li>
                    <a href="kontak.php">Kontak</a>
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
                        <h1>Kontak Kami</h1>
                        <h5>Silakan hubungi kontak di bawah ini jika terjadi kendala saat menggunakan aplikasi buku tamu.</h5>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Slide bar</a>
                    </div>
                </div>
            </div>

            <!-- Start Head -->
            <div class="head text-center mb-5">
                <!-- <img src="assets/img/logo.png" alt="logo" width="300px" style="margin-top: 30px;"> -->
                <h2 class="text-black">HOTEL SARAH JULI </h2>
                <h3 class="text-black">Jl. Kolonel Muhammaddin No. 54 Kec. Blangkejeren Kab. Gayo Lues - 24653 <br>No. Telp : 085261532055 </h3>
                <!-- <h4 class="text-black">Tahun <?=date('Y') ?></h4> -->
            </div>
            <!-- End Head -->

            <!-- Start Statistik -->
            <div class="row mt-5">
                <div class="col-lg-12 mb-5">
                    <div class="card shadow bg-gradient-info">
                        <div class="card card-body">
                            <!-- <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-3" style="font-weight: bold; margin-top: -3px;">Kontak</h1>
                            </div> -->
                            <table class="table text-center" style="margin-bottom: -5px;">
                                <thead>
                                    <tr style="font-size: 20px; font-weight: bold;">
                                        <th style="text-align: center;">Customer Service</th>
                                        <th style="text-align: center;">Technical Support</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="font-size: 17px;">
                                        <td><img src="assets/img/hotel.png" alt="" width="150px" style="margin-bottom: 10px;"><br> Oktavia Rahsa</td>
                                        <td><img src="asset/profil.jpg" alt="" width="150px" style="border-radius: 50%; margin-bottom: 10px;"> <br> Ramadhana</td>
                                    </tr>
                                    <tr style="font-size: 22px; font-weight: bold;">
                                        <td>0852-4798-4331</td>
                                        <td>0812-2764-8127</td>
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