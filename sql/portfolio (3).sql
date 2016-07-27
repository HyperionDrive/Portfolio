-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июл 27 2016 г., 14:40
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
(1, 'Здоровье Нации Медицинский центр', 'Система управления сайтами компании Здоровье Нации, г.Липецк.', '2016-07-27 12:16:54', 'medical_min.jpg', 'http://zdorovie48.ru/', 'Вёрстка и интеграция с Laravel 5 Framework', 'portfolio'),
(2, 'Лучики студия раннего развития детей', 'С моей стороны была проведена работа по вёрстке страниц сайта, с последующей интеграцией с системой управления сайтом, разработанной на php фреймворке Laravel 5.', '2016-07-27 12:16:57', 'luchiki_min.jpg', 'http://luchiki48.ru/', 'Вёрстка и интеграция с Laravel 5 Framework', 'portfolio'),
(3, 'Умная дверь', 'Страница <a href="http://nextdoor.su/">Посмотреть</a>', '2016-07-27 12:17:37', 'nextdoor_min.jpg', 'http://nextdoor.su/', 'Вёрстка лендинга, обработка форм\n', 'portfolio'),
(4, 'Контакты', 'EMAIL: rserg.work@gmail.com', '2016-06-10 11:14:25', 'none.jpg', 'contact.jpg', 'none', 'side'),
(5, 'Обо мне', 'Высшее образование: Международный Институт Компьютерных Технологий - (ЛФ МИКТ)<br>Опыт работы: 2 года фронтенд и бэкенд разработки в веб студии', '2016-07-26 12:10:48', 'none.jpg', 'i.jpg', '', 'side'),
(6, 'Нотариальная Контора', 'Вёрстка html страниц из предстваленного дизайна. Последующая интеграция с CMS Wordpress\r\n\r\n', '2016-07-27 12:17:58', 'andr_min_1.jpg', 'http://notarius48.ru/', 'Вёрстка и интеграция с CMS Wordpress', 'portfolio'),
(7, 'Медлайф', 'Создание медицинского сайта, с каталогом оборудования на CMS Wordpress', '2016-07-27 12:18:03', 'medlife-min.jpg', 'http://medlife48.ru/', 'Вёрстка и интеграция с CMS Wordpress', 'portfolio'),
(10, 'Проффесиональные сервисные решения', 'Вёрстка сайта компании, использован движок внутренней разработки', '2016-07-27 12:19:13', 'psr-min.jpg', 'http://psr-com.ru/', 'Вёрстка и интеграция с CMS', 'portfolio'),
(11, 'Гостиница Валенсия', 'При разработке сайта использовался Wordpress, верстка из дизайн-макета', '2016-07-27 12:18:34', 'valency-min.jpg', 'http://валенсия48.рф/', 'Вёрстка и интеграция с CMS Wordpress', 'portfolio'),
(12, 'Центр Остеопатии ', '', '2016-07-27 12:29:26', 'cozn-min.jpg', 'http://cozn48.ru/', 'Интеграция вёрстки с Laravel 5 Framework', 'portfolio');

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
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
