<!DOCTYPE html>
<html lang="en">

<head>
		<link href="plantillas/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="<?=base_url();?>plantillas/css/login.css" media="screen">
		<link rel="stylesheet" href="<?=base_url();?>plantillas/js/login.js">
		<meta charset="UTF-8">
		<title class="text"> Inicio de sesion</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="row-fluid user-now">
							<img src="<?=base_url();?>plantillas/imagenes/logohospital.jpg" class="img-responsive" alt="Conxole Admin">
						</div>
					</div>
					<div class="panel-body">
						<p class="login-box-msg" style="text-align: center;">Ingrese sus datos</p>
						<?php if($this->session->flashdata("error")):?>
						<div class="alert alert-danger">
							<p><?php echo $this->session->flashdata("error")?></p>
						</div>
						<?php endif; ?>
						<form action="<?=base_url();?>clogin/login" accept-charset="UTF-8" role="form" class="form-signin" method="POST">
							<fieldset>
								<label class="panel-login">
									<div class="login_result"></div>
								</label>
									<input class="form-control" placeholder="Escriba su Usuario" name="username" type="text">
									<input class="form-control" placeholder="Escriba su Contraseña" name="password" type="password">
									<input class="btn btn-lg btn-success btn-block" type="submit" value="Ingresar">
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>