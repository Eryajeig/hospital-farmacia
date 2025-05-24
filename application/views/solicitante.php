<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>

<body>
    <?php include('nav.php') ?>
    <div class="container-fluid">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Nuevo Solicitante</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel">Nuevo Solcitiante</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="<?=base_url();?>solicitante/registro"  method="post">
                          <div class="form-group">
                            <label for="idsolicitante" class="col-form-label">Id:</label>
                            <input type="text" name="idsolicitante" class="form-control input-sm" id="idsolicitante">
                          </div>
                          <div class="form-group">
                            <label for="nomsolicitante" class="col-form-label">Nombre:</label>
                            <input type="text" name="nomsolicitante" class="form-control input-sm" id="nomsolicitante">
                          </div>
                          <div class="form-group">
                            <label for="cedula" class="col-form-label">Celula:</label>
                            <input type="text" name="cedula" class="form-control input-sm" id="cedula"></input>
                          </div>
                          <div class="form-group">
                            <label for="cedulall" class="col-form-label">Cedula 2:</label>
                            <input type="text" name="cedulall" class="form-control input-sm" id="cedulall"></input>
                          </div>
                          <div class="form-group">
                            <label for="institucion" class="col-form-label">Institucion:</label>
                            <input type="text" name="institucion" class="form-control input-sm" id="institucion"> </input>
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success">Guardar</button>
                      </div>
                  </form>
                 </div>
                </div>
              </div>
                <br>
                <br>

        <table id="example1" class="table table-bordered table-hover table-striped" style="font-size: 11px;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre Solicitante</th>
                    <th>Cedula</th>
                    <th>Celula 2</th>
                    <th>Institucion</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($solicitantes)):?>
                    <?php foreach ($solicitantes as $solicitante):?>
                        <tr>
                            <td><?php echo $solicitante->idsolicitante;?></td>
                            <td><?php echo $solicitante->nomsolicitante;?></td>
                            <td><?php echo $solicitante->cedula;?></td>
                            <td><?php echo $solicitante->cedulall;?></td>
                            <td><?php echo $solicitante->institucion;?></td>
                            <td>
                              <div class="btn-group">
                                <a href="<?=base_url();?>solicitante/editar/<?php echo $solicitante->idsolicitante;?>" class="btn btn-primary"><span class="glyphicon-pencil"></span></a>
                              </div>
                              <div class="btn-group">
                                <a href="<?=base_url();?>solicitante/borrar/<?php echo $solicitante->idsolicitante;?>" class="btn btn-danger btn-remove"><span class="glyphicon glyphicon-remove"></span></a>
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