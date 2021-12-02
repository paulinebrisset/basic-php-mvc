CREATE DATABASE utilisateurs;

CREATE TABLE `utilisateurs`.`utilisateurs` 
( `id` INT(8) NOT NULL AUTO_INCREMENT , 
`nom` VARCHAR(50) NOT NULL , 
`mail` VARCHAR(50) NOT NULL , 
`mdp` VARCHAR(50) NOT NULL , 
PRIMARY KEY (`id`), 
UNIQUE `mail` (`mail`)
) ENGINE = InnoDB;
ALTER TABLE `utilisateurs` ADD `droit` BOOLEAN NOT NULL AFTER `mdp`;

