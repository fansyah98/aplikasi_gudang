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
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6 ">
                    <form action="<?= site_url('kembali/process') ?>" method="POST">
                        <div class="form-group">
                            <label> Nrp * </label>
                            <?php echo form_dropdown('nrp', $nrp, $selectednrp, ['class' => 'form-control', 'required' => 'required']) ?>
                        </div>
                        <div class="form-group">
                            <label> Nama Peminjam * </label>
                            <input type="hidden" name="id" class="form-control" value="<?= $kembali->id_pengembalian ?>">
                            <?php echo form_dropdown('pinjam', $pinjam, $selectedpinjam, ['class' => 'form-control', 'required' => 'required']) ?>

                        </div>
                        <div class="form-group">
                            <label> buku * </label>
                            <?php echo form_dropdown('p_buku', $p_buku, $selectedbuku, ['class' => 'form-control', 'required' => 'required']) ?>
                        </div>
                        <div class="form-group">
                            <label> Hari * </label>
                            <input type="text" name="hari" class="form-control date" value=" <?= $kembali->hari ?> ">
                        </div>
                        <div class="form-group">
                            <label> waktu_pengembalian * </label>
                            <input type="text" name="waktu_pengembalian" class="form-control" value="<?= $kembali->waktu_pengembalian ?>">
                        </div>

                        <div class="form-group">
                            <label> Telat * </label>
                            <input type="text" name="telat" class="form-control" value="<?= $kembali->telat ?> ">
                        </div>
                        <div class="form-group">
                            <label> Denda * </label>
                            <input type="text" name="denda" class="form-control" value="<?= $kembali->telat ?> ">
                        </div>

                        <div class="form-group">
                            <button type="submit" name="<?= $page ?>" class="btn btn-warning btn-xs"> simpan data <i class=" fa fa-save"></i> </button>
                            <button type="reset" class="btn btn-danger btn-xs "> <i class="fa fa-undo"></i> reset data </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>