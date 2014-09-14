-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 15 2012 г., 13:37
-- Версия сервера: 5.5.20
-- Версия PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `illicha`
--

-- --------------------------------------------------------

--
-- Структура таблицы `telephone_book`
--

CREATE TABLE IF NOT EXISTS `telephone_book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `telephone` text NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii COMMENT='telephone book' AUTO_INCREMENT=21 ;

--
-- Дамп данных таблицы `telephone_book`
--

INSERT INTO `telephone_book` (`id`, `name`, `surname`, `telephone`, `address`) VALUES
(1, 'Vasya', 'Pupkin', '555-12-34', 'Kyiv, Svobody av.'),
(3, 'Vov4uk', 'Putin', '555-19-73', 'Moscow, Kremlin'),
(4, 'Stas', 'Mikhailov', '555-45-89', 'any BAR'),
(13, 'Victor', 'Fedorovich', '***-**-**', 'st. **********, **');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
