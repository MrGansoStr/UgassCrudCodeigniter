<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/x-icon" href="assets/logo-vt.svg" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?= base_url('/css/bootstrap.min.css') ?> ">
  <link rel="stylesheet" href="<?= base_url('/css/estilos.css') ?> ">
  <link rel="stylesheet" href="<?= base_url('/css/bootstrap-icons.css') ?> ">
  <link rel="stylesheet" href="<?= base_url('/js/bootstrap.min.js') ?> ">
  <link rel="stylesheet" href="<?= base_url('/utilities/style/index.css') ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <title>AcademSys</title>
</head>
<body>
  
  <?= $this->renderSection('navbarAdmin') ?>
  <?= $this->renderSection('listUsers') ?>
  <?= $this->renderSection('modalupdateuser') ?>
  <?= $this->renderSection('formRegister') ?>
  <?= $this->renderSection('footerAdmin') ?>
</body>
</html>