<?php
    include("../conexiones/conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<!--
Projecto         : UNA - Sigu
Autor		 : Diomaris Contreras
Email	 	 : info@obedalvarado.pw
-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UNA - Proyecto SIGU - Crear Empleado</title>

	<!-- Bootstrap -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<style>
	    .content {
	        margin-top: 80px;
	    }
	</style>

</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	    <?php include("../nav.php");?>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Datos del empleados &raquo; Agregar datos</h2>
			<hr />
                        <?php include("../datos/empleados_insertar.php");?>
			
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Cédula</label>
					<div class="col-sm-2">
						<input type="text" name="cedula" class="form-control" placeholder="Cédula" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombres</label>
					<div class="col-sm-4">
						<input type="text" name="nombres" class="form-control" placeholder="Nombres" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Apellidos</label>
					<div class="col-sm-4">
						<input type="text" name="apellidos" class="form-control" placeholder="Apellidos" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Fecha de nacimiento</label>
					<div class="col-sm-4">
						<input type="date" name="fecha_nacimiento" class="input-group date form-control" date="" data-date-format="dd-mm-yyyy" placeholder="00-00-0000" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Dirección</label>
					<div class="col-sm-3">
						<textarea name="direccion" class="form-control" placeholder="Dirección"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Teléfono</label>
					<div class="col-sm-3">
						<input type="text" name="telefono" class="form-control" placeholder="Teléfono" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">Sexo</label>
					<div class="col-sm-3">
						<select name="sexo" class="form-control">
							<option value=""> ----- </option>
                                                        <option value="1">Masculino</option>
							<option value="2">Femenino</option>
						</select>
					</div>
				</div>
                                
                                <div class="form-group">
					<label class="col-sm-3 control-label">Nivel Académico</label>
					<div class="col-sm-3">
						<select name="nivel" class="form-control">
							<option value=""> ----- </option>
                                                        <option value="1">Basico</option>
                                                        <option value="2">Bachiller</option>
							<option value="3">Universitario</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Guardar datos">
						<a href="index.php" class="btn btn-sm btn-danger">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>

</body>
</html>