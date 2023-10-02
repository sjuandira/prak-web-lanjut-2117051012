<?= $this->extend ('layouts/app')?>
<?= $this->section ('content') ?>
<div class="content">
<img src="<?php echo base_url('assets/img/SalsabilaJuandira.jpg'); ?>" alt="">
<h1><?= $nama ?></h1>
<p>Perkenakalkan nama saya <?= $nama ?> dengan NPM <?= $npm ?> dari kelas <?= $kelas ?></p>
<?= $this->endSection ('content') ?>