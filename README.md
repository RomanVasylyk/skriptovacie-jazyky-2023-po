-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: localhost
-- Čas generovania: Sun 14.Máj 2023, 15:26
-- Verzia serveru: 10.4.27-MariaDB
-- Verzia PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `veb`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `blog`
--

CREATE TABLE `blog` (
  `idb` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `history` varchar(1000) NOT NULL,
  `img` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `blog`
--

INSERT INTO `blog` (`idb`, `id`, `name`, `history`, `img`, `date`) VALUES
(21, 42, 'kkk', 'ivnrivr1', 'IMG_645f543cc3c299.10377069.png', '2023-05-13 09:11:24'),
(22, 43, 'kkk', 'feqwofj80h34fh3oho34hf804gf8gurfbkjdbvruvuregvuruegvurgvurgevuirgviugruvgruegvruigvrugvuiegvurgvuigrv', 'IMG_645f54a5b83626.10803859.png', '2023-05-13 09:13:09');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `Comments`
--

CREATE TABLE `Comments` (
  `idc` int(11) NOT NULL,
  `idb` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `comm` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `Comments`
--

INSERT INTO `Comments` (`idc`, `idb`, `id`, `name`, `comm`, `date`) VALUES
(11, 21, 42, 'nfeowbfowbeue', 'f43f43f34f43f34f34f43f3f41', '2023-05-13 09:11:33');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Sťahujem dáta pre tabuľku `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
(7, 'gbiorbgitgf', '2023-05-03 00:00:00', '2023-05-04 00:00:00');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `favorite`
--

CREATE TABLE `favorite` (
  `idf` int(11) NOT NULL,
  `idr` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `favorite`
--

INSERT INTO `favorite` (`idf`, `idr`, `id`) VALUES
(6, 5, 43),
(7, 1, 43),
(10, 1, 42);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `kategori`
--

CREATE TABLE `kategori` (
  `idk` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `kategori`
--

INSERT INTO `kategori` (`idk`, `name`) VALUES
(1, 'soup'),
(2, 'drink'),
(3, 'lunch_dish'),
(4, 'Fish'),
(5, 'salad'),
(6, 'baking'),
(7, 'dessert');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `recept`
--

CREATE TABLE `recept` (
  `idr` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `idk` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `ing` varchar(500) NOT NULL,
  `krok` varchar(1000) NOT NULL,
  `time` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `recept`
--

INSERT INTO `recept` (`idr`, `id`, `idk`, `name`, `ing`, `krok`, `time`, `date`) VALUES
(1, 42, 1, 'cdcd', 'cdcd', 'cdcds1', 124, '2023-05-13 12:43:23'),
(2, 42, 4, 'kkk', 'gyg', 'dfvdfv', 55, '2023-05-13 12:45:06'),
(4, 42, 1, 'nfeowbfowbeue', 'Kosti zalejeme studenou vodou, privedieme k varu a varíme asi 15 minút. Potom ich scedíme a dobre opláchneme, opäť zalejeme a dáme variť spolu s celou očistenou cibuľou a sviečkovicou. Pridáme polievkovú lyžicu soli a cukru a varíme 2 až tri hodiny v závislosti od veľkosti sviečkovice. Nezakrývame a príležitostne zozbierame bielkovinu z povrchu vývaru.\r\n', 'Kosti zalejeme studenou vodou, privedieme k varu a varíme asi 15 minút. Potom ich scedíme a dobre opláchneme, opäť zalejeme a dáme variť spolu s celou očistenou cibuľou a sviečkovicou. Pridáme polievkovú lyžicu soli a cukru a varíme 2 až tri hodiny v závislosti od veľkosti sviečkovice. Nezakrývame a príležitostne zozbierame bielkovinu z povrchu vývaru.\r\nMedzitým pozdĺžne nakrájame zázvor na plátky, cibuľu rozrežeme na polovicu a spolu s škoricou, anízom a kardamonom, všetko opečieme na suchej panvici ci platni. Tak dosiahneme efektívnejšie uvoľnenie arómy z korenín. Takto pripravené koreniny pridáme k vriacemu vývaru a varíme kým mäsko nezmäkne.\r\nRyžové rezance namočíme do studenej vody na 30 minút, následne krátko povaríme (postupujeme podľa návodu na prípravu) a rozdelíme do ', 12, '2023-05-13 17:24:24'),
(5, 43, 4, 'huguogogouguo', 'nlrbvbjevqbruvberuibvurebvberbvrbvrv', 'vrevoirhqvoirevuerviurquvierjkbvjrbeuvrequveryvyervrevqevervv', 32, '2023-05-13 19:22:22');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pass` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `email`, `admin`, `date`) VALUES
(42, 'frrgr', '107eedebfbe8ee2e3ca996cb1597b754', 'vasulukroma@gmail.com', 1, '2023-05-09 09:28:16'),
(43, 'ass', '107eedebfbe8ee2e3ca996cb1597b754', 'vasulukroma@gmail.co', 0, '2023-05-11 21:27:59');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`idb`),
  ADD KEY `id` (`id`);

--
-- Indexy pre tabuľku `Comments`
--
ALTER TABLE `Comments`
  ADD PRIMARY KEY (`idc`),
  ADD KEY `id` (`id`),
  ADD KEY `idb` (`idb`);

--
-- Indexy pre tabuľku `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`idf`),
  ADD KEY `id` (`id`),
  ADD KEY `idr` (`idr`);

--
-- Indexy pre tabuľku `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idk`);

--
-- Indexy pre tabuľku `recept`
--
ALTER TABLE `recept`
  ADD PRIMARY KEY (`idr`),
  ADD KEY `id` (`id`),
  ADD KEY `idk` (`idk`);

--
-- Indexy pre tabuľku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `blog`
--
ALTER TABLE `blog`
  MODIFY `idb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pre tabuľku `Comments`
--
ALTER TABLE `Comments`
  MODIFY `idc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pre tabuľku `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pre tabuľku `favorite`
--
ALTER TABLE `favorite`
  MODIFY `idf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pre tabuľku `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pre tabuľku `recept`
--
ALTER TABLE `recept`
  MODIFY `idr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pre tabuľku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Obmedzenie pre exportované tabuľky
--

--
-- Obmedzenie pre tabuľku `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Obmedzenie pre tabuľku `Comments`
--
ALTER TABLE `Comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`idb`) REFERENCES `blog` (`idb`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Obmedzenie pre tabuľku `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `favorite_ibfk_2` FOREIGN KEY (`idr`) REFERENCES `recept` (`idr`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Obmedzenie pre tabuľku `recept`
--
ALTER TABLE `recept`
  ADD CONSTRAINT `recept_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `recept_ibfk_2` FOREIGN KEY (`idk`) REFERENCES `kategori` (`idk`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
