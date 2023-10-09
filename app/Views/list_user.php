<?= $this->extend('layouts/app') ?>

<?= $this->section('content')?>
    <div class="ratio ratio-16x9">
    <!-- <div style="background-image:url('<?=base_url('public/image/bg.jpg')?>')"> -->
    <div class="bg-primary bg-opacity-25">
    <center><h1>List User</h1></center>
    <hr/>
    <div class="profile-area">
        <div class="container">
            <div class="row">
    <center><div class="card border-danger" style="max-width: 600px;">
            <div class="card-header bg-primary">
               
                <h2> Tabel User </h2>
            </div> 
            <div class="card-body ">  
                <table class="table">
                                <thead>
                                    <tr class="table-dark">
                                        
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>NPM</th>
                                        <th>Kelas</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach($users as $user){
                                        ?>
                                        <tr class="table-secondary"> 
                                            <td><?= $user['id']?></td>
                                            <td><?= $user['nama'] ?></td>
                                            <td><?= $user['npm'] ?></td>
                                            <td><?= $user['nama_kelas'] ?></td>
                                            <td>
                                                
                                                <a href="<?= base_url('user/' . $user['id']) ?>">Detail </a>
                                                <a href="" class="btn btn-primary">Edit</a>
                                                <button type ="button" class="btn btn-danger">Delete</button>
                                                
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <a href="<?= base_url(relativePath: 'user/create')?>" class="btn btn-primary">Tambah Data</a>
                    </div>
                <div class="card-footer">
                Table list Uer 
                </div>
        </div> </center>
    </div>
</div>
</div>
</div>
<?= $this->endSection() ?>