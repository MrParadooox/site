-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Сен 10 2019 г., 03:09
-- Версия сервера: 5.6.37
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `answerReviews`
--

CREATE TABLE `answerReviews` (
  `reviewsId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `imgUrl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `blogCategory`
--

CREATE TABLE `blogCategory` (
  `blogId` int(11) NOT NULL,
  `blogCategoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `blogCategoryPage`
--

CREATE TABLE `blogCategoryPage` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `descripion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brand`
--

INSERT INTO `brand` (`id`, `name`, `description`, `img`) VALUES
(0, 'Apple', 'Тут типа мальенькое описание бренда', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Apple_logo_black.svg/170px-Apple_logo_black.svg.png');

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `position` tinyint(4) NOT NULL,
  `img` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `position`, `img`, `url`) VALUES
(0, 'Мужская обувь', 'Описание мужской обуви тут длинное', 0, 'https://i.siteapi.org/ENCgFMTva2VAkjcmwD6bHjrwmPo=/fit-in/1024x768/center/top/filters:quality(95)/8ac89d6f7eb30c1.ru.s.siteapi.org/img/e6jxugj6kq0oos04o4gk4s0ckkcsw4', 'muzskaya-obuv'),
(1, 'Ботинки мужские', 'описание тут и т д іваівоа', 0, '1', 'botinki');

-- --------------------------------------------------------

--
-- Структура таблицы `categoryProduct`
--

CREATE TABLE `categoryProduct` (
  `categoryId` int(11) NOT NULL,
  `productId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categoryProduct`
--

INSERT INTO `categoryProduct` (`categoryId`, `productId`) VALUES
(0, 1),
(0, 2),
(0, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `delivery`
--

INSERT INTO `delivery` (`id`, `name`, `description`, `img`) VALUES
(1, 'Новая Почта', 'Переведено с английского языка.-Новая Почта - частная украинская почтовая и курьерская компания, которая осуществляет экспресс-доставку документов, грузов и посылок для частных лиц и предприятий. В 2017 году компания доставила более 145 миллионов грузов через 2300 филиалов компании по всей стране.', 'https://file.liga.net/images/general/2018/04/10/20180410122220-2718.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `orderDetails`
--

CREATE TABLE `orderDetails` (
  `orderId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `productPrice` int(11) DEFAULT NULL,
  `Count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `sum` mediumint(9) NOT NULL,
  `productCount` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `smallDesc` varchar(255) NOT NULL,
  `description` text,
  `count` mediumint(9) DEFAULT NULL,
  `brandId` int(11) NOT NULL,
  `price` mediumint(9) DEFAULT NULL,
  `categoryId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `Name`, `smallDesc`, `description`, `count`, `brandId`, `price`, `categoryId`) VALUES
(1, 'Мужские осенние кроссовки 1', 'По умолчанию указана оптовая цена за одну пару. При выборе оптовой цены получите расчет за упаковку, то есть 8 пар.', 'Новые стильные и удобные кроссовки Т51 станут настоящей находкой для любителей качественной мужской обуви, а также принесут комфорт в вашу жизнь и сделают каждый шаг более удобным.', 100, 0, 1080, 0),
(2, 'Мужские осенние кроссовки 2', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismo tincidunt ut laoreet dolore magna aliquam erat volutpat, feugiat nulla facilisis vero eros accumsan et iusto.', 'Новые стильные и удобные кроссовки Т51 станут настоящей находкой для любителей качественной мужской обуви, а также принесут комфорт в вашу жизнь и сделают каждый шаг более удобным.', 100, 0, 1080, 0),
(3, 'Мужские осенние кроссовки 3', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismo tincidunt ut laoreet dolore magna aliquam erat volutpat, feugiat nulla facilisis vero eros accumsan et iusto.', 'Новые стильные и удобные кроссовки Т51 станут настоящей находкой для любителей качественной мужской обуви, а также принесут комфорт в вашу жизнь и сделают каждый шаг более удобным.', 100, 0, 1080, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `productDelivery`
--

CREATE TABLE `productDelivery` (
  `productId` int(11) NOT NULL,
  `deliveryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `productImg`
--

CREATE TABLE `productImg` (
  `productId` int(11) NOT NULL,
  `position` tinyint(4) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `productImg`
--

INSERT INTO `productImg` (`productId`, `position`, `url`) VALUES
(1, 0, 'https://i.siteapi.org/ENCgFMTva2VAkjcmwD6bHjrwmPo=/fit-in/1024x768/center/top/filters:quality(95)/8ac89d6f7eb30c1.ru.s.siteapi.org/img/e6jxugj6kq0oos04o4gk4s0ckkcsw4'),
(1, 1, 'https://i.siteapi.org/0ttSRYO0HpO-bNL8IsfOqdOgpAw=/fit-in/1024x768/center/top/filters:quality(95)/8ac89d6f7eb30c1.ru.s.siteapi.org/img/dlra3rl1z3coks4ggsc0wg040s4woo'),
(1, 2, 'https://i.siteapi.org/jEcCFgnAzyPOcYYwIacBpAM7jy4=/fit-in/1024x768/center/top/filters:quality(95)/8ac89d6f7eb30c1.ru.s.siteapi.org/img/3q8t8jams9icgco88c0gkkw4sgcoc0'),
(2, 0, 'https://i.siteapi.org/FRdRL8b9U_pGRcXY3hwFmQQ1ork=/fit-in/1024x768/center/top/filters:quality(95)/8ac89d6f7eb30c1.ru.s.siteapi.org/img/bnsr58yipy0c4444ccc0c8g4804owc'),
(2, 1, 'https://i.siteapi.org/yrYRRhkuj4ixX8wmycP_xNPv__k=/fit-in/1024x768/center/top/filters:quality(95)/8ac89d6f7eb30c1.ru.s.siteapi.org/img/l5sjcongy3kg440osg4g8w0c0kgkgg'),
(3, 0, 'https://i.siteapi.org/C4VdLJ5oPUwjVHqFD5_UmauiMu0=/fit-in/1024x768/center/top/filters:quality(95)/8ac89d6f7eb30c1.ru.s.siteapi.org/img/7fc89d2b1dfaec9876c629c719272c4d331b79cb.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(200) DEFAULT NULL,
  `Password` text,
  `FirstName` varchar(250) NOT NULL,
  `LastName` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Phone` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `Password`, `FirstName`, `LastName`, `Email`, `Phone`) VALUES
(1, 'ppancor@yandex.ru', '0fc48559cefd281ceb91630b975f2397e5357255', 'roman', 'roman', 'ppancor@yandex.ru', '380677863280');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `answerReviews`
--
ALTER TABLE `answerReviews`
  ADD KEY `reviewsId` (`reviewsId`),
  ADD KEY `userId` (`userId`);

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blogCategory`
--
ALTER TABLE `blogCategory`
  ADD KEY `blogCategoryId` (`blogCategoryId`),
  ADD KEY `blogId` (`blogId`);

--
-- Индексы таблицы `blogCategoryPage`
--
ALTER TABLE `blogCategoryPage`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `id_3` (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categoryProduct`
--
ALTER TABLE `categoryProduct`
  ADD KEY `categoryId` (`categoryId`),
  ADD KEY `productId` (`productId`);

--
-- Индексы таблицы `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customerId` (`customerId`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Индексы таблицы `productDelivery`
--
ALTER TABLE `productDelivery`
  ADD KEY `deliveryId` (`deliveryId`),
  ADD KEY `productId` (`productId`);

--
-- Индексы таблицы `productImg`
--
ALTER TABLE `productImg`
  ADD KEY `productId` (`productId`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productId` (`productId`),
  ADD KEY `userId` (`userId`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `blogCategoryPage`
--
ALTER TABLE `blogCategoryPage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `answerReviews`
--
ALTER TABLE `answerReviews`
  ADD CONSTRAINT `answerreviews_ibfk_1` FOREIGN KEY (`reviewsId`) REFERENCES `reviews` (`id`),
  ADD CONSTRAINT `answerreviews_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`id`);

--
-- Ограничения внешнего ключа таблицы `blogCategory`
--
ALTER TABLE `blogCategory`
  ADD CONSTRAINT `blogcategory_ibfk_1` FOREIGN KEY (`blogCategoryId`) REFERENCES `blogCategoryPage` (`id`),
  ADD CONSTRAINT `blogcategory_ibfk_2` FOREIGN KEY (`blogId`) REFERENCES `blog` (`id`);

--
-- Ограничения внешнего ключа таблицы `categoryProduct`
--
ALTER TABLE `categoryProduct`
  ADD CONSTRAINT `categoryproduct_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `categoryproduct_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `product` (`id`);

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customerId`) REFERENCES `user` (`id`);

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `category` (`id`);

--
-- Ограничения внешнего ключа таблицы `productDelivery`
--
ALTER TABLE `productDelivery`
  ADD CONSTRAINT `productdelivery_ibfk_1` FOREIGN KEY (`deliveryId`) REFERENCES `delivery` (`id`),
  ADD CONSTRAINT `productdelivery_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `product` (`id`);

--
-- Ограничения внешнего ключа таблицы `productImg`
--
ALTER TABLE `productImg`
  ADD CONSTRAINT `productimg_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `product` (`id`);

--
-- Ограничения внешнего ключа таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
