-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema bombeiro
-- -----------------------------------------------------
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`aluno` (
  `idaluno` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `cpf` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`idaluno`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`disciplina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`disciplina` (
  `idaluno` INT NOT NULL,
  `nome_disciplina` VARCHAR(45) NOT NULL,
  `iddisciplina` INT NOT NULL AUTO_INCREMENT,
  `nota` FLOAT NULL,
  INDEX `fk_disciplina_aluno_idx` (`idaluno` ASC),
  PRIMARY KEY (`iddisciplina`),
  CONSTRAINT `fk_disciplina_aluno`
    FOREIGN KEY (`idaluno`)
    REFERENCES `mydb`.`aluno` (`idaluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`turma`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`turma` (
  `idturma` INT NOT NULL AUTO_INCREMENT,
  `nome_turma` VARCHAR(45) NOT NULL,
  `idaluno` INT NOT NULL,
  PRIMARY KEY (`idturma`),
  INDEX `fk_turma_aluno1_idx` (`idaluno` ASC),
  CONSTRAINT `fk_turma_aluno1`
    FOREIGN KEY (`idaluno`)
    REFERENCES `mydb`.`aluno` (`idaluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
