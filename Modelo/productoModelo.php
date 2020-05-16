<?php namespace Modelo;
class productoModelo
{
	 private $idProducto;
	 private $tipo;
	 private $marca;
	 private $modelo;
	 private $serie;
	 private $precio;
	 private $descProb;
	 private $descTrab;
	 private $Estado;
	 private $idSolucion;
	 private $idOrden;
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
	 	$sql = "SELECT * FROM Productos";
	 	$datos = $this->con->consultaRetorno($sql);
	 	return $datos;
	 }

	 public function add()
	 {
	 	$sql = "INSERT INTO Productos (idProducto,tipo,marca,modelo,serie,precio,descProb,descTrab,Estado,idSolucion,idOrden) 
	 			VALUES (null,'{$this->tipo}','{$this->marca}','{$this->modelo}','{$this->serie}','{$this->precio}','{$this->descProb}','{$this->descTrab}','En Proceso',null,'{$this->idOrden}')";
	 	$this->con->consultaSimple($sql);
	 }

	 public function delete()
	 {
	 	$sql = "DELETE FROM Productos where idProducto = '{$this->idProducto}'";
	 	$this->con->consultaSimple($sql);
	 }

	 public function edit()
	 {
	 	$sql = "UPDATE Productos SET tipo='{$this->tipo}', marca='{$this->marca}', modelo='{$this->modelo}', serie='{$this->serie}', precio='{$this->precio}', descProb='{$this->descProb}', descTrab='{$this->descTrab}', Estado='{$this->Estado}', idSolucion='{$this->idSolucion}', idOrden='{$this->idOrden}' WHERE idProducto = '{$this->idProducto}'";
	 	$this->con->consultaSimple($sql);
	 }

	 public function view()
	 {
	 	$sql = "SELECT * FROM Productos WHERE idProducto = '{$this->idProducto}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	$row = mysqli_fetch_assoc($datos);
	 	return $row;
	 }

	 public function ver_por_idorden(){
	 	$sql = "SELECT * FROM Productos WHERE idOrden = '{$this->idOrden}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	return $datos;
	 }
}