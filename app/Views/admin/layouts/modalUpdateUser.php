<?= $this->extend('/admin/indexadminlayout') ?>

<?= $this->section('modalupdateuser') ?>
<?php

$NombreCompleto = session('Fname');
$ApellidoPaterno = session('LnameP');
$ApellidoMaterno = session('LnameM');
$codigoConexion = session('code_conexion');
$email = session('email');

?>
<h2 class="text-center text-uppercase">Recibos Pendientes</h2>

<div class="container-lg py-5" style="overflow: auto;">
  <div class="p-3">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Datos de Usuario</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="row g-3" action="<?= base_url("/admin/updateuser")?>" method="POST">
            <div class="col-md-12">
                <label for="nombres" class="col-form-label">ID Usuario</label>
                <input type="text" class="form-control fw-bold" id="nombres" value="<?php $key['id_user']; ?>">
              </div>
              <div class="col-md-12">
                <label for="nombres" class="col-form-label">Nombres</label>
                <input type="text" class="form-control fw-bold" id="nombres" value="<?= $NombreCompleto; ?>">
              </div>
              <div class="col-md-6">
                <label for="lnamep" class="col-form-label">Apellido Paterno</label>
                <input type="text" class="form-control fw-bold" id="lnamep" value="<?= $ApellidoPaterno; ?>">
              </div>
              <div class="col-md-6">
                <label for="lnamem" class="col-form-label">Nombres</label>
                <input type="text" class="form-control fw-bold" id="lnamem" value="<?= $ApellidoMaterno; ?>">
              </div>
              <div class="col-md-6">
                <label for="email" class="col-form-label">Email</label>
                <div>
                  <input type="email" class="form-control fw-bold" id="email" value="<?= $email; ?>">
                </div>
              </div>
              <div class="col-12">
                <label for="codigoConexion" class="form-label">Codigo de Conexion</label>
                <input type="text" class="form-control fw-bold" value="<?= $codigoConexion; ?>">
              </div>
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-success">Pagar</button>
            </form>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<?= $this->endSection() ?>