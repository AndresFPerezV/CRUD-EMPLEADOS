<?php
	//cear en en la carpeta modelo el archivo proveedor.php
	
	require_once('../db/Conectar.php');
	
	class Empleado{
		private $nombre;
		private $email;
		private $sexo;
		private $area_id;
		private $boletin;
		private $descripcion;
		private $conexionDB;
		
		public function __construct($nomE, $mailE, $sex, $area,$bol,$des){
			$this->conexionDB = new Conectar();
			$this->nombre = $nomE;
			$this->email = $mailE;
			$this->sexo = $sex;
			$this->area_id = $area;
			$this->boletin=$bol;
			$this->descripcion=$des;
		}
		
		public function __destruct(){
			$this->conexionDB = NULL;
		}
		
		public function registrarEmpleado(){
			try{
				$sql = "INSERT INTO empleado (nombre,email,sexo,area_id,boletin,descripcion) VALUES (?,?,?,?,?,?)";
				
				$stmt = $this->conexionDB->connect()->prepare($sql);
				
				$stmt->bindParam(1, $this->nombre);
				$stmt->bindParam(2, $this->email);
				$stmt->bindParam(3, $this->sexo);
				$stmt->bindParam(4, $this->area_id);
				$stmt->bindParam(5, $this->boletin);
				$stmt->bindParam(6, $this->descripcion);
				//Ejecutar la sentencia
				$stmt->execute();
			}
			catch(Exception $error)
			{
				
				die ("No puedes ingresar el empleado: $error");
			}
			
			if(isset($stmt))
			{
				echo "Registro almacenado";
				//exit();
				/*?>
			<script>
				alert('Registro almacenado');
				location.href="../views/frmRegistroEmpleado.php";
			</script>
			<?php*/
			}
			else
			{
				echo "Hay problemas con la sentencia SQL";
			}
		}

		public function buscarIdEmpleado($nombre){
			$sql = "select * from empleado where nombre='$nombre'";
			$query = $this->conexionDB->connect()->prepare($sql);
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		
		
		public function buscarEmpleado($nombre){
			$sql = "select * from empleado where nombre LIKE '% $nombre %'";
			$query = $this->conexionDB->connect()->prepare($sql);
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}

		

		public function borrarEmpleado(){
			$sql = "DELETE from empleado WHERE nombre = $this->nombre";
			$query = $this->conexionDB->connect()->prepare($sql);
			$query->execute();
			return $query;
		}
		//WHERE ((idReferencia = $this->idReferencia) AND (fecha_Ingreso LIKE '%".$this->fecha_Ingreso."%'))";
		//$sql = "SELECT * FROM facturacion WHERE OrdenCompra='".$_POST['ordencompra']."'AND CodBoc='".$_POST['codboc']."')";
		public function actualizarEmpleado(){
			try
			{
			$sql = "UPDATE empleado SET nombre = '$this->nombre', email='$this->email',sexo='$this->sexo',area_id='$this->area_id',boletin='$this->boletin',descripcion='$this->descripcion' where nombre='$this->nombre' ";
			$query = $this->conexionDB->connect()->prepare($sql);
			$query->execute()
			?>
			<script>
			alert('Registro actualizado');
			location.href="../views/frmRegistroEmpleado.php";
			</script>
			<?php
			}
			catch(Exception $e)
			{
			die($e->getMessage());
			}
		}

		public function listarEmpleado(){
			$sql="select * from empleado";
			//$sql="select * from tblmedicamento where fecha_Vencimiento<=date("Y-m-d")";
			$query=$this->conexionDB->connect()->prepare($sql);
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
			
		}
	
	
	}
	
	
?>



