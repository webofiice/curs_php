CREATE TABLE `mysite21`.
    `utilizatori` ( 
        `id` INT UNSIGNED NOT NULL AUTO_INCREMENT , 
        `prenume` VARCHAR(50) NOT NULL , 
        `nume` VARCHAR(50) NOT NULL , 
        `email` VARCHAR(100) NOT NULL , 
        `parola` VARCHAR(250) NOT NULL , 
        `data_nastere` DATE NOT NULL , 
        `sex` ENUM('m','f','n') NOT NULL DEFAULT '\'n\'' , `telefon` CHAR(10) NOT NULL , 
        `poza` VARCHAR(100) NOT NULL , 
        `data_adaugare` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ) ENGINE = InnoDB;