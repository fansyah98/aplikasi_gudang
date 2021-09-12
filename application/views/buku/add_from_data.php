<section class="content-header">
    <h1> <?php echo  $title ?> buku
        <small> <?php echo $h1 ?> </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard "></i></a>Dashboard</li>

    </ol>
</section>

<section class="content">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"> <?php echo $title ?> <?php echo $h1 ?> </h3>
            <div class="pull-right">
                <a href="<?= site_url('buku') ?>" class=" btn btn-success btn-xs "> <i class="fa fa-undo"></i> kembali data buku </a>
            </div>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-md-6 ">
                    <form action="<?= site_url('buku/prosess') ?>" method="POST">
                        <div class="form-group">
                            <label> Kode Buku * </label>
                            <input type="hidden" name="id" value="<?= $buku->id_buku ?> ">
                            <input type="text" name="kode_buku" class="form-control" value="<?= $buku->kode_buku ?>">
                        </div>
                        <div class="form-group">
                            <label> Nama Buku * </label>
                            <input type="text" name="name" class="form-control" value="<?= $buku->p_buku ?>">
                        </div>
                        <div class="form-group">
                            <label> jenis Buku * </label>
                            <input type="text" name="Jenis" class="form-control" value="<?= $buku->Jenis ?>">
                        </div>
                        <div class="form-group">
                            <label> penerbit Buku * </label>
                            <input type="text" name="penerbit" class="form-control" value="<?= $buku->penerbit ?>">
                        </div>
                        <div class="form-group">
                            <label> tahun * </label>
                            <input type="text" name="tahun" class="form-control" value="<?= $buku->tahun ?>">
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