<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<?php $no=1; ?>
    <!-- <p>ini halaman list user</p> -->
    <div class="table-content">
        <div class="head">
            <h1>Data User</h1>          
        </div>        
        <a type="button" class="btn btn-primary btn-sm" href="/user/create">Tambah Data</a>        
    <table class="table table-striped table-hover">
        <thead>
            <tr>
            <th>No</td>
            <th>Nama</th>
            <th>Npm</th>
            <th>Kelas</th>
            <!-- <th>Foto</th> -->
            <th>Aksi</th>
            </tr>
        </thead>        
        <?php foreach($users as $key){
            
        ?>
        <tbody>          
            <tr>
            <td><?= $no++?></td>
            <td><?= $key['nama']?></td>
            <td><?= $key['npm']?></td>
            <td><?= $key['nama_kelas']?></td>
            
            <td><a type="button" class="btn btn-primary btn-sm" href="<?= base_url('user/'. $key['id']
            )?>">Detail</a>
                <a type="button" class="btn btn-danger btn-sm" ?>Delete</a>
            </td>
            </tr>
        </tbody>
        <?php 
        } 
        ?>
    </table>
    </div>
    
<?= $this->endSection ('content') ?>