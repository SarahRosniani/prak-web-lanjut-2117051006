<?= $this->extend('layouts/app') ?>

<?= $this->section('content')?>
    <div>
        <header class="bg-primary-subtle">
        <div class="container">
                <h2>Data User</h2>
                
                <table class="table table-dark">
                    
                           <div class="container">
                                <div class="w-100 d-grid border gap-2" style="height: 100vh; place-content: center;">
                                    <div class="w-50 text-center border mx-auto">
                                        <img src="<?= $user['foto'] ?? '<default-foto>' ?>"  alt="">
                                    </div>
                                    <center><div class="..."><?= $user['nama'] ?></div>
                                    <center><div class="..."><?= $user['npm'] ?></div>
                                    <center><div class="..."><?= $user['nama_kelas'] ?></div>
                                </div>
                            </div>
                   
                </table>
            </div>  
        </table>
    </div>
<?= $this->endSection() ?>