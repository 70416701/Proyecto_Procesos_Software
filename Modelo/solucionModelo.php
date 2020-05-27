<?php 
namespace Modelo;
class solucionModelo
{
	 private $idSolucion;
	 private $descSol;
	 private $precio;
	 private $con;

	 public function __construct()
	 {
	 	$this->con = new Conexion();
	 }
	
	 public function set($atributo, $contenido)
	 {
	 	$this->$atributo = $contenido;
	 }

	 public function get($atributo)
	 {
	 	return $this->$atributo;
	 }

	 public function add()
	 {
	 	$sql = "INSERT INTO soluciones (idSolucion,descSol,precio,fecha) VALUES (null,'{$this->descSol}','{$this->precio}',NOW())";
	 	$this->con->consultaSimple($sql);
	 }

	 public function view()
	 {
	 	$sql = "SELECT * FROM Tecnicos WHERE idTecnico = '{$this->idTecnico}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	$row = mysqli_fetch_assoc($datos);
	 	return $row;
	 }

	 public function ultimo_solucion() {
	 	$sql = "SELECT * FROM soluciones";
	 	$datos = $this->con->consultaRetorno($sql);
		$i = 0;
            while ($fila = mysqli_fetch_array($datos)) { 
               	$i = $fila['idSolucion'];
            }
        return $i;
	 }

}