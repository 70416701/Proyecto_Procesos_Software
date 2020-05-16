DROP PROCEDURE IF EXISTS SP_A_TECNICOS;
DELIMITER //
CREATE PROCEDURE SP_A_TECNICOS (IN _idTecnico int
) BEGIN
	if(_idTecnico = 0) THEN
		SELECT * FROM Tecnicos;
    ELSE
		SELECT * FROM Tecnicos WHERE idTecnico = _idTecnico;
    END if;
END
// DELIMITER ;

DROP PROCEDURE IF EXISTS SP_C_TECNICOS;
DELIMITER //
CREATE PROCEDURE SP_C_TECNICOS (
	IN _nombres varchar(45),
	IN _apellidos varchar(45),
	IN _dni int(11),
	IN _direccion mediumtext,
	IN _celular int(11),
	IN _email varchar(100),
	IN _usuario varchar(45),
	IN _contrasenia varchar(45)
) BEGIN
INSERT INTO Tecnicos (nombres,apellidos,dni,direccion,celular,email,usuario,contrasenia) 
VALUES (_nombres,_apellidos,_dni,_direccion,_celular,_email,_usuario,_contrasenia);
END
// DELIMITER ;

DROP PROCEDURE IF EXISTS SP_M_TECNICOS;
DELIMITER //
CREATE PROCEDURE SP_M_TECNICOS (
	IN _idTecnico int(11),
	IN _nombres varchar(45),
	IN _apellidos varchar(45),
	IN _dni int(11),
	IN _direccion mediumtext,
	IN _celular int(11),
	IN _email varchar(100),
	IN _usuario varchar(45),
	IN _contrasenia varchar(45)
) BEGIN
UPDATE Tecnicos SET nombres = _nombres, apellidos = _apellidos, dni = _dni, 
direccion = _direccion, celular = _celular, email = _email, 
usuario = _usuario, contrasenia = _contrasenia WHERE idTecnico = _idTecnico;
END
// DELIMITER ;

DROP PROCEDURE IF EXISTS SP_E_TECNICOS;
DELIMITER //
CREATE PROCEDURE SP_E_TECNICOS (
	IN _idTecnico int
) BEGIN
DELETE FROM Tecnicos WHERE idTecnico = _idTecnico;
END
// DELIMITER ;