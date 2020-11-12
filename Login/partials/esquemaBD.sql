-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`user` (
  `username` VARCHAR(16) NOT NULL,
  `email` VARCHAR(255) NULL,
  `password` VARCHAR(32) NOT NULL,
  `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP);


-- -----------------------------------------------------
-- Table `mydb`.`user_1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`user_1` (
  `username` VARCHAR(16) NOT NULL,
  `email` VARCHAR(255) NULL,
  `password` VARCHAR(32) NOT NULL,
  `create_time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP);


-- -----------------------------------------------------
-- Table `mydb`.`Dependencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Dependencia` (
  `idDependencia` INT NOT NULL AUTO_INCREMENT,
  `Nombredep` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idDependencia`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Usuarios` (
  `idUsuarios` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  `Apellido` VARCHAR(45) NOT NULL,
  `Fecha_Nacimiento` DATETIME NULL,
  `email` VARCHAR(45) NOT NULL,
  `Telefono` VARCHAR(45) NOT NULL,
  `Dependencia_idDependencia` INT NOT NULL,
  PRIMARY KEY (`idUsuarios`, `Dependencia_idDependencia`),
  INDEX `fk_Usuarios_Dependencia_idx` (`Dependencia_idDependencia` ASC) VISIBLE,
  CONSTRAINT `fk_Usuarios_Dependencia`
    FOREIGN KEY (`Dependencia_idDependencia`)
    REFERENCES `mydb`.`Dependencia` (`idDependencia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Documento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Documento` (
  `idDocumento` INT NOT NULL,
  `Nombre_doc` VARCHAR(45) NOT NULL,
  `Tipo_doc` VARCHAR(45) NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` TINYINT NOT NULL DEFAULT 1,
  `Usuarios_idUsuarios` INT NOT NULL,
  PRIMARY KEY (`idDocumento`, `Usuarios_idUsuarios`),
  INDEX `fk_Documento_Usuarios1_idx` (`Usuarios_idUsuarios` ASC) VISIBLE,
  CONSTRAINT `fk_Documento_Usuarios1`
    FOREIGN KEY (`Usuarios_idUsuarios`)
    REFERENCES `mydb`.`Usuarios` (`idUsuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Agenda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Agenda` (
  `idAgenda` INT NOT NULL AUTO_INCREMENT,
  `Nombre_Agenda` VARCHAR(200) NOT NULL,
  `Fecha` DATETIME NOT NULL,
  `Descripcion` TEXT NOT NULL,
  `Lugar` VARCHAR(100) NULL,
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idAgenda`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Usuarios_has_Agenda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Usuarios_has_Agenda` (
  `Usuarios_idUsuarios` INT NOT NULL,
  `Agenda_idAgenda` INT NOT NULL,
  PRIMARY KEY (`Usuarios_idUsuarios`, `Agenda_idAgenda`),
  INDEX `fk_Usuarios_has_Agenda_Agenda1_idx` (`Agenda_idAgenda` ASC) VISIBLE,
  INDEX `fk_Usuarios_has_Agenda_Usuarios1_idx` (`Usuarios_idUsuarios` ASC) VISIBLE,
  CONSTRAINT `fk_Usuarios_has_Agenda_Usuarios1`
    FOREIGN KEY (`Usuarios_idUsuarios`)
    REFERENCES `mydb`.`Usuarios` (`idUsuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuarios_has_Agenda_Agenda1`
    FOREIGN KEY (`Agenda_idAgenda`)
    REFERENCES `mydb`.`Agenda` (`idAgenda`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
