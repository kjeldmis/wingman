<?php
require 'model.php';
/*
 * location SQL script
 * 
 * 
-- -----------------------------------------------------
-- Table `wingman`.`Location`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `wingman`.`Location` (
  `area` VARCHAR(50) NOT NULL ,
  `row` INT NOT NULL ,
  `no` INT NOT NULL ,
  `locationID` INT NOT NULL AUTO_INCREMENT ,
  `locationType` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`locationID`) ,
  UNIQUE INDEX `locationID_UNIQUE` (`locationID` ASC) )
ENGINE = InnoDB;

 */

class MLocation extends Model 
{
	
}  