<div class="container">
    <div class="row">
        <div class="col-md-4 hidden-xs hidden-sm"><img class="pull-left" src="<?=base_url();?>plantillas/imagenes/chiapasnosune.jpg" style="width: 150px; height: 100px;"></div>
        <div class="col-md-4"><img class="center-block" src="<?=base_url();?>plantillas/imagenes/logohm.jpg" style="width: 150px; height: 100px;"></div>
        <div class="col-md-4 hidden-xs hidden-sm"><img class="pull-right" src="<?=base_url();?>plantillas/imagenes/secretariads.jpg" style="width: 150px; height: 100px;"></div>
    </div>
</div>
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=base_url();?>home">inicio</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?=base_url();?>lista_salida">Salidas</a></li>
                <li><a href="<?=base_url();?>lista_entrada">Entradas</a></li>
                <li><a href="<?=base_url();?>lista_transferencia">Transferencias</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Inventarios<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?=base_url();?>inventario">Farmacia</a></li>
                        <li><a href="<?=base_url();?>inventario_bodega">Bodega</a></li>
                        <li><a href="<?=base_url();?>inventario_general">General</a></li>
                    </ul>
                </li>
                <li><a href="<?=base_url();?>reporte">Reportes</a></li>
                <li><a href="<?=base_url();?>grafica">Graficas</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mantenimiento<span class="caret"></span></a>
                    <ul class="dropdown-menu multi-level">
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuario</a>
                            <ul class="dropdown-menu">
                                <li><a href="<?=base_url();?>usuario">Lista de Usuario</a></li>
                                <li><a href="<?=base_url();?>permisos">Permisos</a></li>
                            </ul>
                        </li>
                        <li><a href="<?=base_url();?>articulo">Articulos</a></li>
                        <li><a href="<?=base_url();?>solicitante">Solicitantes</a></li>
                        <li><a href="<?=base_url();?>lista_proveedor">Proveedores</a></li>
                        <li><a href="<?=base_url();?>servicio">Servicios</a></li>
                        <li><a href="<?=base_url();?>unidad_medica">Unidad Medica</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?=base_url();?>plantillas/imagenes/user.png" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?php echo $this->session->userdata("nombre")?></span>
                    </a>
                        <ul class="dropdown-menu">
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <a href="<?php echo base_url();?>clogin/logout">Cerrar Sesion</a>
                                    </div>

                                </div>
                            </li>
                        </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
