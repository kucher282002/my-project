-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 09 2022 г., 17:00
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `exoland`
--

-- --------------------------------------------------------

--
-- Структура таблицы `actions`
--

CREATE TABLE `actions` (
  `id_actions` int(11) NOT NULL,
  `name_actions` varchar(255) NOT NULL,
  `date_actions` datetime NOT NULL DEFAULT current_timestamp(),
  `ip_user` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `actions`
--

INSERT INTO `actions` (`id_actions`, `name_actions`, `date_actions`, `ip_user`, `user_agent`, `id_user`) VALUES
(1, 'Авторизация', '2022-05-22 12:57:35', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.67 Safari/537.36', 1),
(6, 'Авторизация', '2022-06-01 13:52:27', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.62 Safari/537.36', 1),
(7, 'Регистрация', '2022-06-01 18:23:07', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.62 Safari/537.36', 2),
(8, 'Авторизация', '2022-06-01 18:23:07', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.62 Safari/537.36', 2),
(9, 'Выход', '2022-06-01 18:23:12', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.62 Safari/537.36', 2),
(10, 'Авторизация', '2022-06-01 18:23:15', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.62 Safari/537.36', 1),
(11, 'Выход', '2022-06-01 18:23:25', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.62 Safari/537.36', 1),
(12, 'Авторизация', '2022-06-01 18:25:41', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.62 Safari/537.36', 1),
(13, 'Выход', '2022-06-01 19:42:48', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.62 Safari/537.36', 1),
(14, 'Авторизация', '2022-06-01 19:42:54', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.62 Safari/537.36', 2),
(15, 'Выход', '2022-06-01 19:45:16', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.62 Safari/537.36', 2),
(16, 'Авторизация', '2022-06-01 19:45:20', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.62 Safari/537.36', 1),
(17, 'Авторизация', '2022-06-02 11:28:30', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.62 Safari/537.36', 1),
(18, 'Выход', '2022-06-02 13:14:30', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.62 Safari/537.36', 1),
(19, 'Авторизация', '2022-06-02 13:14:36', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.62 Safari/537.36', 2),
(20, 'Выход', '2022-06-02 13:14:41', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.62 Safari/537.36', 2),
(21, 'Авторизация', '2022-06-02 13:14:46', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.62 Safari/537.36', 1),
(22, 'Авторизация', '2022-06-03 11:19:44', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1),
(23, 'Выход', '2022-06-03 13:15:31', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1),
(24, 'Авторизация', '2022-06-03 13:15:37', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1),
(25, 'Выход', '2022-06-03 13:15:51', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1),
(26, 'Авторизация', '2022-06-03 13:15:57', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1),
(27, 'Выход', '2022-06-03 13:17:09', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1),
(28, 'Авторизация', '2022-06-03 13:19:48', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1),
(29, 'Выход', '2022-06-03 13:19:58', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1),
(30, 'Авторизация', '2022-06-03 13:20:01', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1),
(31, 'Выход', '2022-06-03 13:20:05', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1),
(32, 'Авторизация', '2022-06-03 13:20:15', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1),
(33, 'Выход', '2022-06-03 13:20:25', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1),
(34, 'Авторизация', '2022-06-03 13:20:29', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1),
(35, 'Выход', '2022-06-03 13:20:31', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1),
(36, 'Авторизация', '2022-06-03 13:24:11', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1),
(37, 'Выход', '2022-06-03 14:18:54', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1),
(38, 'Авторизация', '2022-06-03 15:18:51', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id_basket` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `id_group` int(11) NOT NULL,
  `group_name` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id_group`, `group_name`) VALUES
(1, 'Администратор'),
(2, 'Пользователь');

-- --------------------------------------------------------

--
-- Структура таблицы `image_index`
--

CREATE TABLE `image_index` (
  `id_image` int(11) NOT NULL,
  `name_image` text NOT NULL,
  `location_image` text NOT NULL,
  `text_image` text NOT NULL,
  `title_image` text NOT NULL,
  `subtitle_image` text NOT NULL,
  `link_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `image_index`
--

INSERT INTO `image_index` (`id_image`, `name_image`, `location_image`, `text_image`, `title_image`, `subtitle_image`, `link_image`) VALUES
(1, 'hamelion.jpg', 'images/index_animal/', 'Хамелеоны', 'Хамелеоны', 'Разноцветные красавчики', '4'),
(2, 'eublephur.jpg', 'images/index_animal/', 'Эублефары', 'Эублефары', 'Улыбашки', '5'),
(3, 'bananoed.jpg', 'images/index_animal/', 'Бананоеды', 'Бананоеды', 'Большеглазики', '6'),
(4, 'phyton.jpg', 'images/index_animal/', 'Питоны', 'Питоны', 'Фотомодели', '1'),
(5, 'poloz.jpg', 'images/index_animal/', 'Полозы', 'Полозы', 'Буркие милашки', '2'),
(6, 'udav.jpg', 'images/index_animal/', 'Удавы', 'Удавы', 'Мордочка для всех', '3'),
(7, 'moreSnake.jpg', 'images/index_animal/', 'Другие змеи', 'Другие змеи', 'Другие прелести', '0'),
(8, 'moreLizard.jpg', 'images/index_animal/', 'Другие ящерицы', 'Другие ящеры', 'Крупные ждуны', '0'),
(9, 'spider.jpg', 'images/index_animal/', 'Пауки', 'Пауки', 'Пушистые многоножки', '7');

-- --------------------------------------------------------

--
-- Структура таблицы `indent`
--

CREATE TABLE `indent` (
  `id_indent` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_indent` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'В работе'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `indent`
--

INSERT INTO `indent` (`id_indent`, `id_user`, `date_indent`, `status`) VALUES
(1, 2, '2022-06-01 19:45:03', 'В работе'),
(2, 1, '2022-06-01 19:45:33', 'Выдан'),
(3, 1, '2022-06-03 12:53:59', 'Выдан');

-- --------------------------------------------------------

--
-- Структура таблицы `indent_product`
--

CREATE TABLE `indent_product` (
  `id_indent_product` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `amount_indent_product` int(11) NOT NULL,
  `id_indent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `indent_product`
--

INSERT INTO `indent_product` (`id_indent_product`, `id_product`, `amount_indent_product`, `id_indent`) VALUES
(1, 1, 1, 1),
(2, 13, 1, 1),
(3, 1, 1, 2),
(4, 2, 1, 2),
(5, 1, 1, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `news_title` text NOT NULL,
  `news_text` text NOT NULL,
  `news_image_name` text NOT NULL,
  `news_image_location` text NOT NULL,
  `news_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id_news`, `news_title`, `news_text`, `news_image_name`, `news_image_location`, `news_date`) VALUES
(1, '1', 'а', 'back.jpg', 'images/index_animal/', '2022-05-21 15:38:12'),
(2, '2', 'б', 'bananoed.jpg', 'images/index_animal/', '2022-05-21 15:38:12'),
(3, '3', 'в', 'eublephur.jpg', 'images/index_animal/', '2022-05-21 15:41:27'),
(4, '4', 'г', 'ham.jpg', 'images/index_animal/', '2022-05-21 15:41:27'),
(5, '5', 'д', 'hamelion.jpg', 'images/index_animal/', '2022-05-21 15:41:59'),
(6, '6', 'е', 'moreLizard.jpg', 'images/index_animal/', '2022-05-21 15:41:59'),
(7, '7', 'ё', 'moreSnake.jpg', 'images/index_animal/', '2022-05-21 15:42:31'),
(8, '8', 'ж', 'phyton.jpg', 'images/index_animal/', '2022-05-21 15:42:31'),
(9, 'Новые Полозы', 'Наконец поставили новую партию маисовых полозов', 'poloz.jpg', 'images/index_animal/', '2022-05-21 15:42:53'),
(10, 'Новые Пауки', 'Завоз красивейших тарантулов', 'spider.jpg', 'images/index_animal/', '2022-05-21 15:42:53'),
(11, 'Новые Удавы', 'Завоз новых видов молоденьких удавов вам на радость', 'udav.jpg', 'images/index_animal/', '2022-05-21 15:43:13');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name_product` text NOT NULL,
  `info_product` text NOT NULL,
  `dop_info1_product` text NOT NULL,
  `dop_info2_product` text NOT NULL,
  `image_name_product` text NOT NULL,
  `image_location_product` text NOT NULL DEFAULT 'images/product/',
  `id_product_podgroup` int(11) NOT NULL,
  `price_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `info_product`, `dop_info1_product`, `dop_info2_product`, `image_name_product`, `image_location_product`, `id_product_podgroup`, `price_product`) VALUES
(1, 'Королевский питон', 'Королевский питоны (или региусы) - некрупные неядовитые змеи, вырастающие примерно до 150 см. Спокойнее, чем королевский питон, найти змею сложно. Это та самая змея, которую можно положить на колени и посмотреть с ней фильм – едва ли питон будет стремительно от Вас убегать.\r\n\r\nИз популярных змей королевские питоны, пожалуй, самые «харизматичные». Их мордочки закруглены, глаза напоминают черные бусинки, а по комплекции тела это эдакие толстячки. Однако во взрослом состоянии региусы довольно массивны, могут достигать 2-2,5 кг, но тем не менее, они по-прежнему остаются милыми толстячками.', 'Подвид: Python regius', 'Возраст: 10 мес.', 'king_phyton.png', 'images/product/', 1, 10000),
(2, 'Питон Ковровый', 'Рептилии обитают в восточных районах двух австралийских штатов — Виктории и Новый Южный Уэльс. Их можно встретить в разреженном редколесье, тропических и предгорных лесах, поймах рек и ручьёв.\r\n\r\nСвоё название питон получил благодаря окраске. На его спине есть характерный узор, напоминающий ковровый орнамент. Эти змеи не очень крупные. Средняя длина тела достигает 2,3 метров.\r\n\r\nВедут преимущественно ночной образ жизни. В естественной среде обитания предпочитают лакомиться грызунами, зайцеобразными, сумчатыми, а также птицами и яйцами. В редких случаях питаются лягушками и ящерицами.\r\n\r\nВ неволе молодых питонов раз в неделю кормят мелкими мышами и новорождёнными крысятами. Начиная с 3-х лет, они уже способны съесть взрослых крыс. При этом частоту кормления сокращают до одного раза раз в 2-3 недели. Ёмкость с водой должна быть такого размера, чтобы питон мог целиком в ней поместиться.', 'Подвид: Morelia spilota spilota', 'Возраст: 10 мес.', 'webdsc_1390-1_1599727319-removebg-preview.png', 'images/product/', 1, 18000),
(3, 'Питон Короткохвостый Красный', 'Этих змей можно встретить на островах Борнео и Суматра, а также на Малазийском полуострове. Места их обитания — болотистые и густые леса.\r\n\r\nУ представителей этого вида спина окрашена в коричневый цвет. Бока — жёлто-коричневые, имеют пятна светло-серого цвета. Длина тела может достигать 1,9 метров.\r\n\r\nАктивность зависит от времени суток. Ночью она высокая, днём идёт на спад — змея прячется в затененных местах, практически не двигается.\r\n\r\nДля этого вида питонов подойдёт горизонтальный террариум, который имеет параметры от 90х45х45. Температуру в теплой зоне в дневное время поддерживают на уровне 33°С, в ночное —27°С. Регулировать её помогает специальный коврик или термошнур.\r\n\r\nВ период линьки змея должна иметь возможность замокать в просторном водоёме. Также влажность помогают поддерживать дождевая установка и генератор тумана.', 'Подвид: Python brongersmai', 'Возраст: 10 мес.', 'dsc_2277-1_1600256143-removebg-preview.png', 'images/product/', 1, 28000),
(4, 'Питон Белогубый', 'Представители этого вида обитают в сухих областях острова Новая Гвинея. Их длина достигает 2-х метров. Тело может быть сине-чёрного или фиолетово-коричневого цвета. Голова — ярко-чёрная, верхне- и нижнегубные щитки окрашены в белый цвет, имеют чёрные передние края.\r\n\r\nЕсли змею побеспокоить, она спрячет голову под кольцами. В случае опасности способна атаковать.\r\n\r\nЭти рептилии наиболее активны в ночное время. Они выбираются из укрытий, чтобы осмотреться и поймать добычу. В естественной среде питаются млекопитающими, птицами, а также ящерицами.\r\n\r\nДля белогубого питона нужен большой террариум. Взрослой особи вполне подойдёт вариант с параметрами 90х45х45 см. Фоновая температура должна быть на уровне 26°С, в точке прогрева — около 35°С. Влажность внутри поддерживают на уровне 75%. Для комфорта питомца устанавливают бассейн, в который он сможет полностью погрузиться.', 'Подвид: Leiopython Albertisii', 'Возраст: 10 мес.', 'webdsc_9444_1641917127-removebg-preview.png', 'images/product/', 1, 98000),
(5, 'Маисовый полоз', 'Маисовый полоз – это небольшая, неядовитая змея из Северной Америки. Для начинающих террариумистов маис просто находка. Содержать маисового полоза, или как его еще в народе называют гутата, совсем не сложно. Как и для любых живых существ нужны тепло и еда, и полозы в этом плане не исключение. Для них достаточно обычной комнатной температуры 25-26 градусов, и в точке прогрева 30-32 градуса.Что касается террариума, то здесь многое зависит от размера самой змеи. Если змея небольшая 20-25 см, то я предпочитаю содержать таких змей в пластиковых контейнерах с искусственной горизонтальной вентиляцией. Делается это для того, чтобы змея могла быстро найти еду.', 'Подвид: Pantherophis Guttatus', 'Возраст: 10 мес.', 'dsc_8515_1636614780-removebg-preview.png', 'images/product/', 2, 8000),
(6, 'Бразильский Радужный удав', 'Эти рептилии обитают на большой территории — от Центральной Америки до севера Аргентины. Удава можно встретить во влажных тропических лесах, на редколесьях, заболоченных равнинах.\r\n\r\nГолова змеи почти не отграничена от туловища. Туловище рептилии коричневого цвета, оно полностью покрыто рисунком из темных колец. Мелкие и гладкие чешуйки имеют специфический отлив. При попадании солнечных лучей, они начинают переливаться разными цветами. Длина удава может достигать 2,5 метров.\r\n\r\nМолодые особи чаще всего ведут полудревесный образ жизни. Взрослые — большую часть времени проводят на земле. Они закапываются в почву или листья, стараются держаться ближе к водоёмам.', 'Подвид: Epicrates cenchria cenchria', 'Возраст: 10 мес.', 'udav-removebg-preview.png', 'images/product/', 3, 60000),
(7, 'Хамелеон Пантеровый', 'Пантеровые хамелеоны считаются одними из самых ярких и вариабельных видов хамелеонов. В разных частях острова Мадагаскар обитают пантеровые хамелеоны абсолютно разных цветов – красный, зеленый и даже голубой или синий, а так же комбинации этих цветов. Такая ящерицы не потеряется даже в густых зарослях террариума и будет радовать Вас своим внешним видом.\r\n\r\nЭти ящерицы вырастают до 15-20 см по телу и сильно отличаются внешне по полу. Самцы – яркие и массивные, а самки – миниатюрные и носят более спокойные цвета. Стоит упомянуть об их характере – в большинстве своем эти хамелеоны спокойнее йеменских и их можно беспрепятственно брать на руки время от времени.', 'Подвид: Ambato', 'Возраст: 10 мес.', 'webdsc_8275__01__01_1635450082-removebg-preview.png', 'images/product/', 4, 160000),
(8, 'Пятнистый эублефар', 'Одна из самых популярных ящериц в мире. Самая милая, яркая, ручная и обаятельная. Эублефар - покоряет своей улыбкой и хвостиком, больше похожим на мармеладку. Вы еще не встречали их? Тогда срочно обратите свое внимание на Леопардового Геккона. Маленький размер, дружелюбный нрав, безумно красивая внешность и большая вариация окраса не оставит равнодушными никого. Лучше всего чувствуют себя в небольшой группе. Им необходим небольшого размера террариум, обогрев в виде греющего коврика и укрытия с влажной камерой. Живут долго, кушают мелких насекомых и прекрасно сидят на руках. На уборку, кормление и смену воды в поилке у вас будет уходить примерно 20 минут в неделю (!) и около 100р на корм. Это невероятно экономичные животные.', 'Подвид: Tangerine (Танжерин)', 'Возраст: 10 мес.', '3431.970-removebg-preview.png', 'images/product/', 5, 6000),
(9, 'Реснитчатый геккон бананоед', 'Реснитчатые гекконы или бананоеды – это древесные ящерицы с острова Новая Каледония. Они вырастают всего до 10-12 см по телу, являясь прекрасными добрыми домашними любимцами. Помимо кроткого характера бананоеды примечательны разнообразием цветовых морф. Одной из таких, пожалуй, самых популярных и часто встречающихся, является морфа Fire. Отличается этот геккон светлой широкой полосой, проходящей вдоль позвоночника, начиная с головы. Эта полоса, как правило, отличается по цвету от основной окраски.', 'Подвид: Fire', 'Возраст: 10 мес.', '3541.970-removebg-preview.png', 'images/product/', 6, 6500),
(10, 'Паук Птицеед', 'Редкий в природе, но зато самый распространенный в коллекциях птицеед — все это про Brachypelma albopilosum. Этот паук просто идеальный выбор для новичка: спокойный нрав, малая стоимость, неприхотлив — ну чем не идеальный паук?\r\n\r\nBrachypelma albopilosum родом из Гондураса и Коста-Рики, где обитает во влажных лесах. Окрас его черно-коричневый, с пушистыми розовато-золотистыми курчавыми волосками. Размеры тела в среднем около 6-7 см, в размахе лап около 17, редко достигают 20 см. Продолжительность жизни самок около 20 лет.', 'Подвид: Brachypelma albopilosum', 'Возраст: 10 мес.', '2175.750x0-removebg-preview.png', 'images/product/', 7, 4000),
(11, 'Фрин', 'Фрины – это уникальные паукообразные, похожие на героев ужастиков. Безобразно красивый — так можно описать его в двух словах. В своем уникальном внешнем виде, фрин сочетает в себе черты пауков и скорпионов. Damon variegatus относит к жгутоногим паукообразным, обитающих в пещерах восточная Африки и больше всего распространен в Танзании.\r\n\r\nDamon variegatus один из самых больших представителей фринов. Размер тела у них достаточно небольшой и составляет 4-5 см, но из-за необычно больших передних лап в размахе ног они достигают до 25 см. Дело в том, что первая пара ног у фринов эволюционировала в своеобразный чувствительный орган, которым они ощупывают все вокруг. Проживание в пещере отложило отпечаток на зрении, которое практически у них редуцировано, поэтому при попадании на них даже небольшого луча света, они предпочитают скрыться в темноте. Главным отличием от большинства паукообразных это отсутствие ядовитых желез, что делает их безвредными для человека. Да и зачем яд, когда на месте педипальп образуются клешни, которым позавидует любой скорпион, ведь из таких клешен невозможно выбраться, если попадешься. Форма тела плоская – приспособление для проживания в пещерах. Питаются мелкими насекомыми.', 'Подвид: Damon variegatus ', 'Возраст: 10 мес.', 'xcqb5ntdnzc-604x400-removebg-preview.png', 'images/product/', 8, 10000),
(12, 'Палочник аннамский', 'Существа, которых трудно заметить, но невозможно забыть. Существует масса видов этих необычных созданий и среди них есть такие, которые могут размножаться партеногенезом. То есть, если у вас есть только одна самка, то она вам все равно родит множество палочников, которые будут ее клонами. Правда, такие популяции будут существовать не долго, пару сезонов, так как постепенно они будут все больше слабеть от нехватки новой генетической информации. Со своей интересной биологией и внешним видом, палочники занимают свое почетное место в нашем топе.', 'Подвид: Medauroidea extradentata', 'Возраст: 10 мес. ', '0f48a89359864b77f9aa7875419b-sc-lightbox-removebg-preview.png', 'images/product/', 9, 1000),
(13, 'Террариум стеклянный NomoyPet', 'Террариум разработан для содержания рептилий и амфибий. Распашные дверки обеспечивают легкий и удобный доступ для обслуживания террариума и кормления питомца. Встроенный замок предотвращает случайное открытие террариума, побеги. Сетчатая крышка не препятствует проникновению ультрафиолетовых лучей в террариум. Она полностью снимается для комфортного декорирования и уборки. Специальные закрывающиеся отверстия позволяют провести в террариум водопад, датчики, капельную систему или другое необходимое оборудование. Высокий бортик позволяет насыпать большой слой грунта для роющих животных или сделать пруд. Проточная вентиляция обеспечивает полноценный обмен воздуха и препятствует запотеванию стекол.', 'Фирма: NomoyPet', 'Размеры: 90x45x30 см', '90-45-30-jpg_1606322501-removebg-preview.png', 'images/product/', 10, 26000),
(14, 'Искусственное растение Hagen', 'Искусственные наземные растения оборудованны утяжеленной подставкой, благодаря которой животное не сможет их опрокинуть. Они выглядят натурально и естественно, поэтому прекрасно впишутся в любой дизайн. Это отличное решение для травоядных рептилий, такое растение животное не сможет съесть, и оно придаст естественный вид террариуму. Также искусственные растения часто используют при карантине, так как их легко мыть и дезинфицировать.\r\n\r\nПапоротник станет идеальным дополнением тропического террариума. Каркас его листьев подвижен, вы сможете придать ему любую форму.', 'Тип: Hagen Exo-Terra Boston Fern', 'Размер: medium', 'dsc_2827-1_1602189397-removebg-preview.png', 'images/product/', 11, 3500),
(15, 'Светильник Hagen mini', 'Светильник оснащен встроенным рефлектором, что позволяет направлять свет и тепло непосредственно в террариум.\r\nВерхняя панель светильника оборудована специальным пазом для термометра, гигрометра или термогигрометра.', 'Тип: Hagen Exo-Terra Compact Top 20см', 'Мощность: Подходит для одной или нескольких люминесцентных ламп и ламп накаливания (до 26 Вт)', 'pt2224_compact_top_1579545929-removebg-preview.png', 'images/product/', 12, 4000),
(16, 'Мышь голая', 'Кормовые мыши один из самых популярных кормов для многих хищников. С них начинают кормить новорожденных змей (маисовых, амурских, тонкохвостых полозов, молочных и королевских змей), варанов, агам и василисков. Машей так же дают некоторым ящерицам, лягушкам и даже паукам.', 'Тип: Мышь голая живая', 'Возраст: 3-5 дней', 'dsc_6448-1_1579795318-removebg-preview.png', 'images/product/', 13, 60),
(17, 'Мышь голая', 'Кормовые мыши один из самых популярных кормов для многих хищников. С них начинают кормить новорожденных змей (маисовых, амурских, тонкохвостых полозов, молочных и королевских змей), варанов, агам и василисков. Машей так же дают некоторым ящерицам, лягушкам и даже паукам.', 'Тип: Мышь, голая Замороженная', 'Возраст: 3-5 дней', 'dsc_0606_1649315479-removebg-preview.png', 'images/product/', 15, 60),
(18, 'Сверчок Домовый', 'Размеры насекомых указаны соответственно размерной сетке поставщика и могут разниться от партии к партии. Так же обращаем Ваше внимание, что при заморозке визуальный размер кормового объекта может быть изменен в меньшую сторону ввиду деформации.', 'Тип: Сверчок Домовый Крупный', 'Размер: 1.5-2 см', 'dsc_7229-1_1582207487-removebg-preview.png', 'images/product/', 14, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `product_group`
--

CREATE TABLE `product_group` (
  `id_product_group` int(11) NOT NULL,
  `name_product_group` text NOT NULL,
  `icon_name_product_group` text NOT NULL,
  `icon_location_product_group` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `product_group`
--

INSERT INTO `product_group` (`id_product_group`, `name_product_group`, `icon_name_product_group`, `icon_location_product_group`) VALUES
(1, 'Змеи', 'snake.png', 'images/icon/'),
(2, 'Ящерицы', 'lizard.png', 'images/icon/'),
(3, 'Пауки', 'spider.png', 'images/icon/'),
(4, 'Террариумы', 'terrarium.png', 'images/icon/'),
(5, 'Корм', 'feed.png', 'images/icon/');

-- --------------------------------------------------------

--
-- Структура таблицы `product_podgroup`
--

CREATE TABLE `product_podgroup` (
  `id_product_podgroup` int(11) NOT NULL,
  `name_product_podgroup` text NOT NULL,
  `image_name_product_podgroup` text NOT NULL,
  `image_location_product_podgroup` text NOT NULL DEFAULT 'images/product_podgroup/',
  `id_product_group` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `product_podgroup`
--

INSERT INTO `product_podgroup` (`id_product_podgroup`, `name_product_podgroup`, `image_name_product_podgroup`, `image_location_product_podgroup`, `id_product_group`) VALUES
(1, 'Питоны', 'phyton.jpg', 'images/product_podgroup/', 1),
(2, 'Полозы', 'poloz.jpg', 'images/product_podgroup/', 1),
(3, 'Удавы', 'udav.jpg', 'images/product_podgroup/', 1),
(4, 'Хамелеоны', 'hamelion.jpg', 'images/product_podgroup/', 2),
(5, 'Эублефары', 'eublephur.jpg', 'images/product_podgroup/', 2),
(6, 'Бананоеды', 'bananoed.jpg', 'images/product_podgroup/', 2),
(7, 'Птицееды', 'spider.jpg', 'images/product_podgroup/', 3),
(8, 'Фрины', 'frin.jpg', 'images/product_podgroup/', 3),
(9, 'Палочники', 'stick_insect.jpg', 'images/product_podgroup/', 3),
(10, 'Террариумы', 'terrarium.png', 'images/product_podgroup/', 4),
(11, 'Декорации', 'decoration.png', 'images/product_podgroup/', 4),
(12, 'Освещение', 'lighting.png', 'images/product_podgroup/', 4),
(13, 'Живые грызуны', 'live_rodents.png', 'images/product_podgroup/', 5),
(14, 'Кормовые насекомые', 'insects.png', 'images/product_podgroup/', 5),
(15, 'Замороженные грызуны', 'frozen_rodents.png', 'images/product_podgroup/', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `tokens`
--

CREATE TABLE `tokens` (
  `id_token` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `token` varchar(64) NOT NULL,
  `session_id` varchar(64) NOT NULL,
  `token_start` timestamp NOT NULL DEFAULT current_timestamp(),
  `token_expiration` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `tokens`
--

INSERT INTO `tokens` (`id_token`, `id_user`, `token`, `session_id`, `token_start`, `token_expiration`) VALUES
(21, 1, '6DGBvw8i51yf3fIkO9mrZtNvDrrsQNHk', 'f6e9uq9i28itdpmq384ahf7eel', '2022-06-03 12:18:51', '2022-06-03 13:19:04');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(24) NOT NULL,
  `user_salt` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `id_group` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `user_name`, `user_email`, `user_phone`, `user_salt`, `user_password`, `id_group`) VALUES
(1, 'Андрей', 'kucherandreykucer@gmail.com', '8 (925) 048-43-48', 'nLlOSkbAsgsm5kbUbG47wIA7oYV337G8dnooaCnKQVYM9sOJax9icGKxUivc4J26wAObGyJwxj1pFZTVkbSJEZiRaCaZUtrt4s8icicEzOTvwq0srKwa46ybUgEGHXpx8Mm4wWzglCUWbQO8D31F59D8vOSwC32T9pvIE8hMfnalWREp8SfBI4aVDwnA7cikpy7saLV5Ip7cH1cvz8rV5Nm80e9wbXRDperkldsERKnyVxfluQimweFjwxTzsMf', 'nLl2qQEU0nqA2', 1),
(2, 'Максим', 'isip_m.a.bundin@mpt.ru', '', 'kUF2enEGPtIEwAuyknH2VZhc1dQ3l6fqyqpJAMWkI71jjPaz5YRa8mukY03MC3OXXYHuLy1BfbWldejGSvv9D3kdVrnxsmyIMaui3YNrsKRVj17cwwxDr7XxbBpnjEYiIoIX5J4H8QUTG41SykchTPHGjxqHeb5oGOBrtejPZdNmmoMhuqETpkVmS1f6P7MzPPCPHBkiS1JtWQVtX1CYclvfaiY1KVrN41ko0I7Lud2sp2lKgTc97XpX7LlN9TT', 'kUAp6MRsPtguY', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`id_actions`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id_basket`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id_group`);

--
-- Индексы таблицы `image_index`
--
ALTER TABLE `image_index`
  ADD PRIMARY KEY (`id_image`);

--
-- Индексы таблицы `indent`
--
ALTER TABLE `indent`
  ADD PRIMARY KEY (`id_indent`);

--
-- Индексы таблицы `indent_product`
--
ALTER TABLE `indent_product`
  ADD PRIMARY KEY (`id_indent_product`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_product_group` (`id_product_podgroup`);

--
-- Индексы таблицы `product_group`
--
ALTER TABLE `product_group`
  ADD PRIMARY KEY (`id_product_group`);

--
-- Индексы таблицы `product_podgroup`
--
ALTER TABLE `product_podgroup`
  ADD PRIMARY KEY (`id_product_podgroup`),
  ADD KEY `id_product_group` (`id_product_group`);

--
-- Индексы таблицы `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id_token`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_group` (`id_group`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `actions`
--
ALTER TABLE `actions`
  MODIFY `id_actions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id_basket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `image_index`
--
ALTER TABLE `image_index`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `indent`
--
ALTER TABLE `indent`
  MODIFY `id_indent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `indent_product`
--
ALTER TABLE `indent_product`
  MODIFY `id_indent_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `product_group`
--
ALTER TABLE `product_group`
  MODIFY `id_product_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `product_podgroup`
--
ALTER TABLE `product_podgroup`
  MODIFY `id_product_podgroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `actions`
--
ALTER TABLE `actions`
  ADD CONSTRAINT `actions_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`),
  ADD CONSTRAINT `basket_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_product_podgroup`) REFERENCES `product_podgroup` (`id_product_podgroup`),
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`id_product_podgroup`) REFERENCES `product_podgroup` (`id_product_podgroup`);

--
-- Ограничения внешнего ключа таблицы `product_podgroup`
--
ALTER TABLE `product_podgroup`
  ADD CONSTRAINT `product_podgroup_ibfk_1` FOREIGN KEY (`id_product_group`) REFERENCES `product_group` (`id_product_group`);

--
-- Ограничения внешнего ключа таблицы `tokens`
--
ALTER TABLE `tokens`
  ADD CONSTRAINT `tokens_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id_group`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
