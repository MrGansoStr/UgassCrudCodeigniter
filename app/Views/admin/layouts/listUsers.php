<?= $this->extend('/admin/indexadminlayout') ?>

<?= $this->section('listUsers') ?>

<div class="container-lg" style="overflow: auto;">
  <table class="table table-hover">
    <tr>
      <th>ID</th>
      <th>Nombres</th>
      <th>Apellido Paterno</th>
      <th>Apellido Materno</th>
      <th>dni</th>
      <th>username</th>
      <th>password</th>
      <th>email</th>
      <th>Celular</th>
      <th>Direccion</th>
      <th>Tipo</th>
    </tr>
    <?php foreach ($allusers as $key): ?>
    <tr>
      <div class="modal fade" id="<?= 'exampleModal'.$key['id_user'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar Datos de Usuario</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form class="row g-3" action="<?= base_url("/admin/updateuser") ?>" method="POST">
              <div class="col-md-6">
                  <label for="iduser" class="col-form-label">ID Usuario</label>
                  <input name="newid" type="text" readonly class="form-control fw-bold" id="iduser" value="<?= $key['id_user']; ?>">
                </div>
                <div class="col-md-12">
                  <label for="nombres" class="col-form-label">Nombres</label>
                  <input name="newfname" type="text" class="form-control fw-bold" id="nombres" value="<?= $key['Fname']; ?>">
                </div>
                <div class="col-md-6">
                  <label for="lnamep" class="col-form-label">Apellido Paterno</label>
                  <input name="newlnamep" type="text" class="form-control fw-bold" id="lnamep" value="<?= $key['LnameP']; ?>">
                </div>
                <div class="col-md-6">
                  <label for="lnamem" class="col-form-label">Apellido Materno</label>
                  <input name="newlnamem" type="text" class="form-control fw-bold" id="lnamem" value="<?= $key['LnameM']; ?>">
                </div>
                <div class="col-md-6">
                  <label for="dni" class="col-form-label">DNI</label>
                  <input name="newdni" type="text" class="form-control fw-bold" id="dni" value="<?= $key['dni']; ?>">
                </div>
                <div class="col-md-12">
                  <label for="email" class="col-form-label">Email</label>
                  <input name="newemail" type="email" class="form-control fw-bold" id="email" value="<?= $key['email']; ?>">
                </div>
                <div class="col-md-6">
                  <label for="phone" class="col-form-label">Celular</label>
                  <input name="newphone" type="text" class="form-control fw-bold" id="phone" value="<?= $key['phone']; ?>">
                </div>
                <div class="col-md-6">
                  <label for="address" class="col-form-label">Dirección</label>
                  <input name="newaddress" type="text" class="form-control fw-bold" id="address" value="<?= $key['address']; ?>">
                </div>
                <hr/>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success">Actualizar</button>
              </form>
            </div>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
      <?php foreach ($key as $ad): ?>
      <td> <?php echo $ad; ?> </td>
      <?php endforeach; ?>
      <td>
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#<?= 'exampleModal'.$key['id_user'] ?>">
          Editar
        </button>
      </td>
      <td>
        <a href="<?php echo base_url().'/admin/deleteuser/'.$key['id_user'] ?>" class="btn btn-outline-danger">Eliminar</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>
</div>

<?= $this->endSection() ?>