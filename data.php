<?php include "header.php"; ?>

<!-- Start DataTales Example -->
    <div class="card shadow mt-5 mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Tamu Hari ini [<?= date('d-m-Y') ?>]</h6>
        </div>
        <div class="card-body">
            <!-- <a href="dashboard.php" class="btn btn-success mb-4"><i class="fa fa-table"></i> Kembali </a> -->
            <!-- <a href="logout.php" class="btn btn-danger mb-4"><i class="fa fa-sign-out-alt"></i> Keluar </a> -->
            <div class="col-md-2 mb-4">
                <a href="dashboard.php" class="btn btn-danger form-control"><i class="fa fa-backward">
                </i> Kembali</a>
            </div>
            
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
                            // menampilkan tanggal kemarin
                            $kemarin = date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d'))));

                            // deklarasi tanggal
                            $kemarin = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM ttamu where tanggal like '%$kemarin%'"));

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
                            <td>Rp. <?= $data['tagihan'] ?></td>
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
    </div>

<?php include "footer.php"; ?>