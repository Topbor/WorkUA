-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Чрв 03 2021 р., 11:08
-- Версія сервера: 10.4.14-MariaDB
-- Версія PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `work`
--

-- --------------------------------------------------------

--
-- Структура таблиці `emploers`
--

CREATE TABLE `emploers` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `emploers`
--

INSERT INTO `emploers` (`id`, `username`, `email`, `phonenumber`, `password`) VALUES
(1, 'topbor', 'db07757@gmail.com', '0675495545', 'ebidod90');

-- --------------------------------------------------------

--
-- Структура таблиці `vacations`
--

CREATE TABLE `vacations` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `company` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL,
  `type` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп даних таблиці `vacations`
--

INSERT INTO `vacations` (`id`, `title`, `company`, `description`, `type`, `price`) VALUES
(1, 'Test title', 'Test company title', 'Test description', 'C#', 54);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `emploers`
--
ALTER TABLE `emploers`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `vacations`
--
ALTER TABLE `vacations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `emploers`
--
ALTER TABLE `emploers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `vacations`
--
ALTER TABLE `vacations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
