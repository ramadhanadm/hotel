<?php include "header.php"; ?>

<?php
// Uji Ketika Tombol Simpan di Klik -->
if(isset($_POST['simpan'])) {
    $tgl = date('Y-m-d');

    // Agar Inputan Lebih Aman dari Injection
    $bill = htmlspecialchars($_POST['bill'], ENT_QUOTES);
    $nama = htmlspecialchars($_POST['nama'], ENT_QUOTES);
    $nik = htmlspecialchars($_POST['nik'], ENT_QUOTES);
    $alamat = htmlspecialchars($_POST['alamat'], ENT_QUOTES);
    $tujuan = htmlspecialchars($_POST['tujuan'], ENT_QUOTES);
    $telepon = htmlspecialchars($_POST['telepon'], ENT_QUOTES);
    $kamar = htmlspecialchars($_POST['kamar'], ENT_QUOTES);
    $tipe = htmlspecialchars($_POST['tipe'], ENT_QUOTES);
    $tarif = htmlspecialchars($_POST['tarif'], ENT_QUOTES);
    $tanggal = htmlspecialchars($_POST['tanggal'], ENT_QUOTES);
    $keluar = htmlspecialchars($_POST['keluar'], ENT_QUOTES);
    $lama = htmlspecialchars($_POST['lama'], ENT_QUOTES);
    $tagihan = htmlspecialchars($_POST['tagihan'], ENT_QUOTES);
    $jenis = htmlspecialchars($_POST['jenis'], ENT_QUOTES);

    // Persiapan Query Simpan Data
    $simpan = mysqli_query($koneksi, "INSERT INTO ttamu VALUES ('', '$tgl', '$nama', '$alamat', '$nik', 
    '$tujuan', '$telepon', '$keluar', '$lama', '$kamar', '$tipe', '$tarif', '$jenis', '$tagihan', '$bill')");

    //Uji Jika Simpan Data Sukses
    if ($simpan) {
        echo "<script>alert('Simpan data Sukses, Terima kasih..!');
            document.location='?'</script>";
    } else {
        echo "<script>alert('Simpan data Gagal !!!');
        document.location='?'</script>";
    }

}
?>

        <!-- Start Head -->
        <!-- <div class="head text-center mt-3 mb-5">
            <img src="assets/img/logo.png" alt="logo" width="300px" style="margin-top: 30px;">
            <h2 class="text-white">Sistem Informasi Buku Tamu <br>Hotel Sarah Juli </h2>
            <h4 class="text-white">Tahun </h4>
        </div> -->
        <!-- End Head -->

        <div class="row mt-5 mb-2">
            <div class="col-lg-12">
                <h3>Form Pengisian Data Tamu/ Pengunjung Hotel Sarah Juli </h3>
                <p>Silakan tambah data di form yang sudah disediakan...</p>
                    <div class="col-md-2 mb-4">
                        <a href="dashboard.php" class="btn btn-danger form-control"><i class="fa fa-backward">
                        </i> Kembali</a>
                    </div>
            </div>
        </div>

        

        <!-- Start Input Tamu -->
        <div class="row mt-2">
            <div class="col-lg-12 mb-3">
                <div class="card shadow bg-gradient-light">
                    <div class="card card-body">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">IDENTITAS TAMU/ PENGUNJUNG</h1>
                            </div>
                            <form class="user" method="POST" action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> Kode Bill :
                                            <input type="number" class="form-control form-control-user" name="bill" placeholder="Kode Bill" autocomplete="off" required>
                                        </div>
                                        <div class="form-group"> Nama Pengunjung :
                                            <input type="text" class="form-control form-control-user" name="nama" placeholder="Nama Pengunjung" autocomplete="off" required>
                                        </div>
                                        <div class="form-group"> NIK :
                                            <input type="number" class="form-control form-control-user" name="nik" placeholder="NIK" autocomplete="off" required>
                                        </div>
                                        <div class="form-group"> Alamat :
                                            <input type="text" class="form-control form-control-user" name="alamat" placeholder="Alamat" autocomplete="off" required>
                                        </div>
                                        <div class="form-group"> No. Telepon :
                                            <input type="number" class="form-control form-control-user" name="telepon" placeholder="No. Telepon" autocomplete="off" required>
                                        </div>
                                        <div class="form-group"> Tujuan :
                                            <select class="form-control form-select" name="tujuan" aria-label="Default select example" required>
                                                <option selected value="">-- Pilih Salah Satu --</option>
                                                <option value="Dinas">Dinas</option>
                                                <option value="Berkunjung">Berkunjung</option>                                                                  
                                                <option value="Sales">Sales</option>                                                                  
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group"> No Kamar :
                                            <input type="number" class="form-control form-control-user" name="kamar" placeholder="No. Kamar" autocomplete="off" required>
                                        </div>
                                        <div class="form-group"> Tipe kamar :
                                            <select class="form-control form-select" name="tipe" aria-label="Default select example" required>
                                                <option selected value="">-- Pilih Salah Satu --</option>
                                                <option value="Ekonomi">Ekonomi</option>
                                                <option value="Standard">Standard</option>                                                                  
                                                <option value="Superrior">Superrior</option>
                                                <option value="Family Room">Family Room</option>
                                                <option value="Deluxe">Deluxe</option>                                                                  
                                                <option value="Triple Room">Triple Room</option>                                                                   
                                            </select>
                                        </div>
                                        <div class="form-group"> Tarif Kamar :
                                            <input type="number" class="form-control form-control-user" name="tarif" placeholder="Tarif Kamar" autocomplete="off" required>
                                        </div>
                                        <div class="form-group"> Tanggal Masuk :
                                            <input type="date" class="form-control form-control-user" name="tanggal" placeholder="Tanggal Masuk" autocomplete="off" 
                                            value="<?= date('Y-m-d') ?>" required>
                                        </div>
                                        <div class="form-group"> Tanggal Keluar :
                                            <input type="date" class="form-control form-control-user" name="keluar" placeholder="Tanggal Keluar" autocomplete="off" required>
                                        </div>
                                        <div class="form-group"> Lama Mengingap :
                                            <input type="text" class="form-control form-control-user" name="lama" placeholder="Lama Menginap" autocomplete="off" required>
                                        </div>
                                        <div class="form-group"> Total Pembayaran :
                                            <span id="rupiah"></span>
                                            <input type="text" class="form-control form-control-user" name="tagihan" id="tagihan" placeholder="Total Pembayaran" 
                                            autocomplete="off" onkeyup="document.getElementById('rupiah').innerHTML = formatCurrency(this.value);" required>
                                        </div>
                                        <!-- <script>
                                            function formatCurrency(tagihan) {
                                                tagihan = tagihan.toString().replace(/\$|\./g,'');
                                                if(isNaN(saldo))
                                                saldo = "0";
                                                sign = (saldo == (saldo = Math.abs(saldo)));
                                                saldo = Math.floor(saldo*100+0.50000000001);
                                                cents = saldo%100;
                                                saldo = Math.floor(saldo/100).toString();
                                                if(cents<10)
                                                cents = "0" + cents;
                                                for (var i = 0; i < Math.floor((saldo.length-(1+i))/3); i++)
                                                saldo = saldo.substring(0,saldo.length-(4*i+3))+'.'+
                                                saldo.substring(saldo.length-(4*i+3));
                                                return (((sign)?'':'-') + 'Rp.' + saldo + ',' + cents);
                                            }
                                        </script> -->
                                        <div class="form-group"> Jenis Pembayaran :
                                            <select class="form-control form-select" name="jenis" aria-label="Default select example" required>
                                                <option selected value="">-- Pilih Salah Satu --</option>
                                                <option value="Tunai">Tunai</option>
                                                <option value="Transfer Bank">Transfer Bank</option>                                                                  
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <button type="submit" name="simpan" class="btn btn-primary btn-user btn-block ">
                                Simpan Data</button>
                                
                            </form>
                            
                            <hr>
                            <div class="text-center">
                                <a class="small" href="#">Hotel Sarah Juli | <?=date("l, d M Y - h:i:s")?></a>
                            </div>
                        
                    </div>
                </div>
            </div>

            <!-- Start Data Tamu -->
            <!-- <div class="col-lg-5 mb-3">
                <div class="card shadow">
                    <div class="card card-body">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Statistik Pengunjung</h1>
                        </div> -->
                        <?php 
                        // deklarasi tanggal
                        
                        // menampilkan tanggal sekarang
                        // $tgl_sekarang = date('Y-m-d');

                        // menampilkan tanggal kemarin
                        // $kemarin = date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d'))));

                        // menampilkan satu minggu
                        // $seminggu = date('Y-m-d h:i:s', strtotime('-1 week +1 day', strtotime($tgl_sekarang)));

                        // $sekarang = date('Y-m-d h:i:s');

                        // menampilkan satu bulan
                        // $bulan_ini = date('m');

                        // jumlah total
                        // $tgl_sekarang = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM ttamu where tanggal like '%$tgl_sekarang%'"));

                        // $kemarin = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM ttamu where tanggal like '%$kemarin%'"));

                        // $seminggu = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM ttamu where tanggal BETWEEN '%$seminggu%' AND '$sekarang'"));

                        // $sebulan = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM ttamu where month(tanggal) = '$bulan_ini'"));

                        // $keseluruhan = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM ttamu"));

                        // $kode = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM ttamu"));

                        
                        // ?>
                        <!-- <table class="table table-bordered">
                            <tr>
                                <td>Hari ini</td>
                                <td>: <?= $tgl_sekarang[0] ?></td>
                            </tr>
                            <tr>
                                <td>Kemarin</td>
                                <td>: <?= $kemarin[0] ?></td>
                            </tr>
                            <tr>
                                <td>Seminggu</td>
                                <td>: <?= $sebulan[0] ?></td>
                            </tr>
                            <tr>
                                <td>Bulan ini</td>
                                <td>: <?= $seminggu[0] ?></td>
                            </tr>
                            <tr>
                                <td>Keseluruhan</td>
                                <td>: <?= $keseluruhan[0] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div> -->
            <!-- End Data Tamu -->
        </div>
        <!-- End Input Tamu -->
        <br>
        <br>

        <!-- Start Table -->
        <!-- DataTales Example -->
        <!-- <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pengunjung Hari ini [<?= date('d-m-Y') ?>]</h6>
                        </div>
                        <div class="card-body">
                            <a href="rekapitulasi.php" class="btn btn-success mb-3"><i class="fa fa-table"></i> Rekapitulasi Pengunjung </a>
                            <a href="logout.php" class="btn btn-danger mb-3"><i class="fa fa-sign-out-alt"></i> Keluar </a>

                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kode Bill</th>
                                            <th>Nama</th>
                                            <th>No. Kamar</th>
                                            <th>Tanggal Menginap</th>
                                            <th>Tanggal Keluar</th>
                                            <th>Total Pembayaran</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $tgl = date('Y-m-d');
                                            $tampil = mysqli_query($koneksi,"SELECT * FROM ttamu where tanggal like '%$tgl%' order by id asc");
                                            $no = 1;
                                            $kode = 1;
                                            while($data = mysqli_fetch_array($tampil)){
                                        ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $kemarin[0] ?><?= $data['bill'] ?> / <?= $kode++ ?></td>
                                            <td><?= $data['nama'] ?></td>
                                            <td><?= $data['kamar'] ?></td>
                                            <td><?= $data['tanggal'] ?></td>
                                            <td><?= $data['keluar'] ?></td>
                                            <td><?= $data['tagihan'] ?></td>
                                            <td>
                                                <a href="cek.php?id=<?= $data['id'] ?>" target="_blank" class="btn btn-primary mb-3"><i class="fa fa-search"></i> Cek </a>
                                                <a href="cetak.php?id=<?= $data['id'] ?>" target="_blank" class="btn btn-danger mb-3"><i class="fa fa-print"></i> Print </a>
                                                </td>
                                        </tr>
                                            <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
        </div> -->

<?php include "footer.php"; ?>