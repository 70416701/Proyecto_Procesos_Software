DROP PROCEDURE IF EXISTS SP_A_ORDENES;
DELIMITER //
CREATE PROCEDURE SP_A_ORDENES (IN _idOrden int
) BEGIN
	if(_idOrden = 0) THEN
		SELECT * FROM Ordenes;
    ELSE
		SELECT * FROM Ordenes WHERE idOrden = _idOrden;
    END if;
END
// DELIMITER ;

DROP PROCEDURE IF EXISTS SP_C_ORDENES;
DELIMITER //
CREATE PROCEDURE SP_C_ORDENES (
	IN _numorden int(11),
	IN _precioInicial float,
	IN _idTecnico int(11),
	IN _idCliente int(11)
) BEGIN
INSERT INTO Ordenes (numOrden,precioInicial,idTecnico,idCliente) 
VALUES (_numorden,_precioInicial,_idTecnico,_idCliente);
END
// DELIMITER ;

DROP PROCEDURE IF EXISTS SP_M_ORDENES;
DELIMITER //
CREATE PROCEDURE SP_M_ORDENES(
	IN _idOrden int(11),
	IN _precioInicial float
) BEGIN
UPDATE Ordenes SET precioInicial = _precioInicial WHERE idOrden = _idOrden;
END
// DELIMITER ;

DROP PROCEDURE IF EXISTS SP_E_ORDENES;
DELIMITER //
CREATE PROCEDURE SP_E_ORDENES(
	IN _idOrden int
) BEGIN
DELETE FROM Ordenes WHERE idOrden = _idOrden;
END
// DELIMITER ;