<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>

        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Dashbaoard</a></li>
        <li><a href="<?= site_url('produk') ?>">Data produk</a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>

            <div class="box-tools pull-right">
                <a href="<?= site_url('user') ?>" class="btn btn-warning btn-xs">Kembali ke produk</a>
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="col-md-8">

                <form action="<?= site_url('user/edit') ?> " method="POST">
                    <input type="hidden" name="id" class="form-control" value="<?= $user->user_id ?>">
                    <div class="form-group <?= form_error('name') ? 'has-error' : null ?>">
                        <label for="name"> nama lengkap* </label>
                        <input type="text" name="name" class="form-control" placeholder="masukan nama lengkap" <?= set_value('name') ?> value="<?= $user->name ?>">
                        <span class="has-block"><?= form_error('name') ?></span>
                    </div>

                    <div class="form-group <?= form_error('username') ? 'has-errro ' : null ?>">
                        <label for="name"> Username *</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" <?= set_value('username') ?> value="<?= $user->username ?>">
                        <span class="has-block"><?= form_error('username') ?></span>
                    </div>

                    <label> Password * </label>
                    <div class="form-group <?= form_error('passowrd') ?> ">
                        <span class="input-group" class="form-control"></span>
                        <input type="password" name="password" class="form-control" placeholder="Password" <?= set_value('password') ?>>
                        <span class="has-block"> <?= form_error('password') ?></span>
                    </div>

                    <label> Password Konfirmasi *</label>
                    <div class="form-group  <?= form_error('passconf') ?>">
                        <span class="input-group" class="form-control"></span>
                        <input type="password" name="passconf" class="form-control" placeholder="Password Konfimasi" <?= set_value('passconf') ?>>
                        <span class="has-block"><?= form_error('passconf') ?></span>
                    </div>

                    <div class="form-group <?= form_error('alamat') ?>">
                        <label> alamat * </label>
                        <textarea type="text" name="alamat" class="form-control" placeholder="masukan nama alamat anda" <?= site_url('alamat') ?>> <?= $user->address ?></textarea>
                        <span class="has-block"><?= form_error('alamat') ?></span>
                    </div>

                    <div class="form-group  <?= form_error('level') ?>">
                        <label> Level </label>
                        <select name="level" id="" class="form-control">
                            <option value="">Pilih</option>
                            <option value="1" <?= $user->level == 1 ? 'selected' : null ?>>admin</option>


                        </select>
                        <span class="has-block"> <?= form_error('level') ?></span>
                    </div>

                    <div class="form-group ">
                        <button type="submit" class="btn btn-success btn-xs"><i class="fa fa-paper-plane-o"> </i> Simpan data </button>
                        <button type="reset" class="btn btn-danger btn-xs"><i class="fa fa-undo"> </i> Reset data </button>
                    </div>

                </form>
            </div>
        </div>
</section>