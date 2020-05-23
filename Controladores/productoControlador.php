<?php namespace Controladores;

	use Modelo\productoModelo as Producto;
	use Modelo\tecnicoModelo as Tecnico;

	class productoControlador
	{
		private $producto;
		private $tecnico;

		public function __construct()
		{
			$this->producto = new Producto();
			$this->tecnico = new Tecnico();
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

		public function editarProductoVista($idProducto)
		{
			session_start();
			if (!$_POST) {
				$this->producto->set("idProducto",$idProducto);
				$datos = $this->producto->view_inner();
				return $datos;
			} else {
				$this->producto->set("idProducto",$_POST['idProducto']);
				$this->producto->set("tipo",$_POST['tipo']);
				$this->producto->set("marca",$_POST['marca']);
				$this->producto->set("modelo",$_POST['modelo']);
				$this->producto->set("serie",$_POST['serie']);
				$this->producto->set("precio",$_POST['precio']);
				$this->producto->set("descProb",$_POST['descProb']);
				$this->producto->set("descTrab",$_POST['descTrab']);
				$this->producto->edit();
				header ("Location: ".URL."Orden");
			}
		}

		public function editarProductoRecepcionVista($idProducto)
		{
			session_start();
			if (!$_POST) {
				$this->producto->set("idProducto",$idProducto);
				$datos = $this->producto->view_inner();
				return $datos;
			} else {
				$this->producto->set("idProducto",$_POST['idProducto']);
				$this->producto->set("tipo",$_POST['tipo']);
				$this->producto->set("marca",$_POST['marca']);
				$this->producto->set("modelo",$_POST['modelo']);
				$this->producto->set("serie",$_POST['serie']);
				$this->producto->set("precio",$_POST['precio']);
				$this->producto->set("descProb",$_POST['descProb']);
				$this->producto->set("descTrab",$_POST['descTrab']);
				$this->producto->edit();
				header ("Location: ".URL."Recepcion");
			}
		}
		
		public function verProductoVista($idProducto)
		{
			session_start();
			$this->producto->set("idProducto",$idProducto);
			$datos = $this->producto->view();
			return $datos;

		}

		public function eliminarProductoVista($idProducto)
		{

			$this->producto->set("idProducto",$idProducto);
			$this->producto->delete();
			header ("Location: ".URL."Orden");
		}

		public function eliminarProductoRecepcionVista($idProducto)
		{
			session_start();
			$this->producto->set("idProducto",$idProducto);
			$this->producto->delete();
			header ("Location: ".URL."Recepcion");
		}
		public function listar_tecnicos(){
			$datos = $this->tecnico->listar();
			return $datos;
		}
	}

$tecnicos = new productoControlador();