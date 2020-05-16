<?php 
	namespace Controladores;

	use Modelo\ordenModelo as Orden;
	use Modelo\clienteModelo as Cliente;
	use Modelo\tecnicoModelo as Tecnico;
	use Modelo\productoModelo as Producto;

	class ordenControlador
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

		public function index()
		{
			$datos = $this->orden->listar();
			return $datos;
		}

		 public function registrarOrdServVista()
		 {
			switch (isset($_POST)) {
				case isset($_POST['btnRegistrarOrden']):
					$this->cliente->set("nombre",$_POST['nombre']);
					$this->cliente->set("apellido",$_POST['apellido']);
					$this->cliente->set("dni",$_POST['dni']);
					$this->cliente->set("direccion",$_POST['direccion']);
					$this->cliente->set("celular",$_POST['celular']);
					$this->cliente->set("email",$_POST['email']);
					$this->cliente->add();
					$idCliente = $this->cliente->ultimo_cliente();
					$this->orden->set("numOrden",$_POST['numOrden']);
					$this->orden->set("precioInicial",$_POST['precioInicial']);
					$this->orden->set("idTecnico",$_POST['idTecnico']);
					$this->orden->set("idCliente",$idCliente);
					$this->orden->add();
					break;
				case isset($_POST['btnAgregarProducto']):
					$idOrden = $this->orden->ultima_orden();
					$this->idOrder = $idOrden;
					$this->producto->set("tipo",$_POST['tipo']);
					$this->producto->set("marca",$_POST['marca']);
					$this->producto->set("modelo",$_POST['modelo']);
					$this->producto->set("serie",$_POST['serie']);
					$this->producto->set("precio",$_POST['precio']);
					$this->producto->set("descProb",$_POST['descProb']);
					$this->producto->set("descTrab",$_POST['descTrab']);
					$this->producto->set("idOrden",$idOrden);
					$this->producto->add();
					$this->producto->set("idOrden",$idOrden);
					$datos = $this->producto->ver_por_idorden();
					return $datos;
					break;
				default:
					$datos = $this->tecnico->listar();
					return $datos;
					break;
			}
					
		 }

		public function editarOrdServVista($idOrden)
		{
			
			if (!$_POST) {
				$this->orden->set("idOrden",$idOrden);
				$datos = $this->orden->view();
				return $datos;
			} else {
				$this->orden->set("idOrden",$_POST['idOrden']);
				$this->orden->set("numOrden",$_POST['numOrden']);
				$this->orden->set("descProb",$_POST['descProb']);
				$this->orden->set("descTrab",$_POST['descTrab']);
				$this->orden->set("costoInicial",$_POST['costoInicial']);
				$this->orden->set("idTecnico",$_POST['idTecnico']);
				$this->orden->set("idCliente",$_POST['idCliente']);
				$this->orden->set("estado",$_POST['estado']);
				$this->orden->set("idSolucion",$_POST['idSolucion']);
				$this->orden->edit();
			}
		}

		public function verOrdServVista($idOrden)
		{

			$this->orden->set("idOrden",$idOrden);
			$datos = $this->orden->view();
			return $datos;

		}

		public function eliminarOrdServVista($idOrden)
		{

			$this->orden->set("idOrden",$idOrden);
			$this->orden->delete();
			
		}
	}