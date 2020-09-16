CREATE SCHEMA `php1` ;

CREATE TABLE `php1`.`studenti` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `lastname` VARCHAR(45) NULL,
  `age` INT NULL,
  `email` VARCHAR(45) NULL,
  `phone` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC));
  
  
INSERT INTO `php1`.`studenti` (`name`, `lastname`, `age`, `email`, `phone`) VALUES ('Neven', 'Gjoreski', '31', 'n.g@hotmail.com', '075111111');
INSERT INTO `php1`.`studenti` (`name`, `lastname`, `age`, `email`, `phone`) VALUES ('Darko', 'Bozinovski', '29', 'd.g@yahoo.com', '076111111');
INSERT INTO `php1`.`studenti` (`name`, `lastname`, `age`, `email`, `phone`) VALUES ('Darko', 'Murdjeski', '25', 'd.m@gmail.com', '077111111');
INSERT INTO `php1`.`studenti` (`name`, `lastname`, `age`, `email`, `phone`) VALUES ('Kiril', 'Dimitrovski', '22', 'k.d@inbox.com', '078111111');
INSERT INTO `php1`.`studenti` (`name`, `lastname`, `age`, `email`, `phone`) VALUES ('Martin', 'Lazarovski', '24', 'm.l@outlook.com', '079111111');
INSERT INTO `php1`.`studenti` (`name`, `lastname`, `age`, `email`, `phone`) VALUES ('Ljupce', 'Kletnicki', '18', 'l.k@live.com', '070111111');


#select
SELECT * 
FROM studenti;

SELECT name, lastname, email
FROM studenti;

#uslov
SELECT *
FROM studenti
WHERE name = 'Darko';


#alias
SELECT name, lastname as surname
FROM studenti;

# LIKE 
# % 0 - ∞ number of characters
# _ only one charachter

SELECT *
FROM studenti
WHERE email like '%@yahoo.com';


SELECT *
FROM studenti
WHERE phone like '07_111111'
AND name = 'Darko';


SELECT *
FROM studenti
WHERE phone like '077%'
AND name = 'Darko';

SELECT *
FROM studenti
WHERE name like '%ar%';

SELECT *
FROM studenti
WHERE name = 'Darko'
OR name = 'Martin';

SELECT *
FROM studenti
WHERE name IN ( 'Darko' , 'Martin' , 'Ljupce');

#distinct
SELECT distinct name 
FROM studenti;

#count

SELECT count(*) as darkovsci
FROM studenti
WHERE name = 'Darko';

#LIMIT

SELECT *
FROM studenti
LIMIT 3;

#not

SELECT *
FROM studenti
WHERE name != 'Darko';

SELECT *
FROM studenti
WHERE name <> 'Darko';

SELECT *
FROM studenti
WHERE name NOT IN ('Darko', 'Martin');

SELECT *
FROM studenti
WHERE (name != 'Darko'
AND name != 'Martin') OR 1 = 1

