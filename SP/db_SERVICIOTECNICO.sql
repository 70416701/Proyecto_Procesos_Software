-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema serviciotecnico
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema serviciotecnico
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `serviciotecnico` DEFAULT CHARACTER SET utf8 ;
USE `serviciotecnico` ;

-- -----------------------------------------------------
-- Table `serviciotecnico`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `serviciotecnico`.`clientes` (
  `idCliente` INT(11) NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(45) NOT NULL,
  `apellidos` VARCHAR(45) NOT NULL,
  `dni` INT(11) NOT NULL,
  `direccion` MEDIUMTEXT NULL DEFAULT NULL,
  `celular` INT(11) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idCliente`))
ENGINE = InnoDB
AUTO_INCREMENT = 50
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `serviciotecnico`.`tecnicos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `serviciotecnico`.`tecnicos` (
  `idTecnico` INT(11) NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(45) NOT NULL,
  `apellidos` VARCHAR(45) NOT NULL,
  `dni` INT(11) NOT NULL,
  `direccion` MEDIUMTEXT NULL DEFAULT NULL,
  `celular` INT(11) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `usuario` VARCHAR(45) NOT NULL,
  `contrasenia` VARCHAR(45) NOT NULL,
  `cargo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTecnico`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `serviciotecnico`.`ordenes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `serviciotecnico`.`ordenes` (
  `idOrden` INT(11) NOT NULL AUTO_INCREMENT,
  `numOrden` INT(11) NOT NULL,
  `precioInicial` FLOAT NULL DEFAULT NULL,
  `fecha` DATE NOT NULL,
  `fechasalida` DATE NULL DEFAULT NULL,
  `idTecnico` INT(11) NOT NULL,
  `idCliente` INT(11) NOT NULL,
  PRIMARY KEY (`idOrden`),
  INDEX `idCliente_idx` (`idCliente` ASC),
  INDEX `idTecnico_idx` (`idTecnico` ASC),
  CONSTRAINT `idCliente`
    FOREIGN KEY (`idCliente`)
    REFERENCES `serviciotecnico`.`clientes` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idTecnico`
    FOREIGN KEY (`idTecnico`)
    REFERENCES `serviciotecnico`.`tecnicos` (`idTecnico`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 31
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `serviciotecnico`.`comprobantes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `serviciotecnico`.`comprobantes` (
  `idComprobante` INT(11) NOT NULL AUTO_INCREMENT,
  `detalle` MEDIUMTEXT NOT NULL,
  `fecha` DATE NOT NULL,
  `costoTotal` FLOAT NOT NULL,
  `idOrden` INT(11) NOT NULL,
  PRIMARY KEY (`idComprobante`),
  INDEX `idOrden_idx` (`idOrden` ASC),
  CONSTRAINT `idOrden`
    FOREIGN KEY (`idOrden`)
    REFERENCES `serviciotecnico`.`ordenes` (`idOrden`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `serviciotecnico`.`materiales`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `serviciotecnico`.`materiales` (
  `idMaterial` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `precio` FLOAT NOT NULL,
  PRIMARY KEY (`idMaterial`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `serviciotecnico`.`soluciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `serviciotecnico`.`soluciones` (
  `idSolucion` INT(11) NOT NULL,
  `descSol` LONGTEXT NOT NULL,
  `precio` FLOAT NOT NULL,
  `fecha` DATE NOT NULL,
  PRIMARY KEY (`idSolucion`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `serviciotecnico`.`productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `serviciotecnico`.`productos` (
  `idProducto` INT(11) NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(45) NOT NULL,
  `marca` VARCHAR(45) NULL DEFAULT NULL,
  `modelo` VARCHAR(45) NULL DEFAULT NULL,
  `serie` VARCHAR(45) NOT NULL,
  `precio` FLOAT NOT NULL,
  `descProb` MEDIUMTEXT NOT NULL,
  `descTrab` MEDIUMTEXT NOT NULL,
  `Estado` VARCHAR(20) NOT NULL,
  `idSolucion` INT(11) NULL DEFAULT NULL,
  `idOrden` INT(11) NOT NULL,
  PRIMARY KEY (`idProducto`),
  INDEX `idSolucions_idx` (`idSolucion` ASC),
  INDEX `idOrdens_idx` (`idOrden` ASC),
  CONSTRAINT `idOrdens`
    FOREIGN KEY (`idOrden`)
    REFERENCES `serviciotecnico`.`ordenes` (`idOrden`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idSolucions`
    FOREIGN KEY (`idSolucion`)
    REFERENCES `serviciotecnico`.`soluciones` (`idSolucion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 24
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `serviciotecnico`.`solucionmaterial`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `serviciotecnico`.`solucionmaterial` (
  `idSolucion` INT(11) NOT NULL AUTO_INCREMENT,
  `idMaterial` INT(11) NOT NULL,
  `cantidad` INT(11) NULL DEFAULT NULL,
  INDEX `idSolucion_idx` (`idSolucion` ASC),
  INDEX `idMaterial_idx` (`idMaterial` ASC),
  CONSTRAINT `idMaterials`
    FOREIGN KEY (`idMaterial`)
    REFERENCES `serviciotecnico`.`materiales` (`idMaterial`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idSoluciones`
    FOREIGN KEY (`idSolucion`)
    REFERENCES `serviciotecnico`.`soluciones` (`idSolucion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

USE `serviciotecnico` ;

-- -----------------------------------------------------
-- procedure SP_A_CLIENTES
-- -----------------------------------------------------

DELIMITER $$
USE `serviciotecnico`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_CLIENTES`(IN _idCliente int
)
BEGIN
	if(_idCliente = 0) THEN
		SELECT * FROM Clientes;
    ELSE
		SELECT * FROM Clientes WHERE idCliente = _idCliente;
    END if;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure SP_A_ORDENES
-- -----------------------------------------------------

DELIMITER $$
USE `serviciotecnico`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_ORDENES`(IN _idOrden int
)
BEGIN
	if(_idOrden = 0) THEN
		SELECT * FROM Ordenes;
    ELSE
		SELECT * FROM Ordenes WHERE idOrden = _idOrden;
    END if;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure SP_A_PRODUCTOS
-- -----------------------------------------------------

DELIMITER $$
USE `serviciotecnico`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_PRODUCTOS`(IN _idProducto int
)
BEGIN
	if(_idProducto = 0) THEN
		SELECT * FROM Productos;
    ELSE
		SELECT * FROM Productos WHERE idProducto = _idProducto;
    END if;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure SP_A_TECNICOS
-- -----------------------------------------------------

DELIMITER $$
USE `serviciotecnico`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TECNICOS`(IN _idTecnico int
)
BEGIN
	if(_idTecnico = 0) THEN
		SELECT * FROM Tecnicos;
    ELSE
		SELECT * FROM Tecnicos WHERE idTecnico = _idTecnico;
    END if;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure SP_C_CLIENTES
-- -----------------------------------------------------

DELIMITER $$
USE `serviciotecnico`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_C_CLIENTES`(
	IN _nombres varchar(45),
	IN _apellidos varchar(45),
	IN _dni int(11),
	IN _direccion mediumtext,
	IN _celular int(11),
	IN _email varchar(100)
)
BEGIN
INSERT INTO Clientes (nombres,apellidos,dni,direccion,celular,email) 
VALUES (_nombres,_apellidos,_dni,_direccion,_celular,_email);
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure SP_C_ORDENES
-- -----------------------------------------------------

DELIMITER $$
USE `serviciotecnico`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_C_ORDENES`(
	IN _numorden int(11),
	IN _precioInicial float,
	IN _idTecnico int(11),
	IN _idCliente int(11)
)
BEGIN
INSERT INTO Ordenes (numOrden,precioInicial,idTecnico,idCliente) 
VALUES (_numorden,_precioInicial,_idTecnico,_idCliente);
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure SP_C_PRODUCTOS
-- -----------------------------------------------------

DELIMITER $$
USE `serviciotecnico`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_C_PRODUCTOS`(
	IN _tipo varchar(45),
	IN _marca varchar(45),
    IN _modelo varchar(45),
	IN _serie varchar(45),
	IN _precio float,
	IN _descProb mediumtext,
	IN _descTrab mediumtext,
	IN _Estado varchar(20),
    IN _idOrden int(11)
)
BEGIN
INSERT INTO Productos (tipo,marca,modelo,serie,precio,descProb,descTrab,Estado,idOrden) 
VALUES (_tipo,_marca,_modelo,_serie,_precio,_descProb,_descTrab,_Estado,_idOrden);
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure SP_C_TECNICOS
-- -----------------------------------------------------

DELIMITER $$
USE `serviciotecnico`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_C_TECNICOS`(
	IN _nombres varchar(45),
	IN _apellidos varchar(45),
	IN _dni int(11),
	IN _direccion mediumtext,
	IN _celular int(11),
	IN _email varchar(100),
	IN _usuario varchar(45),
	IN _contrasenia varchar(45)
)
BEGIN
INSERT INTO Tecnicos (nombres,apellidos,dni,direccion,celular,email,usuario,contrasenia) 
VALUES (_nombres,_apellidos,_dni,_direccion,_celular,_email,_usuario,_contrasenia);
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure SP_E_CLIENTES
-- -----------------------------------------------------

DELIMITER $$
USE `serviciotecnico`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_CLIENTES`(
	IN _idCliente int
)
BEGIN
DELETE FROM Clientes WHERE idCliente = _idCliente;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure SP_E_ORDENES
-- -----------------------------------------------------

DELIMITER $$
USE `serviciotecnico`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_ORDENES`(
	IN _idOrden int
)
BEGIN
DELETE FROM Ordenes WHERE idOrden = _idOrden;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure SP_E_PRODUCTOS
-- -----------------------------------------------------

DELIMITER $$
USE `serviciotecnico`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_PRODUCTOS`(
	IN _idProducto int
)
BEGIN
DELETE FROM Productos WHERE idProducto = _idProducto;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure SP_E_TECNICOS
-- -----------------------------------------------------

DELIMITER $$
USE `serviciotecnico`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_TECNICOS`(
	IN _idTecnico int
)
BEGIN
DELETE FROM Tecnicos WHERE idTecnico = _idTecnico;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure SP_M_CLIENTES
-- -----------------------------------------------------

DELIMITER $$
USE `serviciotecnico`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_CLIENTES`(
	IN _idCliente int(11),
	IN _nombres varchar(45),
	IN _apellidos varchar(45),
	IN _dni int(11),
	IN _direccion mediumtext,
	IN _celular int(11),
	IN _email varchar(100)
)
BEGIN
UPDATE Clientes SET nombres = _nombres, apellidos = _apellidos, dni = _dni, 
direccion = _direccion, celular = _celular, email = _email WHERE idCliente = _idCliente;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure SP_M_ORDENES
-- -----------------------------------------------------

DELIMITER $$
USE `serviciotecnico`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_ORDENES`(
	IN _idOrden int(11),
	IN _precioInicial float
)
BEGIN
UPDATE Ordenes SET precioInicial = _precioInicial WHERE idOrden = _idOrden;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure SP_M_PRODUCTOS
-- -----------------------------------------------------

DELIMITER $$
USE `serviciotecnico`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_PRODUCTOS`(
	IN _idProducto int(11),
	IN _Estado varchar(20),
    IN _idSolucion int(11)
)
BEGIN
UPDATE Productos SET Estado = _Estado, idSolucion = _idSolucion WHERE idProducto = _idProducto;
END$$

DELIMITER ;

-- -----------------------------------------------------
-- procedure SP_M_TECNICOS
-- -----------------------------------------------------

DELIMITER $$
USE `serviciotecnico`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TECNICOS`(
	IN _idTecnico int(11),
	IN _nombres varchar(45),
	IN _apellidos varchar(45),
	IN _dni int(11),
	IN _direccion mediumtext,
	IN _celular int(11),
	IN _email varchar(100),
	IN _usuario varchar(45),
	IN _contrasenia varchar(45)
)
BEGIN
UPDATE Tecnicos SET nombres = _nombres, apellidos = _apellidos, dni = _dni, 
direccion = _direccion, celular = _celular, email = _email, 
usuario = _usuario, contrasenia = _contrasenia WHERE idTecnico = _idTecnico;
END$$

DELIMITER ;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
