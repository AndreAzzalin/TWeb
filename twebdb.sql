-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Creato il: Feb 01, 2018 alle 02:14
-- Versione del server: 5.6.38
-- Versione PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(95, 'animals'),
(98, 'emotions'),
(99, 'animals'),
(99, 'memes'),
(100, 'emotions'),
(101, 'emotions'),
(101, 'memes'),
(102, 'memes'),
(103, 'emotions'),
(104, 'animals'),
(105, 'animals'),
(105, 'memes'),
(106, 'animals'),
(106, 'emotions'),
(108, 'emotions'),
(109, 'memes'),
(110, 'emotions'),
(110, 'memes'),
(111, 'emotions'),
(111, 'memes'),
(112, 'animals'),
(112, 'memes'),
(113, 'memes'),
(114, 'emotions'),
(114, 'memes'),
(115, 'animals'),
(116, 'emotions'),
(117, 'emotions'),
(118, 'emotions'),
(118, 'memes'),
(119, 'animals');

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
('kenobi', 105),
('kenobi', 112),
('kenobi', 106),
('leila', 95),
('leila', 115),
('kenobi', 108),
('darth', 108),
('darth', 98),
('admin', 115),
('admin', 106),
('admin', 113),
('admin', 111);

-- --------------------------------------------------------

--
-- Struttura della tabella `fingerprint`
--

CREATE TABLE `fingerprint` (
  `user_id` varchar(16) NOT NULL,
  `ip` varchar(36) NOT NULL,
  `country` varchar(36) NOT NULL,
  `city` varchar(36) NOT NULL,
  `isp` varchar(36) NOT NULL,
  `time_login` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `fingerprint`
--

INSERT INTO `fingerprint` (`user_id`, `ip`, `country`, `city`, `isp`, `time_login`) VALUES
('kenobi', '80.183.96.57', 'Italy', 'Turin', 'Telecom Italia', '2018-02-01_00-13-19'),
('kenobi', '80.183.96.57', 'Italy', 'Turin', 'Telecom Italia', '2018-02-01_00-14-18'),
('darth', '80.183.96.57', 'Italy', 'Turin', 'Telecom Italia', '2018-02-01_00-16-21'),
('leila', '80.183.96.57', 'Italy', 'Turin', 'Telecom Italia', '2018-02-01_00-19-15'),
('leila', '80.183.96.57', 'Italy', 'Turin', 'Telecom Italia', '2018-02-01_00-20-42'),
('leila', '80.183.96.57', 'Italy', 'Turin', 'Telecom Italia', '2018-02-01_00-20-53'),
('leila', '80.183.96.57', 'Italy', 'Turin', 'Telecom Italia', '2018-02-01_00-21-12'),
('leila', '80.183.96.57', 'Italy', 'Turin', 'Telecom Italia', '2018-02-01_00-21-28'),
('darth', '80.183.96.57', 'Italy', 'Turin', 'Telecom Italia', '2018-02-01_00-21-59'),
('kenobi', '80.183.96.57', 'Italy', 'Turin', 'Telecom Italia', '2018-02-01_00-24-03'),
('kenobi', '80.183.96.57', 'Italy', 'Turin', 'Telecom Italia', '2018-02-01_00-25-12'),
('leila', '80.183.96.57', 'Italy', 'Turin', 'Telecom Italia', '2018-02-01_00-25-44'),
('kenobi', '80.183.96.57', 'Italy', 'Turin', 'Telecom Italia', '2018-02-01_00-26-07'),
('darth', '80.183.96.57', 'Italy', 'Turin', 'Telecom Italia', '2018-02-01_00-26-31'),
('darth', '80.183.96.57', 'Italy', 'Turin', 'Telecom Italia', '2018-02-01_00-26-35');

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
(95, 'tremors', '2018-02-01_00-10-33_uploadBy_admin', 'admin'),
(98, 'saruman', '2018-02-01_00-13-40_uploadBy_kenobi', 'kenobi'),
(99, 'develop', '2018-02-01_00-14-02_uploadBy_kenobi', 'kenobi'),
(100, 'smith', '2018-02-01_00-14-31_uploadBy_kenobi', 'kenobi'),
(101, 'hey', '2018-02-01_00-15-01_uploadBy_kenobi', 'kenobi'),
(102, 'lulz', '2018-02-01_00-17-50_uploadBy_admin', 'admin'),
(103, 'nope', '2018-02-01_00-18-20_uploadBy_admin', 'admin'),
(104, 'cheese', '2018-02-01_00-19-37_uploadBy_leila', 'leila'),
(105, 'fabolous', '2018-02-01_00-19-53_uploadBy_leila', 'leila'),
(106, 'happy', '2018-02-01_00-20-12_uploadBy_leila', 'leila'),
(108, 'sam', '2018-02-01_00-21-07_uploadBy_leila', 'leila'),
(109, 'spaghetti', '2018-02-01_00-22-17_uploadBy_darth', 'darth'),
(110, 'nerds', '2018-02-01_00-22-40_uploadBy_darth', 'darth'),
(111, 'spok', '2018-02-01_00-23-01_uploadBy_darth', 'darth'),
(112, 'cat', '2018-02-01_00-23-17_uploadBy_darth', 'darth'),
(113, 'math', '2018-02-01_00-23-39_uploadBy_darth', 'darth'),
(114, 'bat', '2018-02-01_00-24-22_uploadBy_kenobi', 'kenobi'),
(115, 'hello', '2018-02-01_00-25-09_uploadBy_kenobi', 'kenobi'),
(116, 'homer', '2018-02-01_00-27-17_uploadBy_admin', 'admin'),
(117, 'good', '2018-02-01_00-27-33_uploadBy_admin', 'admin'),
(118, 'obama', '2018-02-01_00-27-58_uploadBy_admin', 'admin'),
(119, 'panda', '2018-02-01_01-18-37_uploadBy_admin', 'admin');

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
('admin', '$2y$10$9igHYWKjBcP2ae/MGGUAgOlPqUrpIi1kUUhd2VEJjHceTd89qqLci'),
('darth', '$2y$10$E06/9HEyek0LYeiIKkSrSuEKa7wcHS5m/q7M50p2yU7ckBObkxGHC'),
('kenobi', '$2y$10$H1Tf1HQ.pmOc5deIQ.58E.yZMWQqIyqoYSMaYoU8TQx1jq3R1jphq'),
('leila', '$2y$10$uKZtdERhRMlctMEKuhGdZ.2cHyOXet6STM0x1sfv82a64P43JhHoO');

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
-- Indici per le tabelle `fingerprint`
--
ALTER TABLE `fingerprint`
  ADD KEY `user_id` (`user_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

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
-- Limiti per la tabella `fingerprint`
--
ALTER TABLE `fingerprint`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`nickname`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `gifs`
--
ALTER TABLE `gifs`
  ADD CONSTRAINT `owner` FOREIGN KEY (`owner`) REFERENCES `users` (`nickname`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
