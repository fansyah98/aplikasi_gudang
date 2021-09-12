<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/colorpicker/bootstrap-colorpicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/skins/_all-skins.min.css">

    <title>Cetak Data Peminjaman</title>
</head>

<body onload="window.print();">
    <!-- Main content -->
    <section class=" invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-user"></i> <?= $pinjem->nama_peminjam ?>
                    <small class="pull-right">
                        <?php $tanggal = mktime(date('m'), date("d"), date('Y'));
                        echo " $tanggal : " . date("d-m-y", $tanggal) . "</br>" ?>
                    </small>
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                Keterangan
                <address>
                    <strong>Perpustakaan Online</strong><br>
                    <?= $pinjem->waktu ?> waktu pinjam<br>
                    <?= $pinjem->batas_pinjam ?> batas peminjaman<br>
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                Identistas Peminjam
                <address>
                    <strong>John Doe</strong><br>
                    <?= $pinjem->nama_peminjam ?><br>
                    <?= $pinjem->nrp ?><br>
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <b><?= $pinjem->id_pinjem ?></b> Nomor Peminjaman <br>
                <br>
                <b><?= $pinjem->id_buku ?> ID:</b> Buku Pinjam<br>
                <b>Account:</b> <?= $pinjem->nama_peminjam ?>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>kode buku</th>
                            <th>nama peminjam</th>
                            <th>nama buku </th>
                            <th>jenis buku</th>
                            <th>penerbit</th>
                            <th>tahun</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $pinjem->id_pinjem ?></td>
                            <td><?= $pinjem->kode_buku ?></td>
                            <td><?= $pinjem->nama_peminjam ?></td>
                            <td><?= $pinjem->p_buku ?></td>
                            <td><?= $pinjem->Jenis ?></td>
                            <td><?= $pinjem->penerbit ?></td>
                            <td><?= $pinjem->tahun ?></td>

                        </tr>

                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <!-- accepted payments column -->

            <!-- /.col -->
            <div class="col-xs-6">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th style="width:50%">Nama Peminjam:</th>
                            <td><?= $pinjem->nama_peminjam ?></td>
                        </tr>
                        <tr>
                            <th>Batas Waktu</th>
                            <td><?= $pinjem->batas_pinjam ?></td>
                        </tr>
                        <tr>
                            <th>Waktu Pinjam:</th>
                            <td><?= $pinjem->waktu ?></td>
                        </tr>
                        <tr>
                            <th>nrp:</th>
                            <td><?= $pinjem->nrp ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                <a href="<?= site_url('pinjam/print/' . $pinjem->id_pinjem) ?>" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>

            </div>
        </div>
    </section>
</body>

<!-- jQuery 2.2.3 -->
<script src="<?= base_url() ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url() ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/dist/js/demo.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?= base_url() ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?= base_url() ?>assets/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?= base_url() ?>assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>

<script src="<?= base_url() ?>assets/js/sf.js"></script>

</html>