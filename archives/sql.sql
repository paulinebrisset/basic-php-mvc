CREATE DATABASE miniprojetphp;

CREATE TABLE `miniprojetphp`.`utilisateurs` (
    `id` INT(8) NOT NULL AUTO_INCREMENT,
    `nom` VARCHAR(50) NOT NULL,
    `mail` VARCHAR(50) NOT NULL,
    `mdp` VARCHAR(50) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE `mail` (`mail`)
) ENGINE = InnoDB;

ALTER TABLE
    `utilisateurs`
ADD
    `droit` BOOLEAN NOT NULL
AFTER
    `mdp`;

CREATE TABLE `miniprojetphp`.`items` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `titre` VARCHAR(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    `description` LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
    `prix` DECIMAL(10, 2) NOT NULL,
    `publié` BOOLEAN NOT NULL,
    `date` DATE NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;