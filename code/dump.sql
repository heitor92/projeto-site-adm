-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema pp_criando_site_com_php
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema pp_criando_site_com_php
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pp_criando_site_com_php` ;
USE `pp_criando_site_com_php` ;

-- -----------------------------------------------------
-- Table `pp_criando_site_com_php`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pp_criando_site_com_php`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(250) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `created` DATETIME NOT NULL,
  `updated` DATETIME NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pp_criando_site_com_php`.`pages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pp_criando_site_com_php`.`pages` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(250) NOT NULL,
  `url` VARCHAR(250) NOT NULL,
  `body` TEXT NULL,
  `created` DATETIME NOT NULL,
  `updated` DATETIME NOT NULL,
  `users_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_pages_users_idx` (`users_id` ASC) VISIBLE,
  CONSTRAINT `fk_pages_users`
    FOREIGN KEY (`users_id`)
    REFERENCES `pp_criando_site_com_php`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
