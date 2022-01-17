<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<title>Lista de empleados</title>
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<!-- <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" /> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/fontawesome-free-5.15.4-web/css/fontawesome.min.css">
	<link rel="stylesheet" href="../css/fontawesome.min.css">
	<!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>

	<style type="text/css">
		/* ============ desktop view ============ */
		@media all and (min-width: 992px) {
			.navbar .nav-item .dropdown-menu {
				display: none;
			}

			.navbar .nav-item:hover .nav-link {
				color: #fff;
			}

			.navbar .nav-item:hover .dropdown-menu {
				display: block;
			}

			.navbar .nav-item .dropdown-menu {
				margin-top: 0;
			}
		}

		/* ============ desktop view .end// ============ */
	</style>

</head>

<body class="bg-light">
	<header class="section-header py-4"></header>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<a class="navbar-brand" href="#">Contacto</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="../views/frmRegistroEmpleado.php">Crear Empleado</a></li>
				<li class="nav-item active"><a class="nav-link" href="#">Consulta Empleados</a></li>
			</ul>
		</div>

	</nav>

	<div class="jumbotron">
		<h1>Prueba Técnica PHP</h1>
	</div>



	<div class="container">

		<div class="form-group col-md-6">

		</div>
		<table border="1" class="table table-hover" title="">
			<h3>Lista de empleados:</h3><a href="../views/frmRegistroEmpleado.php"><img style="margin-left:94%;" src="../img/icons/agregar-usuario.png"></img></a>
			<tr>
				<td><b><img src="../img/icons/user.png"></img>&nbsp;Nombre</b></td>
				<td><b><img src="../img/icons/arroba.png"></img>&nbsp;Correo</b></td>
				<td><b><img src="../img/icons/sexo.png"></img>&nbsp;Sexo</b></td>
				<td><b><img src="../img/icons/maletin.png"></img>&nbsp;Area</b></td>
				<td><b><img src="../img/icons/sobre.png"></img>&nbsp;Boletin</b></td>
				<td><b>Modificar</b></td>
				<td><b>Eliminar</b></td>
			</tr>
			<?php

			if (isset($_POST['btnConsultar'])) {
				require('../modelo/empleado.php');
				$consulta = $_POST['fecha_Consulta'];
				$modelo = new Empleado(NULL, NULL, NULL, NULL, NULL, NULL);
				$datos = $modelo->listarEmpleado();
				foreach ($datos as $listado) {
					echo '<tr>';
					echo '<td>' . $listado['nombre'] . '</td>';
					echo '<td>' . $listado['email'] . '</td>';
					if ($listado['sexo'] == "M") {
						echo '<td>Masculino</td>';
					} else {
						echo '<td>Femenino</td>';
					}

					switch ($listado['area_id']) {
						case 1:
							echo '<td>Administrativa y Financiera</td>';
							break;
						case 2:
							echo '<td>Ingeniería</td>';
							break;
						case 5:
							echo '<td>Desarrollo de Negocio</td>';
							break;
						case 6:
							echo '<td>Proyectos</td>';
							break;
						case 7:
							echo '<td>Servicios</td>';
							break;
						case 8:
							echo '<td>Calidad</td>';
							break;
					}
					if ($listado['boletin'] == 1) {
						echo '<td>Si</td>';
					} else {
						echo '<td>No</td>';
					}
					echo '<td><img src="../img/icons/editar.png"></img></td>';
					echo '<td><img src="../img/icons/eliminar.png"></img></td>';
					echo '<tr>';
				}
			}


			?>


		</table>

	</div>


	<br>


</body>

</html>