<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>

<body>
    <?php include('nav.php') ?>
    <div class="container-fluid">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Nuevo Articulo</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel">Nuevo Articulo</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="<?=base_url();?>articulo/registro" method="post">
                        <div class="modal-body">
                          <div class="form-group">
                            <input type="hidden" name="id" class="form-control input-sm" id="id">
                          </div>
                          <div class="form-group">
                            <label for="clavecorta" class="col-form-label">Clave corta:</label>
                            <input type="text" name="clavecorta" class="form-control input-sm" id="clavecorta">
                          </div>
                          <div class="form-group">
                            <label for="clavessa" class="col-form-label">Clave ssa:</label>
                            <input type="text" name="clavessa" class="form-control input-sm" id="clavessa">
                          </div>
                          <div class="form-group">
                            <label for="clavepresupuestal" class="col-form-label">Clave presupuestal:</label>
                            <input type="text" name="clavepresupuestal" class="form-control input-sm" id="clavepresupuestal">
                          </div>
                          <div class="form-group">
                            <label for="nombre" class="col-form-label">Nombre:</label>
                            <input type="textx" name="nombre" class="form-control input-sm" id="nombre"></input>
                          </div>
                          <div class="form-group">
                            <label for="descripcion" class="col-form-label">Descripcion:</label>
                            <input type="text" name="descripcion" class="form-control input-sm" id="descripcion"></input>
                          </div>
                          <div class="form-group">
                            <label for="unidad" class="col-form-label">Unidad:</label>
                            <input type="text" name="unidad" class="form-control input-sm" id="unidad"></input>
                          </div>
                          <div class="form-group">
                            <label for="envase" class="col-form-label">Envase:</label>
                            <input type="text" name="envase" class="form-control input-sm" id="envase"> </input>
                          </div>
                          <div class="form-group">
                            <label for="precio" class="col-form-label">Precio:</label>
                            <input type="text" name="precio" class="form-control input-sm" id="precio"></input>
                          </div>
                          <div class="form-group">
                            <label for="categoria" class="col-form-label">Categoria:</label>
                            <input type="text" name="categoria" class="form-control input-sm" id="categoria"> </input>
                          </div>
                          <div class="form-group">
                            <label for="iva" class="col-form-label">Iva:</label>
                            <input type="text" name="iva" class="form-control input-sm" id="iva"></input>
                          </div>
                          <div class="form-group">
                            <label for="farmacia" class="col-form-label">Farmacia:</label>
                            <input type="text" name="farmacia" class="form-control input-sm" id="farmacia"> </input>
                          </div>
                          <div class="form-group">
                            <label for="estante" class="col-form-label">Estante:</label>
                            <input type="text" name="estante" class="form-control input-sm" id="estante"></input>
                          </div>
                          <div class="form-group">
                            <label for="nivel" class="col-form-label">Nivel:</label>
                            <input type="text" name="nivel" class="form-control input-sm" id="nivel"> </input>
                          </div>
                          <div class="form-group">
                            <label for="bodega" class="col-form-label">Bodega:</label>
                            <input type="text" name="bodega" class="form-control input-sm" id="bodega">
                          </div>
                          <div class="form-group">
                            <label for="pasillo" class="col-form-label">Pasillo:</label>
                            <input type="text" name="pasillo" class="form-control input-sm" id="pasillo"> </input>
                          </div>
                          <div class="form-group">
                            <label for="tarima" class="col-form-label">Tarima:</label>
                            <input type="text" name="tarima" class="form-control input-sm" id="tarima"></input>
                          </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-disssmiss="modal">Cerrar</button>
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
                  <th>Clave corta</th>
                  <th>Clave ssa</th>
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Presentación</th>
                  <th>envase</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($articulos)):?>
                    <?php foreach ($articulos as $articulo):?>
                        <tr>
                            <td><?php echo $articulo->clavecorta;?></td>
                            <td><?php echo $articulo->clavessa;?></td>
                            <td><?php echo $articulo->nombre;?></td>
                            <td><?php echo $articulo->descripcion;?></td>
                            <td><?php echo $articulo->envase;?></td>
                            <td>
                              <div class="btn-group">
                                <a href="<?=base_url();?>articulo/editar/<?php echo $articulo->id;?>" class="btn btn-primary"><span class="glyphicon-pencil"></span></a>
                              </div>
                              <div class="btn-group">
                                <a href="<?=base_url();?>articulo/borrar/<?php echo $articulo->id;?>" class="btn btn-danger btn-remove"><span class="glyphicon glyphicon-remove"></span></a>
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
