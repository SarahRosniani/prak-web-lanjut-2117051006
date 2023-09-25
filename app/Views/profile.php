<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>
<body>
<header class="bg-primary">

<div class="container">
        <h2>Data User</h2>
        <p>Anda dapat mengelola data user</p>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        
                        <td><?= $nama ?></td>
                        <td><?= $npm  ?></td>
                        <td><?= $kelas ?></td>
                        <td><a href="" class="btn btn-danger">Hapus</a>
                            <a href="" class="btn btn-warning">Detail</a>
                            <a href="" class="btn btn-primary">Ubah</a>
                        </td>
                    </tr>
                
            </tbody>
        </table>
    </div>

<!-- <table >
    <div class="center">
        <center><h1>Nama <?= $nama ?></h1></center>
        <center><h2>Kelas <?= $kelas ?></h2></center>
        <center><h2>NPM <?= $npm ?></h2></center>
        
    </div> -->
   
</table>
<footer class="jumbotron jumbotron-fluid mt-5 mb-0">
		<div class="container text-center">Tugas <?= Date('Y') ?> Sarah Rosniani</div>
	</footer>
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>
</header>
</html>