<section class="content-header">
    <h1>
        <?= $title ?>
        <small><?= $h1 ?></small>
    </h1>

</section>
<!-- Main content -->
<section class="content">
    <?php $this->load->view('message') ?>
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><?php echo $title ?></h3>
            <div class="box-tools pull-right">
                <a href="<?= site_url('petugas/add') ?>" class=" btn btn-primary btn-xs "><i class="fa fa-plus"></i> Tambah data Petugas </a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-responsive table-striped" id="table1">
                <thead>
                    <tr>
                        <th style="width: 1%;">no</th>
                        <th style="width: 10%;">nama petugas</th>
                        <th style="width: 1%;">hari/tgl/bln</th>
                        <th style="width: 5%;">masuk</th>
                        <th style="width: 5%;">istirahat</th>
                        <th style="width: 5%;"> pulang</th>
                        <th style=" width: 8%;" class="text-center">action</th>
                    </tr>
                </thead>
                <!-- <?= print_r($row) ?> -->
                <tbody>
                    <tr>
                        <?php
                        $no = 1;
                        foreach ($row->result() as $key => $value) { ?>
                            <td><?php echo $no++ ?> </td>
                            <td><?php echo $value->nama_petugas ?> </td>
                            <td><?php echo $value->hari ?> </td>
                            <td><?php echo $value->waktu ?> </td>
                            <td><?php echo $value->istirahat ?> </td>
                            <td><?php echo $value->waktu_pulang ?> </td>
                            <td class="text-center">
                                <a href="<?= site_url('petugas/edit/' . $value->id_petugas) ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i> edit </a>
                                <a href="<?= site_url('petugas/del/' . $value->id_petugas) ?>" class="btn btn-warning btn-xs" onclick="return confirm('yakin hapus data')"><i class="fa fa-trash"></i> hapus</a>
                                <!-- <a href="<?= site_url('petugas/detail/' . $value->id_petugas) ?>" class="btn btn-success btn-xs"><i class="fa fa-eye"></i> detail data </a> -->
                            </td>
                    </tr>
                <?php } ?>

                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            Footer
        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->
</section>
<!-- /.content -->