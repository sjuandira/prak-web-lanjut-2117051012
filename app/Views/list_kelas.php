<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<?php $no=1; ?>

    <!-- <p>ini halaman list user</p> -->    
    <div class="table-content">
        <div class="head-kelas">
            <h1>Daftar Kelas</h1>          
        </div>       
        <div class="list-kelas">         
    <table class="table table-striped table-hover">
        <thead>
            <tr>
            <th>No</td>
            <th>Kelas</th>            
            <th>Aksi</th>
            </tr>
        </thead>        
        <?php foreach($kelas as $key){
            
        ?>
        <tbody>          
            <tr>
            <td><?= $no++?></td>
            <td><?= $key['nama_kelas']?></td>            
            
            <td>
            <a type="button" class="btn btn-primary btn-sm" href="<?= base_url('kelas/'. $key['id'].'/edit'
            )?>">Edit</a>
                <form class="btn-delete" action="<?=base_url("kelas/" .  $key['id'])?>" method="POST" >
                <input type="hidden" name="_method" value="DELETE">
                <?=csrf_field()?>
                <button type="submit"class="btn btn-danger btn-sm">Delete</button>
                <!-- <a type="button" class="btn btn-danger btn-sm" ?>Delete</a> -->
                </form>
            </td>
            </tr>
        </tbody>
        <?php 
        } 
        ?>
    </table>
    </div>
    <a type="button" class="btn btn-primary btn-sm" href="/kelas/create">Tambah Data</a>        
    </div>    
    
<?= $this->endSection ('content') ?>