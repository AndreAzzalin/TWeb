-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 24, 2018 alle 12:03
-- Versione del server: 10.1.25-MariaDB
-- Versione PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twebdb`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `categories`
--

CREATE TABLE `categories` (
  `gif_id` int(11) NOT NULL,
  `category` varchar(36) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `categories`
--

INSERT INTO `categories` (`gif_id`, `category`) VALUES
(84, 'animals'),
(85, 'animals'),
(86, 'animals'),
(87, 'animals'),
(88, 'emotions');

-- --------------------------------------------------------

--
-- Struttura della tabella `favorite`
--

CREATE TABLE `favorite` (
  `user` varchar(16) CHARACTER SET utf8 NOT NULL,
  `gif_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `favorite`
--

INSERT INTO `favorite` (`user`, `gif_id`) VALUES
('a', 43),
('a', 44),
('a', 86),
('a', 85);

-- --------------------------------------------------------

--
-- Struttura della tabella `gifs`
--

CREATE TABLE `gifs` (
  `id` int(11) NOT NULL,
  `title` varchar(16) NOT NULL,
  `src` varchar(64) NOT NULL,
  `owner` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `gifs`
--

INSERT INTO `gifs` (`id`, `title`, `src`, `owner`) VALUES
(37, 'mkkj', '2018-01-19_18-35-00_uploadBy_admin', 'admin'),
(43, 'Ã ', '2018-01-20_01-27-33_uploadBy_a', 'a'),
(44, 'face', '2018-01-23_16-42-13_uploadBy_a', 'a'),
(47, 'lols', '2018-01-23_19-04-05_uploadBy_a', 'a'),
(56, 'kisd', '2018-01-23_20-40-17_uploadBy_a', 'a'),
(68, 'hjhvj-Ã j', '2018-01-23_21-09-52_uploadBy_a', 'a'),
(84, 's', '2018-01-23_22-20-33_uploadBy_a', 'a'),
(85, 'ss', '2018-01-23_22-20-45_uploadBy_a', 'a'),
(86, 'sss', '2018-01-23_22-21-00_uploadBy_a', 'a'),
(87, 'meme', '2018-01-23_22-27-12_uploadBy_admin', 'admin'),
(88, 'eye', '2018-01-23_22-27-28_uploadBy_admin', 'admin');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `nickname` varchar(16) NOT NULL,
  `psw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`nickname`, `psw`) VALUES
('a', '$2y$10$DPL371.A9iyFPDvNOFbrr.9cu9JdqurxocUid62oAgdkNYveP8APK'),
('admin', '$2y$10$HqcigFO0hjw2D6oqd2MRL.lhrmyXi2VrgGCDXu/4t8w5LeaVBOhH6');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `categories`
--
ALTER TABLE `categories`
  ADD KEY `gif_cat` (`gif_id`);

--
-- Indici per le tabelle `favorite`
--
ALTER TABLE `favorite`
  ADD KEY `gif_id` (`gif_id`),
  ADD KEY `user` (`user`);

--
-- Indici per le tabelle `gifs`
--
ALTER TABLE `gifs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner` (`owner`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nickname`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `gifs`
--
ALTER TABLE `gifs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `gif_cat` FOREIGN KEY (`gif_id`) REFERENCES `gifs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `gif_id` FOREIGN KEY (`gif_id`) REFERENCES `gifs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user` FOREIGN KEY (`user`) REFERENCES `users` (`nickname`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `gifs`
--
ALTER TABLE `gifs`
  ADD CONSTRAINT `owner` FOREIGN KEY (`owner`) REFERENCES `users` (`nickname`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
