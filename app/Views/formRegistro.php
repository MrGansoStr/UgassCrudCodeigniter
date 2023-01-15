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
  <link rel="stylesheet" href="<?= base_url('/js/bootstrap.min.css') ?> ">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

  <title>AcdemSys - Login</title>
</head>
<body>
  
<div class="d-flex justify-content-center align-items-center vh-100">
  <form action="<?php echo base_url('rusuario'); ?>" method="POST">
    <div id = "form" class="back-cc bg-white p-5 rounded-5 text-secondary shadow" style="width: 24rem;">
      <div class="d-flex justify-content-center">
       <!-- <img src="img/apple.svg" alt="login-icon" style="height: 3rem"/> -->
        <i class="bi bi-apple" style="font-size: 3rem;"></i>
      </div>
      
      <div class="text-center fs-5 fw-regular font-sing">Registro de usuarios</div>

      <?php if(session('mensaje')) {?>
        <div class="d-grid gap-3 mt-3 mb-0">
          <div class="pt-2 bg-light border rounded"><small><?= session('mensaje') ?> </small></div>
        </div>
      <?php } ?>

      <div class="input-group mt-2">
        <div class="input-group-text text-primary">
            <i class="bi-person-video2" style="font-size: 1.1rem; color: #7F7F7F;"></i>
        </div>
          <input class="form-control bg-light" name="nombre" id="user" type="text" placeholder="Nombre de usuario"/>
      </div>

      <div class="input-group mt-4">
        <div class="input-group-text">
            <i class="bi bi-bag-check-fill" style="font-size: 1.1rem; color: #7F7F7F;"></i>
          </div>
          <input class="form-control bg-light" name="pasword" type="password" placeholder="Contraseña"/>
      </div>
        
      <div class="input-group mt-2">
        <div class="input-group-text text-primary">
            <i class="bi-person-video2" style="font-size: 1.1rem; color: #7F7F7F;"></i>
        </div>
          <input class="form-control bg-light" name="tipo_usuario" id="user" type="text" placeholder="Tipo de usuario"/>
      </div>
        <div class="d-grid gap-2 mt-3 mb-3">

          <button class="btn btn-primary text-white" type="submit">Registrar usuario</button>

        </div>

    </div>
  </form>
</div>
</body>
</html>