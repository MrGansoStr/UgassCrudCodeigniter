<?= $this->extend('/admin/indexadminlayout') ?>
<?= $this->section('formRegister') ?>

<form class="row g-3" action="<?= base_url('/admin/registernewuser') ?> " method="POST">
<?php if(session('mensaje')) { ?>
        <div class="d-grid gap-3 mt-3 mb-0">
          <div class="pt-2 bg-light border rounded"><small><?= session('mensaje') ?> </small></div>
        </div>
      <?php } ?>
  <div class="col-md-3">
    <label for="rol" class="form-label">Rol</label>
    <select name="rol" class="form-select" aria-label="Rol">
      <option value="1">Usuario</option>
      <option value="2">Admin</option>
    </select>
  </div>
  <div class="col-md-9">
    <label for="fname" class="form-label">Nombre Completo</label>
    <input type="text" class="form-control" name="fname" id="fname" required />
  </div>
  <div class="col-md-6">
    <label for="lnamep" class="form-label">Apellido Paterno</label>
    <input type="text" class="form-control" name="lnamep" id="lnamep" required />
  </div>
  <div class="col-md-6">
    <label for="lnamem" class="form-label">Apellido Materno</label>
    <input type="text" class="form-control" name="lnamem" id="lnamem" required />
  </div>
  <div class="col-md-4">
    <label for="dni" class="form-label">DNI</label>
    <input type="text" class="form-control" name="dni" id="dni" required />
  </div>
  <div class="col-md-8">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email" required />
  </div>
  <div class="col-md-5">
    <label for="phone" class="form-label">Telefono</label>
    <input type="text" class="form-control" name="phone" id="phone" required />
  </div>
  <div class="col-md-5">
    <label for="address" class="form-label">Direccion</label>
    <input type="text" class="form-control" name="address" id="address" required />
  </div>
  <hr />
  <div class="col-md-5 m-0 m-auto justify-content-center align-items-center">
    <button type="submit" class="btn btn-lg btn-outline-success w-100">Registrar</button>
  </div>
</form>

<?= $this->endSection() ?>