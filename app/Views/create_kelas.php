<?= $this->extend ('layouts/app')?>
<?= $this->section ('content') ?>
    <?php $nama_kelas = session()->getFlashdata('nama_kelas');  ?>
    <div class="container">
        <div class="input">
        <form class="create-kelas" action="<?= base_url('/kelas/store') ?>" method="POST" enctype="multipart/form-data">
            <h1>Tambah Kelas</h1><hr>
            <div class="form-container">
                <label for="nama_kelas">Nama Kelas :</label>
                <input type="text" placeholder="Masukan Nama Kelas" name="nama_kelas" id="nama_kelas"
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


