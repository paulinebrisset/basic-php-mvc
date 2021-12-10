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

CREATE TABLE `miniprojetphp`.`categories` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `titre` INT NOT NULL,
    `description` INT NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO
    `items` (
        `id`,
        `titre`,
        `description`,
        `prix`,
        `publié`,
        `date`,
        `url`,
        `categorie`
    )
VALUES
    (
        NULL,
        'Tasse de café',
        'Logoden biniou degemer mat an penn ar bed disul, vihanañ c’hoarzhin Pask touellañ krib kaout Montroulez ganin Eusa, krediñ stagañ Roazhon Park rimiañ dilun dimeziñ Plouzane. Goap magañ boutañ redek vugale Mellag stagañ gwellañ Ar Vouster, moc’h koan kalet kemmañ pegañ nebeut kartoñs houarn doñv, eviti blijadur Egineg boued c’hemener sistr Lokmikael (an-Traezh). Kreñv kriz kein amzer tiegezh gouest Pabu saout drezoc\'h livañ chal c’henderv vro dek, kazh warnoc\'h evidout nizez vezañ yaou melezour harz gwele pakad atav. Ha vunutenn doug ennañ laezh boull kentañ dant arc’h, hon penaos ivin arar flamm da droug mae kazh, magañ nizez c’hroc’hen stêr plant amezeg tal. Feunten gouzout Malo troad yac’h dra plij rodell rev c’hodell plijet froud biniou brank, garantez kreskiñ kemener heuliañ sizhun tamm prad Brieg bolz sukr voger. ',
        '25.00',
        '1',
        '2021-12-09',
        'pauline/projetscolaire/public/items/tasse-de-cafe',
        '2'
    );