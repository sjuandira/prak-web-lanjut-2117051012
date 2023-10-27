<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">   
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"> 
</head>
<body>
<nav>
      <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name"><?= $title ?></span>
      </div>
      <div class="sidebar">
        <div class="logo">
          <i class="bx bx-menu menu-res"></i>
          <span class="name-res"><?= $title ?></span>
        </div>
        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">
              <a href="<?php echo base_url('/user')?>" class="nav-link">
                <i class="bx bx-user icon"></i>
                <span class="link">User</span>
              </a>
            </li>
            <li class="list">
              <a href="<?php echo base_url('/kelas')?>" class="nav-link">
                <i class="bx bx-home icon"></i>
                <span class="link">Kelas</span>
              </a>
            </li>            
          </div>
        </div>
      </div>
    </nav>
    <section class="overlay"></section>
    <script src="<?php echo base_url('assets/js/script.js'); ?>"></script>


<?= $this->renderSection('content') ?>
</body>
</html>