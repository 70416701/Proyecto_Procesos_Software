<?php namespace Controladores;
use Modelo\tecnicoModelo as Tecnico;

class loginControlador {
	private $sesion;

	public function __construct() {
		$this->sesion = new Tecnico();
	}

	public function index(){
		
		if ($_POST) {
			$this->sesion->set("usuario",$_POST['usuario']);
			$this->sesion->set("contrasenia",$_POST['contrasenia']);
			$datos = $this->sesion->validate_user();

			
				session_start();
				$_SESSION['usuario'] = $datos['usuario'];
				$_SESSION['contrasenia'] =$datos['contrasenia'];
				switch ($datos['cargo']) {
						case 'Administrador':
							header ("Location: ".URL."Tecnico");
							break;
						case 'Recepcionista':
							
							header ("Location: ".URL."Recepcion");
							break;
						case 'Tecnico':
							
							header ("Location: ".URL."Produccion/index/".$datos['idTecnico']);
							break;
						default:
							session_destroy();
							echo "no se encontro al usuario";
							break;
					}	
			
			//return $datos;
		}
	}

	public function logout() {
		session_start();
		session_destroy();
		header ("Location: ".URL);
	}
}
