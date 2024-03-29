<?php include "koneksi.php";

// Persiapan untuk Excel
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Tamu/ Pengunjung Hotel.xls");
header("Pragma: no-cache");
header("Expires:0");

?>

<?php 
    // set waktu
    date_default_timezone_set("Asia/Jakarta"); 
?>

<table border="1">
    <thead>
        <tr>
            <th colspan="14"> Rekapitulasi Data Tamu/ Pengunjung ~ Hotel Sarah Juli</th>
        </tr>
        <tr>
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
            <th>Tanggal Menginap</th>
            <th>Tanggal Keluar</th>
            <th>Total Pembayaran</th>
            <th>Jenis Pembayaran</th>
        </tr>
    </thead>
    <tbody>
        <?php
            // menampilkan tanggal kemarin
            $kemarin = date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d'))));

            // deklarasi tanggal
            $kemarin = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM ttamu where tanggal like '%$kemarin%'"));

            $tgl1 = $_POST['tanggala'];
            $tgl2 = $_POST['tanggalb'];
                                
            $tampil = mysqli_query($koneksi,"SELECT * FROM ttamu where tanggal BETWEEN '$tgl1' and '$tgl2' order by tanggal asc");
            $no = 1;
            $kode = 1;

            while($data = mysqli_fetch_array($tampil)){
        ?>
        <tr style="text-align: center;">
            <td><?= $no++ ?></td>
            <td><?= $kemarin[0] ?><?= $data['bill'] ?> / <?= $kode++ ?></td>
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
            <td>Rp. <?= $data['tagihan'] ?></td>
            <td><?= $data['jenis'] ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>