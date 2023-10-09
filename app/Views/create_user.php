<?= $this->extend ('layouts/app')?>
<?= $this->section ('content') ?>
    <?php $nama_kelas = session()->getFlashdata('nama_kelas');  ?>
    <div class="container">
        <div class="input">
        <form action="<?= base_url('/user/store') ?>" method="POST" enctype="multipart/form-data">
            <h1>Selamat Datang</h1><hr>
            <div class="form-container">
                <label for="nama">Nama :</label>
                <input type="text" placeholder="ex: Salsabila Juandira" name="nama" id="nama"
                class="form-control <?= (empty(validation_show_error('nama'))) ? '':'is-invalid' ?>"
                value="<?= old('nama') ?>">
                <div class="invalid-feedback">
                    <?= validation_show_error('nama') ?>
                </div>
            </div>
            <div class="form-container">
                <label for="npm">NPM :</label>
                <input type="text" placeholder="ex: 2117051012" name="npm" id="npm"
                class="form-control <?= (empty(validation_show_error('npm'))) ? '':'is-invalid' ?>"
                value="<?= old('npm') ?>">
                <div class="invalid-feedback ">
                    <?= validation_show_error('npm') ?>
                </div>
            </div>
            <div class="form-container">
            <label for="kelas" >Kelas :</label>
                <!-- <input type="text" placeholder="ex: A"name="kelas" id=""> -->
                <select name="kelas" id="kelas"
                class="form-control <?= (empty(validation_show_error('kelas'))) ? '':'is-invalid' ?>">
                    <option selected hidden value="<?= old('kelas') ?>">
                        <?= ($nama_kelas=='')?'Pilih Kelas': $nama_kelas?>
                    </option>
                    <?php 
                        foreach($kelas as $item){
                    ?>
                    <option value="<?= $item['id'] ?>">
                            <?= $item['nama_kelas'] ?>
                    </option>
                    <?php 
                        } 
                    ?>
                </select>
                <div class="invalid-feedback ">
                    <?= validation_show_error('kelas') ?>
                </div>
            </div>
            <div class="form-container">
                <label for="foto">Foto: </label>
                <input type="file" class="form-control" id="upload" name="foto" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                <!-- <button class="btn btn-outline-secondary" type="button" id="upload">Button</button> -->
                    </div>
            <button type="submit">Kirim</button>        
        </form>
        </div>
    </div>
<?= $this->endSection ('content') ?>


