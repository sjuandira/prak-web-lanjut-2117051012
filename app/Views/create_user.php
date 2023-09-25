<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
    <?php $nama_kelas = session()->getFlashdata('nama_kelas');  ?>
    <div class="container">
        <div class="input">
        <form action="<?= base_url('/user/store') ?>" method="POST">
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
            <button type="submit">Kirim</button>        
        </form>
        </div>
    </div>
</body>
</html>

