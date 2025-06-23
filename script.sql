CREATE TABLE `db2502.e0`.`tbmodule` (
	`id` INT NOT NULL AUTO_INCREMENT , 
	`name` VARCHAR(40) NOT NULL , 
	`hours` TINYINT UNSIGNED NOT NULL DEFAULT '40' , 
	`fee` SMALLINT UNSIGNED NOT NULL DEFAULT '200' , 
	PRIMARY KEY (`id`), 
	UNIQUE `ix_module_name` (`name`)) ENGINE = InnoDB;


INSERT INTO `tbmodule` (`id`, `name`, `hours`, `fee`) VALUES 
(NULL, 'Logic building with C', '48', '250'), 
(NULL, 'Web design with HTML5, CSS3 & Javascript', '54', '300');