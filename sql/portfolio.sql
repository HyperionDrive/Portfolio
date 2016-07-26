-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июл 26 2016 г., 14:14
-- Версия сервера: 10.1.13-MariaDB
-- Версия PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `portfolio`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `img_id` int(11) NOT NULL,
  `src` text NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`img_id`, `src`, `parent`) VALUES
(1, 'medical_max.jpg', 1),
(2, 'luchiki_max.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image` varchar(255) NOT NULL,
  `href` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`page_id`, `title`, `text`, `date`, `image`, `href`, `review`, `type`) VALUES
(1, 'Здоровье Нации Медицинский центр', 'Система управления сайтами компании Здоровье Нации, г.Липецк.', '2016-07-26 11:55:30', 'medical_min.jpg', 'http://zdorovie48.ru/', 'Система управления сайтами компании Здоровье Нации, г.Липецк.', 'portfolio'),
(2, 'Лучики студия раннего развития детей', 'С моей стороны была проведена работа по вёрстке страниц сайта, с последующей интеграцией с системой управления сайтом, разработанной на php фреймворке Laravel 5.', '2016-07-26 11:55:45', 'luchiki_min.jpg', 'http://luchiki48.ru/', 'Вёртска и интеграция сайта компании Лучики', 'portfolio'),
(3, 'Умная дверь', 'Страница <a href="http://nextdoor.su/">Посмотреть</a>', '2016-06-10 10:55:25', 'nextdoor_min.jpg', 'nextdoor_max.jpg', 'Разработка лендинга\r\n', 'portfolio'),
(4, 'Контакты', 'EMAIL: rserg.work@gmail.com', '2016-06-10 11:14:25', 'none.jpg', 'contact.jpg', 'none', 'side'),
(5, 'Обо мне', 'Высшее образование: Международный Институт Компьютерных Технологий - (ЛФ МИКТ)<br>Опыт работы: 2 года фронтенд и бэкенд разработки в веб студии', '2016-07-26 12:10:48', 'none.jpg', 'i.jpg', '', 'side');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
