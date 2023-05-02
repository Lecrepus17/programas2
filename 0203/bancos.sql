-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema sistematwig
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sistematwig
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sistematwig` DEFAULT CHARACTER SET utf8 ;
USE `sistematwig` ;

-- -----------------------------------------------------
-- Table `sistematwig`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistematwig`.`usuarios` (
  `idusuarios` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(250) NOT NULL,
  `email` VARCHAR(250) NOT NULL,
  `username` VARCHAR(250) NOT NULL,
  `senha` VARCHAR(250) NOT NULL,
  `admin` TINYINT NOT NULL DEFAULT 0,
  `ativo` TINYINT NOT NULL DEFAULT 0,
  PRIMARY KEY (`idusuarios`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `sistematwig`.`produtos` (
  `idprodutos` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(300) NULL,
  `preco` VARCHAR(100) NULL,
  `ativo` TINYINT NOT NULL DEFAULT 0,
  `imagem` VARCHAR(200) NULL,
  PRIMARY KEY (`idprodutos`));



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
