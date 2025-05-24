<!DOCTYPE html>
<html lang="en">
<?php include('head.php') ?>

<body>
    <?php include('nav.php') ?>
    <div class="container-fluid">
        <!--<ul class="nav nav-pills">
    <li role="presentation" class="active"><a href="<?=base_url();?>/index.php/inventarios">Farmacia</a></li>
    <li role="presentation"><a href="<?=base_url();?>/index.php/inventarios_bodega">Bodega</a></li>
    <li role="presentation"><a href="<?=base_url();?>/index.php/inventarios_general">General</a></li>
    </ul>
    <br>-->
        <div class="panel panel-default">
            <div class="panel-body">
                <form action="">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Estante:</label>
                                                <select id="select1" name="select1" class="form-control">
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Clave Presupuestal:</label>
                                                <select id="select1" name="select1" class="form-control">
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-warning form-control"> BUSCAR</button>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-warning form-control"> MOSTRAR TODOS</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading"></div>
            <div class="panel-body" style="max-height: 400px;overflow: auto;">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Clave</th>
                            <th>Nombre</th>
                            <th>Presentación</th>
                            <th>Unidad Entrega</th>
                            <th>CPM</th>
                            <th>Status</th>
                            <th>Clave Presupuestal</th>
                            <th>Estante</th>
                            <th>Nivel</th>
                            <th>Existencia Farmacia</th>
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
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="footer navbar-fixed-bottom">
            <div class="well">
                <div class="row">
                    <div class="col-sm-4">
                        <i class="fa fa-search" aria-hidden="true" style="font-size: 30px;"></i>
                    </div>
                    <div class="col-sm-8" style="text-align: right">
                        <button type="button" class="btn btn-info"><i class="fa fa-print" aria-hidden="true"></i> IMPRIMIR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('scripts.php') ?>
</body>

</html>