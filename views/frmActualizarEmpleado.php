<?php
if (count($datos) > 0) {
	$nombre = $datos[0]['nombre'];
	$email = $datos[0]['email'];
	$sexo = $datos[0]['sexo'];
	$area_id = $datos[0]['area_id'];
	$boletin = $datos[0]['boletin'];
	$descripcion = $datos[0]['descripcion'];
?>

	<html>

	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	</head>

	<body class="bg-light">
		<header class="section-header py-4"></header>
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<a class="navbar-brand" href="#">Modificar Empleado</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
					<li class="nav-item active"><a class="nav-link" href="#">Actualizar Empleado</a></li>
					<li class="nav-item"><a class="nav-link" href="../controller/ctrConsultasMedicamento.php?consulta1=listado1">Consultar Empleados</a></li>
					<li class="nav-item "><a class="nav-link" href="./frmRegistroEmpleado.php">Crear Empleado</a></li>

				</ul>
			</div>
		</nav>
		<div class="jumbotron">
			<h1>Prueba Técnica PHP</h1>
		</div>
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="./index.php">Home</a></li>
					<li class="breadcrumb-item active"><a href="./frmActualizarMedicamentos.php">Modificar Empleados</a></li>
					<li class="breadcrumb-item"><a href="../controller/ctrConsultasMedicamento.php?consulta1=listado1">Consulta</a></li>
					<li class="breadcrumb-item"><a href="./frmRegistroEmpleado.php">Crear empleado</a></li>
					<li class="breadcrumb-item" aria-current="page">Contacto</li>
				</ol>
			</nav>
			<h2>Modificar Empleado</h2>
			<div class="alert alert-info">
				<strong>Info!</strong> Los campos con asteriscos (*) son obligatorios.
			</div>
		</div>
		<div class="container">
			<form autocomplete="off" method="post" action="../controller/ctrEmpleado.php" id="form-registro">
				<div class="form-group" style="white-space: nowrap; overflow-x: auto;">
					<span style="display: inline;">Nombre completo * &nbsp;&nbsp;&nbsp;&nbsp;</span><input style="display: inline;width:85%;" id="nombreE" name="nombreE" type="text" class="form-control" placeholder="Nombre completo del empleado" value="<?php echo ($nombre) ?>" />

				</div>

				<div class="form-group" style="white-space: nowrap; overflow-x: auto;">
					<span style="display: inline;">Correo electrónico * &nbsp;&nbsp;&nbsp;&nbsp;</span><input style="display: inline;width:85%;" id="correoE" name="correoE" type="text" class="form-control" placeholder="Correo electrónico" value="<?php echo ($email) ?>" />

				</div>

				<div class="form-group" style="white-space: nowrap; overflow-x: auto;">
					<span style="display: inline;margin-left:9%">Sexo * &nbsp;&nbsp;&nbsp;&nbsp;</span><span><input id="sexo" type="radio" name="sexo" value="<?php echo ($sexo) ?>">&nbsp;Masculino</span><br>
					<span style="margin-left: 15%;"><input type="radio" name="sexo" id="sexo1" value="<?php echo ($sexo) ?>">&nbsp;Femenino</span>

				</div>

				<div class="form-group" style="white-space: nowrap; overflow-x: auto;">
					<span style="display: inline;margin-left:9%;">Area * &nbsp;&nbsp;&nbsp;&nbsp;</span>
					<select name="area" id="area" style="display: inline;width:84%;" value="<?php echo ($area_id) ?>">
						<option value="1">Administrativa y Financiera</option>
						<option value="2">Ingeniería</option>
						<option value="5">Desarrollo de Negocio</option>
						<option value="6">Proyectos</option>
						<option value="7">Servicios</option>
						<option value="8">Calidad</option>
					</select>


				</div>

				<div class="form-group" style="white-space: nowrap; overflow-x: auto;">
					<span style="display: inline;margin-left:5%;vertical-align: top;">Descripción * &nbsp;&nbsp;&nbsp;&nbsp;</span><textarea id="Descripcion" name="Descripcion" style="display: inline;width:84%;" placeholder="Descripción de la experiencia del empleado" value="<?php echo ($descripcion) ?>"></textarea>

				</div>

				<div class="form-group">
					<span style="margin-left: 15%;"><input type="checkbox" name="boletin" value="<?php echo ($boletin) ?>">&nbsp;Deseo recibir boletín informativo</span>

				</div>

				<div class="form-group" style="white-space: nowrap; overflow-x: auto;">
					<span style="display: inline;margin-left:9%">Roles * &nbsp;&nbsp;&nbsp;&nbsp;</span><span><input id="check" type="checkbox" name="Des" value="1">&nbsp;Desarrollador</span><br>
					<span style="margin-left: 15.3%;"><input type="checkbox" name="Ana" value="2" id="check">&nbsp;Analista</span><br>
					<span style="margin-left: 15.3%;"><input type="checkbox" name="Tes" value="3" id="check">&nbsp;Tester</span><br>
					<span style="margin-left: 15.3%;"><input type="checkbox" name="Dis" value="4" id="check">&nbsp;Diseñador</span><br>
					<span style="margin-left: 15.3%;"><input type="checkbox" name="Pro-PMO" value="5" id="check">&nbsp;Profesional PMO</span><br>
					<span style="margin-left: 15.3%;"><input type="checkbox" name="Pro-Ser" value="6" id="check">&nbsp;Profesional de servicios</span><br>
					<span style="margin-left: 15.3%;"><input type="checkbox" name="Aux" value="7" id="check">&nbsp;Auxiliar administrativo</span><br>
					<span style="margin-left: 15.3%;"><input type="checkbox" name="Cod" value="8" id="check">&nbsp;Codirector</span>


				</div>



				<div class="form-group">
					<!--<button class="btn btn-primary" type="submit" id="frmRegistrar" name="frmRegistrar" style="margin-left: 15.3%;">Guardar</button>-->
					<button class="btn btn-success" type="submit" name="frmBuscar">Buscar</button>
					<button class="btn btn-warning" type="submit" name="frmActualizar">Actualizar</button>
					<button class="btn btn-danger" type="submit" name="frmBorrar" disabled="true">Borrar</button>
				</div>
			</form>
		</div>
	<?php
} else {
	?>

		<script>
			alert("Registro no encontrado");
			location.href = "../views/frmActualizarEmpleado.php";
		</script>
	<?php

}

	?>
	</body>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>

	</html>