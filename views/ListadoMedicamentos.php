<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		

		<title>Consulta Medicamento Vencido</title>
		<!-- jQuery -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
		crossorigin="anonymous"></script>
		<!-- <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" /> -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<!-- Bootstrap files (jQuery first, then Popper.js, then Bootstrap JS) -->
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" type="text/javascript"></script>

		<style type="text/css">
		/* ============ desktop view ============ */
		@media all and (min-width: 992px) {
		.navbar .nav-item .dropdown-menu{ display: none; }
		.navbar .nav-item:hover .nav-link{ color: #fff;  }
		.navbar .nav-item:hover .dropdown-menu{ display: block; }
		.navbar .nav-item .dropdown-menu{ margin-top:0; }
		}	
		/* ============ desktop view .end// ============ */


		</style>
	</head>
	<body class="bg-light">
    <header class="section-header py-4"></header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Contacto</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="../views/frmRegistroMedicamentos.php">Medicamento</a></li>
              <li class="nav-item"><a class="nav-link" href="../views/index.html">Calendario</a></li>
              <li class="nav-item active"><a class="nav-link" href="#">Listado Medicamento</a></li>
              <li class="nav-item "><a class="nav-link" href="../views/contacto.php">Contacto</a></li>

            </ul>



        </div>

    </nav>

    <div class="jumbotron">
      <h1>Prueba Tecnica PHP</h1>
    </div>
    
    

	<div class="container"> 	
 
	<div class="form-group col-md-6">
		
		<form autocomplete="off" method="post" action="../views/ListadoMedicamentos.php">
			
			<div class="form-group">
            <h6>Por favor selecione fecha que desea consultar:</h6>
				<input name="fecha_Consulta" type="date" class="form-control" placeholder="Fecha de vencimiento" value=""/>
				
			</div>

			<div class="form-group">
				<button class="btn btn-success" type="submit" name="btnConsultar">Consultar</button>
			</div>
			
		
		</form>
		
	</div>

	<div class="form-group col-md-6">

	</div>
	<table border="1" class="table table-hover" title="">
	<h3>Medicamentos sin vencer:</h3>	
		<tr>
		<td><b>ID REFERENCIA</b></td>
		<td><b>NOMBRE REFERENCIA<b></td>
		<td><b>NOMBRE LABORATORIO<b></td>
		<td><b>FECHA DE VENCIMIENTO<b></td>
		<td><b>CANTIDAD<b></td>
		<td><b>FECHA DE CREACION<b></td>
		</tr>
		<?php 

		if(isset($_POST['btnConsultar'])){
			require('../modelo/medicamento.php');
			$consulta=$_POST['fecha_Consulta'];
			$modelo=new Medicamento(NULL,NULL,NULL,NULL,NULL);
			$datos=$modelo->listarMedicamentos();
					foreach($datos as $listado){
						if($listado['fecha_Vencimiento']>=$consulta)
						{
							echo '<tr>';
							echo '<td>'.$listado['idReferencia'].'</td>';
							echo '<td>'.$listado['nombreRef'].'</td>';
							echo '<td>'.$listado['nombreLaboratorio'].'</td>';
							echo '<td>'.$listado['fecha_Vencimiento'].'</td>';
							echo '<td>'.$listado['cantidad'].'</td>';
							echo '<td>'.$listado['fecha_Ingreso'].'</td>';
							echo '<tr>';	
						}
					
					}



		}
        
	
		?>
	

	</table>
              
   </div>

   
	<br>
	
 
</body>

</html>