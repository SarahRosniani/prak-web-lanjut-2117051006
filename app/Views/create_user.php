<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <title>Create User</title>
</head>

<body>

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


<footer class="jumbotron jumbotron-fluid mt-5 mb-0">
		<div class="container text-center">Tugas 3 &copy <?= Date('Y') ?> Sarah Rosniani</div>
	</footer>
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>

</html>