<?php 
	namespace Controladores;

	use Modelo\ordenModelo as Orden;
	use Modelo\clienteModelo as Cliente;
	use Modelo\tecnicoModelo as Tecnico;
	use Modelo\productoModelo as Producto;
	use Modelo\solucionModelo as Solucion;

	class produccionControlador
	{
		private $producto;
		private $orden;
		private $cliente;
		private $tecnico;
		private $solucion;

		public function __construct()
		{
			$this->producto = new Producto();
			$this->orden = new Orden();
			$this->cliente = new Cliente();
			$this->tecnico = new Tecnico();
			$this->solucion = new Solucion();
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
			session_start();
			$this->producto->set("idProducto",$idProducto);
			$datos = $this->producto->view();
			return $datos;

		}

		public function editarProduccionVista($idProducto)
		{
			session_start();
			if (!$_POST) {
				$this->producto->set("idProducto",$idProducto);
				$datos = $this->producto->view_inner();
				return $datos;
			} else {
				$this->solucion->set("descSol",$_POST['descSol']);
				$this->solucion->set("precio",$_POST['precio']);
				$this->solucion->add();
				$idSolucion = $this->solucion->ultimo_solucion();
				$this->producto->set("idProducto",$_POST['idProducto']);
				$this->producto->set("precio",$_POST['precio']);
				$this->producto->set("Estado",$_POST['Estado']);
				$this->producto->set("idSolucion",$idSolucion);
				$this->producto->edit_tec();
				header ("Location: ".URL."Produccion/index/".$_SESSION['idtec']);
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