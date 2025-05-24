 <!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>

<body>
    <?php include('nav.php') ?>
    <div class="container-fluid">
            <a class="navbar-brand" href="<?=base_url();?>nueva_salida">Nueva salida</a>
            <br>
            <br>
            <br>
        <table id="example1" class="table table-bordered table-hover table-striped" style="font-size: 11px;">
            <thead>
                <tr>
                    <th style="text-align: center;">No. de Salida</th>
                    <th style="text-align: center;">Nombre de Usuario</th>
                    <th style="text-align: center;">Solicitante</th>
                    <th style="text-align: center;">Tipo de Salida</th>
                    <th style="text-align: center;">Fecha de Salida</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($listas)):?>
                    <?php foreach ($listas as $salida):?>
                        <tr>
                            <td><?php echo $salida->idsalida;?></td>
                            <td><?php echo $salida->idusuario;?></td>
                            <td><?php echo $salida->idsolicitante;?></td>
                            <td><?php echo $salida->tiposalida;?></td>
                            <td><?php echo $salida->fechasalida;?></td>
                         </tr>
                    <?php endforeach;?>
                <?php endif;?>
            </tbody>
        </table>
    </div>
    <?php include('scripts.php') ?>
</body>
</html>
