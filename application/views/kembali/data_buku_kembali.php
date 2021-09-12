<section class="content-header">
    <h1>
        Tampilan data
        <small> buku Kembali </small>
    </h1>

</section>
<!-- Main content -->
<section class="content">
    <?php $this->load->view('message') ?>
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Views data buku kembali</h3>

            <div class="box-tools pull-right">
                <a href="<?= site_url('kembali/add') ?> " class="btn btn-info btn-xs"> <i class="fa fa-plus"> </i> tambah data buku kembali </a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-responsive table-striped">
                <thead>
                    <tr>
                        <th>no</th>
                        <!-- <th>nrp</th> -->
                        <th>nama peminjam</th>
                        <th>nama buku</th>
                        <th>tanggal kembali</th>
                        <th>waktu kembali</th>
                        <th>telat</th>
                        <th>denda</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <!-- <?php print_r($row) ?> -->
                <tbody>
                    <tr>
                        <?php
                        $no = 1;
                        foreach ($row->result() as $key => $value) { ?>
                            <td><?php echo $no++ ?></td>
                            <!-- <td><?php echo $value->nrp ?></td> -->
                            <td><?php echo $value->a ?></td>
                            <td><?php echo $value->b ?></td>
                            <td><?php echo $value->hari ?></td>
                            <td><?php echo $value->waktu_pengembalian ?></td>
                            <td><?php echo $value->telat ?></td>
                            <td><?php echo indo_rupiah($value->denda) ?></td>
                            <td>
                                <a href="<?= site_url('kembali/edit/' . $value->id_pengembalian) ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> edit </a>
                                <a href="<?= site_url('kembali/del/' . $value->id_pengembalian) ?>" class="btn btn-warning btn-xs"><i class="fa fa-trash"></i> hapus </a>
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