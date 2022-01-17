<?php
//crear ctrProveedor.php en la carpeta controller
//echo "Este es el controlador de proveedor";
require('../modelo/empleado.php');
require('../modelo/empleado_rol.php');

$nombre = isset($_POST['nombreE']) ? $_POST['nombreE'] : NULL;
$email = isset($_POST['correoE']) ? $_POST['correoE'] : NULL;
$sexo = isset($_POST['sexo']) ? $_POST['sexo'] : NULL;
$area_id = isset($_POST['area']) ? $_POST['area'] : NULL;
$boletin = isset($_POST['boletin']) ? $_POST['boletin'] : NULL;
$descripcion = isset($_POST['Descripcion']) ? $_POST['Descripcion'] : NULL;
$Desarrollador = isset($_POST['Des']) ? $_POST['Des'] : NULL;
$Analista = isset($_POST['Ana']) ? $_POST['Ana'] : NULL;
$Tester = isset($_POST['Tes']) ? $_POST['Tes'] : NULL;
$Diseñador = isset($_POST['Dis']) ? $_POST['Dis'] : NULL;
$Profesional_PMO = isset($_POST['Pro-PMO']) ? $_POST['Pro-PMO'] : NULL;
$Profesional_SER = isset($_POST['Pro-Ser']) ? $_POST['Pro-Ser'] : NULL;
$Auxiliar_Admin = isset($_POST['Aux']) ? $_POST['Aux'] : NULL;
$Codirector = isset($_POST['Cod']) ? $_POST['Cod'] : NULL;




if (isset($_POST['frmRegistrar'])) {
	$modelo = new Empleado($nombre, $email, $sexo, $area_id, $boletin, $descripcion);
	$modelo->registrarEmpleado();
	$registros = $modelo->buscarIdEmpleado($nombre);
	foreach($registros as $listado){
		$idEmpleado=$listado['id'];
	}
	echo $idEmpleado."hola mundo";
	$rol = new Empleado_Rol();
	if ($Desarrollador <> NULL) {
		echo $Desarrollador;
		$rol->registrarEmpleado_Rol($idEmpleado, $Desarrollador);
	}
	if ($Analista <> NULL) {
		$rol->registrarEmpleado_Rol($idEmpleado, $Analista);
	}
	if ($Tester <> NULL) {
		$rol->registrarEmpleado_Rol($idEmpleado, $Tester);
	}
	if ($Diseñador <> NULL) {
		$rol->registrarEmpleado_Rol($idEmpleado, $Diseñador);
	}
	if ($Profesional_PMO <> NULL) {
		$rol->registrarEmpleado_Rol($idEmpleado, $Profesional_PMO);
	}
	if ($Profesional_SER <> NULL) {
		$rol->registrarEmpleado_Rol($idEmpleado, $Profesional_SER);
	}
	if ($Auxiliar_Admin <> NULL) {
		$rol->registrarEmpleado_Rol($idEmpleado, $Auxiliar_Admin);
	}
	if ($Codirector <> NULL) {
		$rol->registrarEmpleado_Rol($idEmpleado, $Codirector);
	}
} else if (isset($_POST['frmBuscar'])) {
	if (empty($nombre)) {
?>
		<script>
			alert('Debe ingresar el nombre del empleado');
			location.href = "../views/frmActualizarEmpleado.php";
		</script>
	<?php

	} else {
		$modelo = new Empleado(NULL, NULL, NULL, NULL, NULL, NULL);
		$datos = $modelo->buscarEmpleado($nombre);
		foreach ($datos as $listado) {

			$datos[0]['nombre'] = $listado['nombre'];
			$datos[0]['email'] = $listado['email'];
			$datos[0]['sexo'] = $listado['sexo'];
			$datos[0]['area_id'] = $listado['area_id'];
			$datos[0]['boletin'] = $listado['boletin'];
			$datos[0]['descripcion'] = $listado['descripcion'];
			require_once('../views/frmActualizarEmpleado.php');
		}
		//print_r($datos);
		//require_once('../views/frmActualizarMedicamentos.php');
	}
} else if (isset($_POST['frmActualizar'])) {

	$modelo = new Empleado($nombre, $email, $sexo, $area_id, $boletin,$descripcion);
	
		$modelo->actualizarEmpleado();
		echo "<script language='javascript'>";
		echo "alert('Registro Actualizado')";
		echo "</script>";
	
} else if (isset($_POST['frmBorrar'])) {
	$modelo = new Empleado($nombre, NULL, NULL, NULL, NULL,Null);
	$res = $modelo->borrarEmpleado();
	if ($res) {
	?>
		<script>
			alert('Registro borrado');
			location.href = "../views/frmRegistroEmpleado.php";
		</script>
<?php
	}
}




?>