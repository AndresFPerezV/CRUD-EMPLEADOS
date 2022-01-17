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
		<a class="navbar-brand" href="#">Crear Empleado</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="../controller/ctrConsultasEmpleado.php?consulta1=listado1">Consultar empleados</a></li>
				<li class="nav-item active"><a class="nav-link" href="#">Crear Empleado</a></li>

			</ul>
		</div>
	</nav>
	<div class="jumbotron">
		<h1>Prueba Técnica PHP</h1>
	</div>
	<div class="container">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="../index.php">Home</a></li>
				<li class="breadcrumb-item active"><a href="#">Crear Empleado</a></li>
				<li class="breadcrumb-item"><a href="../controller/ctrConsultasEmpleado.php?consulta1=listado1">Consulta</a></li>
				
			</ol>
		</nav>
		<h2>Crear empleado</h2>
		<div class="alert alert-info">
			<strong>Info!</strong> Los campos con asteriscos (*) son obligatorios.
		</div>
	</div>
	<div class="container">
		<form autocomplete="off" method="post" action="../controller/ctrEmpleado.php" id="form-registro">
			<div class="form-group" style="white-space: nowrap; overflow-x: auto;">
				<span style="display: inline;">Nombre completo * &nbsp;&nbsp;&nbsp;&nbsp;</span><input style="display: inline;width:85%;" id="nombreE" name="nombreE" type="text" class="form-control" placeholder="Nombre completo del empleado" value="" />

			</div>

			<div class="form-group" style="white-space: nowrap; overflow-x: auto;">
				<span style="display: inline;">Correo electrónico * &nbsp;&nbsp;&nbsp;&nbsp;</span><input style="display: inline;width:85%;" id="correoE" name="correoE" type="text" class="form-control" placeholder="Correo electrónico" value="" />

			</div>

			<div class="form-group" style="white-space: nowrap; overflow-x: auto;">
				<span style="display: inline;margin-left:9%">Sexo * &nbsp;&nbsp;&nbsp;&nbsp;</span><span><input id="sexo" type="radio" name="sexo" value="M">&nbsp;Masculino</span><br>
				<span style="margin-left: 15%;"><input type="radio" name="sexo" id="sexo1" value="F">&nbsp;Femenino</span>

			</div>

			<div class="form-group" style="white-space: nowrap; overflow-x: auto;">
				<span style="display: inline;margin-left:9%;">Area * &nbsp;&nbsp;&nbsp;&nbsp;</span>
				<select name="area" id="area" style="display: inline;width:84%;">
					<option value="1">Administrativa y Financiera</option>
					<option value="2">Ingeniería</option>
					<option value="5">Desarrollo de Negocio</option>
					<option value="6">Proyectos</option>
					<option value="7">Servicios</option>
					<option value="8">Calidad</option>
				</select>


			</div>

			<div class="form-group" style="white-space: nowrap; overflow-x: auto;">
				<span style="display: inline;margin-left:5%;vertical-align: top;">Descripción * &nbsp;&nbsp;&nbsp;&nbsp;</span><textarea id="Descripcion" name="Descripcion" style="display: inline;width:84%;" placeholder="Descripción de la experiencia del empleado"></textarea>

			</div>

			<div class="form-group">
				<span style="margin-left: 15%;"><input type="checkbox" name="boletin" value="1">&nbsp;Deseo recibir boletín informativo</span>

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
				<button class="btn btn-primary" type="submit" id="frmRegistrar" name="frmRegistrar" style="margin-left: 15.3%;">Guardar</button>
				<button class="btn btn-success" type="submit" name="frmBuscar">Buscar</button>
				<button class="btn btn-warning" type="submit" name="frmActualizar" disabled="true">Actualizar</button>
				<button class="btn btn-danger" type="submit" name="frmBorrar" disabled="true">Borrar</button>
			</div>
		</form>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
<script>
	/*document.addEventListener("DOMContentLoaded", function() {
		document.getElementById("form-registro").addEventListener('submit', validarFormulario);
	});

	function validarFormulario(evento) {
		evento.preventDefault();
		var usuario = document.getElementById('nombreE').value;
		if (usuario.length == 0) {
			Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Señor usuario falta ingresar el nombre del empleado'
                        });
			return;
		}
		var correo = document.getElementById('correoE').value;
		if (correo.length == 0) {
			Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Señor usuario falta ingresar el correo del empleado'
                        });
			return;
		}
		//var sexo = document.getElementById('sexo').checked;
		if (document.getElementById('sexo').checked) {
			
		}else{

			if(document.getElementById('sexo1').checked){

			}else{
				Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Señor usuario falta ingresar el sexo del empleado'
                        });
				return;
			}
			
		}
		var area = document.getElementById('area').value;
		if (area.length==0) {
			Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Señor usuario falta ingresar el area del empleado'
                        });
			return;
		}
		var Descripcion = document.getElementById('Descripcion').value;
		if (Descripcion.length == 0) {
			Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Señor usuario falta ingresar la descripción del empleado'
                        });
			return;
		}
		
		this.submit();
	}*/
</script>

</html>