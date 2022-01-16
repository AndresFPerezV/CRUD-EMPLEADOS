<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
		
	</head>
	<body>
    <h2>Listado de Medicamentos sin vencer</h2>
	<br>
	<table border="1">
		<tr>
		<td>ID</td>
		<td>NOMBRE</td>
		<td>NOMBRELAB</td>
		<td>FECHA_VEN</td>
		<td>CANTIDAD</td>
		<td>FECHA CREACION</td>
		</tr>
		<?php 
        require('../modelo/medicamento.php');
        $fecha=$_REQUEST['fecha_Consulta'];
        
        //echo $fecha;
		//$fecha_Consulta = isset($_POST['fecha_Consulta']) ? $_POST['fecha_Consulta']: NULL;
			

				foreach($datos as $listado){

					//if($listado['fecha_Vencimiento']>=$fecha_Consulta)
					//{
						echo '<tr>';
						echo '<td>'.$listado['idReferencia'].'</td>';
						echo '<td>'.$listado['nombreRef'].'</td>';
						echo '<td>'.$listado['nombreLaboratorio'].'</td>';
						echo '<td>'.$listado['fecha_Vencimiento'].'</td>';
						echo '<td>'.$listado['cantidad'].'</td>';
						echo '<td>'.$listado['fecha_Ingreso'].'</td>';
						echo '<tr>';	
					//}
				//echo '<tr>';
				//echo '<td>'.$listado['idReferencia'].'</td>';
				//echo '<td>'.$listado['nombreRef'].'</td>';
				//echo '<td>'.$listado['nombreLaboratorio'].'</td>';
				//echo '<td>'.$listado['fecha_Vencimiento'].'</td>';
				//echo '<td>'.$listado['cantidad'].'</td>';
				//echo '<td>'.$listado['fecha_Ingreso'].'</td>';
				
				//echo '<tr>';
				}
	
		?>
	

	</table>
	
 
</body>

</html>