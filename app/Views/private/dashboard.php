<?php

$NombreCompleto = session('Fname');
$ApellidoPaterno = session('LnameP');
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/x-icon" href="assets/logo-vt.svg" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <title>Home</title>
</head>

<body>
  <?= $this->include('/private/layouts/navbarPrivate') ?>
  <div class="py-5">
    <h3 class="text-uppercase m-0 m-auto text-center">Dashboard</h3>
    <div class="container-lg">
      <ul class="nav nav-pills mb-3 py-4" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="pills-receipts-tab" data-bs-toggle="pill" data-bs-target="#pills-receipts"
            type="button" role="tab" aria-controls="pills-receipts" aria-selected="true">Recibos</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-expiredsReceipts-tab" data-bs-toggle="pill" data-bs-target="#pills-expiredsReceipts"
            type="button" role="tab" aria-controls="pills-expiredsReceipts" aria-selected="false">Recibos Vencidos</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-balance-tab" data-bs-toggle="pill" data-bs-target="#pills-balance"
            type="button" role="tab" aria-controls="pills-balance" aria-selected="false">Balance</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="pills-balance-tab" data-bs-toggle="pill" data-bs-target="#pills-transaction"
            type="button" role="tab" aria-controls="pills-transation" aria-selected="false">Transacciones</button>
        </li>
        
      </ul>
      <div class="tab-content" id="pills-tabContent" style="width: 90% !important;">
        <div class="tab-pane fade show active" id="pills-receipts" role="tabpanel" aria-labelledby="pills-receipts-tab"
          tabindex="0"><?= $this->include('/private/layouts/receiptsDashboard') ?></div>
        <div class="tab-pane fade" id="pills-expiredsReceipts" role="tabpanel" aria-labelledby="pills-expiredsReceipts-tab" tabindex="0">
        <?= $this->include('/private/layouts/expiredsReceipts') ?></div>
        <div class="tab-pane fade" id="pills-balance" role="tabpanel" aria-labelledby="pills-balance-tab" tabindex="0">
        <?= $this->include('/private/layouts/balance') ?></div>
        <div class="tab-pane fade" id="pills-transaction" role="tabpanel" aria-labelledby="pills-transaction-tab" tabindex="0">
        <?= $this->include('/private/layouts/transactions') ?></div>
      </div>
      
      
      
    </div>
  </div>
  <?= $this->include('/private/layouts/footerPrivate') ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>