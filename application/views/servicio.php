<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>

<body>
    <?php include('nav.php') ?>
    <div class="container-fluid">
      <div>
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Nuevo Servicio</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel">Nuevo Servicio</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="<?=base_url();?>servicio/registro" method="POST" >
                           <div class="form-group">
                            <input type="hidden" id="id" name="id" class="form-control input-sm">
                          </div>
                          <div class="form-group">
                            <label for="nombre" class="col-form-label">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" class="form-control input-sm">
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success" >Guardar</button>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
      </div>
   <br>
        <table id="example1" class="table table-bordered table-hover table-striped" style="font-size: 11px;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($servicios)):?>
                    <?php foreach ($servicios as $servicio):?>
                        <tr>
                            <td><?php echo $servicio->id;?></td>
                            <td><?php echo $servicio->nombre;?></td>
                            <td>
                              <div class="btn-group">
                                <a href="<?=base_url();?>servicio/editar/<?php echo $servicio->id;?>" class="btn btn-primary"><span class="glyphicon-pencil"></span></a>
                              </div>
                              <div class="btn-group">
                                <a href="<?=base_url();?>servicio/borrar/<?php echo $servicio->id;?>" class="btn btn-danger btn-remove"><span class="glyphicon glyphicon-remove"></span></a>
                              </div>
                            </td>
                         </tr>
                    <?php endforeach;?>
                <?php endif;?>
            </tbody>
        </table>
    </div>
    <?php include('scripts.php') ?>
</body>

</html>
