-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 14 2022 г., 21:55
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `altshu_final_project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image_url` text NOT NULL,
  `text` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image_url`, `text`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'How I’ve started learning web', 'After 15 years of working in the office, I realized that it is time to change something in my life.', './assets/images/Blog_image_2_1.jpg', 'I have spent the last two months learning to code, and though challenging at times, it has been a highly rewarding experience.\r\nOne of the trickiest challenges was choosing what to learn and where to learn it. There are so many languages, frameworks, and libraries - and lots of conflicting advice.', '2022-12-14', '2022-12-14', 1),
(2, 'Why does JavaScript is so exciting', 'It is amazing what you can achieve with a few lines of JavaScript code.', './assets/images/Blog_image_2_2.jpg', 'HTML and CSS aren’t fully fledged programming languages, and so you won’t get a full sense of what programming really is until you start learning one. JavaScript is the programming language of the web.\r\nThat makes JavaScript an extremely safe choice to learn. Plus, it’s increasingly being used for other purposes, through technologies like Node.js.\r\nFor beginners, JavaScript is not as approachable as HTML or CSS, and I recommend you jump between a variety of different sources to reinforce the core concepts.', '2022-12-03', '2022-12-03', 1),
(3, 'How I’ve developed this site', 'Building a website. Uhh. Sounds like a headache.', './assets/images/Blog_image_2_3.jpg', 'Building a website. Uhh. Sounds like a headache. Well, I’m want to tell you my story. I have started to built my first website two month ago.', '2022-11-20', '2022-11-20', 1),
(4, 'Who helped me make the site', 'My cute son helped a lot to develop this site.', './assets/images/Blog_image_2_4.jpg', 'Develop a new website in a few days with a small child and two cats... sounds like an impossible task. But only by overcoming difficulties can success be achieved.', '2022-11-10', '2022-11-10', 1),
(5, 'My troublemaker', 'Who distracted me while I was studying.', './assets/images/Blog_image_2_5.jpg', 'Studying at home with a laptop while the cat is lying on the keyboard is not an easy task. The more interesting this training was.', '2022-11-09', '2022-11-09', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
