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
        <table border="2px solid black" width="1350px" style="margin-top: 5px;"></table>
        </div>
        <div class="main">
        <?php
            $tgl = date('Y-m-d');
            $id = $_GET["id"];
            $tampil = mysqli_query($koneksi,"SELECT * FROM ttamu WHERE id = $id");
            $no = 1;
                    while($data = mysqli_fetch_array($tampil)){
        ?>
            <table class="table" border="3 solid black" style="margin-top: 40px; margin-bottom: 100px; margin-left: 110px; font-size: 25;" cellspacing="5" cellpadding = "10">
                <tr>
                    <td style="font-weight: bold; width: 250px">Kode Bill </td>
                    <td style="width: 800px">: <?= $data['bill'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 250px">Nama </td>
                    <td style="width: 700px">: <?= $data['nama'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; ">NIK </td>
                    <td style="">: <?= $data['nik'] ?></td>
                </tr>
                <tr>
                    <td style=" font-weight: bold">Alamat </td>
                    <td style="">: <?= $data['alamat'] ?></td>
                </tr>
                <tr>
                    <td style=" font-weight: bold">No. Telepon </td>
                    <td style="">: <?= $data['telepon'] ?></td>
                </tr>
                <tr>
                    <td style=" font-weight: bold">Tujuan </td>
                    <td style="">: <?= $data['tujuan'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 250px">No. Kamar </td>
                    <td style="width: 700px">: <?= $data['kamar'] ?></td>
                </tr>
                <tr>
                    <td style=" font-weight: bold">Tipe Kamar </td>
                    <td style="">: <?= $data['tipe'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; width: 250px">Tarif Kamar </td>
                    <td style="width: 700px">: <?= $data['tarif'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; ">Tanggal Masuk </td>
                    <td style="">: <?= $data['tanggal'] ?></td>
                </tr>
                <tr>
                    <td style=" font-weight: bold">Tanggal Keluar </td>
                    <td style="">: <?= $data['keluar'] ?></td>
                </tr>
                <tr>
                    <td style=" font-weight: bold">Total Pembayaran </td>
                    <td style="">: <?= $data['tagihan'] ?></td>
                </tr>
                <tr>
                    <td style=" font-weight: bold">Jenis Pembayaran </td>
                    <td style="">: <?= $data['jenis'] ?></td>
                </tr>
            </table>
            <?php } ?>
        </div>
    </body>
</html>