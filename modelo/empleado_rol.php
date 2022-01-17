<?php
	//cear en en la carpeta modelo el archivo proveedor.php
	
	require_once('../db/Conectar.php');
	
	class Empleado_Rol{
		private $empleado_id;
		private $rol_id;
		private $conexionDB;
		
		public function __construct(){
			$this->conexionDB = new Conectar();
		}
		
		public function __destruct(){
			$this->conexionDB = NULL;
		}
		
		public function registrarEmpleado_Rol($emp, $rol){
			$this->empleado_id = $emp;
			$this->rol_id = $rol;
			try{
				$sql = "INSERT INTO empleado_rol (empleado_id,rol_id) VALUES (?,?)";
				
				$stmt = $this->conexionDB->connect()->prepare($sql);
				
				$stmt->bindParam(1, $this->empleado_id);
				$stmt->bindParam(2, $this->rol_id);
				//Ejecutar la sentencia
				$stmt->execute();
			}
			catch(Exception $error)
			{
				
				die ("No puedes ingresar el rol del empleado: $error");
			}
			
			if(isset($stmt))
			{
				echo "Registro almacenado";
				?>
			<script>
				alert('Registro almacenado');
				location.href="../views/frmRegistroEmpleado.php";
			</script>
			<?php
				//exit();
			}
			else
			{
				echo "Hay problemas con la sentencia SQL";
			}
		}
		
	}
	
	
?>



