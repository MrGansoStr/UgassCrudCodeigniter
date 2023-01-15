<?= $this->extend('/private/indexprivatelayout') ?>

<?= $this->section('balance') ?>

<div class="container-xl align-items-center justify-content-center">
  <div class="m-0 m-auto">
    <div class="container">
      <h3 class="text-start text-uppercase fw-bold">Balance</h3>
    </div>
    <div class="container-lg">
      <div class="h-50">
        <i class="bi bi-person" style="font-size: 7rem;"></i>
      </div>
      <div>
        <h5 class="text-uppercase fw-bold">Información del usuario y saldo pendiente</h5>
        <p>Nombre Completo: <b><?= session('Fname'); ?> <?= session('LnameP'); ?> <?= session('LnameM'); ?> </b> </p>
        <p>Email: <b><?= session('email'); ?></b></p>
        <p>Codigo de Conexion: <b><?= session('code_conexion'); ?></b></p>
        <div>DNI: <b><?= $balance[0]['dni']; ?></b></div>
        <div class="text-uppercase">Balance: <b><?= $balance[0]['val']; ?></b> </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>