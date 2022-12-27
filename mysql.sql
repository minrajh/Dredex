-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Дек 13 2022 г., 16:20
-- Версия сервера: 10.6.8-MariaDB
-- Версия PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dredex`
--
CREATE DATABASE IF NOT EXISTS `dredex` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dredex`;

-- --------------------------------------------------------

--
-- Структура таблицы `dredex_post`
--

CREATE TABLE `dredex_post` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `text` text NOT NULL,
  `lang` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `dredex_post`
--

INSERT INTO `dredex_post` (`id`, `name`, `description`, `keywords`, `text`, `lang`) VALUES
(1, 'Тестовая запись 1', 'Тестовая запись 1', 'Тестовая запись 1', 'Тестовая запись 1', 1),
(2, 'Тестовая запись 2', 'Тестовая запись 2', 'Тестовая запись 2', 'Тестовая запись 2', 2),
(3, 'Тестовая запись 3', 'Тестовая запись 3', 'Тестовая запись 3', 'Тестовая запись 3', 2),
(4, 'Тестовая запись 4', 'Тестовая запись 4', 'Тестовая запись 4', 'Тестовая запись 4', 2),
(5, 'Тестовая запись 5', 'Тестовая запись 5', 'Тестовая запись 5', 'Тестовая запись 5', 2),
(6, 'Тестовая запись 6', 'Тестовая запись 6', 'Тестовая запись 6', 'Тестовая запись 6', 2),
(7, 'Далеко-далеко за словесными горами', 'Разработка веб-сайтов\r\n*\r\nCSS\r\n*\r\nJavaScript\r\n*\r\nHTML\r\n*\r\nNode.JS\r\n*', 'Ключевые слова поста', 'Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Эта, семь напоивший которое последний свою предупреждал подзаголовок послушавшись большого деревни рукописи. Составитель рыбного коварный они безопасную lorem прямо снова!', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `dredex_user`
--

CREATE TABLE `dredex_user` (
  `username` varchar(16) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `create_time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dredex_post`
--
ALTER TABLE `dredex_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `dredex_post`
--
ALTER TABLE `dredex_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
