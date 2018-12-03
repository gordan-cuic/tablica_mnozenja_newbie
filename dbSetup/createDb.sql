CREATE SCHEMA `tablica_mnozenja_1` DEFAULT CHARACTER SET utf8;
-- dodati usera tablicni_mnozator s passwordom tablicni_mnozator i svim pravima za schemu tablica_mnozenja_1

-- kreiranje tablice
CREATE TABLE `tablica_mnozenja_1`.`povijest_rezultata` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `factor1` INT NOT NULL,
  `factor2` INT NOT NULL,
  `operation` CHAR(1) NOT NULL DEFAULT '*',
  `result` INT NOT NULL,
  `operation_date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`))
COMMENT = 'Ova tablica sadrzi povijest svih napravljenih operacija';
