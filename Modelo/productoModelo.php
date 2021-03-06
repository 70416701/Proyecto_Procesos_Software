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
	 	$sql = "CALL SP_A_PRODUCTOS()";
	 	$datos = $this->con->consultaRetorno($sql);
	 	return $datos;
	 }

	 public function add()
	 {
	 	$sql = "CALL SP_C_PRODUCTOS('{$this->tipo}','{$this->marca}','{$this->modelo}','{$this->serie}','{$this->precio}',
	 		'{$this->descProb}','{$this->descTrab}')";
	 	$this->con->consultaSimple($sql);
	 }

	 public function delete()
	 {
	 	$sql = "CALL SP_E_PRODUCTOS('{$this->idProducto}')";
	 	$this->con->consultaSimple($sql);
	 }

	 public function edit()
	 {
	 	$sql = "CALL SP_M_PRODUCTOS('{$this->idProducto}')";
	 	$this->con->consultaSimple($sql);
	 }

	 public function edit_tec()
	 {
	 	$sql = "UPDATE Productos SET precio='{$this->precio}', Estado = '{$this->Estado}', idSolucion = '{$this->idSolucion}' WHERE idProducto = '{$this->idProducto}'";
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