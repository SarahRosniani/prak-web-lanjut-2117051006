
<?= $this->extend('layouts/app') ?>

<?= $this->section('content')?>
    <div>
        
        <div class="container">
                <div class="card">
                    <div class="card-header bg-primary text-white">Hello, Selamat Datang !!</div>
                    <div class="card-body">
                        <form action="<?= base_url('/user/'. $user['id']); ?>" method="POST" enctype ="multipart/form-data">
                            <input type="hidden" name="_method" value="PUT">    
                        <?= csrf_field(); ?>
                            <div class="input-group mb-3">
                                <img src="<?= $user['foto'] ?? '<default-foto>' ?>">
                                <label class="input-group-text"  for="foto">Upload</label>
                                <input type="file" class="form-control" name='foto' id="foto">
                            </div>
                            <div class="form-group row">
                                <label for="nama">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control" value="<?= $user['nama']; ?>" id="nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="npm">NPM</label>
                                <div class="col-sm-10">
                                    
                                    <input type="text" name="npm" value="<?= $user['npm']; ?>" id="npm">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kelas">Kelas</label>
                                <div class="col-sm-10">
                                    <select name="kelas" id="kelas" class="form-control" cols="3" rows="3">
                                        <?php
                                        foreach ($kelas as $item ) {
                                        ?>
                                            <option value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : '' ?>>
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