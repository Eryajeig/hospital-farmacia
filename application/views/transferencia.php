<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>

<body>
    <?php include('nav.php') ?>
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-heading">Datos de Transferencia:</div>
            <div class="panel-body">
                <form action="">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Folio:</label>
                                <input type="text" class="form-control" id="input1" name="input1">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Origen:</label>
                                <select id="select1" name="select1" class="form-control">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Destino:</label>
                                <select id="select2" name="select2" class="form-control">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Turno:</label>
                                <select id="select2" name="select2" class="form-control">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Transferencia en piezas:</div>
            <div class="panel-body" style="max-height: 400px;overflow: auto;">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Clave Corta</th>
                            <th>Nombre</th>
                            <th>Presentación</th>
                            <th>Unidad</th>
                            <th>Medida</th>
                            <th>Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            *Una vez hecha la transferencia no es posible modificarla
        </div>
    </div>
    </div>
    <div class="well">
        <div class="row">
            <div class="col-sm-4">
                <i class="fa fa-search" aria-hidden="true" style="font-size: 30px;"></i>
            </div>
            <div class="col-sm-8" style="text-align: right">
                <button type="button" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Transferir</button>
                <button type="button" class="btn btn-info"><i class="fa fa-list" aria-hidden="true"></i> Reporte</button>
                <button type="button" class="btn btn-danger"><i class="fa fa-window-close" aria-hidden="true"></i> Cerrar</button>
            </div>
        </div>
    </div>
    <?php include('scripts.php') ?>
</body>

</html>