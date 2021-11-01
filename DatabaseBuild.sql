-- ===================================================================
-- Jeweleries-DatabaseBuild
--   This script builds the dbInventory database and its table.  It also 
-- inserts data into the table.
-- ===================================================================

-- -------------------------------------------------------------------
-- Save selected MySQL settings
-- -------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -------------------------------------------------------------------
-- Delete and create database
-- -------------------------------------------------------------------
DROP SCHEMA IF EXISTS `dbInventory` ;
CREATE SCHEMA IF NOT EXISTS `dbInventory` DEFAULT CHARACTER SET utf8 ;

-- -------------------------------------------------------------------
-- Switch to dbInventory database
-- -------------------------------------------------------------------
USE dbInventory;

-- -------------------------------------------------------------------
-- Delete and create table `dbCities`.`tbCities`
-- -------------------------------------------------------------------
DROP TABLE IF EXISTS `dbInventory`.`tbInventory` ;
CREATE TABLE IF NOT EXISTS `dbInventory`.`tbInventory` (
  `ProductID` INT NOT NULL AUTO_INCREMENT,
  `Product` VARCHAR(45) NOT NULL,
  `Description` VARCHAR(100) NOT NULL,
  `Image` VARCHAR(200) NOT NULL,
  `Price` DECIMAL(12,2) NOT NULL,
  `Quantity` INT NOT NULL,
  PRIMARY KEY (`ProductID`))
ENGINE = InnoDB;

-- -------------------------------------------------------------------
-- Insert data into table `dbInventory`.`tbInventory`
-- -------------------------------------------------------------------
INSERT INTO tbInventory (Product,Description,Image,Price,Quantity) VALUES 
('Item1','For everyday used',"<img src='Item1.jpg' alt='Image Missing!' style='width:100px; height:100px'>",100,99),
("Item2","Needle necklace","<img src='Item2.jpg' alt='Image Missing!' style='width:100px; height:100px'>",150,186),
("Item3","Medical symbol necklace","<img src='Item3.jpg' alt='Image Missing!' style='width:100px; height:100px'>",200,144),
("Item4","Brain pin","<img src='Item4.jpg' alt='Image Missing!' style='width:100px; height:100px'>",50,495),
("Item5","Stethoscope Necklace","<img src='Item5.jpg' alt='Image Missing!' style='width:100px; height:100px'>",250,201);
SELECT * FROM tbInventory;

-- -------------------------------------------------------------------
-- Restore saved MySQL settings
-- -------------------------------------------------------------------
SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
