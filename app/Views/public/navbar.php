<?= $this->extend('indexlayout') ?>

<?= $this->section('navbar') ?>

<header class="border-bottom">
  </nav>
  <div class="container-xl">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" to="/">
          <img src="./pimg/waterdrop.svg" alt="Logo ugass" style="width: 40px;" />
          UGASS
        </a>
        <button class="navbar-toggler without-shadow" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          size="large" edge="start" color="inherit" aria-label="open drawer" sx={{ mr: 2 }}>
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </ul>
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item">
              <a class="nav-link active shadow-link rounded-1" href="<?= base_url("")?>">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active shadow-link rounded-1" href="<?= base_url("/noticias")?>">Noticias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active shadow-link rounded-1" href="<?= base_url("/comunicados")?>">Comunicados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active shadow-link rounded-1" href="<?= base_url("/contactos")?>">Contactos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="<?= base_url("")?>">Tramites</a>
            </li>
            <li class="nav-item"></li>
            <li class="nav-item">
              <a class="nav-link active shadow-link rounded-1" href="<?= base_url("/login")?>">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>
<?= $this->endSection() ?>