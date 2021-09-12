<section class="content-header">
    <h1>
        halamana data
        <small>peminjam buku</small>
    </h1>

</section>
<!-- Main content -->
<section class="content">
    <?php $this->load->view('message') ?>
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">data peminjam buku</h3>

            <div class="box-tools pull-right">
                <a href="<?= site_url('pinjam/add') ?>" class="btn btn-info btn-xs"> <i class="fa fa-plus"></i> tambah data peminjam</a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-striped table-responsive " id="table1">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>nrp</th>
                        <th>nama peminjam</th>
                        <th>buku </th>
                        <th>batas pinjam </th>
                        <th>tgl pinjam </th>
                        <th>waktu pjm </th>
                        <th>action </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $no = 1;
                        foreach ($row->result() as $key => $value) { ?>
                            <td><?php echo $no++ ?> </td>
                            <td><?php echo $value->nrp  ?> </td>
                            <td><?php echo $value->nama_peminjam ?> </td>
                            <td><?php echo $value->p_buku ?> </td>
                            <td><?php echo $value->batas_pinjam ?> </td>
                            <td><?php echo $value->hari ?> </td>
                            <td><?php echo $value->waktu ?> </td>
                            <td>
                                <a href="<?= site_url('pinjam/edit/' . $value->id_pinjem) ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>
                                <a href="<?= site_url('pinjam/del/' . $value->id_pinjem) ?>" class="btn btn-warning btn-xs"><i class="fa fa-trash"></i></a>
                                <a target="_blank" href="<?= site_url('pinjam/print/' . $value->id_pinjem) ?>" class="btn btn-success btn-xs"><i class="fa fa-print"></i></a>
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