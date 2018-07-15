CREATE SCHEMA `estrutura_mvc` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE `estrutura_mvc`.`anuncios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));


INSERT INTO `estrutura_mvc`.`anuncios` (`titulo`) VALUES ('Teste');
INSERT INTO `estrutura_mvc`.`anuncios` (`titulo`) VALUES ('Testando 123');








