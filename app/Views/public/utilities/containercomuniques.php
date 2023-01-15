<?= $this->extend('indexlayout') ?>

<?= $this->section('containercomuniques') ?>

<div class="container-lg py-5">
  <h3 class="text-uppercase fw-bold">Comunicados</h3>
  <a class="nav-link text-primary p-3 text-end fw-bold text-uppercase" href="<?= base_url('/comunicados') ?>">Ver todos</a>
  <div class="row row-cols-1 row-cols-sm-3 g-4">
    <div class="card col-sm-3">
      <img src="<?= base_url('/pimg/news.png') ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
          content.
          This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
    <div class="card col-sm-3">
      <img src="<?= base_url('/pimg/news.png') ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
    <div class="card col-sm-3">
      <img src="<?= base_url('/pimg/news.png') ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
          content.
          This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
    <div class="card col-sm-3">
      <img src="<?= base_url('/pimg/news.png') ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
          content.
          This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>