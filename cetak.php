<?php include "koneksi.php";

// set waktu
date_default_timezone_set("Asia/Jakarta");

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
            // menampilkan tanggal kemarin
            $kemarin = date('Y-m-d', strtotime('-1 day', strtotime(date('Y-m-d'))));

            // deklarasi tanggal
            $kemarin = mysqli_fetch_array(mysqli_query($koneksi, "SELECT count(*) FROM ttamu where tanggal like '%$kemarin%'"));

            $tgl = date('Y-m-d');
            $id = $_GET["id"];
            $tampil = mysqli_query($koneksi,"SELECT * FROM ttamu WHERE id = $id");
            $no = 1;
            $kode = 1;

            while($data = mysqli_fetch_array($tampil)){
        ?>
            <table class="table" style="margin-top: 40px;" cellpadding = "5">
                <tr>
                    <td style="font-size: 18px; font-weight: bold; width: 160px">Nama </td>
                    <td style="font-size: 18px;">: <?= $data['nama'] ?></td>
                </tr>
                <tr>
                    <td style="font-weight: bold; font-size: 18px;">Tanggal Masuk </td>
                    <td style="font-size: 18px;">: <?= $data['tanggal'] ?></td>
                </tr>
                <tr>
                    <td style="font-size: 18px; font-weight: bold">Tanggal Keluar </td>
                    <td style="font-size: 18px;">: <?= $data['keluar'] ?></td>
                </tr>
                <tr>
                    <td style="font-size: 18px; font-weight: bold">Jenis Pembayaran </td>
                    <td style="font-size: 18px;">: <?= $data['jenis'] ?></td>
                </tr>
                <tr>
                    <td style="font-size: 18px; font-weight: bold">Kode Bill </td>
                    <td style="font-size: 18px;">: <?= $kemarin[0] ?><?= $data['bill'] ?> / <?= $kode++ ?></td>
                </tr>
            </table>
            <?php } ?>
        </div>


        <div class="table-responsive" style="margin-top: 50px;">
            <table class="table table-bordered text-center" border="1px solid black" id="dataTable" width="100%" cellpadding="10" cellspacing="0">
                <thead >
                    <tr style="font-size: 20px;">
                        <th>No. Kamar</th>
                        <th>Tipe Kamar</th>
                        <th>Tarif Kamar</th>
                        <th>Lama Menginap</th>
                        <th>Total Pembayaran</th>
                    </tr>
                </thead>
                <tbody style="text-align: center;">
                    <?php
                        $tgl = date('Y-m-d');
                        $id = $_GET["id"];
                        $tampil = mysqli_query($koneksi,"SELECT * FROM ttamu WHERE id = $id");
                        $no = 1;
                            while($data = mysqli_fetch_array($tampil)){
                    ?>
                    <tr style="font-size: 18px;">
                        <td><?= $data['kamar'] ?></td>
                        <td><?= $data['tipe'] ?></td>
                        <td><?= $data['tarif'] ?></td>
                        <td><?= $data['lama'] ?></td>
                        <td>Rp. <?= $data['tagihan'] ?></td>
                    </tr>
                    <!-- <tr style="font-weight: bold;">
                        <td style="text-align: right;" colspan="4">Loundry :</td>
                        <td></td>
                    </tr>
                    <tr style="font-weight: bold;">
                        <td style="text-align: right;" colspan="4">Kopi Shop :</td>
                        <td></td>
                    </tr>
                    <tr style="font-weight: bold;">
                        <td style="text-align: right;" colspan="4">Diskon :</td>
                        <td></td>
                    </tr> -->
                    <tr style="font-weight: bold;">
                        <td style="text-align: right; font-size: 20px" colspan="4">Total Tagihan =</td>
                        <td style="font-size: 20px;">Rp. <?= $data['tagihan'] ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="tanda" style="margin-left: 800px; margin-top: 300px">
            <h3 style="margin-left: 30px;">Pimpinan</h3>
            <h3 style="margin-top: -20px;">Hotel Sarah Juli,</h3>
            <h3 style="margin-top: 120px; margin-left: 6px;">Hj. RAHMAH</h3>
        </div>

        <div class="penutup" style="text-align: center; margin-top: 500px">
            <h3 style="margin-top: -20px;">~ Terima kasih, atas kunjungan Anda ~</h3>
        </div>

        <script>
            window.print();
        </script>

    </body>
</html>

<?php
// Persiapan untuk PDF
// require_once('tcpdf/tcpdf.php');

// // create new PDF document
// $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// // set document information
// $pdf->setCreator(PDF_CREATOR);
// $pdf->setAuthor('Nicola Asuni');
// $pdf->setTitle('TCPDF Example 001');
// $pdf->setSubject('TCPDF Tutorial');
// $pdf->setKeywords('TCPDF, PDF, example, test, guide');

// $pdf->setFont('time', '', 14, '', true);
// $pdf->AddPage();

// $html = file_get_contents ("http://localhost/hotel/cetak.pdf");

// // Print text using writeHTMLCell()
// $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// // This method has several options, check the source code documentation for more information.
// $pdf->Output('example_001.pdf', 'I');


// require_once("fpdf/fpdf.php");

// $pdf = new FPDF();
// $pdf->AddPage();
// $pdf->SetFont('Arial','B',16);
// $pdf->Cell(40,10,'Hello World!');
// $pdf->Output();



// require __DIR__.'/vendor/autoload.php';

// use Spipu\Html2Pdf\Html2Pdf;

// $html2pdf = new Html2Pdf('P', 'A4', 'en');
// $html2pdf->writeHTML('<h1>HelloWorld</h1>This is my first test');
// $html2pdf->output('tamu_hotel.pdf', 'D');


    // $html = ob_get_contents();
    // ob_end_clean();

    // require_once('html2pdf-master/src/html2pdf.php');
    // $pdf = new HTML2PDF('P', 'A4', 'en');
    // $pdf = WriteHTML($html);
    // $pdf->Output('tamu_hotel.pdf', 'D');


    // try
    // {
    //    $html2pdf = new HTML2PDF('P', 'A4', 'en',  array(8, 8, 8, 8));
    //    $html2pdf->pdf->SetDisplayMode('fullpage');
    //    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
    //    $html2pdf->Output('laporan.pdf');
    // }
    // catch(HTML2PDF_exception $e) {
    //     echo $e;
    //     exit;
    // }
?>