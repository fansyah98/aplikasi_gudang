<section class="content-header">
    <h1>
        <?php echo $title ?>
        <small><?php echo $h1 ?> </small>
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
            <h3 class="box-title"><?php echo $title ?> <?php echo $h1 ?> </h3>
            <div class="box-tools pull-right">
                <a href="<?= site_url('pinjam') ?>" class="btn btn-info btn-xs"><i class=" fa fa-undo"></i> kembali ke data pinjam</a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 ">
                    <form action="<?= site_url('pinjam/process') ?>" method="POST">
                        <div class="form-group">
                            <label> nomor mahasiswa (NRP) * </label>
                            <input type="hidden" name="id" class="form-control" value="<?= $pinjem->id_pinjem ?>">
                            <input type="text" name="nrp" class="form-control" value="<?= $pinjem->nrp ?>">
                        </div>
                        <div class="form-group">
                            <label> Nama Peminjam * </label>
                            <input type="text" name="nama_peminjam" class="form-control " value="<?= $pinjem->nama_peminjam ?>">
                        </div>
                        <div class="form-group">
                            <label> buku Pinjam * </label>
                            <?php echo form_dropdown('buku', $buku, $selectedbuku, ['class' => 'form-control', 'required' => 'required']) ?>
                        </div>
                        <div class="form-group">
                            <label> batas_pinjam * </label>
                            <input type="text" name="batas_pinjam" class="form-control" value="<?= $pinjem->batas_pinjam ?>">
                        </div>
                        <div class="form-group">
                            <label> hari * </label>
                            <input type="text" name="hari" class="form-control date" value=" <?= $pinjem->hari ?>">
                        </div>
                        <div class="form-group">
                            <label> waktu * </label>
                            <input type="text" name="waktu" class="form-control" value=" <?= $pinjem->waktu ?>">
                        </div>

                        <div class="form-group">
                            <button type="submit" name="<?= $page ?>" class="btn btn-warning btn-xs"> simpan data <i class=" fa fa-save"></i> </button>
                            <button type="reset" class="btn btn-danger btn-xs "> <i class="fa fa-undo"></i> reset data </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="box-footer">
        </div>
    </div>
</section>