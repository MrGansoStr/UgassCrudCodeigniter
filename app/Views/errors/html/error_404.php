<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>404 Page Not Found</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        
        a:hover {
            color: white;
        }
    </style>
</head>

<body>
    <div class="bg-image" style="background-color: #ccc; heigth: 1224px; background-image: url('./pimg/images/notFoundPageNew.jpg'); background-repeat: no-repeat; background-size: cover;">
        <div class="container m-0 m-auto align-items-center justify-content-center text-center">
            <div class="bg-image py-5 ">
                <h1 class="bg-image py-5 px-5 fw-bold text-uppercase text-white" style="font-size: 15rem;">404
                </h1>
                <h2 class="bg-image py-5 px-5 fw-bold text-uppercase text-white">Página No Encontrada</h2>
                <p class="text-white fw-bold">
                    <?php if (ENVIRONMENT !== 'production'): ?>
                    <?= nl2br(esc($message)) ?>
                    <?php else: ?>
                    Sorry! Cannot seem to find the page you were looking for.
                    <?php endif ?>
                </p>
                <h4 class="bg-image py-5 px-5 fw-bold text-white">No lo rompiste, solo necesitas ir al inicio
                </h4>
            </div>
            <a class="btn btn-outline-primary" type="button" href="<?= base_url("") ?>">Ir al Inicio</a>
        </div>
    </div>

</body>

</html>