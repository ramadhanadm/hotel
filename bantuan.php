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
                        <h1>Pusat Bantuan</h1>
                        <h5>Berikut adalah detail halaman dan langkah-langkah saat menggunakan aplikasi buku tamu.</h5>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Slide bar</a>
                    </div>
                </div>
            </div>

            <!-- Start Head -->
            <!-- <div class="head text-center mt-5 mb-5">
                <img src="assets/img/logo.png" alt="logo" width="300px" style="margin-top: 30px;">
                <h2 class="text-black">HOTEL SARAH JULI </h2>
                <h3 class="text-black">Jl. Kolonel Muhammaddin No. 54 Kec. Blangkejeren Kab. Gayo Lues - 24653 <br>No. Telp : 085261532055 </h3>
                <h4 class="text-black">Tahun <?=date('Y') ?></h4>
            </div> -->
            <!-- End Head -->

            <!-- Start Statistik -->
            <div class="row mt-5">
                <div class="col-lg-12 mb-5">
                    <div class="card shadow bg-gradient-info">
                        <div class="card card-body">
                            <div>
                                <h1 class="h4 text-center text-gray-900 mb-2" style="font-weight: bold;">Beranda</h1>
                                <ol>
                                    <li>Menyediakan data statistik pengunjung/ tamu hotel sarah juli dimana sudah otomatis 
                                        terhitung dan diperbaharui setiap harinya sesuai dengan data tamu yang di tambahkan. 
                                        Baik di hari ini, kemarin, total bulan ini dan total keseluruhan pengunjung/ tamu hotel.
                                    </li>
                                </ol>
                            </div>
                            <div>
                                <h1 class="h4 text-center text-gray-900 mb-2" style="font-weight: bold;">Tambah Data</h1>
                                <ol>
                                    <li>Table atau Form input identitas pengunjung/ tamu hotel sarah juli yang sudah terhubung 
                                        ke sistem database sehingga memudahkan dalam proses pengecekan dan penyimpanan data diri 
                                        maupun transaksi dari pengunjung/ tamu hotel yang meliputi :
                                        <ol type="a">
                                            <li>Kode Bill,</li>
                                            <li>Nama,</li>
                                            <li>Nomor Induk Kependudukan,</li>
                                            <li>Alamat,</li>
                                            <li>Nomor Telepon,</li>
                                            <li>Tujuan Menginap,</li>
                                            <li>Jenis Pembayaran,</li>
                                            <li>Nomor Kamar,</li>
                                            <li>Tipe Kamar,</li>
                                            <li>Tarif Kamar Permalam,</li>
                                            <li>Tanggal Masuk,</li>
                                            <li>Tanggal Keluar,</li>
                                            <li>Total Waktu Menginap/malam,</li>
                                            <li>Total Tagihan/ Pembayaran.</li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                            <div>
                                <h1 class="h4 text-center text-gray-900 mb-2" style="font-weight: bold;">Data Tamu</h1>
                                <ol>
                                    <li>Berisikan data pengunjung/ tamu hotel sarah juli yang baru selesai ditambahkan dari
                                        halaman tambah data, meliputi : no. urut, kode bill, nama, no. kamar, tanggal masuk, tanggal 
                                        keluar, total tagihan/ pembayaran dan terdapat juga 2 buah tombol aksi yaitu : cek dan print. 
                                        <ol type="a">
                                            <li>Cek : adalah tombol aksi dimana identitas atau data diri keseluruhan dari pengunjung/ 
                                                tamu hotel yang ingin kita periksa atau lihat secara lebih detail.</li>
                                            <li>Print : adalah tombol aksi dimana kita dapat mencetak bill hotel atau melihat detail 
                                                mengenai transaksi dari pengunjung/ tamu hotel yang akan menginap.
                                            </li>
                                        </ol>
                                    </li>
                                    <li style="margin-top: 5px;">Data akan diperbaharui setiap harinya, jumlah atau total data hanya akan sesuai dengan 
                                        tanggal atau waktu kita menambahkan data pengunjung/ tamu hotel sehingga untuk data di 
                                        hari kemarin dan seterusnya sudah tidak bisa kita cek atau lihat lagi.
                                    </li>
                                </ol>
                            </div>
                            <div>
                                <h1 class="h4 text-center text-gray-900 mb-2" style="font-weight: bold;">Rekapitulasi</h1>
                                <ol>
                                    <li>Adalah halaman data pengunjung/ tamu hotel sarah juli secara keseluruhan dimana kita dapat 
                                        menentukan hari dan tanggal pencarian mulai dari data yang baru selesai ditambahkan sampai 
                                        dengan data dari beberapa waktu yang telah berlalu, meliputi :
                                        <ol type="a">
                                            <li>Nomor Urut,</li>
                                            <li>Kode Bill,</li>
                                            <li>Nama,</li>
                                            <li>Nomor Induk Kependudukan,</li>
                                            <li>Alamat,</li>
                                            <li>Nomor Telepon,</li>
                                            <li>Tujuan Menginap,</li>
                                            <li>Nomor Kamar,</li>
                                            <li>Tipe Kamar,</li>
                                            <li>Tarif Kamar Permalam,</li>
                                            <li>Tanggal Masuk,</li>
                                            <li>Tanggal Keluar,</li>
                                            <li>Total Tagihan/ Pembayaran.</li>
                                            <li>Jenis Pembayaran,</li>
                                        </ol>
                                    </li>
                                    <li style="margin-top: 5px;">Terdapat 2 buat tombol export data pengunjung/ tamu hotel, 
                                        yang mana kita dapat menyesuaikan dengan kebutuhan dan keinginan kita untuk mencetak 
                                        atau mengunduh file data dari pengunjung/ tamu hotel, sesuai dengan hari dan tanggal 
                                        yang telah kita tentukan di kolom pencarian data.
                                        <ol type="a">
                                            <li>Export Data Melalui Ms. Excel adalah tombol aksi dimana kita mengunduh file 
                                                data identitas diri keseluruhan dari pengunjung/ tamu hotel yang sudah kita 
                                                tentukan dan ingin kita periksa atau ubah data pengunjung/ tamu hotel tersebut.</li>
                                            <li>Export Data Melalui PDF adalah tombol aksi dimana kita dapat mencetak data 
                                                atau melihat secara lebih detail mengenai identitas diri dan transaksi dari 
                                                pengunjung/ tamu hotel dalam waktu yang telah kita tentukan.
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                            <div>
                                <h1 class="h4 text-center text-gray-900 mb-2" style="font-weight: bold;">Kontak</h1>
                                <ol>
                                    <li>Halaman yang menyediakan kontak dari admin hotel sarah juli baik alamat dan nomor 
                                        telepon jika terjadi kendala saat menambahkan data atau terjadi masalah saat menggunakan 
                                        aplikasi buku tamu. Silakan hubungi nomor telepon yang tertera di halaman tersebut.
                                    </li>
                                </ol>
                            </div>
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