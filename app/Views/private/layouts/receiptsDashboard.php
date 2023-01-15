<?= $this->extend('/private/indexprivatelayout') ?>

<?= $this->section('receiptsDashboard') ?>

<div class="container-lg " style="overflow: auto;">
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
    <?php foreach ($allreceipts as $key): ?>
    <tr>
      <?php foreach ($key as $ad): ?>
      <td> <?php echo $ad; ?> </td>
      <?php endforeach; ?>
    </tr>
    <?php endforeach; ?>
  </table>
</div>

<?= $this->endSection() ?>