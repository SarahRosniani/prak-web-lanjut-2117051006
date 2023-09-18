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
<table >
    <div class="center">
        <div class="text-center">
            <a class="thumbnail" >

                <center><img src="<?php echo base_url('./image/sar.jpg'); ?>" class="rounded" width="250px"></center>
            </a>
        </div>
        <center><h1>Nama <?= $nama ?></h1></center>
        <center><h2>Kelas <?= $kelas ?></h2></center>
        <center><h2>NPM <?= $npm ?></h2></center>
        
    </div>
   
</table>
<footer class="jumbotron jumbotron-fluid mt-5 mb-0">
		<div class="container text-center">Tugas 2 &copy <?= Date('Y') ?> Sarah Rosniani</div>
	</footer>
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>
</header>
</html>