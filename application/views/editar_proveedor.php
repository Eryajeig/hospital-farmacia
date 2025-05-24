<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>
<body>
    <?php include('nav.php') ?>
    <div class="container-fluid">
                    <form action="<?=base_url();?>lista_proveedor/update" method="POST">
                            <input type="hidden" name="id" value="<?php echo $proveedor->id?>">
                          <div class="form-group">
                            <label for="nombre" class="col-form-label">Nombre:</label>
                            <input type="text" name="nombre" class="form-control input-sm" id="nombre" value="<?php echo $proveedor->nombre?>">
                          </div>
                          <div class="form-group">
                            <label for="direccion" class="col-form-label">Direccion:</label>
                            <input type="text" name="direccion" class="form-control input-sm" id="direccion" value="<?php echo $proveedor->direccion?>"></input>
                          </div>
                          <div class="form-group">
                            <label for="telefono" class="col-form-label">Telefono:</label>
                            <input type="text" name="telefono" class="form-control input-sm" id="telefono" value="<?php echo $proveedor->telefono?>"></input>
                          </div>
                          <div class="form-group">
                            <label for="correo" class="col-form-label">Correo:</label>
                            <input type="text" name="correo" class="form-control input-sm" id="correo" value="<?php echo $proveedor->correo?>"> </input>
                          </div>
                          <div class="form-group">
                            <label for="rfc" class="col-form-label">RFC:</label>
                            <input type="text" name="rfc" class="form-control input-sm" id="rfc" value="<?php echo $proveedor->rfc?>"> </input>
                          </div>
                          <div class="form-group">
                            <label for="ciudad" class="col-form-label">Ciudad:</label>
                            <input type="text" name="ciudad" class="form-control input-sm" id="ciudad" value="<?php echo $proveedor->ciudad?>"> </input>
                          </div>
                          <div class="form-group">
                            <label for="estado" class="col-form-label">Estado:</label>
                            <input type="text" name="estado" class="form-control input-sm" id="estado" value="<?php echo $proveedor->estado?>"> </input>
                          </div>
                          <div class="form-group">
                            <label for="cp" class="col-form-label">CP:</label>
                            <input type="text" name="cp" class="form-control input-sm" id="cp" value="<?php echo $proveedor->cp?>"> </input>
                          </div>
                          <div class="form-group">
                            <label for="telcel" class="col-form-label">Celular:</label>
                            <input type="text" name="telcel" class="form-control input-sm" id="tecel" value="<?php echo $proveedor->telcel?>"> </input>
                          </div>
                      <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                      </div>
                    </form>
                    </div>
      <?php include('scripts.php') ?>
</body>

</html>
