DROP PROCEDURE IF EXISTS SP_A_CLIENTES;
DELIMITER //
CREATE PROCEDURE SP_A_CLIENTES (IN _idCliente int
) BEGIN
	if(_idCliente = 0) THEN
		SELECT * FROM Clientes;
    ELSE
		SELECT * FROM Clientes WHERE idCliente = _idCliente;
    END if;
END
// DELIMITER ;

DROP PROCEDURE IF EXISTS SP_C_CLIENTES;
DELIMITER //
CREATE PROCEDURE SP_C_CLIENTES (
	IN _nombres varchar(45),
	IN _apellidos varchar(45),
	IN _dni int(11),
	IN _direccion mediumtext,
	IN _celular int(11),
	IN _email varchar(100)
) BEGIN
INSERT INTO Clientes (nombres,apellidos,dni,direccion,celular,email) 
VALUES (_nombres,_apellidos,_dni,_direccion,_celular,_email);
END
// DELIMITER ;

DROP PROCEDURE IF EXISTS SP_M_CLIENTES;
DELIMITER //
CREATE PROCEDURE SP_M_CLIENTES(
	IN _idCliente int(11),
	IN _nombres varchar(45),
	IN _apellidos varchar(45),
	IN _dni int(11),
	IN _direccion mediumtext,
	IN _celular int(11),
	IN _email varchar(100)
) BEGIN
UPDATE Clientes SET nombres = _nombres, apellidos = _apellidos, dni = _dni, 
direccion = _direccion, celular = _celular, email = _email WHERE idCliente = _idCliente;
END
// DELIMITER ;

DROP PROCEDURE IF EXISTS SP_E_CLIENTES;
DELIMITER //
CREATE PROCEDURE SP_E_CLIENTES(
	IN _idCliente int
) BEGIN
DELETE FROM Clientes WHERE idCliente = _idCliente;
END
// DELIMITER ;