<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>

<body>
    <?php include('nav.php') ?>
    <div class="container-fluid">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Nuevo Proveedor</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel">Nuevo Proveedor</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="<?=base_url();?>lista_proveedor/registro" method="post">
                          <div class="form-group">
                            <input type="hidden" name="id" class="form-control input-sm" id="idr">
                          </div>
                          <div class="form-group">
                            <label for="nombre" class="col-form-label">Nombre:</label>
                            <input type="text" name="nombre" class="form-control input-sm" id="nombre">
                          </div>
                          <div class="form-group">
                            <label for="direccion" class="col-form-label">Direccion:</label>
                            <input type="text" name="direccion" class="form-control input-sm" id="direccion"></input>
                          </div>
                          <div class="form-group">
                            <label for="telefono" class="col-form-label">Telefono:</label>
                            <input type="text" name="telefono" class="form-control input-sm" id="telefono"></input>
                          </div>
                          <div class="form-group">
                            <label for="correo" class="col-form-label">Correo:</label>
                            <input type="text" name="correo" class="form-control input-sm" id="correo"> </input>
                          </div>
                          <div class="form-group">
                            <label for="rfc" class="col-form-label">RFC:</label>
                            <input type="text" name="rfc" class="form-control input-sm" id="rfc"> </input>
                          </div>
                          <div class="form-group">
                            <label for="ciudad" class="col-form-label">Ciudad:</label>
                            <input type="text" name="ciudad" class="form-control input-sm" id="ciudad"> </input>
                          </div>
                          <div class="form-group">
                            <label for="estado" class="col-form-label">Estado:</label>
                            <input type="text" name="estado" class="form-control input-sm" id="estado"> </input>
                          </div>
                          <div class="form-group">
                            <label for="cp" class="col-form-label">CP:</label>
                            <input type="text" name="cp" class="form-control input-sm" id="cp"> </input>
                          </div>
                          <div class="form-group">
                            <label for="telcel" class="col-form-label">Celular:</label>
                            <input type="text" name="telcel" class="form-control input-sm" id="tecel"> </input>
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
                    <th>Nombre Proveedor</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>RFC</th>
                    <th>Ciudad</th>
                    <th>Estado</th>
                    <th>CP</th>
                    <th>Celular</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($proveedores)):?>
                    <?php foreach ($proveedores as $proveedor):?>
                        <tr>
                            <td><?php echo $proveedor->id;?></td>
                            <td><?php echo $proveedor->nombre;?></td>
                            <td><?php echo $proveedor->direccion;?></td>
                            <td><?php echo $proveedor->telefono;?></td>
                            <td><?php echo $proveedor->correo;?></td>
                            <td><?php echo $proveedor->rfc;?></td>
                            <td><?php echo $proveedor->ciudad;?></td>
                            <td><?php echo $proveedor->estado;?></td>
                            <td><?php echo $proveedor->cp;?></td>
                            <td><?php echo $proveedor->telcel;?></td>
                            <td>
                              <div class="btn-group">
                                <a href="<?=base_url();?>lista_proveedor/editar/<?php echo $proveedor->id;?>" class="btn btn-primary"><span class="glyphicon-pencil"></span></a>
                              </div>
                              <div class="btn-group">
                                <a href="<?=base_url();?>lista_proveedor/borrar/<?php echo $proveedor->id;?>" class="btn btn-danger btn-remove"><span class="glyphicon glyphicon-remove"></span></a>
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
