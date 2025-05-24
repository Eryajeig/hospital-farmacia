<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>

<body>
    <?php include('nav.php') ?>
    <div class="container-fluid">
                <table id="example1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Id articulo</th>
                            <th>Clave corta</th>
                            <th>Clave ssa</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Presentación</th>
                            <th>Unidad</th>
                            <th>Unidad Entrega</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Clave Presupuestal</th>
                            <th>Categoria</th>
                            <th>IVA</th>
                            <th>CPM</th>
                            <th>Estante</th>
                            <th>Nivel</th>
                            <th>Pasaillo</th>
                            <th>Tarima</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if (!empty($inventarios)):?>
                    <?php foreach ($inventarios as $articulo):?>
                        <tr>
                            <td><?php echo $articulo->idarticulos;?></td>
                            <td><?php echo $articulo->clavecorta;?></td>
                            <td><?php echo $articulo->clavessa;?></td>
                            <td><?php echo $articulo->nombarticulo;?></td>
                            <td><?php echo $articulo->descripcion;?></td>
                            <td><?php echo $articulo->presentacion;?></td>
                            <td><?php echo $articulo->unidad;?></td>
                            <td><?php echo $articulo->unientregada;?></td>
                            <td><?php echo $articulo->precio;?></td>
                            <td><?php echo $articulo->stock;?></td>
                            <td><?php echo $articulo->clavepresu;?></td>
                            <td><?php echo $articulo->categoria;?></td>
                            <td><?php echo $articulo->iva;?></td>
                            <td><?php echo $articulo->cpm;?></td>
                            <td><?php echo $articulo->estante;?></td>
                            <td><?php echo $articulo->nivel;?></td>
                            <td><?php echo $articulo->pasillo;?></td>
                            <td><?php echo $articulo->tarima;?></td>
                         </tr>
                    <?php endforeach;?>
                <?php endif;?>
                    </tbody>
                </table>
            </div>
    <?php include('scripts.php') ?>
</body>

</html>