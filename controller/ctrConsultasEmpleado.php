<?php


	$consulta1 = isset($_GET['consulta1']) ? $_GET['consulta1']: NULL;
	require('../modelo/empleado.php');
	//echo ($consulta1);
	//print_r($_GET);

	$modelo=new Empleado(NULL,NULL,NULL,NULL,NULL,NULL);

	if($consulta1=='listado1')
	{
		$datos=$modelo->listarEmpleado();
		require('../views/ListadoEmpleado.php');
		
		//print_r($datos);
	}
?>