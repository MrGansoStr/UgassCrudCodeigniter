  
  <body>
    <div class="container">
      
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <h1>Login con codeigniter 4</h1>
          <form action="<?php echo base_url('/login') ?>" method="POST">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" class="form-control" required="">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" required="">
            <br>
            <button class="btn btn-primary">Entrar</button>
          </form>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>
</body>
