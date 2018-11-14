SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `Byeast`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotto`
--

CREATE TABLE `prodotto` (
  `ID` int(11) NOT NULL,
  `Nome` text NOT NULL,
  `Quantita` int(11) NOT NULL,
  `Prezzo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `prodotto`
--

INSERT INTO prodotto (ID, Nome, Quantita, Prezzo) VALUES
('1011', 'Byeast Tripel Bottle 33cl', '1000', '3'),
('1012', 'Byeast Dubbel Bottle 33cl', '1000', '3'),
('1013', 'Byeast Bitter Bottle 33cl', '1000', '3'),
('1014', 'Byeast Imperial IPA Bottle 33cl', '1000', '3'),
('1015', 'Byeast Lambic Bottle 33cl', '1000', '3'),
('1016', 'Byeast Pale Ale Bottle 33cl', '1000', '3'),
('1017', 'Byeast Pilsner Bottle 33cl', '1000', '3'),
('1018', 'Byeast Stout Bottle 33cl', '1000', '3'),
('1019', 'Byeast Weizen Bottle 33cl', '1000', '3'),
('2011', 'Byeast Tripel Keg 15L', '100', '87'),
('2012', 'Byeast Dubbel Keg 15L', '100', '87'),
('2013', 'Byeast Bitter Keg 15L', '100', '87'),
('2014', 'Byeast Imperial IPA Keg 15L', '100', '87'),
('2015', 'Byeast Lambic Keg 15L', '100', '87'),
('2016', 'Byeast Pale Ale Keg 15L', '100', '87'),
('2017', 'Byeast Pilsner Keg 15L', '100', '87'),
('2018', 'Byeast Stout Keg 15L', '100', '87'),
('2019', 'Byeast Weizen Keg 15L', '100', '87');

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `Nome` text NOT NULL,
  `Cognome` text NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `Ruolo` text NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`Nome`, `Cognome`, `Username`, `Password`, `Ruolo`, `Email`) VALUES
('Robin', 'Porta', 'robinporta', 'byeast1', 'Gestore', 'robinporta@byeast.it'),
('Andrea', 'Bragetta', 'andreabragetta', 'byeast2', 'Gestore', 'andreabragetta@byeast.it'),
('Mario', 'Rossi', 'mariorossi', 'ciao', 'Utente', 'MariusReds@yolo.it');
COMMIT;
