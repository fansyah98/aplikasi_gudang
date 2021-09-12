<section class="content-header">
    <h1>
        Blank page
        <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url() ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Nama Petugas [<?php echo $row->nama_petugas ?>]</h3>
            <div class="box-tools pull-right">
                <a href="<?= site_url('petugas') ?>" class="btn btn-secondary btn-xs"> <i class="fa fa-undo"></i> kembali ke petugas</a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <!-- <?= print_r($row) ?> -->
            <table class="table table-bordered table-responsive table-striped">
                <tbody>
                    <tr>
                        <th>id petugas</th>
                        <td><?= $row->id_petugas ?></td>
                    </tr>
                    <tr>
                        <th>nama petugas</th>
                        <td><?= $row->nama_petugas ?></td>
                    </tr>
                    <tr>
                        <th>hari </th>
                        <td><?= $row->hari ?></td>
                    </tr>
                    <tr>
                        <th>waktu </th>
                        <td><?= $row->waktu ?></td>
                    </tr>
                    <tr>
                        <th>istirahat </th>
                        <td><?= $row->istirahat ?></td>
                    </tr>
                    <tr>
                        <th>jam pulang </th>
                        <td><?= $row->waktu_pulang ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <a href="<?= site_url('petugas/cetak/' . $row->id_petugas) ?>" target="_blank" class="btn btn-success btn-xs"> <i class="fa fa-print"></i> mencetak data </a>
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->
</section>
<!-- /.content -->