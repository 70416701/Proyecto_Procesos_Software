<?php 
	namespace Controladores;

	use Modelo\comprobanteModelo as Comprobante;

	class comprobanteControlador
	{
		private $comprobante;

		public function __construct()
		{
			$this->comprobante = new Comprobante();
		}

		public function index()
		{
			session_start();
			$datos = $this->comprobante->listar();
			return $datos;
		}

		public function registrarComprobanteVista()
		{	
			session_start();
			if ($_POST) {
				$this->comprobante->set("numOrden",$_POST['numOrden']);
				$datos = $this->comprobante->validate_orden();
				if ($datos = 0) {
					header ("Location: ".URL."Comprobante/registrarComprobanteVista");
				} else {
					$datos = $this->comprobante->obtener_idorden();
					$idOrden = $datos['idOrden'];
					
					$this->comprobante->set("detalle",$_POST['detalle']);
					$this->comprobante->set("costoTotal",$_POST['costoTotal']);
					$this->comprobante->set("idOrden",$idOrden);
					$this->comprobante->add();
					
					header ("Location: ".URL."Comprobante/imprimirComprobanteVista/".$idOrden);

				}
				
			}		
		}

		public function registrarComprobanteRecepcionVista()
		{	
			session_start();
			if ($_POST) {
				$this->comprobante->set("numOrden",$_POST['numOrden']);
				$datos = $this->comprobante->validate_orden();
				if ($datos = 0) {
					header ("Location: ".URL."Comprobante/registrarComprobanteRecepcionVista");
				} else {
					$datos = $this->comprobante->obtener_idorden();
					$idOrden = $datos['idOrden'];
					
					$this->comprobante->set("detalle",$_POST['detalle']);
					$this->comprobante->set("costoTotal",$_POST['costoTotal']);
					$this->comprobante->set("idOrden",$idOrden);
					$this->comprobante->add();
					
					header ("Location: ".URL."Comprobante/imprimirComprobanteRecepcionVista/".$idOrden);

				}
				
			}		
		}

		public function editarTecnicoVista($idTecnico)
		{
			session_start();
			if (!$_POST) {
				$this->tecnico->set("idTecnico",$idTecnico);
				$datos = $this->tecnico->view();
				return $datos;
			} else {
				$this->tecnico->set("idTecnico",$_POST['idTecnico']);
				$this->tecnico->set("nombre",$_POST['nombre']);
				$this->tecnico->set("apellido",$_POST['apellido']);
				$this->tecnico->set("dni",$_POST['dni']);
				$this->tecnico->set("direccion",$_POST['direccion']);
				$this->tecnico->set("celular",$_POST['celular']);
				$this->tecnico->set("email",$_POST['email']);
				$this->tecnico->set("usuario",$_POST['usuario']);
				$this->tecnico->set("contrasenia",$_POST['contrasenia']);
				$this->tecnico->edit();
			}
		}

		public function verTecnicoVista($idTecnico)
		{
			session_start();
			$this->tecnico->set("idTecnico",$idTecnico);
			$datos = $this->tecnico->view();
			return $datos;

		}

		public function imprimirComprobanteVista($idOrden) {
			session_start();
			$this->comprobante->set("idOrden",$idOrden);
			$datos = $this->comprobante->impresion();
			return $datos;
		}

		public function imprimirComprobanteRecepcionVista($idOrden) {
			session_start();
			$this->comprobante->set("idOrden",$idOrden);
			$datos = $this->comprobante->impresion();
			return $datos;
		}
	}