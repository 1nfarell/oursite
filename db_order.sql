-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 13 2023 г., 17:34
-- Версия сервера: 8.0.29
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `db_order`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int NOT NULL COMMENT 'id заказа',
  `number_order` text NOT NULL COMMENT 'номер заказа',
  `description_order` text NOT NULL COMMENT 'наименование заказа',
  `price_order` int NOT NULL COMMENT 'стоимость заказа',
  `price_order__status` text NOT NULL COMMENT 'статус заказа',
  `today_date_order` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'время добавления заказа',
  `order__status` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'категория статуса',
  `time_last_status` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'время последнего изменения статуса',
  `adress_order` text NOT NULL COMMENT 'адрес заказчика',
  `contact_name_order` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'фио',
  `contact_order` text NOT NULL COMMENT 'контакты заказчика',
  `date_montazh` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT 'дата доставки заказа',
  `account` text NOT NULL COMMENT 'имя аккаунта добавившего заказ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_order`, `number_order`, `description_order`, `price_order`, `price_order__status`, `today_date_order`, `order__status`, `time_last_status`, `adress_order`, `contact_name_order`, `contact_order`, `date_montazh`, `account`) VALUES
(46, '001', 'Пласт.окна', 1000, 'Не оплачен', '11.05.2023', 'В обработке', '11.05.2023', 'г Волжский ул генерала карбышера 112 кб 22', 'Иван Иваныч', '8 919 547 99 99', NULL, ''),
(47, '002', 'Моск.Сетки', 1000, 'Оплачен', '11.05.2023', 'В обработке', '11.05.2023', 'г Во ул ген кар 112 кб 22', 'Федор Федорович', '8 091 666 88 00', NULL, ''),
(48, '003', 'Рольставни', 80000, 'Рассрочка', '11.05.2023', 'В обработке', '11.05.2023', 'г Волгоград ул Революции кар 33 кб 21', 'Фролов Генадий', '8 999 111 11 00', NULL, ''),
(49, '004', 'Пластиковые двери', 5000, 'Не оплачен', '11.05.2023', 'В обработке', '11.05.2023', 'г Ский ул Генекарбыш 11 кб 2', 'Крутов Сергей Генадьевич', '8 666 066 00 66', NULL, ''),
(50, '005', 'Балкон', 40000, 'Оплачен', '11.05.2023', 'Доставка', '11.05.2023', 'г Ондакий ул Гербыш 11 кб 2', 'Пучков Анатолий', '8 1111 777 11 00', NULL, ''),
(51, '006', 'Мягкие окна', 7000, 'Предоплата', '11.05.2023', 'В обработке', '11.05.2023', 'г Волгоград ул Ждуна 22 кб 21', 'Васькин Казьма', '8 999 555 55 00', NULL, ''),
(52, '007', 'Жалюзи', 2000, 'Оплачен', '11.05.2023', 'Сборка', '12.05.2023', 'г Волжский ул Ура 11 кв 2', 'Фиолетов Иван', '8 999 111 33 00', NULL, ''),
(53, '008', 'Металлические стеллажи', 15000, 'Не оплачен', '11.05.2023', 'Выполнен', '12.05.2023', 'г Волгоград ул Синих 22 кв 12', 'Синицин Роман', '8 199 666 43 01', '2023-05-12', ''),
(54, '1111', '11', 1, 'Предоплата', '13.05.2023', 'Сборка', '13.05.2023', '1', '12', '2', NULL, 'Бекецкий Максим'),
(55, '111', '11', 1, 'Рассрочка', '13.05.2023', 'Доставка', '13.05.2023', '1', '1', '1', NULL, 'Бекецкий Максим'),
(56, '232', '23', 23, 'Не оплачен', '13.05.2023', 'В обработке', '13.05.2023', '23', '23', '23', NULL, 'Бекецкий Максим');

-- --------------------------------------------------------

--
-- Структура таблицы `order_status`
--

CREATE TABLE `order_status` (
  `id_status` int NOT NULL,
  `number_order` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'номер заказа по договору',
  `status` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'статус ваполнения заказа',
  `time_status` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'время присвоения статуса',
  `account` text NOT NULL COMMENT 'аккаунт который присвоил статус'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `order_status`
--

INSERT INTO `order_status` (`id_status`, `number_order`, `status`, `time_status`, `account`) VALUES
(144, '001', 'В обработке', '11.05.2023', ''),
(145, '002', 'В обработке', '11.05.2023', ''),
(146, '003', 'В обработке', '11.05.2023', ''),
(147, '004', 'В обработке', '11.05.2023', ''),
(148, '005', 'В обработке', '11.05.2023', ''),
(149, '006', 'В обработке', '11.05.2023', ''),
(150, '007', 'В обработке', '11.05.2023', ''),
(151, '008', 'В обработке', '11.05.2023', ''),
(152, '008', 'Сборка', '11.05.2023', ''),
(153, '005', 'Доставка', '11.05.2023', ''),
(154, '007', 'Сборка', '12.05.2023', ''),
(155, '008', 'Выполнен', '12.05.2023', ''),
(156, '008', 'Доставка', '12.05.2023', ''),
(157, '008', 'Выполнен', '12.05.2023', ''),
(158, '008', 'Доставка', '12.05.2023', ''),
(159, '008', 'Выполнен', '12.05.2023', ''),
(160, '008', 'Доставка', '12.05.2023', ''),
(161, '008', 'Выполнен', '12.05.2023', ''),
(162, '008', 'Выполнен', '12.05.2023', ''),
(163, '111', 'В обработке', '13.05.2023', ''),
(164, '1111', 'В обработке', '13.05.2023', ''),
(165, '1111', 'Сборка', '13.05.2023', 'Бекецкий Максим'),
(166, '111', 'Доставка', '13.05.2023', 'Бекецкий Максим'),
(167, '232', 'В обработке', '13.05.2023', 'Бекецкий Максим');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Индексы таблицы `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int NOT NULL AUTO_INCREMENT COMMENT 'id заказа', AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT для таблицы `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id_status` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
