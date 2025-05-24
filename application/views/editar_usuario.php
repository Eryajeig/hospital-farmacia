<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>

<body>
    <?php include('nav.php') ?>
    <div class="container-fluid">
                      <form action="<?=base_url();?>usuario/update" method="POST">
                            <input type="hidden" value="<?php echo $usuario->id?>" name="id">
                          <div class="form-group">
                            <label for="nombre" class="col-form-label">Nombre:</label>
                            <input type="text" name="nombre" class="form-control input-sm" id="nombre" value="<?php echo $usuario->nombre?>">
                          </div>
                          <div class="form-group">
                            <label for="usuario" class="col-form-label">Usuario:</label>
                            <input type="text" name="usuario" class="form-control input-sm" id="usuario" value="<?php echo $usuario->usuario?>">
                          </div>
                          <div class="form-group">
                            <label for="password" class="col-form-label">Contraseña:</label>
                            <input type="password" name="password" class="form-control input-sm" id="password" value="<?php echo $usuario->password?>"></input>
                          </div>
                          <div class="form-group">
                            <label for="telefono" class="col-form-label">Telefono:</label>
                            <input type="text" name="telefono" class="form-control input-sm" id="telefono" value="<?php echo $usuario->telefono?>"></input>
                          </div>
                          <div class="form-group">
                            <label for="turno" class="col-form-label">Turno:</label>
                            <input type="text" name="turno" class="form-control input-sm" id="turno" value="<?php echo $usuario->turno?>"> </input>
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                          </div>
                      </form>
                    </div>
      <?php include('scripts.php') ?>
</body>

</html>
