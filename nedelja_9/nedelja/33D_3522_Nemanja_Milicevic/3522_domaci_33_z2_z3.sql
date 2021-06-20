INSERT INTO `proizvodi`(`barkod`, `naziv`, `cena`) VALUES
('789', 'paradajz', 200.00),
('776', 'crni luk', 50.00),
('761', 'beli luk', 80.00);

INSERT INTO `prodaja`(`barkod`, `kolicina`, `cena`, `datum`) VALUES ('789', 50, 200.00, '2021-06-16');

INSERT INTO `prodaja`(`barkod`, `kolicina`, `cena`, `datum`) VALUES ('789', 20, 200.00, '2021-06-17');

INSERT INTO `prodaja`(`barkod`, `kolicina`, `cena`, `datum`) VALUES ('789', 40, 250.00, '2021-06-17');

INSERT INTO `prodaja`(`barkod`, `kolicina`, `cena`, `datum`) VALUES ('789', 10, 220.00, '2021-06-17');

INSERT INTO `prodaja`(`barkod`, `kolicina`, `cena`, `datum`) VALUES ('776', 30, 50.00, '2021-05-01');

INSERT INTO `prodaja`(`barkod`, `kolicina`, `cena`, `datum`) VALUES
('761', 10, 80.00, '2021-05-01'),
('761', 15, 85.00, '2021-06-17'),
('761', 20, 80.00, '2021-05-01');

DELETE FROM `prodaja` WHERE `barkod`=789 AND `datum`='2021-06-16';

UPDATE `prodaja` SET `cena`=`cena`+(`cena`*0.1) WHERE `datum`='2021-06-17';

SELECT `barkod` FROM `prodaja` WHERE `datum`='2021-05-01';

SELECT DISTINCT(`barkod`) FROM `prodaja` WHERE `datum`='2021-05-01';

SELECT `datum`, SUM(`kolicina`) AS `ukupna_kolicina` FROM `prodaja` GROUP BY `datum`;

SELECT `naziv` AS `proizvod`, SUM(`kolicina`) AS `ukupna_kolicina` FROM `proizvodi` JOIN `prodaja` ON proizvodi.barkod=prodaja.barkod GROUP BY `naziv`;

SELECT `naziv` AS `proizvod`, `datum`, SUM(`kolicina`) AS `ukupna_kolicina` FROM `proizvodi` JOIN `prodaja` ON proizvodi.barkod=prodaja.barkod GROUP BY `naziv`, `datum`;

//3. zadatak
SELECT `naziv` AS `proizvod`, `datum`, SUM(prodaja.cena*`kolicina`) AS `ukupna_vrednost` FROM `proizvodi` JOIN `prodaja` ON proizvodi.barkod=prodaja.barkod GROUP BY `naziv`, `datum` ORDER BY `naziv`;