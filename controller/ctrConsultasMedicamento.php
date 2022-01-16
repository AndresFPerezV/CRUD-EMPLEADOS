<?php


	$consulta1 = isset($_GET['consulta1']) ? $_GET['consulta1']: NULL;
	require('../modelo/medicamento.php');
	//echo ($consulta1);
	//print_r($_GET);

	$modelo=new Medicamento(NULL,NULL,NULL,NULL,NULL);

	if($consulta1=='listado1')
	{
		$datos=$modelo->listarMedicamentos();
		require('../views/ListadoMedicamentos.php');
		
		//print_r($datos);
	}
?>