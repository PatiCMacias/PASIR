-- MySQL Script generated by MySQL Workbench
-- Fri Dec  8 19:15:16 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Spotters
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `Spotters` ;

-- -----------------------------------------------------
-- Schema Spotters
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Spotters` DEFAULT CHARACTER SET utf8 ;
USE `Spotters` ;

-- -----------------------------------------------------
-- Table `Spotters`.`AEROPUERTOS`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Spotters`.`AEROPUERTOS` ;

CREATE TABLE IF NOT EXISTS `Spotters`.`AEROPUERTOS` (
    `idAEROPUERTOS` VARCHAR(45) NOT NULL,
    `nombre` VARCHAR(45) NULL,
    `ubicacion` VARCHAR(45) NULL,
    `civil/militar` VARCHAR(45) NULL,
    PRIMARY KEY (`idAEROPUERTOS`))
    ENGINE = InnoDB;



-- -----------------------------------------------------
-- Table `Spotters`.`AVIONES`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Spotters`.`AVIONES` ;

CREATE TABLE IF NOT EXISTS `Spotters`.`AVIONES` (
    `idAVION` VARCHAR(45) NOT NULL,
    `modelo` VARCHAR(45) NULL,
    `tipo` VARCHAR(45) NULL,
    `alcance` VARCHAR(45) NULL,
    `img` VARCHAR(255) NULL,
    `idAEROPUERTOS` VARCHAR(45) NULL,
    PRIMARY KEY (`idAVION`),
    CONSTRAINT `fk_aeropuerto`
    FOREIGN KEY (`idAEROPUERTOS`)
    REFERENCES `AEROPUERTOS` (`idAEROPUERTOS`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
    ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Spotters`.`USUARIOS`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Spotters`.`USUARIOS` ;

CREATE TABLE IF NOT EXISTS `Spotters`.`USUARIOS` (
    `id` VARCHAR(50) NOT NULL,
    `nombre` VARCHAR(50) NOT NULL,
    `email` VARCHAR(45) NULL,
    `password` VARCHAR(45) NULL,
    PRIMARY KEY (`id`))
    ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `Spotters`.`AEROPUERTOS`
-- -----------------------------------------------------
START TRANSACTION;
USE `Spotters`;
INSERT INTO `Spotters`.`AEROPUERTOS` (`idAEROPUERTOS`, `nombre`, `ubicacion`, `civil/militar`) VALUES ('LEMD', 'Madrid Barajas', 'Barajas', 'civil');
INSERT INTO `Spotters`.`AEROPUERTOS` (`idAEROPUERTOS`, `nombre`, `ubicacion`, `civil/militar`) VALUES ('LETO', 'Base Aerea Torrejon', 'Torrejon', 'militar');
INSERT INTO `Spotters`.`AEROPUERTOS` (`idAEROPUERTOS`, `nombre`, `ubicacion`, `civil/militar`) VALUES ('LEGT', 'Base Aerea Getafe', 'Getafe', 'militar');
INSERT INTO `Spotters`.`AEROPUERTOS` (`idAEROPUERTOS`, `nombre`, `ubicacion`, `civil/militar`) VALUES ('LECV', 'Base Aerea Cuatro Vientos', 'Cuatro Vientos ', 'militar');

COMMIT;


-- -----------------------------------------------------
-- Data for table `Spotters`.`AVIONES`
-- -----------------------------------------------------
START TRANSACTION;
USE `Spotters`;
INSERT INTO `Spotters`.`AVIONES` (`idAVION`, `modelo`, `tipo`, `alcance`, `idAEROPUERTOS`, `img`) VALUES ('F18', 'F/A-18C', 'reactor', '3300KM', 'LETO', '/PASIR/images/Aviones/F18_LETO.jpg');
INSERT INTO `Spotters`.`AVIONES` (`idAVION`, `modelo`, `tipo`, `alcance`, `idAEROPUERTOS`, `img`) VALUES ('F900', 'Falcon 900B', 'reactor', '6100KM', 'LETO', '/PASIR/images/Aviones/F900_LETO.jpg');
INSERT INTO `Spotters`.`AVIONES` (`idAVION`, `modelo`, `tipo`, `alcance`, `idAEROPUERTOS`, `img`) VALUES ('A310', 'Airbus A310', 'reactor', '8000KM', 'LETO', '/PASIR/images/Aviones/A310_LETO.jpg');
INSERT INTO `Spotters`.`AVIONES` (`idAVION`, `modelo`, `tipo`, `alcance`, `idAEROPUERTOS`, `img`) VALUES ('A332', 'Airbus A330-200', 'reactor', '13450KM', 'LETO', '/PASIR/images/Aviones/A332_LETO_4.jpg');
INSERT INTO `Spotters`.`AVIONES` (`idAVION`, `modelo`, `tipo`, `alcance`, `idAEROPUERTOS`, `img`) VALUES ('CL215', 'Bombardier Canadair CL-215', 'helice', '2200KM', 'LETO', '/PASIR/images/Aviones/CL215_LETO.jpg');
INSERT INTO `Spotters`.`AVIONES` (`idAVION`, `modelo`, `tipo`, `alcance`, `idAEROPUERTOS`, `img`) VALUES ('C295', 'Casa C-295', 'turbohelice', '5600KM', 'LEGT', '/PASIR/images/Aviones/CL215_LETO.jpg');
INSERT INTO `Spotters`.`AVIONES` (`idAVION`, `modelo`, `tipo`, `alcance`, `idAEROPUERTOS`, `img`) VALUES ('NH90', 'NHIndustries NH90', 'ala rotatoria', '982KM', 'LECV', '/PASIR/images/Aviones/NH90_LECV.jpg');
INSERT INTO `Spotters`.`AVIONES` (`idAVION`, `modelo`, `tipo`, `alcance`, `idAEROPUERTOS`, `img`) VALUES ('AS332', 'Eurocopter AS332 Super Puma', 'ala rotatoria', '866KM', 'LECV', '/PASIR/images/Aviones/S332_LECV.jpg');
INSERT INTO `Spotters`.`AVIONES` (`idAVION`, `modelo`, `tipo`, `alcance`, `idAEROPUERTOS`, `img`) VALUES ('A319', 'Airbus A319', 'reactor', '6900KM', 'LEMD', '/PASIR/images/Aviones/A319_LEMD.jpg');
INSERT INTO `Spotters`.`AVIONES` (`idAVION`, `modelo`, `tipo`, `alcance`, `idAEROPUERTOS`, `img`) VALUES ('A321', 'Airbus A320-100', 'reactor', '6100KM', 'LEMD', '/PASIR/images/Aviones/A321_LEMD.jpg');
INSERT INTO `Spotters`.`AVIONES` (`idAVION`, `modelo`, `tipo`, `alcance`, `idAEROPUERTOS`, `img`) VALUES ('B738', 'Boeing 737-800', 'reactor', '5700KM', 'LEMD', '/PASIR/images/Aviones/B738_LEMD.jpg');
INSERT INTO `Spotters`.`AVIONES` (`idAVION`, `modelo`, `tipo`, `alcance`, `idAEROPUERTOS`, `img`) VALUES ('B748', 'Boeing 747-800', 'reactor', '15000KM', 'LEMD', '/PASIR/images/Aviones/B748_LEMD.jpg');
INSERT INTO `Spotters`.`AVIONES` (`idAVION`, `modelo`, `tipo`, `alcance`, `idAEROPUERTOS`, `img`) VALUES ('B779', 'Boeing 777-900', 'reactor', '12000KM', 'LEMD', '/PASIR/images/Aviones/B779_LEMD.jpg');
INSERT INTO `Spotters`.`AVIONES` (`idAVION`, `modelo`, `tipo`, `alcance`, `idAEROPUERTOS`, `img`) VALUES ('B789', 'Boeing 787-900', 'reactor', '15700KM', 'LEMD', '/PASIR/images/Aviones/B789_LEMD.jpg');

COMMIT;

-- -----------------------------------------------------
-- Data for table `Spotters`.`USUARIOS`
-- -----------------------------------------------------
START TRANSACTION;
USE `Spotters`;
INSERT INTO Spotters.USUARIOS (id, nombre, email, password) VALUES
(UUID(), 'Usuario1', 'usuario1@example.com', 'contrasena1'),
(UUID(), 'Usuario2', 'usuario2@example.com', 'contrasena2'),
(UUID(), 'Usuario3', 'usuario3@example.com', 'contrasena3'),
(UUID(), 'Usuario4', 'usuario4@example.com', 'contrasena4'),
(UUID(), 'Usuario5', 'usuario5@example.com', 'contrasena5');

COMMIT;

