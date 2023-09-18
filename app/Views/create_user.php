<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
</head>
<body>
    <div class="container">
        <div class="input">
        <form action="<?= base_url('/user/store') ?>" method="POST">
            <h1>Selamat Datang</h1><hr>
            <label for="nama">Nama :</label>
            <input type="text" placeholder="ex: Salsabila Juandira"name="nama" id="">
            <br>
            <br>
            <label for="npm">NPM :</label>
            <input type="text" placeholder="ex: 2117051012" name="npm" id="">
            <br>
            <br>
            <label for="kelas" >Kelas :</label>
            <input type="text" placeholder="ex: A"name="kelas" id="">
            <button type="submit">Kirim</button>        
        </form>
        </div>
    </div>
</body>
</html>

