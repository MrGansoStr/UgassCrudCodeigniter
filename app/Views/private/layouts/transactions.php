<?= $this->extend('/private/indexprivatelayout') ?>

<?= $this->section('transactions') ?>

<div class="container-lg" style="overflow: auto;">
  <table class="table table-hover">
    <tr>
      <th>ID Usuario</th>
      <th>DNI</th>
      <th>id_transaccion</th>
      <th>transaccion encoded</th>
      <th>Fecha</th>
      <th>Estado</th>
    </tr>
    <?php foreach ($transactions as $key): ?>
    <tr>
      <?php foreach ($key as $ad): ?>
      <td> <?php echo $ad; ?> </td>
      <?php endforeach; ?>
    </tr>
    <?php endforeach; ?>
  </table>
</div>

<?= $this->endSection() ?>