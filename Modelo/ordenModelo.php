<?php namespace Modelo;
class ordenModelo
{
	 private $idOrden;
	 private $numOrden;
	 private $precioInicial;
	 private $idTecnico;
	 private $idCliente;
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

	 public function listar()
	 {
	 	$sql = "SELECT * FROM Ordenes";
	 	$datos = $this->con->consultaRetorno($sql);
	 	return $datos;
	 }

	 public function add()
	 {
	 	 $query = "INSERT INTO Ordenes (idOrden,numOrden,precioInicial,fecha,idTecnico,idCliente) VALUES (null,'{$this->numOrden}','{$this->precioInicial}',NOW(),'{$this->idTecnico}','{$this->idCliente}')";
	 	 $this->con->consultaSimple($query);
	 }

	 public function delete()
	 {
	 	$sql = "DELETE FROM Ordenes where idOrden = '{$this->idOrden}'";
	 	$this->con->consultaSimple($sql);
	 }

	 public function edit()
	 {
	 	$sql = "UPDATE Ordenes SET numOrden = '{$this->numOrden}', costoInicial = '{$this->costoInicial}', idTecnico = '{$this->idTecnico}', 
	 	idCliente = '{$this->idCliente}' WHERE idOrden = '{$this->idOrden}'";
	 	$this->con->consultaSimple($sql);
	 }

	 public function view()
	 {
	 	$sql = "SELECT * FROM Ordenes WHERE idOrden = '{$this->idOrden}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	$row = mysqli_fetch_assoc($datos);
	 	return $row;
	 }

	 public function ultima_orden() {
	 	$sql = "SELECT * FROM Ordenes";
	 	$datos = $this->con->consultaRetorno($sql);
		$j = 0;
            while ($fila = mysqli_fetch_array($datos)) { 
               	$j = $fila['idOrden'];
            }
        return $j;
	 }
}