<?php include "koneksi.php";

?>

<style>
        @media print {
            @page {
                margin-top: 30px;
                margin-bottom: 10px;
            }
        }

    .judul{
        font-size:30px;
        font-weight:bold;
        margin-top:30px;
    }
    .subjudul {
        font-size: 18px;
        margin-top: -26px;
        margin-bottom: -1px;
    }
</style>

<html>
    <body>
        <div style="text-align: center;">
            <h3 class="judul">Hotel Sarah Juli</h3>
            <p class="subjudul">Jl. Kolonel Muhammaddin No. 54 Kec. Blangkejeren Kab. Gayo Lues</p>
            <img src="assets/img/instagram.jpg" alt="instagram" width="13px" style="margin-top: -30px;"> hotel_sarahjuli 
            <img src="assets/img/wa.jpg" alt="whatsapp" width="13px"> +6285261532055 
            <img src="assets/img/email.png" alt="email" width="14px"> hotelsarahjuli@gmail.com
            <table border="2px solid black" width="1550px" style="margin-top: 5px;"></table>
        </div>
        
        <div class="row">
            <div class="col-md-12" style="text-align: center; margin-top: 30px;">
                <h2> Rekapitulasi Data Tamu/ Pengunjung <br> Hotel Sarah Juli </h2>
                <h3 style="text-align: left; margin-top: -15px;"> Tanggal : <?= isset($_POST['tanggal1'])? 
                                $_POST['tanggal1']: date('Y-m-d') ?> s/d <?= date('Y-m-d') ?></h3>
            </div>
        </div>
        
        <div class="table-responsive" style="margin-top: 30px; margin-bottom: 100px;">
            <table class="table table-bordered text-center" border="1px solid black" id="dataTable" width="100%" cellpadding="10" cellspacing="0">
                <thead >
                    <tr style="font-size: 20px;">
                    <th>No.</th>
                    <th>Kode Bill</th>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Alamat</th>
                    <th>No. Telepon</th>
                    <th>Tujuan</th>
                    <th>No. Kamar</th>
                    <th>Tipe Kamar</th>
                    <th>Tarif Kamar</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Keluar</th>
                    <th>Total Pembayaran</th>
                    <th>Jenis Pembayaran</th>
                    </tr>
                </thead>
                <tbody style="text-align: center;">
                <?php
                    $tgl1 = $_POST['tanggala'];
                    $tgl2 = $_POST['tanggalb'];
                                        
                    $tampil = mysqli_query($koneksi,"SELECT * FROM ttamu where tanggal BETWEEN '$tgl1' and '$tgl2' order by tanggal asc");
                    $no = 1;

                    while($data = mysqli_fetch_array($tampil)){
                ?>
                    <tr style="font-size: 18px;">
                    <td><?= $no++ ?></td>
                    <td><?= $data['bill'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['nik'] ?></td>
                    <td><?= $data['alamat'] ?></td>
                    <td><?= $data['telepon'] ?></td>
                    <td><?= $data['tujuan'] ?></td>
                    <td><?= $data['kamar'] ?></td>
                    <td><?= $data['tipe'] ?></td>
                    <td><?= $data['tarif'] ?></td>
                    <td><?= $data['tanggal'] ?></td>
                    <td><?= $data['keluar'] ?></td>
                    <td><?= $data['tagihan'] ?></td>
                    <td><?= $data['jenis'] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="tanda" style="margin-left: 1300px; margin-top: auto">
            <h3 style="margin-left: 30px;">Pimpinan</h3>
            <h3 style="margin-top: -20px;">Hotel Sarah Juli,</h3>
            <h3 style="margin-top: 120px; margin-left: 6px;">Hj. RAHMAH</h3>
        </div>

        <div class="penutup" style="text-align: center; margin-top: 100px">
            <h3 style="margin-top: -20px;">~ Terima kasih, atas kunjungan Anda ~</h3>
        </div>

        <script>
            window.print();
        </script>

    </body>
</html>
