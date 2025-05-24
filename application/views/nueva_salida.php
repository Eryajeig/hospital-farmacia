<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>
<body>
    <?php include('nav.php') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
<div class="container-fluid">
    <section class="content-header">
        <h1>
        Nueva
        <small>Salida</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="<?php echo base_url();?>nueva_salida/store" method="POST" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label for="">Folio:</label>
                                    <input type="text" class="form-control" name="idsalida">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Fecha:</label>
                                    <input type="date" class="form-control" name="fechasalida" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Tipo salida:</label>
                                    <input type="text" id="tiposalida" class="form-control" name="tiposalida">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label for="">Turno:</label>
                                    <input type="text" class="form-control" id="turnosalida" name="turnosalida">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Nosp:</label>
                                    <input type="text" class="form-control" id="nosp" name="nosp">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Usuario:</label>
                                    <span class="form-control"><?php echo $this->session->userdata("nombre")?></span>
                                    <input type="hidden" class="form-control" id="idusuario" name="idusuario">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="">Articulo:</label>
                                    <input type="text" class="form-control" id="articulo" >
                                </div>
                                <div class="col-md-2">
                                    <label for="">&nbsp;</label>
                                    <button id="btn-agregar" type="button" class="btn btn-success btn-flat btn-block"><span class="fa fa-plus"></span> Agregar</button>
                                </div>
                            </div>
                            <table id="tbarticulos" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Clave</th>
                                        <th>Nombre</th>
                                        <th>Presentacion</th>
                                        <th>Stock</th>
                                        <th>Cantidad solicitada</th>
                                        <th>Cantidad entregada</th>
                                        <th>Opciones</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="">Observaciones:</label>
                                    <input type="text" class="form-control" id="observaciones" name="observaciones" >
                                </div>
                            </div>
                            <div class="form-group">    
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
</div>
<!-- /.modal -->
    <?php include('scripts.php') ?>
</body>

</html>