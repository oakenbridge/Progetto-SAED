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

CREATE TABLE prodotto (
  `ID` int(11) NOT NULL,
  `Nome` text(80) NOT NULL,
  `Quantita` int(11) NOT NULL,
  `Prezzo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `prodotto`
--

INSERT INTO prodotto (ID, Nome, Quantita, Prezzo) VALUES
('1011', 'Byeast_Tripel_Bottle_33cl', '1000', '3'),
('1012', 'Byeast_Dubbel_Bottle_33cl', '1000', '3'),
('1013', 'Byeast_Bitter_Bottle_33cl', '1000', '3'),
('1014', 'Byeast_Imperial_IPA_Bottle_33cl', '1000', '3'),
('1015', 'Byeast_Lambic_Bottle_33cl', '1000', '3'),
('1016', 'Byeast_Pale_Ale_Bottle_33cl', '1000', '3'),
('1017', 'Byeast_Pilsner_Bottle_33cl', '1000', '3'),
('1018', 'Byeast_Stout_Bottle_33cl', '1000', '3'),
('1019', 'Byeast_Weizen_Bottle_33cl', '1000', '3'),
('2011', 'Byeast_Tripel_Keg_15L', '100', '87'),
('2012', 'Byeast_Dubbel_Keg_15L', '100', '87'),
('2013', 'Byeast_Bitter_Keg_15L', '100', '87'),
('2014', 'Byeast_Imperial_IPA_Keg_15L', '100', '87'),
('2015', 'Byeast_Lambic_Keg_15L', '100', '87'),
('2016', 'Byeast_Pale Ale_Keg_15L', '100', '87'),
('2017', 'Byeast_Pilsner_Keg_15L', '100', '87'),
('2018', 'Byeast_Stout_Keg_15L', '100', '87'),
('2019', 'Byeast_Weizen_Keg_15L', '100', '87');

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE utente (
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
