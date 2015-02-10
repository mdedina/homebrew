SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `beer_project_db` DEFAULT CHARACTER SET utf8 ;
USE `beer_project_db` ;

-- -----------------------------------------------------
-- Table `beer_project_db`.`orders`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `beer_project_db`.`orders` (
  `id` INT(11) NOT NULL ,
  `total` DECIMAL(10,0) NULL DEFAULT NULL ,
  `shipped_bool` TINYINT(1) NULL DEFAULT NULL ,
  `shipping_method` VARCHAR(255) NULL DEFAULT NULL ,
  `shipping_number` INT(11) NULL DEFAULT NULL ,
  `shipped_at` DATETIME NULL DEFAULT NULL ,
  `created_at` DATETIME NULL DEFAULT NULL ,
  `updated_at` DATETIME NULL DEFAULT NULL ,
  `subtotal` DECIMAL(10,0) NULL DEFAULT NULL ,
  `tax` DECIMAL(10,0) NULL DEFAULT NULL ,
  `shipping_price` DECIMAL(10,0) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `beer_project_db`.`categories`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `beer_project_db`.`categories` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL DEFAULT NULL ,
  `created_at` DATETIME NULL DEFAULT NULL ,
  `updated_at` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `beer_project_db`.`people`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `beer_project_db`.`people` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `admin_bool` TINYINT(1) NULL DEFAULT NULL ,
  `email` VARCHAR(45) NULL DEFAULT NULL ,
  `password` VARCHAR(32) NULL DEFAULT NULL ,
  `categories_id` INT(11) NOT NULL ,
  `first_name` VARCHAR(255) NULL DEFAULT NULL ,
  `last_name` VARCHAR(255) NULL DEFAULT NULL ,
  `created_at` DATETIME NULL DEFAULT NULL ,
  `updated_at` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_people_categories1_idx` (`categories_id` ASC) ,
  CONSTRAINT `fk_people_categories1`
    FOREIGN KEY (`categories_id` )
    REFERENCES `beer_project_db`.`categories` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `beer_project_db`.`addresses`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `beer_project_db`.`addresses` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `people_id` INT(11) NOT NULL ,
  `created_at` DATETIME NULL DEFAULT NULL ,
  `updated_at` DATETIME NULL DEFAULT NULL ,
  `street 1` VARCHAR(255) NULL DEFAULT NULL ,
  `street 2` VARCHAR(255) NULL DEFAULT NULL ,
  `city` VARCHAR(255) NULL DEFAULT NULL ,
  `state` VARCHAR(2) NULL DEFAULT NULL ,
  `zip` VARCHAR(10) NULL DEFAULT NULL ,
  `bool_shipping` TINYINT(1) NULL DEFAULT '0' ,
  `bool_billing` TINYINT(1) NULL DEFAULT '0' ,
  `orders_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`, `people_id`, `orders_id`) ,
  INDEX `fk_addresses_people_idx` (`people_id` ASC) ,
  INDEX `fk_addresses_orders1_idx` (`orders_id` ASC) ,
  CONSTRAINT `fk_addresses_orders1`
    FOREIGN KEY (`orders_id` )
    REFERENCES `beer_project_db`.`orders` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_addresses_people`
    FOREIGN KEY (`people_id` )
    REFERENCES `beer_project_db`.`people` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `beer_project_db`.`products`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `beer_project_db`.`products` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NULL DEFAULT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `price` DECIMAL(10,0) NULL DEFAULT NULL ,
  `num_in_stock` INT(11) NULL DEFAULT NULL ,
  `num_sold_prev_yr` INT(11) NULL DEFAULT NULL ,
  `image_name` VARCHAR(255) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `beer_project_db`.`reviews`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `beer_project_db`.`reviews` (
  `id` INT(11) NOT NULL ,
  `products_id` INT(11) NOT NULL ,
  `rating` INT(11) NULL DEFAULT NULL ,
  `title` VARCHAR(255) NULL DEFAULT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `created_at` DATETIME NULL DEFAULT NULL ,
  `updated_at` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`, `products_id`) ,
  INDEX `fk_reviews_products1_idx` (`products_id` ASC) ,
  CONSTRAINT `fk_reviews_products1`
    FOREIGN KEY (`products_id` )
    REFERENCES `beer_project_db`.`products` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `beer_project_db`.`comments`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `beer_project_db`.`comments` (
  `id` INT(11) NOT NULL ,
  `people_id` INT(11) NOT NULL ,
  `created_at` DATETIME NULL DEFAULT NULL ,
  `updated_at` DATETIME NULL DEFAULT NULL ,
  `reviews_id` INT(11) NOT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  PRIMARY KEY (`id`, `people_id`) ,
  INDEX `fk_comments_reviews1_idx` (`reviews_id` ASC) ,
  INDEX `fk_comments_people1_idx` (`people_id` ASC) ,
  CONSTRAINT `fk_comments_people1`
    FOREIGN KEY (`people_id` )
    REFERENCES `beer_project_db`.`people` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comments_reviews1`
    FOREIGN KEY (`reviews_id` )
    REFERENCES `beer_project_db`.`reviews` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `beer_project_db`.`payment_methods`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `beer_project_db`.`payment_methods` (
  `id` INT(11) NOT NULL ,
  `type` VARCHAR(45) NULL DEFAULT NULL ,
  `people_id` INT(11) NOT NULL ,
  `created_at` DATETIME NULL DEFAULT NULL ,
  `updated_at` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_payment_methods_people1_idx` (`people_id` ASC) ,
  CONSTRAINT `fk_payment_methods_people1`
    FOREIGN KEY (`people_id` )
    REFERENCES `beer_project_db`.`people` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `beer_project_db`.`products_categories`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `beer_project_db`.`products_categories` (
  `products_id` INT(11) NOT NULL ,
  `categories_id` INT(11) NOT NULL ,
  PRIMARY KEY (`products_id`, `categories_id`) ,
  INDEX `fk_products_has_categories_categories1_idx` (`categories_id` ASC) ,
  INDEX `fk_products_has_categories_products1_idx` (`products_id` ASC) ,
  CONSTRAINT `fk_products_has_categories_categories1`
    FOREIGN KEY (`categories_id` )
    REFERENCES `beer_project_db`.`categories` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_has_categories_products1`
    FOREIGN KEY (`products_id` )
    REFERENCES `beer_project_db`.`products` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `beer_project_db`.`shopping_cart`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `beer_project_db`.`shopping_cart` (
  `id` INT(11) NOT NULL ,
  `people_id` INT(11) NOT NULL ,
  `total` DECIMAL(10,0) NULL DEFAULT NULL ,
  `shopping_cartcol` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_shopping_cart_people1_idx` (`people_id` ASC) ,
  CONSTRAINT `fk_shopping_cart_people1`
    FOREIGN KEY (`people_id` )
    REFERENCES `beer_project_db`.`people` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

USE `beer_project_db` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
