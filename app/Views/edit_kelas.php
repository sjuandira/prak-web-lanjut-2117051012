<?= $this->extend ('layouts/app')?>
<?= $this->section ('content') ?>
    <?php $nama_kelas = session()->getFlashdata('nama_kelas');  ?>
    <div class="container">
        <div class="input">
        <form class="edit-kelas"action="<?= base_url('/kelas/'.$kelas['id']) ?>" method="POST" enctype="multipart/form-data">
            <h1>Edit Kelas</h1><hr>

            <?= csrf_field() ?>
            <input type="hidden" name="_method"value="PUT">
            
            <div class="form-container">
                <label for="nama">Nama Kelas :</label>
                <input type="text"  name="nama_kelas" value="<?=$kelas['nama_kelas']?>" id="nama_kelas" 
                class="form-control <?= (empty(validation_show_error('nama_kelas'))) ? '':'is-invalid' ?>"
                value="<?= old('nama_kelas') ?>">
                <div class="invalid-feedback">
                    <?= validation_show_error('nama_kelas') ?>
                </div>
            </div>                                    
            <button class="btn-kirim" type="submit">Kirim</button>        
        </form>
        </div>
    </div>
    
<?= $this->endSection ('content') ?>


