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
	 	$sql = "CALL SP_A_ORDENES()";
	 	$datos = $this->con->consultaRetorno($sql);
	 	return $datos;
	 }

	 public function add()
	 {
	 	 $query = "CALL SP_C_ORDENES(?,?)";
	 	 $sentencia = $this->con->prepare($query);
	 	 $sentencia->bind_param('ii',$this->numOrden,$this->precioInicial);
	 	 $this->con->execute();
	 }

	 public function delete()
	 {
	 	$sql = "CALL SP_E_ORDENES(?)";
	 	$sentencia = $this->con->prepare($query);
	 	$sentencia->bind_param('i',$this->idOrden);
	 	$this->con->execute();	 	
	 }

	 public function edit()
	 {
	 	$sql = "CALL SP_M_ORDENES(?))";
	 	$sentencia = $this->con->prepare($query);
	 	$sentencia->bind_param('i',$this->idOrden);
	 	$this->con->execute();
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
	 
	 public function impresion(){
	 	$sql = "SELECT cli.nombres,cli.apellidos,cli.direccion,cli.celular,cli.email,tec.nombres AS tecnombres,tec.apellidos AS tecapellidos,
				ord.numOrden,ord.fecha,ord.precioInicial,prod.tipo,prod.serie,prod.descTrab,prod.descProb,prod.precio FROM clientes AS cli INNER JOIN ordenes AS ord ON cli.idCliente = ord.idCliente 
				INNER JOIN tecnicos AS tec ON tec.idTecnico = ord.idTecnico INNER JOIN productos AS prod ON prod.idOrden = ord.idOrden WHERE ord.idOrden = '{$this->idOrden}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	return $datos;
	 }

	 public function ver_todo(){
	 	$sql = "SELECT cli.nombres,cli.apellidos,cli.direccion,cli.celular,cli.email,tec.nombres AS tecnombres,tec.apellidos AS tecapellidos,
				ord.numOrden,ord.fecha,ord.precioInicial,prod.tipo,prod.serie,prod.descTrab,prod.precio FROM clientes AS cli INNER JOIN ordenes AS ord ON cli.idCliente = ord.idCliente 
				INNER JOIN tecnicos AS tec ON tec.idTecnico = ord.idTecnico INNER JOIN productos AS prod ON prod.idOrden = ord.idOrden WHERE ord.idOrden = '{$this->idOrden}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	$row = mysqli_fetch_assoc($datos);
	 	return $row;
	 }

	  public function listar_por_tecnico()
	 {
	 	$sql = "SELECT ord.idOrden,ord.numOrden,prod.idProducto,prod.tipo,prod.marca,prod.descTrab,prod.Estado,tec.idTecnico,
	 			tec.nombres,tec.apellidos FROM tecnicos AS tec INNER JOIN ordenes AS ord ON tec.idTecnico = ord.idTecnico 
	 			INNER JOIN productos AS prod
				ON prod.idOrden = ord.idOrden WHERE tec.idTecnico = '{$this->idTecnico}' order by ord.numOrden DESC";
	 	$datos = $this->con->consultaRetorno($sql);
	 	return $datos;
	 }
}