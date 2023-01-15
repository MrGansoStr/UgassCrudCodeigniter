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

  <title>Home</title>
</head>

<body>
  <?= $this->include('/public/navbar') ?>
  <?= $this->include('/public/utilities/headerpage') ?>
  <div class="container-lg">
    <br />
    <div class="py-5 row">
      <div class="px-4 col-md-5">
        <h3 class="fw-bold">Nuestros Datos para contactarnos</h3>
        <p>Llámenos o visítenos en cualquier momento, nos esforzamos por responder todas las consultas dentro de las 24
          horas en días hábiles. Estaremos encantados de responder a sus preguntas.</p>
        <div class="container">
          <div class="shadow-container p-3 mb-2 bg-body rounded row">
            <div class="col-md-1 px-1">
              <i class="bi bi-house"></i>
            </div>
            <div class="col">
              <h5>Dirección:</h5>
              <p class="px-3">Jr. Independencia N° 2321</p>
            </div>
          </div>
          <div class="shadow-container p-3 mb-2 bg-body rounded row">
            <div class="col-1 px-1">
              <i class="bi bi-envelope"></i>
            </div>
            <div class="col">
              <h5>Nuestro Email</h5>
              <p class="px-3">Gmail1@gmail.com</p>
            </div>
          </div>
          <div class="shadow-container p-3 mb-2 bg-body rounded row">
            <div class="col-1 px-1">
              <i class="bi bi-phone"></i>
            </div>
            <div class="col">
              <h5>Teléfonos</h5>
              <p class="px-3">(051)552022</p>
            </div>
          </div>
        </div>
      </div>
      <div class='col-2'></div>
      <div class="col-md-5 p-4 border rounded-2 shadow-container">
        <h3>Envie su mensaje para poder ayudarlo</h3>
        <p>Su dirección correo electrónico no será publicada.</p>
        <form action="https://formsubmit.co/eb82c991d4ca94c126233be78ee24cf7" method="POST">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Tu nombre</label>
            <input name="Nombre" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jose Alcides">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input name="Email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
            <textarea name="Mensaje" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <br />
          <br />
          <button class="btn btn-outline-primary" type="submit">Enviar Mensaje
            </buttn>
        </form>
      </div>
    </div>
  </div>
  <?= $this->include('/public/footer') ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>