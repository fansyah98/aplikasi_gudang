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
                    <form action="<?= site_url('petugas/prosess') ?>" method="POST">
                        <div class="form-group">
                            <label> Nama Petugas * </label>
                            <input type="hidden" name="id" class="form-control" value="<?= $petugas->id_petugas ?>">
                            <input type="text" name="nama_petugas" class="form-control" value="<?= $petugas->nama_petugas ?>">
                        </div>
                        <div class="form-group">
                            <label> Hari * </label>
                            <input type="text" name="hari" class="form-control date" value="<?= $petugas->hari ?> ">
                        </div>
                        <div class="form-group">
                            <label> Waktu masuk * </label>
                            <input type="text" name="waktu_masuk" class="form-control" value=" <?= $petugas->waktu ?> ">
                        </div>
                        <div class="form-group">
                            <label> Istirahat * </label>
                            <input type="text" name="istirahat" class="form-control" value="<?= $petugas->istirahat ?>">
                        </div>
                        <div class="form-group">
                            <label> Waktu Pulang * </label>
                            <input type="text" name="waktu_pulang" class="form-control" value="<?= $petugas->waktu_pulang ?> ">
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
            <div class="pull-left">
                <a href="<?= site_url('petugas') ?>" class="btn btn-info btn-xs"><i class="fa fa-undo"></i> Kemabli data petugas </a>
            </div>
            <div class="pull-right">
                <a href="<?= site_url('petugas') ?>" class="btn btn-info btn-xs"><i class="fa fa-undo"></i> Kemabli data petugas </a>
            </div>
        </div>
    </div>
</section>