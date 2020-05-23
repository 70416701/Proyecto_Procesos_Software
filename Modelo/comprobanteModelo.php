<?php 
namespace Modelo;
class comprobanteModelo{

	 private $idComprobante;
	 private $detalle;
	 private $costoTotal;
	 private $idOrden;
	 private $numOrden;
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
	 	$sql = "SELECT * FROM comprobantes";
	 	$datos = $this->con->consultaRetorno($sql);
	 	return $datos;
	 }

	 public function add()
	 {
	 	$sql = "INSERT INTO comprobantes (idComprobante,detalle,fecha,costoTotal,idOrden) 
	 	VALUES (null,'{$this->detalle}', NOW(),'{$this->costoTotal}','{$this->idOrden}')";
	 	$this->con->consultaSimple($sql);
	 }

	 public function view()
	 {
	 	$sql = "SELECT * FROM comprobantes WHERE idComprobante = '{$this->idComprobante}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	$row = mysqli_fetch_assoc($datos);
	 	return $row;
	 }

	 public function validate_orden() {
	 	$sql = "SELECT ord.idOrden, ord.numOrden, ord.precioInicial, cli.idCliente, cli.nombres, cli.apellidos, cli.direccion,
				cli.celular,cli.email FROM ordenes AS ord INNER JOIN clientes AS cli ON ord.idCliente = cli.idCliente WHERE ord.numOrden ='{$this->numOrden}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	$row = mysqli_num_rows($datos);
	 	return $row;
	 }

	 public function obtener_idorden() {
	 	$sql = "SELECT ord.idOrden, ord.numOrden, ord.precioInicial, cli.idCliente, cli.nombres, cli.apellidos, cli.direccion,
				cli.celular,cli.email FROM ordenes AS ord INNER JOIN clientes AS cli ON ord.idCliente = cli.idCliente WHERE ord.numOrden ='{$this->numOrden}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	$row = mysqli_fetch_assoc($datos);
	 	return $row;
	 }

	  public function impresion(){
	  	$sql = "SELECT ord.idOrden,ord.numOrden,comp.idComprobante,comp.detalle, comp.fecha,comp.costoTotal, cli.idCliente, cli.nombres, cli.apellidos,cli.celular,cli.direccion,cli.email FROM ordenes AS ord INNER JOIN comprobantes AS comp ON comp.idOrden = ord.idOrden INNER JOIN clientes AS cli ON cli.idCliente = ord.idCliente WHERE ord.idOrden = '{$this->idOrden}'";
	  	$datos = $this->con->consultaRetorno($sql);
	  	$row = mysqli_fetch_assoc($datos);
	 	return $row;
	  }
}