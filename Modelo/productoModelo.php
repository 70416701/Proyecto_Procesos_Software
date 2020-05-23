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
	 	$sql = "UPDATE Productos SET tipo='{$this->tipo}', marca='{$this->marca}', modelo='{$this->modelo}', serie='{$this->serie}', 
	 			precio='{$this->precio}', descProb='{$this->descProb}', descTrab='{$this->descTrab}' WHERE idProducto = '{$this->idProducto}'";
	 	$this->con->consultaSimple($sql);
	 }

	 public function edit_tec()
	 {
	 	$sql = "UPDATE Productos SET tipo='{$this->tipo}', marca='{$this->marca}', modelo='{$this->modelo}', serie='{$this->serie}', 
	 			precio='{$this->precio}', descProb='{$this->descProb}', descTrab='{$this->descTrab}', Estado = '{$this->Estado}' WHERE idProducto = '{$this->idProducto}'";
	 	$this->con->consultaSimple($sql);
	 }

	 public function view()
	 {
	 	$sql = "SELECT cli.nombres,cli.apellidos,cli.dni,cli.direccion,cli.celular,cli.email,tec.nombres AS tecnombres,tec.apellidos AS tecapellidos,
	 			ord.numOrden,ord.fecha,ord.precioInicial,prod.tipo,prod.marca,prod.modelo,prod.serie,prod.descProb,prod.descTrab,prod.Estado,prod.precio FROM clientes AS cli INNER JOIN ordenes AS ord ON cli.idCliente = ord.idCliente 
				INNER JOIN tecnicos AS tec ON tec.idTecnico = ord.idTecnico INNER JOIN productos AS prod ON prod.idOrden = ord.idOrden WHERE prod.idProducto= '{$this->idProducto}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	$row = mysqli_fetch_assoc($datos);
	 	return $row;
	 }

	 public function ver_por_idorden(){
	 	$sql = "SELECT * FROM Productos WHERE idOrden = '{$this->idOrden}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	return $datos;
	 }

	 public function view_inner()
	 {
	 	$sql = "SELECT ord.idOrden,ord.numOrden,prod.idProducto,prod.tipo,prod.marca,prod.modelo,prod.serie,prod.precio,prod.descProb,prod.descTrab,prod.Estado,tec.nombres,tec.apellidos FROM tecnicos AS tec INNER JOIN ordenes AS ord ON tec.idTecnico = ord.idTecnico INNER JOIN productos AS prod
				ON prod.idOrden = ord.idOrden WHERE prod.idProducto = '{$this->idProducto}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	$row = mysqli_fetch_assoc($datos);
	 	return $row;
	 }
}