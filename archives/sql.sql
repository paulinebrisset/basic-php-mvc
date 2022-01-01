
DROP DATABASE IF EXISTS  miniprojetphp;
CREATE DATABASE miniprojetphp;
USE  miniprojetphp;

CREATE TABLE  utilisateurs  (
     id_utilisateur  INT(8) NOT NULL AUTO_INCREMENT,
     nom  VARCHAR(50) NOT NULL,
     mail  VARCHAR(50) NOT NULL,
     mdp  VARCHAR(50) NOT NULL,
     droit tinyint NOT NULL DEFAULT '0',
     vendeur BOOLEAN NOT NULL DEFAULT false,
    PRIMARY KEY ( id_utilisateur ),
    UNIQUE  mail  ( mail )
);

CREATE TABLE  categories  (
     id_categorie  INT NOT NULL AUTO_INCREMENT,
     nom_categorie  varchar(50) NOT NULL,
     description_categorie VARCHAR(100) NOT NULL,
    PRIMARY KEY ( id_categorie )
);

CREATE TABLE  items  (
     id_item  INT NOT NULL AUTO_INCREMENT,
     id_categorie INT NOT NULL,
     titre  VARCHAR(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
     description LONGTEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
     prix  DECIMAL(10, 2) NOT NULL,
     publie  BOOLEAN NOT NULL,
     date  DATE NOT NULL,
     image varchar(35) DEFAULT 'default.png',
     PRIMARY KEY (id_item ),
    CONSTRAINT ITEMS_FK FOREIGN KEY (id_categorie) references categories (id_categorie)
);
INSERT INTO  categories  (id_categorie, nom_categorie, description_categorie)
VALUES 
(NULL, 'Café à consommer', "Café prêt à être consommé"),
(NULL, 'Vaisselle et ustensiles', "Vaisselle et ustensiles"),
(NULL, 'Thé prêt à consommer', "Thé prêt à consommer"),
(NULL, 'Café en vrac', "Café en vrac"),
(NULL, 'Objets déco', "Objets déco");

INSERT INTO `items` (`id_item`, `titre`, `description`, `prix`, `publie`, `date`, `id_categorie`, `image`) 
VALUES 
(NULL, 'Tasse de thé italienne', 'Logoden biniou degemer mat an penn ar bed disul, vihanañ c’hoarzhin Pask touellañ krib kaout Montroulez ganin Eusa, krediñ stagañ Roazhon Park rimiañ dilun dimeziñ Plouzane. Goap magañ boutañ redek vugale Mellag stagañ gwellañ Ar Vouster, moc’h koan kalet kemmañ pegañ nebeut kartoñs houarn doñv, eviti blijadur Egineg boued c’hemener sistr Lokmikael (an-Traezh). Kreñv kriz kein amzer tiegezh gouest Pabu.', '42.00', '1', '2021-12-09', '2', 'tasse_italienne.jpg'), 
(NULL, 'Tasse de café', 'Logoden biniou degemer mat an penn ar bed disul, vihanañ c’hoarzhin Pask touellañ krib kaout Montroulez ganin Eusa, krediñ stagañ Roazhon Park rimiañ dilun dimeziñ Plouzane. Goap magañ boutañ redek vugale Mellag stagañ gwellañ Ar Vouster, moc’h koan kalet kemmañ pegañ nebeut kartoñs houarn doñv, eviti blijadur Egineg boued c’hemener sistr Lokmikael (an-Traezh). Kreñv kriz kein amzer tiegezh gouest Pabu saout drezoc\'h livañ chal c’henderv vro dek, kazh warnoc\'h evidout nizez vezañ yaou melezour harz gwele pakad atav. Ha vunutenn doug ennañ laezh boull kentañ dant arc’h, hon penaos ivin arar flamm da droug mae kazh, magañ nizez c’hroc’hen stêr plant amezeg tal. Feunten gouzout Malo troad yac’h dra plij rodell rev c’hodell plijet froud biniou brank, garantez kreskiñ kemener heuliañ sizhun tamm prad Brieg bolz sukr voger. ', '10.00', '1', '2021-12-09', '2', 'tasse.png'), 
(NULL, 'Chemex', 'Logoden biniou degemer mat an penn ar bed disul, vihanañ c’hoarzhin Pask touellañ krib kaout Montroulez ganin Eusa, krediñ stagañ Roazhon Park rimiañ dilun dimeziñ Plouzane. Goap magañ boutañ redek vugale Mellag stagañ gwellañ Ar Vouster, moc’h koan kalet kemmañ pegañ nebeut kartoñs houarn doñv, eviti blijadur Egineg boued c’hemener sistr Lokmikael (an-Traezh). Kreñv kriz kein amzer tiegezh gouest Pabu saout drezoc\'h livañ chal c’henderv vro dek, kazh warnoc\'h evidout nizez vezañ yaou melezour harz gwele pakad atav. Ha vunutenn doug ennañ laezh boull kentañ dant arc’h, hon penaos ivin arar flamm da droug mae kazh, magañ nizez c’hroc’hen stêr plant amezeg tal. Feunten gouzout Malo troad yac’h dra plij rodell rev c’hodell plijet froud biniou brank, garantez kreskiñ kemener heuliañ sizhun tamm prad Brieg bolz sukr voger. ', '25.00', '1', '2021-12-09', '2', 'chemex.png'), 
(NULL, 'Cafetière', 'Logoden biniou degemer mat an penn ar bed disul, vihanañ c’hoarzhin Pask touellañ krib kaout Montroulez ganin Eusa, krediñ stagañ Roazhon Park rimiañ dilun dimeziñ Plouzane. Goap magañ boutañ redek vugale Mellag stagañ gwellañ Ar Vouster, moc’h koan kalet kemmañ pegañ nebeut kartoñs houarn doñv, eviti blijadur Egineg boued c’hemener sistr Lokmikael (an-Traezh). Kreñv kriz kein amzer tiegezh gouest Pabu saout drezoc\'h livañ chal c’henderv vro dek, kazh warnoc\'h evidout nizez vezañ yaou melezour harz gwele pakad atav. Ha vunutenn doug ennañ laezh boull kentañ dant arc’h, hon penaos ivin arar flamm da droug mae kazh, magañ nizez c’hroc’hen stêr plant amezeg tal. Feunten gouzout Malo troad yac’h dra plij rodell rev c’hodell plijet froud biniou brank, garantez kreskiñ kemener heuliañ sizhun tamm prad Brieg bolz sukr voger. ', '15.00', '1', '2021-12-09', '2', 'biatelli.jpg'), 
(NULL, 'Thé à la viande', 'Ha vunutenn doug ennañ laezh boull kentañ dant arc’h, hon penaos ivin arar flamm da droug mae kazh, magañ nizez c’hroc’hen stêr plant amezeg tal. Feunten gouzout Malo troad yac’h dra plij rodell rev c’hodell plijet froud biniou brank, garantez kreskiñ kemener heuliañ sizhun tamm prad Brieg bolz sukr voger. biniou.', '17.80', '1', '2020-09-03',  '2', 'service_the.jpg'), 
(NULL, 'Petite assiette à café', 'Ha vunutenn doug ennañ laezh boull kentañ dant arc’h, hon penaos ivin arar flamm da droug mae kazh, magañ nizez c’hroc’hen stêr plant amezeg tal. Feunten gouzout Malo troad yac’h dra plij rodell rev c’hodell plijet froud biniou brank, garantez kreskiñ kemener heuliañ sizhun tamm prad Brieg bolz sukr voger. biniou.', '7.00', '1', '2020-09-03',  '1', 'macarons.jpg'), 
(NULL, 'Pochette de café ', 'Délicieuse', '12.00', '1',  '2020-09-03', '1', 'sac_grain.webp'), 
(NULL, 'Confiture de lait', 'Authentique et sucrée', '14.00', '1', '2020-09-03',  '1', 'confiture.webp'), 
(NULL, 'Baba au rhum', 'tre', '12.00', '1', '2020-09-03',  '1', 'baba.jpg'), 
(NULL, 'Bichette', 'Belle bichette en tissu', '450.00', '1', '2020-09-03', '2', 'bichette.jpg');

INSERT INTO `utilisateurs` (`id_utilisateur`, `nom`, `mail`, `mdp`, `droit`) 
VALUES 
(NULL, 'pauline', 'pauline.brisset94@gmail.com', 'pauline', '1'), 
(NULL, 'michel', 'michel@michel.com', 'michel', '0'),
 (NULL, 'joséphine', 'jo@josephine.com', 'josephine', '0'), 
 (NULL, 'julien', 'julien@julien.com', 'julien', '0'), 
 (NULL, 'pauline', 'pauline@pauline.com', 'pauline', '0'), 
 (NULL, 'DANIEL', 'daniel@daniel.fr', 'daniel', '0'), 
 (NULL, 'lara', 'lara@lara.com', 'lara', '0'), 
 (NULL, 'edouard', 'edouard@edouard.com', 'edouard', '0'), 
 (NULL, 'marie', 'marie@marie.com', 'marie', '0'), 
 (NULL, 'bichette', 'bichette@bichette.com', 'bichette', '0'), 
 (NULL, 'willy', 'willy@willy.com', 'willy', '0'), 
 (NULL, 'katarina', 'katarina@katarina.com', 'katarina', '0'), 
 (NULL, 'micheline', 'micheline@micheline.com', 'micheline', '0'), 
 (NULL, 'patricia', 'patricia@patricia.com', 'patricia', '0');

