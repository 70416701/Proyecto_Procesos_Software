<?php namespace Controladores;

	use Modelo\productoModelo as Producto;

	class tecnicoControlador
	{
		private $producto;

		public function __construct()
		{
			$this->producto = new Producto();
		}

		public function index()
		{
			$datos = $this->producto->listar();
			return $datos;
		}

		public function registrarProductoVista()
		{
			// if ($_POST) {
			// 	$this->tecnico->set("nombre",$_POST['nombre']);
			// 	$this->tecnico->set("apellido",$_POST['apellido']);
			// 	$this->tecnico->set("dni",$_POST['dni']);
			// 	$this->tecnico->set("direccion",$_POST['direccion']);
			// 	$this->tecnico->set("celular",$_POST['celular']);
			// 	$this->tecnico->set("email",$_POST['email']);
			// 	$this->tecnico->set("usuario",$_POST['usuario']);
			// 	$this->tecnico->set("contrasenia",$_POST['contrasenia']);
			// 	$this->tecnico->add();
			// }		
		}

		public function registrarProductovVista()
		{
			if ($_POST) {
				$this->producto->set("tipo",$_POST['tipo']);
				$this->producto->set("marca",$_POST['marca']);
				$this->producto->set("modelo",$_POST['modelo']);
				$this->producto->set("producto",$_POST['producto']);
				$this->producto->set("serie",$_POST['serie']);
				$this->producto->set("descTrab",$_POST['descTrab']);
				$this->producto->set("descProb",$_POST['descProb']);
				$this->producto->add();
			}		
		}

		public function editarProductoVista($idTecnico)
		{
			
			// if (!$_POST) {
			// 	$this->tecnico->set("idTecnico",$idTecnico);
			// 	$datos = $this->tecnico->view();
			// 	return $datos;
			// } else {
			// 	$this->tecnico->set("idTecnico",$_POST['idTecnico']);
			// 	$this->tecnico->set("nombre",$_POST['nombre']);
			// 	$this->tecnico->set("apellido",$_POST['apellido']);
			// 	$this->tecnico->set("dni",$_POST['dni']);
			// 	$this->tecnico->set("direccion",$_POST['direccion']);
			// 	$this->tecnico->set("celular",$_POST['celular']);
			// 	$this->tecnico->set("email",$_POST['email']);
			// 	$this->tecnico->set("usuario",$_POST['usuario']);
			// 	$this->tecnico->set("contrasenia",$_POST['contrasenia']);
			// 	$this->tecnico->edit();
			// }
		}

		public function verProductoVista($idTecnico)
		{

			$this->tecnico->set("idProducto",$idTecnico);
			$datos = $this->tecnico->view();
			return $datos;

		}

		public function eliminarProductoVista($idTecnico)
		{

			$this->tecnico->set("idProducto",$idTecnico);
			$this->tecnico->delete();
			
		}
	}

?>