<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>
<body>
    <?php include('nav.php') ?>
    <div class="container-fluid">
                    <form action="<?=base_url();?>articulo/update" method="POST">
                          <input type="hidden" value="<?php echo $articulo->id?>" name="id">
                          <div class="form-group">
                            <label for="clavecorta" class="col-form-label">Clave corta:</label>
                            <input type="text" name="clavecorta" class="form-control input-sm" id="clavecorta" value="<?php echo $articulo->clavecorta?>"></input>
                          </div>
                          <div class="form-group">
                            <label for="clavessa" class="col-form-label">Clave ssa:</label>
                            <input type="text" name="clavessa" class="form-control input-sm" id="clavessa" value="<?php echo $articulo->clavessa?>"></input>
                          </div>
                          <div class="form-group">
                            <label for="clavepresupuestal" class="col-form-label">Clave presupuestal:</label>
                            <input type="text" name="clavepresupuestal" class="form-control input-sm" id="clavepresupuestal" value="<?php echo $articulo->clavepressupuestal?>"></input>
                          </div>
                          <div class="form-group">
                            <label for="nombre" class="col-form-label">Nombre:</label>
                            <input type="textx" name="nombre" class="form-control input-sm" id="nombre" value="<?php echo $articulo->nombre?>"></input>
                          </div>
                          <div class="form-group">
                            <label for="descripcion" class="col-form-label">Descripcion:</label>
                            <input type="text" name="descripcion" class="form-control input-sm" id="descripcion" value="<?php echo $articulo->descripcion?>"></input>
                          </div>
                          <div class="form-group">
                            <label for="unidad" class="col-form-label">Unidad:</label>
                            <input type="text" name="unidad" class="form-control input-sm" id="unidad" value="<?php echo $articulo->unidad?>"></input>
                          </div>
                          <div class="form-group">
                            <label for="envase" class="col-form-label">Envase:</label>
                            <input type="text" name="envase" class="form-control input-sm" id="envase" value="<?php echo $articulo->envase?>"> </input>
                          </div>
                          <div class="form-group">
                            <label for="precio" class="col-form-label">Precio:</label>
                            <input type="text" name="precio" class="form-control input-sm" id="precio" value="<?php echo $articulo->precio?>"></input>
                          </div>
                          <div class="form-group">
                            <label for="categoria" class="col-form-label">Categoria:</label>
                            <input type="text" name="categoria" class="form-control input-sm" id="categoria" value="<?php echo $articulo->categoria?>"></input>
                          </div>
                          <div class="form-group">
                            <label for="iva" class="col-form-label">Iva:</label>
                            <input type="text" name="iva" class="form-control input-sm" id="iva" value="<?php echo $articulo->iva?>"></input>
                          </div>
                          <div class="form-group">
                            <label for="farmacia" class="col-form-label">Farmacia:</label>
                            <input type="text" name="farmacia" class="form-control input-sm" id="farmacia" value="<?php echo $articulo->farmacia?>"> </input>
                          </div>
                          <div class="form-group">
                            <label for="estante" class="col-form-label">Estante:</label>
                            <input type="text" name="estante" class="form-control input-sm" id="estante" value="<?php echo $articulo->estante?>"></input>
                          </div>
                          <div class="form-group">
                            <label for="nivel" class="col-form-label">Nivel:</label>
                            <input type="text" name="nivel" class="form-control input-sm" id="nivel" value="<?php echo $articulo->nivel?>"> </input>
                          </div>
                          <div class="form-group">
                            <label for="bodega" class="col-form-label">Bodega:</label>
                            <input type="text" name="bodega" class="form-control input-sm" id="bodega" value="<?php echo $articulo->bodega?>">
                          </div>
                          <div class="form-group">
                            <label for="pasillo" class="col-form-label">Pasillo:</label>
                            <input type="text" name="pasillo" class="form-control input-sm" id="pasillo" value="<?php echo $articulo->pasillo?>"> </input>
                          </div>
                          <div class="form-group">
                            <label for="tarima" class="col-form-label">Tarima:</label>
                            <input type="text" name="tarima" class="form-control input-sm" id="tarima" value="<?php echo $articulo->tarima?>"></input>
                          </div>
                      <div class="form-group">
                            <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                      </div>
                    </form>
                    </div>
      <?php include('scripts.php') ?>
</body>

</html>
