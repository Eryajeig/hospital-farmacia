<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>

<body>
    <?php include('nav.php') ?>
    <div class="container-fluid">
      <a class="navbar-brand" href="<?=base_url();?>nueva_entrada">Nueva entrada</a>
        <br>
        <br>
        <br>
        <table id="example1" class="table table-bordered table-hover table-striped" style="font-size: 11px;">
            <thead>
                <tr>
                    <th>No. de Entrada</th>
                    <th>Folio</th>
                    <th>Tipo</th>
                    <th>Fecha</th>
                    <th>Observaciones</th>
                    <th>Ajuste</th>
                    <th>Total de claves</th>
                    <th>Cant. Total</th>
                    <th>Importe</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($entradas)):?>
                    <?php foreach ($entradas as $entrada):?>
                        <tr>
                          <td><?php echo $entrada->id;?></td>
                          <td><?php echo $entrada->folio;?></td>
                          <td><?php echo $entrada->tipo;?></td>
                          <td><?php echo $entrada->fecha;?></td>
                          <td><?php echo $entrada->observaciones;?></td>
                          <td><?php echo $entrada->ajuste;?></td>
                        </tr>
                    <?php endforeach;?>
                <?php endif;?>
            </tbody>
        </table>
    </div>
    <?php include('scripts.php') ?>
</body>

</html>
