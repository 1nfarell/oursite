-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 19 2023 г., 07:09
-- Версия сервера: 8.0.29
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_order`
--

-- --------------------------------------------------------

--
-- Структура таблицы `balance_orders`
--

CREATE TABLE `balance_orders` (
  `id_balance_orders` int NOT NULL,
  `number_order` text NOT NULL COMMENT 'номер заказа',
  `sum_pay` int UNSIGNED NOT NULL COMMENT 'сумма оплаты',
  `time_pay` text NOT NULL COMMENT 'время оплаты',
  `account` text NOT NULL COMMENT 'кто изменил'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `balance_orders`
--

INSERT INTO `balance_orders` (`id_balance_orders`, `number_order`, `sum_pay`, `time_pay`, `account`) VALUES
(11, '3', 20, '18.05.2023', 'Бекецкий Максим'),
(12, '3', 2, '18.05.2023', 'Бекецкий Максим'),
(13, '5', 4, '18.05.2023', 'Бекецкий Максим'),
(14, '232', 23, '18.05.2023', 'Бекецкий Максим'),
(15, '12333', 100, '18.05.2023', 'Бекецкий Максим'),
(16, '42', 43, '18.05.2023', 'Бекецкий Максим'),
(17, '1244', 11, '18.05.2023', 'Бекецкий Максим'),
(18, '6666', 66, '18.05.2023', 'Бекецкий Максим');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int NOT NULL COMMENT 'id заказа',
  `number_order` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'номер заказа',
  `description_order` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'наименование заказа',
  `price_order` int NOT NULL COMMENT 'стоимость заказа',
  `payment_balance` int UNSIGNED DEFAULT NULL COMMENT 'остаток оплаты',
  `price_order__status` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'статус заказа',
  `today_date_order` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'время добавления заказа',
  `order__status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'категория статуса',
  `time_last_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'время последнего изменения статуса',
  `adress_order` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT 'адрес заказчика',
  `contact_name_order` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'фио',
  `contact_order` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'контакты заказчика',
  `date_montazh` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'дата доставки заказа',
  `account` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_order`, `number_order`, `description_order`, `price_order`, `payment_balance`, `price_order__status`, `today_date_order`, `order__status`, `time_last_status`, `adress_order`, `contact_name_order`, `contact_order`, `date_montazh`, `account`) VALUES
(56, '1', '1', 10, 0, 'Оплачен', '18.05.2023', 'В обработке', '18.05.2023', 'Б', 'Б', 'Б', NULL, 'Бекецкий Максим'),
(57, '2', '2', 20, 0, 'Оплачен', '18.05.2023', 'В обработке', '18.05.2023', '1', '1', '1', NULL, 'Бекецкий Максим'),
(58, '3', '3', 30, 0, 'Оплачен', '18.05.2023', 'В обработке', '18.05.2023', 'колычева 12 кв 32', 'К', 'К', NULL, 'Бекецкий Максим'),
(59, '5', '5', 5, 0, 'Оплачен', '18.05.2023', 'В обработке', '18.05.2023', 'g', 'g', 'g', NULL, 'Бекецкий Максим'),
(60, '10', '4', 40, 40, 'Оплачен', '18.05.2023', 'В обработке', '18.05.2023', 'b', 'b', 'b', NULL, 'Бекецкий Максим'),
(61, '66', '6', 66, 0, 'Оплачен', '18.05.2023', 'В обработке', '18.05.2023', 'b', 'b', 'b', NULL, 'Бекецкий Максим'),
(62, '70', '70', 70, 0, 'Оплачен', '18.05.2023', 'В обработке', '18.05.2023', '70', '70', '70', NULL, 'Бекецкий Максим'),
(63, '54', '54', 54, 0, 'Оплачен', '18.05.2023', 'В обработке', '18.05.2023', '54', '54', '54', NULL, 'Бекецкий Максим'),
(64, '43', '43', 43, 0, 'Оплачен', '18.05.2023', 'В обработке', '18.05.2023', '43', '43', '43', NULL, 'Бекецкий Максим'),
(65, '232', '23', 23, 0, 'Предоплата', '18.05.2023', 'В обработке', '18.05.2023', '23', '232', '23', NULL, 'Бекецкий Максим'),
(66, '12333', '123', 123, 0, 'Оплачен', '18.05.2023', 'В обработке', '18.05.2023', 'asd', 'dsa', 'asd', NULL, 'Бекецкий Максим'),
(67, '42', '43', 43, 0, 'Предоплата', '18.05.2023', 'В обработке', '18.05.2023', '43', '43', '43', NULL, 'Бекецкий Максим'),
(68, '1244', '44', 44, 0, 'Оплачен', '18.05.2023', 'В обработке', '18.05.2023', 'd', 'd', 'd', NULL, 'Бекецкий Максим'),
(69, '1111', '11', 11, 11, 'Предоплата', '18.05.2023', 'В обработке', '18.05.2023', '', '11', '11', NULL, 'Бекецкий Максим'),
(70, '9879', '767', 6767, 6767, 'Предоплата', '18.05.2023', 'В обработке', '18.05.2023', '', '6767', '6767', NULL, 'Бекецкий Максим'),
(71, '6666', '66', 66, 0, 'Предоплата', '18.05.2023', 'В обработке', '18.05.2023', 'Самовывоз', '66', '66', NULL, 'Бекецкий Максим');

-- --------------------------------------------------------

--
-- Структура таблицы `order_status`
--

CREATE TABLE `order_status` (
  `id_status` int NOT NULL,
  `number_order` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'номер заказа по договору',
  `status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'статус ваполнения заказа',
  `time_status` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'время присвоения статуса',
  `account` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `order_status`
--

INSERT INTO `order_status` (`id_status`, `number_order`, `status`, `time_status`, `account`) VALUES
(227, '1', 'В обработке', '18.05.2023', 'Бекецкий Максим'),
(228, '2', 'В обработке', '18.05.2023', 'Бекецкий Максим'),
(229, '3', 'В обработке', '18.05.2023', 'Бекецкий Максим'),
(230, '5', 'В обработке', '18.05.2023', 'Бекецкий Максим'),
(231, '10', 'В обработке', '18.05.2023', 'Бекецкий Максим'),
(232, '66', 'В обработке', '18.05.2023', 'Бекецкий Максим'),
(233, '70', 'В обработке', '18.05.2023', 'Бекецкий Максим'),
(234, '54', 'В обработке', '18.05.2023', 'Бекецкий Максим'),
(235, '43', 'В обработке', '18.05.2023', 'Бекецкий Максим'),
(236, '232', 'В обработке', '18.05.2023', 'Бекецкий Максим'),
(237, '12333', 'В обработке', '18.05.2023', 'Бекецкий Максим'),
(238, '42', 'В обработке', '18.05.2023', 'Бекецкий Максим'),
(239, '1244', 'В обработке', '18.05.2023', 'Бекецкий Максим'),
(240, '1111', 'В обработке', '18.05.2023', 'Бекецкий Максим'),
(241, '9879', 'В обработке', '18.05.2023', 'Бекецкий Максим'),
(242, '6666', 'В обработке', '18.05.2023', 'Бекецкий Максим');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `balance_orders`
--
ALTER TABLE `balance_orders`
  ADD PRIMARY KEY (`id_balance_orders`);

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
-- AUTO_INCREMENT для таблицы `balance_orders`
--
ALTER TABLE `balance_orders`
  MODIFY `id_balance_orders` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int NOT NULL AUTO_INCREMENT COMMENT 'id заказа', AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT для таблицы `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id_status` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
