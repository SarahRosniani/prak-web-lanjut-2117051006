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
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <form action="<?= base_url('/user/store'); ?>" method="POST">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" value="<?= old('nama'); ?>" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="npm" name="npm" class="form-control" id="" value="<?= old('npm'); ?>">
                    </div>
 
 
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input name="kelas" id="kelas" class="form-control" cols="3" rows="3"><?= old('kelas'); ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
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