<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/x-icon" href="assets/logo-vt.svg" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <title>Login</title>
</head>

<body>
  <?= $this->include('/public/navbar') ?>
  <div
    style="background-image: url('<?= base_url('./pimg/images/contactTo2.jpg') ?>'); background-repeat: no-repeat; background-size: cover;">
    <div class=" col-lg-5 m-0 m-auto d-flex justify-content-center align-items-center vh-100">
      <form class="text-white border p-5 rounded-2 w-75" action="<?php echo base_url('login'); ?>" method="POST">
        <h3 class="text-uppercase">Iniciar sesión</h3>
        <?php if (session('mensaje')) { ?>
        <div class="d-grid gap-3 mt-3 mb-0">
          <div class="pt-2 border rounded"><small><?= session('mensaje') ?> </small></div>
        </div>
        <?php } ?>
        <div class="py-3">
          <label for="exampleFormControlInput1" class="form-label">Codigo de Conexión</label>
          <input name="codeconexion" type="text" class="form-control" id="exampleFormControlInput1"
            placeholder="234124124" required>
        </div>
        <div class="py-3">
          <label for="exampleFormControlInput1" class="form-label">Apellido Paterno</label>
          <input name="lnamep" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Alcides"
            required>
        </div>
        <div class="py-2 text-end align-items-end ">
          <button class="fw-bold btn btn-outline-primary" type="submit">Login
          </button>
        </div>
      </form>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>