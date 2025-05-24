<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>

<body>
    <?php include('nav.php') ?>
    <div class="container-fluid">
                      <form action="<?=base_url();?>servicio/update" method="POST">
                            <input type="hidden" value="<?php echo $servicio->idservicio?>" name="idservi" >
                          <div class="form-group">
                            <label for="servicio" class="col-form-label">Nombre:</label>
                            <input type="text" id="servicio" name="servicio" class="form-control input-sm" value="<?php echo $servicio->servicio?>">
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                          </div>
                      </form>
                    </div>
      <?php include('scripts.php') ?>
</body>

</html>