DROP PROCEDURE IF EXISTS SP_A_PRODUCTOS;
DELIMITER //
CREATE PROCEDURE SP_A_PRODUCTOS (IN _idProducto int
) BEGIN
	if(_idProducto = 0) THEN
		SELECT * FROM Productos;
    ELSE
		SELECT * FROM Productos WHERE idProducto = _idProducto;
    END if;
END
// DELIMITER ;

DROP PROCEDURE IF EXISTS SP_C_PRODUCTOS;
DELIMITER //
CREATE PROCEDURE SP_C_PRODUCTOS (
	IN _tipo varchar(45),
	IN _marca varchar(45),
    IN _modelo varchar(45),
	IN _serie varchar(45),
	IN _precio float,
	IN _descProb mediumtext,
	IN _descTrab mediumtext,
	IN _Estado varchar(20),
    IN _idOrden int(11)
) BEGIN
INSERT INTO Productos (tipo,marca,modelo,serie,precio,descProb,descTrab,Estado,idOrden) 
VALUES (_tipo,_marca,_modelo,_serie,_precio,_descProb,_descTrab,_Estado,_idOrden);
END
// DELIMITER ;

DROP PROCEDURE IF EXISTS SP_M_PRODUCTOS;
DELIMITER //
CREATE PROCEDURE SP_M_PRODUCTOS(
	IN _idProducto int(11),
	IN _Estado varchar(20),
    IN _idSolucion int(11)
) BEGIN
UPDATE Productos SET Estado = _Estado, idSolucion = _idSolucion WHERE idProducto = _idProducto;
END
// DELIMITER ;

DROP PROCEDURE IF EXISTS SP_E_PRODUCTOS;
DELIMITER //
CREATE PROCEDURE SP_E_PRODUCTOS(
	IN _idProducto int
) BEGIN
DELETE FROM Productos WHERE idProducto = _idProducto;
END
// DELIMITER ;