<?php 
	namespace Controladores;

	use Modelo\tecnicoModelo as Tecnico;

	class tecnicoControlador
	{
		private $tecnico;

		public function __construct()
		{
			$this->tecnico = new Tecnico();
		}

		public function index()
		{
			session_start();
			$datos = $this->tecnico->listar();
			return $datos;
		}

		public function registrarTecnicoVista()
		{	
			session_start();
			if ($_POST) {
				$this->tecnico->set("nombre",$_POST['nombre']);
				$this->tecnico->set("apellido",$_POST['apellido']);
				$this->tecnico->set("dni",$_POST['dni']);
				$this->tecnico->set("direccion",$_POST['direccion']);
				$this->tecnico->set("celular",$_POST['celular']);
				$this->tecnico->set("email",$_POST['email']);
				$this->tecnico->set("usuario",$_POST['usuario']);
				$this->tecnico->set("contrasenia",$_POST['contrasenia']);
				$this->tecnico->set("cargo",$_POST['cargo']);
				$this->tecnico->add();
				header ("Location: ".URL."Tecnico");
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

		public function eliminarTecnicoVista($idTecnico)
		{

			$this->tecnico->set("idTecnico",$idTecnico);
			$this->tecnico->delete();
			header ("Location: ".URL."Tecnico");
		}
	}