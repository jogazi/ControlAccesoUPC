-- MySQL Script generated by MySQL Workbench
-- Fri Apr 10 22:39:15 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema u892058990_AOMJK
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `u892058990_AOMJK` ;

-- -----------------------------------------------------
-- Schema u892058990_AOMJK
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `u892058990_AOMJK` DEFAULT CHARACTER SET utf8 ;
USE `u892058990_AOMJK` ;

-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`audit01`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`audit01` (
  `idpers` INT NOT NULL,
  `dateofbirth` DATE NOT NULL,
  `address` VARCHAR(60) NULL,
  `frstnam` VARCHAR(45) NOT NULL,
  `scondnam` VARCHAR(45) NULL,
  `frstlstnam` VARCHAR(45) NOT NULL,
  `scondlstnam` VARCHAR(45) NULL,
  `numphone` VARCHAR(15) NULL,
  PRIMARY KEY (`idpers`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`users` (
  `id` BIGINT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `email_verified_at` TIMESTAMP NULL,
  `password` VARCHAR(255) NOT NULL,
  `remember_token` VARCHAR(100) NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `idpers` INT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) ,
  INDEX `fk_users_persons1_idx` (`idpers` ASC) ,
  CONSTRAINT `fk_users_persons1`
    FOREIGN KEY (`idpers`)
    REFERENCES `u892058990_AOMJK`.`audit01` (`idpers`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`password_resets`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`password_resets` (
  `idpass` INT NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `token` VARCHAR(45) NOT NULL,
  `created_at` TIMESTAMP NULL,
  PRIMARY KEY (`idpass`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`migrations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`migrations` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `migration` VARCHAR(255) NOT NULL,
  `batch` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`audit05`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`audit05` (
  `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(120) NOT NULL,
  `slug` VARCHAR(120) NOT NULL,
  `description` TEXT NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`audit02`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`audit02` (
  `id` BIGINT(20) NOT NULL,
  `permission_id` BIGINT(20) NOT NULL,
  `user_id` BIGINT NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_audit02_audit051_idx` (`permission_id` ASC) ,
  INDEX `fk_audit02_users1_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_audit02_audit051`
    FOREIGN KEY (`permission_id`)
    REFERENCES `u892058990_AOMJK`.`audit05` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_audit02_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `u892058990_AOMJK`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`audit06`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`audit06` (
  `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(120) NOT NULL,
  `slug` VARCHAR(120) NOT NULL,
  `description` TEXT NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `special` ENUM('all-access', 'no-access') NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`audit03`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`audit03` (
  `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `role_id` BIGINT(20) NOT NULL,
  `permission_id` BIGINT(20) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_audit03_audit061_idx` (`role_id` ASC) ,
  INDEX `fk_audit03_audit051_idx` (`permission_id` ASC) ,
  CONSTRAINT `fk_audit03_audit061`
    FOREIGN KEY (`role_id`)
    REFERENCES `u892058990_AOMJK`.`audit06` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_audit03_audit051`
    FOREIGN KEY (`permission_id`)
    REFERENCES `u892058990_AOMJK`.`audit05` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`audit04`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`audit04` (
  `id` BIGINT(20) NOT NULL AUTO_INCREMENT,
  `role_id` BIGINT(20) NOT NULL,
  `user_id` BIGINT NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_audit04_audit061_idx` (`role_id` ASC) ,
  INDEX `fk_audit04_users1_idx` (`user_id` ASC) ,
  CONSTRAINT `fk_audit04_audit061`
    FOREIGN KEY (`role_id`)
    REFERENCES `u892058990_AOMJK`.`audit06` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_audit04_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `u892058990_AOMJK`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`audit07`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`audit07` (
  `id_sys` INT NOT NULL,
  `sys_act` ENUM('C', 'R', 'U', 'D') NOT NULL,
  `sys_date` DATETIME NOT NULL,
  `iduser` BIGINT NOT NULL,
  PRIMARY KEY (`id_sys`),
  INDEX `fk_audsys_users1_idx` (`iduser` ASC) ,
  CONSTRAINT `fk_audsys_users1`
    FOREIGN KEY (`iduser`)
    REFERENCES `u892058990_AOMJK`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`audit08`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`audit08` (
  `idauddsys` INT NOT NULL,
  `idsys` INT NOT NULL,
  `dsyscontroller` VARCHAR(45) NOT NULL,
  `dsysmethod` VARCHAR(45) NOT NULL,
  `dsysip` VARCHAR(45) NOT NULL,
  `dsysbrowser` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idauddsys`),
  INDEX `fk_auddsys_audsys1_idx` (`idsys` ASC) ,
  CONSTRAINT `fk_auddsys_audsys1`
    FOREIGN KEY (`idsys`)
    REFERENCES `u892058990_AOMJK`.`audit07` (`id_sys`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`audit20`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`audit20` (
  `idtrans` INT NOT NULL,
  `transtable` VARCHAR(45) NOT NULL,
  `audtranscol` VARCHAR(45) NOT NULL,
  `transuser` VARCHAR(45) NOT NULL,
  `transdate` DATETIME NOT NULL,
  PRIMARY KEY (`idtrans`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`audit19`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`audit19` (
  `iddettran` INT NOT NULL,
  `idtrans` INT NOT NULL,
  `dtranfile` VARCHAR(45) NOT NULL,
  `dtranvnew` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`iddettran`),
  INDEX `fk_auddtran_audtrans1_idx` (`idtrans` ASC) ,
  CONSTRAINT `fk_auddtran_audtrans1`
    FOREIGN KEY (`idtrans`)
    REFERENCES `u892058990_AOMJK`.`audit20` (`idtrans`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`audit12`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`audit12` (
  `idfilms` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  `duration` VARCHAR(10) NOT NULL,
  `premiere` VARCHAR(10) NOT NULL,
  `image` BLOB NULL,
  PRIMARY KEY (`idfilms`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`audit15`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`audit15` (
  `idrooms` INT NOT NULL AUTO_INCREMENT,
  `quality` VARCHAR(45) NOT NULL,
  `image` BLOB NOT NULL,
  PRIMARY KEY (`idrooms`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`audit14`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`audit14` (
  `idfunction` INT NOT NULL AUTO_INCREMENT,
  `time` DATETIME NOT NULL,
  `price` DOUBLE NOT NULL,
  `idroomss` INT NOT NULL,
  `idfilms` INT NOT NULL,
  PRIMARY KEY (`idfunction`),
  INDEX `idroomss_idx` (`idroomss` ASC) ,
  INDEX `fk_function_films1_idx` (`idfilms` ASC) ,
  CONSTRAINT `idrooms`
    FOREIGN KEY (`idroomss`)
    REFERENCES `u892058990_AOMJK`.`audit15` (`idrooms`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_function_films1`
    FOREIGN KEY (`idfilms`)
    REFERENCES `u892058990_AOMJK`.`audit12` (`idfilms`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`audit16`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`audit16` (
  `idseating` INT NOT NULL AUTO_INCREMENT,
  `row` INT(2) NOT NULL,
  `number` INT(2) NOT NULL,
  `idrooms` INT NOT NULL,
  PRIMARY KEY (`idseating`),
  INDEX `idrooms_idx` (`idrooms` ASC) ,
  CONSTRAINT `idrooms2`
    FOREIGN KEY (`idrooms`)
    REFERENCES `u892058990_AOMJK`.`audit15` (`idrooms`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`audit21`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`audit21` (
  `idpaytyp` INT NOT NULL AUTO_INCREMENT,
  `detpay` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idpaytyp`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`audit22`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`audit22` (
  `idticketsale` INT NOT NULL AUTO_INCREMENT,
  `salevalue` DOUBLE NOT NULL,
  `saletime` DATETIME NOT NULL,
  `idfunction` INT NOT NULL,
  `idpaytyp` INT NOT NULL,
  `id` BIGINT NOT NULL,
  `idseating` INT NOT NULL,
  PRIMARY KEY (`idticketsale`),
  INDEX `idpaymenttype_idx` (`idpaytyp` ASC) ,
  INDEX `idfuncion_idx` (`idfunction` ASC) ,
  INDEX `idusers_idx` (`id` ASC) ,
  INDEX `fk_audit22_audit161_idx` (`idseating` ASC) ,
  CONSTRAINT `idpaymenttype`
    FOREIGN KEY (`idpaytyp`)
    REFERENCES `u892058990_AOMJK`.`audit21` (`idpaytyp`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idfuncion`
    FOREIGN KEY (`idfunction`)
    REFERENCES `u892058990_AOMJK`.`audit14` (`idfunction`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `id`
    FOREIGN KEY (`id`)
    REFERENCES `u892058990_AOMJK`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_audit22_audit161`
    FOREIGN KEY (`idseating`)
    REFERENCES `u892058990_AOMJK`.`audit16` (`idseating`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`audit09`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`audit09` (
  `idactors` INT NOT NULL AUTO_INCREMENT,
  `surnames` VARCHAR(45) NOT NULL,
  `names` VARCHAR(45) NOT NULL,
  `image` BLOB NOT NULL,
  PRIMARY KEY (`idactors`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`audit13`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`audit13` (
  `iddirectors` INT NOT NULL AUTO_INCREMENT,
  `surnames` VARCHAR(45) NOT NULL,
  `names` VARCHAR(45) NOT NULL,
  `image` BLOB NOT NULL,
  PRIMARY KEY (`iddirectors`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`audit10`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`audit10` (
  `idactorxfil` INT NOT NULL AUTO_INCREMENT,
  `idactor` INT NOT NULL,
  `idfilms` INT NOT NULL,
  PRIMARY KEY (`idactorxfil`),
  INDEX `idactor_idx` (`idactor` ASC) ,
  INDEX `idfilms_idx` (`idfilms` ASC) ,
  CONSTRAINT `idactor`
    FOREIGN KEY (`idactor`)
    REFERENCES `u892058990_AOMJK`.`audit09` (`idactors`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idfilms`
    FOREIGN KEY (`idfilms`)
    REFERENCES `u892058990_AOMJK`.`audit12` (`idfilms`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`audit23`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`audit23` (
  `idfile` INT NOT NULL AUTO_INCREMENT,
  `route1` VARCHAR(200) NOT NULL,
  `extension1` ENUM('T', 'C') NOT NULL,
  `size1` VARCHAR(10) NOT NULL,
  `route2` VARCHAR(200) NOT NULL,
  `extension2` ENUM('T', 'C') NOT NULL,
  `size2` VARCHAR(10) NOT NULL,
  `date` TIMESTAMP NOT NULL,
  `id` BIGINT NOT NULL,
  PRIMARY KEY (`idfile`),
  INDEX `fk_audit23_users1_idx` (`id` ASC) ,
  CONSTRAINT `fk_audit23_users1`
    FOREIGN KEY (`id`)
    REFERENCES `u892058990_AOMJK`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `u892058990_AOMJK`.`audit11`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `u892058990_AOMJK`.`audit11` (
  `idaudit11` INT NOT NULL AUTO_INCREMENT,
  `iddirectors` INT NOT NULL,
  `idfilms` INT NOT NULL,
  PRIMARY KEY (`idaudit11`),
  INDEX `fk_audit111_audit131_idx` (`iddirectors` ASC) ,
  INDEX `fk_audit111_audit121_idx` (`idfilms` ASC) ,
  CONSTRAINT `fk_audit111_audit131`
    FOREIGN KEY (`iddirectors`)
    REFERENCES `u892058990_AOMJK`.`audit13` (`iddirectors`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_audit111_audit121`
    FOREIGN KEY (`idfilms`)
    REFERENCES `u892058990_AOMJK`.`audit12` (`idfilms`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
