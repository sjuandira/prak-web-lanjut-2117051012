<?= $this->extend ('layouts/app')?>
<?= $this->section ('content') ?>
<div class="content">
<img src="<?= $user['foto'] ?>" alt="">
<h1><?= $user['nama'] ?></h1>
<p>Perkenakalkan nama saya <?= $user['nama'] ?> dengan NPM <?= $user['npm'] ?> dari kelas <?= $user['nama_kelas'] ?></p>
<?= $this->endSection ('content') ?>