<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>

<body>
    <?php include('nav.php') ?>
    <div class="container-fluid">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Nuevo usuario</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="<?=base_url();?>usuario/registro" method="post">
                        <div class="modal-body">
                          <div class="form-group">
                            <label for="nombre" class="col-form-label">Nombre:</label>
                            <input type="text" name="nombre" class="form-control input-sm" id="nombre">
                          </div>
                          <div class="form-group">
                            <label for="usuario" class="col-form-label">Usuario:</label>
                            <input type="text" name="usuario" class="form-control input-sm" id="usuario">
                          </div>
                          <div class="form-group">
                            <label for="password" class="col-form-label">Contraseña:</label>
                            <input type="password" name="password" class="form-control input-sm" id="password"></input>
                          </div>
                          <div class="form-group">
                            <label for="telefono" class="col-form-label">Telefono:</label>
                            <input type="text" name="telefono" class="form-control input-sm" id="telefono"></input>
                          </div>
                          <div class="form-group">
                            <label for="turno" class="col-form-label">Turno:</label>
                            <input type="text" name="turno" class="form-control input-sm" id="turno"> </input>
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-saved"></span> Guardar</button>
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
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Contraseña</th>
                    <th>Telefono</th>
                    <th>Turno</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($usuarios)):?>
                    <?php foreach ($usuarios as $usuario):?>
                        <tr>
                            <td><?php echo $usuario->id;?></td>
                            <td><?php echo $usuario->nombre;?></td>
                            <td><?php echo $usuario->usuario;?></td>
                            <td><?php echo $usuario->password;?></td>
                            <td><?php echo $usuario->telefono;?></td>
                            <td><?php echo $usuario->turno;?></td>
                            <td>
                              <div class="btn-group">
                                <a href="<?=base_url();?>usuario/editar/<?php echo $usuario->id;?>" class="btn btn-primary"><span class="glyphicon-pencil"></span></a>
                              </div>
                              <div class="btn-group">
                                <a href="<?=base_url();?>usuario/borrar/<?php echo $usuario->id;?>" class="btn btn-danger btn-remove"><span class="glyphicon glyphicon-remove"></span></a>
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
