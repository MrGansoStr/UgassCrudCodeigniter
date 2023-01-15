<?= $this->extend('indexlayout') ?>

<?= $this->section('footer') ?>

<footer>
  <div class="bg-dark">
    <div class="px-4 py-5">
      <div class="row" style="height: 300px;">
        <div class="h-50 w-25 m-0 m-auto col-sm-3 text-center">
          <img class="h-100 img-fluid" src="./pimg/waterdrop.svg" alt="Logo" />
        </div>
        <div class="col-md row text-white m-0 m-auto text-center h-50" style="height: 200px;">
          <div class="container-md col-4 h-50 m-0 m-auto">
            <p>Jr. Independencia N° 2321</p>
            <p class="text-primary">Ilave N° 2321</p>
          </div>
          <div class="container-sm col-4 h-50 m-0 m-auto">
            <p>Gmail1@gmail.com</p>
            <p class="text-primary">Email</p>
          </div>
          <div class="container-sm col-4 h-75 m-0 m-auto">
            <p>(051)552022</p>
            <p>(051)552022</p>
            <p>(051)552022</p>
            <p class="text-primary">Teléfono</p>
          </div>
        </div>
      </div>
      <br />
      <br />
      <div class="container text-white p-3 text-center">
        <p class="text-uppercase fw-bold">Página no oficial</p>
        <p>Copyright © 2022 ugassVite Test Todos los derechos reservados</p>
        <a class="nav-item" href="https://www.facebook.com/Ingenieria.Estadistica.e.Informatica.UNA.Puno"
          target="_blank" rel="noopener noreferrer">
          <i class="bi bi-facebook"></i>
        </a>
        <a class="nav-item" href='https://web.whatsapp.com/send?phone=+51927248289&text=HelloFromUgassVite'
          target="_blank" rel="noopener noreferrer">
          <i class="bi bi-whatsapp"></i>
        </a>
      </div>
    </div>
  </div>
</footer>

<?= $this->endSection() ?>