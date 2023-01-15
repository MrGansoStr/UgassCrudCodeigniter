<?= $this->extend('/private/indexprivatelayout') ?>

<?= $this->section('pendingReceipts') ?>
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
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Pagar recibo
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Pagar</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="row g-3" action="<?= base_url("/private/pay")?>" method="POST">
              <div class="col-md-12">
                <label for="nombres" class="col-form-label">Nombres</label>
                <input type="text" readonly class="form-control-plaintext fw-bold" id="nombres" value="<?= $NombreCompleto; ?>">
              </div>
              <div class="col-md-6">
                <label for="lnamep" class="col-form-label">Apellido Paterno</label>
                <input type="text" readonly class="form-control-plaintext fw-bold" id="lnamep" value="<?= $ApellidoPaterno; ?>">
              </div>
              <div class="col-md-6">
                <label for="lnamem" class="col-form-label">Nombres</label>
                <input type="text" readonly class="form-control-plaintext fw-bold" id="lnamem" value="<?= $ApellidoMaterno; ?>">
              </div>
              <div class="col-md-6">
                <label for="email" class="col-form-label">Email</label>
                <div>
                  <input type="email" readonly class="form-control-plaintext fw-bold" id="email" value="<?= $email; ?>">
                </div>
              </div>
              <div class="col-12">
                <label for="codigoConexion" class="form-label">Codigo de Conexion</label>
                <input type="text" readonly class="form-control-plaintext fw-bold" value="<?= $codigoConexion; ?>">
              </div>
              <div class="col-6">
                <label for="idreceipt" class="form-label">ID Recibo</label>
                <input type="text" readonly name="idreceipt" class="form-control-plaintext fw-bold" value="<?= $pendingReceipts[0]['id_receipt']; ?>">
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
  <table class="table table-hover">
    <tr>
      <th>#</th>
      <th>Codigo de conexión</th>
      <th>Mes facturado</th>
      <th>Año facturado</th>
      <th>Numero Recibo</th>
      <th>Monto</th>
      <th>Estado</th>
      <th>Año Emision</th>
      <th>Mes Emisión</th>
      <th>Dia Emisión</th>
      <th>Año Vencimiento</th>
      <th>Mes Vencimiento</th>
      <th>Día Vencimiento</th>
      <th>Nombre</th>
      <th>Apellido Paterno</th>
    </tr>
    <?php foreach ($pendingReceipts as $key): ?>
    <tr>
      <?php foreach ($key as $ad): ?>
      <td> <?php echo $ad; ?> </td>
      <?php endforeach; ?>
    </tr>
    <?php endforeach; ?>
  </table>
</div>

<?= $this->endSection() ?>