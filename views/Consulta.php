<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
		
	</head>
	<body>
    <h2>Lista de empleados</h2>
	<br>
	<table border="1">
		<tr>
		<td><b>Nombre</b></td>
		<td><b>Email</b></td>
		<td><b>Sexo</b></td>
		<td><b>Area</b></td>
		<td><b>Boletin</b></td>
		<td><b>Modificar</b></td>
		<td><b>Eliminar</b></td>
		</tr>
		<?php 
        require('../modelo/empleado.php');
        //$fecha=$_REQUEST['fecha_Consulta'];
        
        //echo $fecha;
		//$fecha_Consulta = isset($_POST['fecha_Consulta']) ? $_POST['fecha_Consulta']: NULL;
			

				foreach($datos as $listado){
						echo '<tr>';
						echo '<td>'.$listado['nombre'].'</td>';
						echo '<td>'.$listado['email'].'</td>';
						echo '<td>'.$listado['sexo'].'</td>';
						echo '<td>'.$listado['area_id'].'</td>';
						echo '<td>'.$listado['boletin'].'</td>';
						echo '<td>'.$listado['descripcion'].'</td>';
						echo '<tr>';	
				}
	
		?>
	

	</table>
	
 
</body>

</html>