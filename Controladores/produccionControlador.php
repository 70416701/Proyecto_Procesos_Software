<?php 
	namespace Controladores;

	use Modelo\ordenModelo as Orden;
	use Modelo\clienteModelo as Cliente;
	use Modelo\tecnicoModelo as Tecnico;
	use Modelo\productoModelo as Producto;

	class produccionControlador
	{
		private $producto;
		private $orden;
		private $cliente;
		private $tecnico;

		public function __construct()
		{
			$this->producto = new Producto();
			$this->orden = new Orden();
			$this->cliente = new Cliente();
			$this->tecnico = new Tecnico();
		}

		public function index($idTec)
		{	
			session_start();
			$this->orden->set("idTecnico",$idTec);
			$datos = $this->orden->listar_por_tecnico();
			return $datos;
		}


		public function verProduccionVista($idProducto)
		{

			$this->producto->set("idProducto",$idProducto);
			$datos = $this->producto->view();
			return $datos;

		}

		public function editarProduccionVista($idProducto)
		{
			
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
				$this->producto->set("Estado",$_POST['Estado']);
				$this->producto->edit_tec();
				//header ("Location: ".URL."Produccion/index/".$datos['idTecnico']);
			}
		}


		public function imprimirOrdServVista($idOrden) {
			$this->orden->set("idOrden",$idOrden);
			$datos = $this->orden->impresion();
			return $datos;
		}

		public function reporteOrdServVista()
		{
			
		}
	}