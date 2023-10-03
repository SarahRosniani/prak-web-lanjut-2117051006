<?= $this->extend('layouts/app') ?>

<?= $this->section('content')?>
    <div>
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
        </table>
    </div>
<?= $this->endSection() ?>