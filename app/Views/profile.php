<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo base_url('./css/style.css'); ?>">
</head>
<body>

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

</body>
</html>