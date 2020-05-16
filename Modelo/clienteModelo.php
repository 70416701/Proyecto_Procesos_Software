<?php namespace Modelo;
class clienteModelo
{
	 private $idCliente;
	 private $nombre;
	 private $apellido;
	 private $dni;
	 private $direccion;
	 private $celular;
	 private $email;
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
	 	$sql = "SELECT * FROM Clientes";
	 	$datos = $this->con->consultaRetorno($sql);
	 	return $datos;
	 }

	 public function add()
	 {
	 	$sql = "INSERT INTO Clientes (idCliente,nombres,apellidos,dni,direccion,celular,email) 
	 			VALUES (null,'{$this->nombre}','{$this->apellido}','{$this->dni}','{$this->direccion}','{$this->celular}','{$this->email}')";
	 	$this->con->consultaSimple($sql);
	 }

	 public function delete()
	 {
	 	$sql = "DELETE FROM Clientes where idCliente = '{$this->idCliente}'";
	 	$this->con->consultaSimple($sql);
	 }

	 public function edit()
	 {
	 	$sql = "UPDATE Clientes SET nombres = '{$this->nombre}', apellidos = '{$this->apellido}', dni = '{$this->dni}', 
	 	direccion = '{$this->direccion}',celular = '{$this->celular}',email = '{$this->email}' WHERE idOrden = '{$this->idOrden}'";
	 	$this->con->consultaSimple($sql);
	 }

	 public function view()
	 {
	 	$sql = "SELECT * FROM Clientes WHERE idCliente = '{$this->idCliente}'";
	 	$datos = $this->con->consultaRetorno($sql);
	 	$row = mysqli_fetch_assoc($datos);
	 	return $row;
	 }

	 public function ultimo_cliente() {
	 	$sql = "SELECT * FROM Clientes";
	 	$datos = $this->con->consultaRetorno($sql);
		$i = 0;
            while ($fila = mysqli_fetch_array($datos)) { 
               	$i = $fila['idCliente'];
            }
        return $i;
	 }
}