
<?= $this->extend('layouts/app') ?>

<?= $this->section('content')?>
    <div>
        
        <div class="container">
                <div class="card">
                    <div class="card-header bg-primary text-white">Hello, Selamat Datang !!</div>
                    <div class="card-body">
                        <form action="<?= base_url('/user/store'); ?>" method="POST">
                            <?= csrf_field(); ?>
                            <div class="form-group row">
                                <label for="nama">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control" value="<?= old('nama'); ?>" id="nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="npm">NPM</label>
                                <div class="col-sm-10">
                                    
                                    <input type="" name="npm" class="form-control <?= ($validation->hasError('npm')) ? 'is-invalid' : '' ; ?>" id="npm">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('npm'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kelas">Kelas</label>
                                <div class="col-sm-10">
                                    <select name="kelas" id="kelas" class="form-control" cols="3" rows="3">
                                        <?php
                                        foreach ($kelas as $item ) {
                                        ?>
                                            <option value="<?= $item['id'] ?>">
                                                <?= $item['nama_kelas'] ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
<?= $this->endSection() ?>