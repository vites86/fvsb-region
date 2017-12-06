-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Авг 03 2016 г., 22:38
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `msac`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin_entries`
--

CREATE TABLE IF NOT EXISTS `admin_entries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date_connect` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `admin_entries`
--

INSERT INTO `admin_entries` (`id`, `user_id`, `date_connect`) VALUES
(2, 2, '2016-02-08 14:49:24'),
(3, 2, '2016-02-08 15:56:02'),
(4, 1, '2016-02-08 15:56:49'),
(5, 2, '2016-02-09 18:53:41'),
(6, 2, '2016-02-10 14:41:11'),
(7, 2, '2016-02-11 14:33:46'),
(8, 2, '2016-02-12 11:54:47'),
(9, 2, '2016-02-20 20:10:40'),
(10, 2, '2016-04-09 18:11:35'),
(11, 2, '2016-07-17 13:33:36');

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `author` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `meta_k` varchar(255) DEFAULT NULL,
  `meta_d` varchar(255) DEFAULT NULL,
  `text_` text,
  `date_` datetime DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  `fb_id` int(11) NOT NULL,
  `tw_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `author`, `title`, `description`, `meta_k`, `meta_d`, `text_`, `date_`, `img`, `fb_id`, `tw_id`) VALUES
(1, 'Дубровін Віктор', 'Cуддівський семінар, майстер-клас, атестація', '27 серпня в м Харкові відбудеться суддівський семінар, 28 серпня будуть проведені практичні заняття по ударній і кидковій технікам для всіх осіб, що залучаються до тренувань по ВСМ. По закінченню цих занять будуть видані свідоцтва єдиного зразка для проведення тренувань зі спортсменами', 'суддівський семінар, ВСБ, бойове двоборство', 'суддівський семінар, ВСБ, бойове двоборство', '27 серпня в м Харкові відбудеться суддівський семінар, 28 серпня будуть проведені практичні заняття по ударній і кидковій технікам для всіх осіб, що залучаються до тренувань по ВСМ. По закінченню цих занять будуть видані свідоцтва єдиного зразка для проведення тренувань зі спортсменами', '2016-08-27 00:00:00', 'img/events/1.jpg', 0, 0),
(2, 'Герчак Сергій', 'Кубок України імені генерала Кульчицького 2016', 'В місті Одеса пройде Кубок України імені генерала Кульчицького. Дата проведення:  07.10-09.10.2016', 'допомога, благодійний фонд, АТО', 'допомога, благодійний фонд, АТО', 'В місті Одеса пройде Кубок України імені генерала Кульчицького. Дата проведення:  07.10-09.10.2016', '2015-02-01 00:00:00', 'img/events/2.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `author` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `meta_k` varchar(255) DEFAULT NULL,
  `meta_d` varchar(255) DEFAULT NULL,
  `text_` text,
  `date_` datetime DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  `fb_id` int(11) NOT NULL,
  `tw_id` int(11) NOT NULL,
  `short_name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `author`, `title`, `description`, `meta_k`, `meta_d`, `text_`, `date_`, `img`, `fb_id`, `tw_id`, `short_name`) VALUES
(1, 'Віктор Дубрвін', 'Чемпіонат України 2016 ', 'Збірна Київської області з ВСБ нещодавно повернулися з Харькова, де брала участь в чемпіонаті України з військово-спортивних багатоборств, розділ "Бойове двоборство", що включає в себе стрільбу з пневматичної гвинтівки та рукопашний бій.', 'військово-спортивні багатоборства', 'військово-спортивні багатоборства', 'Збірна Київської області з ВСБ нещодавно повернулися з Харькова, де брала участь в чемпіонаті України з військово-спортивних багатоборств, розділ "Бойове двоборство", що включає в себе стрільбу з пневматичної гвинтівки та рукопашний бій.', '2016-05-13 22:33:32', 'img/news/1_2.png', 0, 0, 'Чемпіонат України 20'),
(2, 'Віктор Дубрвін', 'Закінчились навчально-тренувальні збори в Херсонскій області с Лазурне', 'Шість спортсменів обласної федерації прийняли участь у  навчально-тренувальних зборах з 16 по 26 червея 2016 року на базі ДОЛ «Прибрежный» ( Херсонська область, с Лазурне)', 'Семь сотен украинских прокуроров получили статус «участника боевых» действий.', 'Семь сотен украинских прокуроров получили статус «участника боевых» действий.', 'Відбулись навчально-тренувальні збори з 16 по 26 червея 2016 року на базі ДОЛ «Прибрежный» ( Херсонская область, с Лазурное)', '2016-04-09 22:49:01', 'img/news/2_1.png', 0, 0, 'Збори с.Лазурне 2016');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `title` text NOT NULL,
  `src` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `name`, `text`, `title`, `src`) VALUES
(1, 'Головна', '<div style="text-align: center;width:100%;">\r\n                     <h1>Ласкаво просимо на сторінку Адміністратора!</h1>\r\n                     <img style="align:center; height:550px;" src="assets/img/webtools.jpg"/>\r\n                </div><br><br>', 'Головна', 'index.php'),
(2, 'Помилка', '<div style="width:100%;text-align:center;">\r\n                     <h1>Упс! Помилочка! </h1>\r\n                     <img src="assets/img/error.jpg" style="height:500px;"/><br><br>\r\n                     <label style="width:100%; text-align: center">                      \r\n                       <span style="color:red;"><?php echo isset($_GET["error"]) ? $_GET["error"] : ""; ?></span>                       \r\n                     </label> \r\n              </div>        \r\n                       <br><br><br><br><br><br>', 'Помилка', 'error.php'),
(3, 'Додати новину', ' <form action="handler.php" method="post" enctype="multipart/form-data">\r\n                              <table>\r\n                              <tr>\r\n                              <td>Назва</td>\r\n                              <td><textarea name="title" id="title" cols="100" rows="2" required></textarea></td>\r\n                              </tr>\r\n                              <tr>\r\n                              <td>Короткий опис</td>\r\n                              <td><textarea name="description" id="description"  cols="100" rows="2" required></textarea></td>\r\n                              </tr>\r\n                              <tr>\r\n                              <td>Ключові слова</td>\r\n                              <td><textarea name="meta_k" id="meta_k" cols="100" rows="2" required></textarea></td>\r\n                              </tr><center> <tr>\r\n                              <td>Ключовий опис</td>\r\n                              <td><textarea name="meta_d" id="meta_d" cols="100" rows="2" required></textarea></td>\r\n                              </tr></center>\r\n                              <tr>\r\n                              <td>Автор</td>\r\n                              <td><textarea name="author" id="author" cols="100" rows="2" required></textarea></td>\r\n                              </tr>\r\n                              <tr>\r\n                              <td>Текст статьи</td>\r\n                              <td><textarea name="text" id="text" cols="100" rows="20" required></textarea></td>\r\n                              </tr>\r\n                               <tr>\r\n                              <td>Картинка (370x300)&nbsp;&nbsp;&nbsp;&nbsp;<br>формат .png </td>\r\n                              <td> <input type=''file'' name=''myfile'' id=''myfile'' required></td>\r\n                              </tr>\r\n                              <tr>\r\n                              <td><br><br>\r\n                                <input type="hidden" name="handler"  id="handler" value="add_news"/>\r\n                                <input type="submit" value="Додати"><br><br></td>\r\n                              </tr>\r\n                              </table>                              \r\n               </form><br><br>', 'Додавання новин', 'add_news.php'),
(4, 'Видалити новину', '<form action="handler.php" method="post"> \r\n                   <input type="hidden" name="handler"  id="handler" value="del_news"/>\r\n                   <?php \r\n                   $result = mysql_query("SELECT title, id, img FROM news",$db);\r\n                   $myrow = mysql_fetch_array($result);\r\n                   do \r\n                   {\r\n                   printf ("<p><input name=''id'' type=''radio'' value=''%s''>\r\n                            <lable>%s</lable></p>\r\n                            <input name=''img_src'' type=''hidden'' value=''%s''>",\r\n                            $myrow["id"],$myrow["title"],$myrow["img"]);\r\n                   }\r\n                   while ($myrow = mysql_fetch_array($result));\r\n                   ?>\r\n                   \r\n                   <p><input name="submit" type="submit" value="Видалити"></p>\r\n                   </form><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>', 'Видалення новин', 'del_news.php'),
(5, 'Редагувати новину', 'бла бла', 'Редагування новин', 'edit_news.php'),
(6, 'Додати фотографії в новину', 'бла бла', 'Додавання фотографій в галерею новин', 'add_newsPhoto.php'),
(7, 'Видалити фотографії з галереї новини', 'Видалити фотографії з новини', 'Видалення фото з галереї новин', 'del_newsPhoto.php'),
(8, 'Додати статтю', '', 'Додавання статей', 'add_article.php'),
(9, 'Редагувати статтю', '', 'Редагування статті', 'edit_articles.php'),
(10, 'Видалити статтю', '', 'Видалення статті', 'del_articles.php'),
(11, 'Додати оголошення', 'Додати оголошення', 'Додати оголошення', 'add_desc.php'),
(12, 'Редагування оголошення', 'Редагувати оголошення', 'Редагувати оголошення', 'edit_desc.php'),
(13, 'Видалити оголошення', 'Видалення оголошення', 'Видалення оголошення', 'del_desc.php');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(150) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `role`, `description`) VALUES
(1, 'administrators', 'Администратор'),
(2, 'developer', 'Разработчик'),
(3, 'user', 'Пользователь'),
(4, 'manager', 'менеджер');

-- --------------------------------------------------------

--
-- Структура таблицы `sportmen`
--

CREATE TABLE IF NOT EXISTS `sportmen` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `rank` varchar(25) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `sportmen`
--

INSERT INTO `sportmen` (`id`, `name`, `rank`, `description`) VALUES
(1, 'Пристинський Олександр', 'МСУ', 'Віце чемпіон Світу, Чемпіон Європи, шестикратний чемпіон України'),
(2, 'Потапенко Дмитро', 'МСМКУ', 'Чемпіон Світу, багатократний чемпіон України'),
(3, 'Панчишак Анастасія ', 'МСУ', 'Чемпіон світу, багатократний чемпіон України'),
(4, 'Мухін Олександр', 'МСУ', 'Чемпіон України');

-- --------------------------------------------------------

--
-- Структура таблицы `userlist`
--

CREATE TABLE IF NOT EXISTS `userlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(250) DEFAULT NULL,
  `pass` varchar(150) DEFAULT NULL,
  `rus_name` varchar(250) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `userlist`
--

INSERT INTO `userlist` (`id`, `login`, `pass`, `rus_name`, `role_id`) VALUES
(1, 'gerchak', '2ea535a689d9f37f178c0eece8602cb3', 'Сергій Герчак', 1),
(2, 'vites', '2ea535a689d9f37f178c0eece8602cb3', 'Віктор Вітес', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
