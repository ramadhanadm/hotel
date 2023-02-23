<?php include "header.php"
?>

<!-- Awal row -->
<div class="row">
    <!-- Awal col 12 -->
    <div class="col-md-12">
        <!-- Awal card -->
        <div class="card shadow mt-5 mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Rekapitulasi Tamu/ Pengunjung [<?= date('d-m-Y') ?>]</h6>
            </div>
            <div class="card-body">
                <form action="" method="POST" class="text-center">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label> Dari Tanggal</label>
                                <input type="date" class="form-control" name="tanggal1" value="<?= isset($_POST['tanggal1'])? 
                                $_POST['tanggal1']: date('Y-m-d') ?>" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label> Sampai Tanggal</label>
                                <input type="date" class="form-control" name="tanggal2" value="<?= isset($_POST['tanggal2'])? 
                                $_POST['tanggal2']: date('Y-m-d') ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"></div>
                            <div class="col-md-2">
                                <button class="btn btn-primary form-control" name="btampilkan"><i class="fa fa-search">
                                </i> Tampilkan</button>
                            </div>
                            <div class="col-md-2">
                                <a href="dashboard.php" class="btn btn-danger form-control"><i class="fa fa-backward">
                                </i> Kembali</a>
                            </div>
                    </div>
                </form>

                <?php 
                if (isset($_POST['btampilkan'])) :
                ?>
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
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
                        <br>
                        <tbody>
                            <?php
                                $tgl1 = $_POST['tanggal1'];
                                $tgl2 = $_POST['tanggal2'];
                                
                                $tampil = mysqli_query($koneksi,"SELECT * FROM ttamu where tanggal BETWEEN '$tgl1' and '$tgl2' order by id desc");
                                $no = 1;

                                while($data = mysqli_fetch_array($tampil)){
                            ?>
                        <tr>
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

                    <center>
                        <form method="POST" action="exportexcel.php">
                            <div class="row">
                            <div class="col-md-3"></div>
                                <div class="col-md-3">
                                    <input type="hidden" name="tanggala" value="<?= @$_POST['tanggal1'] ?>">
                                    <input type="hidden" name="tanggalb" value="<?= @$_POST['tanggal2'] ?>">
                                    <button class="btn btn-success form-control" name="bexport"><i class="fa fa-download"></i> 
                                    Export Excel</button>
                                </div>
                            </div>
                        </form>
                        <form method="POST" action="print.php" target="_blank">
                            <div class="row" style="margin-top: -38px;">
                            <div class="col-md-6"></div>
                                <div class="col-md-3">
                                    <input type="hidden" class="form-control" name="tanggal1" value="<?= isset($_POST['tanggal1'])? 
                                    $_POST['tanggal1']: date('d-m-Y') ?>">
                                    <input type="hidden" name="tanggala" value="<?= @$_POST['tanggal1'] ?>">
                                    <input type="hidden" name="tanggalb" value="<?= @$_POST['tanggal2'] ?>">
                                    <button class="btn btn-danger form-control" name="bexport"><i class="fa fa-share"></i> 
                                    Export PDF</button>
                                </div>
                            </div>
                        </form>
                    </center>
                    <br>
                    <br>
                </div>
                <?php endif;?>
            </div>
        </div>
        <!-- Akhir card -->
    </div>
    <!-- Akhir col 12 -->

</div>
<!-- Akhir row -->

<?php include "footer.php"; ?>