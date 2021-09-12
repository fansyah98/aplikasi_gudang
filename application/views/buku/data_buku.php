<section class="content-header">
    <h1>
        <?= $title ?>
        <small><?= $h1 ?></small>
    </h1>

</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><?php echo $title ?></h3>
            <div class="box-tools pull-right">
                <a href="<?= site_url('buku/add') ?>" class=" btn btn-primary btn-xs "><i class="fa fa-plus"></i> Tambah data buku</a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <!--- tabel border  -->
            <table class="table table-bordered table-responsive table-striped" id="table1">
                <thead>
                    <tr>
                        <th style="width: 3%;">no</th>
                        <th>kode buku</th>
                        <th>nama buku</th>
                        <th>jenis</th>
                        <th>penerbit</th>
                        <th>tahun</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $no = 1;
                        foreach ($row->result() as $key => $value) { ?>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $value->kode_buku ?></td>
                            <td><?php echo $value->p_buku ?></td>
                            <td><?php echo $value->Jenis ?></td>
                            <td><?php echo $value->penerbit ?></td>
                            <td><?php echo $value->tahun ?></td>
                            <td style="width: 15%;">
                                <a href="<?= site_url('buku/edit/' . $value->id_buku) ?>" class="btn btn-success btn-xs "><i class="fa fa-pencil"></i> edit</a>
                                <a href="<?= site_url('buku/del/' . $value->id_buku) ?>" class="btn btn-info btn-xs " onclick="return confirm('yakin dat di hapus !!')"><i class="fa fa-trash"></i> hapus</a>
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