-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-12-2022 a las 22:15:32
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ugasscrud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `balance`
--

CREATE TABLE `balance` (
  `id_balance` int(11) NOT NULL,
  `id_user_child` int(11) NOT NULL,
  `val` float(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `balance`
--

INSERT INTO `balance` (`id_balance`, `id_user_child`, `val`) VALUES
(1, 1, 20.30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receipts`
--

CREATE TABLE `receipts` (
  `id_receipt` int(11) NOT NULL,
  `id_user_child` int(11) DEFAULT NULL,
  `code_conexion` varchar(10) DEFAULT NULL,
  `month_factured` date NOT NULL,
  `number_receipt` varchar(15) DEFAULT NULL,
  `mount` float(4,2) DEFAULT NULL,
  `state` int(1) DEFAULT NULL,
  `issue` date NOT NULL,
  `expires` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `receipts`
--

INSERT INTO `receipts` (`id_receipt`, `id_user_child`, `code_conexion`, `month_factured`, `number_receipt`, `mount`, `state`, `issue`, `expires`) VALUES
(1, 1, '21213322', '2022-04-01', '0202-00054321', 15.50, 1, '2022-03-01', '2022-05-01'),
(2, 1, '21213322', '2022-02-01', '0202-00154321', 25.50, 1, '2022-02-01', '2022-02-28'),
(3, 1, '21213322', '2022-03-01', '0202-41113321', 23.50, 2, '2022-03-01', '2022-03-28'),
(4, 1, '21213322', '2022-03-01', '0202-45113321', 27.50, 3, '2022-03-01', '2022-03-28'),
(5, 2, '26587322', '2022-03-01', '0202-40153391', 23.50, 1, '2022-03-01', '2022-03-28'),
(6, 23, '2651622759', '2022-12-20', '2022-1400', 1.00, 1, '2023-01-01', '2023-01-01'),
(7, 24, '26513189', '2022-12-20', '2022-5960', 1.00, 1, '2023-01-01', '2023-01-01'),
(8, 25, '26518801', '2022-12-20', '2022-8619', 1.00, 1, '2023-01-01', '2023-01-01'),
(9, 26, '26519674', '2022-12-20', '2022-4719', 1.00, 1, '2023-01-01', '2023-01-01'),
(10, 26, '26519674', '2022-12-20', '2022-4719', 1.00, 3, '2023-01-01', '2023-01-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `address` varchar(25) DEFAULT NULL,
  `id_receipt_child` int(11) DEFAULT NULL,
  `id_supply_child` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `service`
--

INSERT INTO `service` (`id_service`, `address`, `id_receipt_child`, `id_supply_child`) VALUES
(1, 'Av. La cruz 323', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supply_details`
--

CREATE TABLE `supply_details` (
  `id_supply` int(11) NOT NULL,
  `id_user_child` int(11) DEFAULT NULL,
  `cod_cata` varchar(10) DEFAULT NULL,
  `measurer` tinyint(1) NOT NULL,
  `category` int(1) DEFAULT NULL,
  `Uuse` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `service` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `supply_details`
--

INSERT INTO `supply_details` (`id_supply`, `id_user_child`, `cod_cata`, `measurer`, `category`, `Uuse`, `rate`, `service`) VALUES
(1, 1, '2-52-6-6-6', 1, 1, 1, 121, 'AD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transactions`
--

CREATE TABLE `transactions` (
  `id_transaction` int(11) NOT NULL,
  `id_receipt_child` int(11) DEFAULT NULL,
  `id_transaction_encoded` varchar(35) DEFAULT NULL,
  `id_user_child` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(1) DEFAULT NULL,
  `payedWith` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `transactions`
--

INSERT INTO `transactions` (`id_transaction`, `id_receipt_child`, `id_transaction_encoded`, `id_user_child`, `time`, `status`, `payedWith`) VALUES
(1, 1, '40ee1c36e1b8a128f5bfeb7879b85d4a', 1, '2022-12-30 03:09:43', 1, 2),
(2, 4, '3136c881beeaf35b862733bee9d76c57', 1, '2022-12-29 05:00:00', 1, 2),
(3, 4, '3136c881beeaf35b862733bee9d76c57', 1, '2022-12-29 05:00:00', 1, 2),
(4, 4, '3136c881beeaf35b862733bee9d76c57', 1, '2022-12-29 05:00:00', 1, 2),
(5, 4, '3136c881beeaf35b862733bee9d76c57', 1, '2022-12-29 05:00:00', 1, 2),
(6, 4, 'ab5ee6d02977f07314482f2ef756accb', 1, '2022-12-29 16:56:19', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `user_rol` int(1) NOT NULL,
  `Fname` varchar(30) DEFAULT NULL,
  `LnameP` varchar(30) DEFAULT NULL,
  `LnameM` varchar(30) DEFAULT NULL,
  `dni` varchar(8) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(25) DEFAULT NULL,
  `type` varchar(25) DEFAULT NULL,
  `id_service_child` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `user_rol`, `Fname`, `LnameP`, `LnameM`, `dni`, `username`, `password`, `email`, `phone`, `address`, `type`, `id_service_child`) VALUES
(1, 1, 'Manuel', 'Alcides', 'Carrion', '70192219', 'manueluser', 'contrasenia', 'manuelalcides1@gmail.com', '922322322', 'Av. La cruz 323', 'personal', 1),
(2, 2, 'Alberto', 'Cutipa', 'Maquera', '71308923', 'adminuser', 'adminpassword', 'admingm@gmail.com', '922142378', 'Av. Independencia 332', 'personal', 3),
(26, 1, 'jose', 'mamani', 'carrion', '12345678', 'user', 'pass', 'sotilrac696@gmail.com', '123456789', 'Jr. Jose Ezeta', 'personnal', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `balance`
--
ALTER TABLE `balance`
  ADD PRIMARY KEY (`id_balance`),
  ADD KEY `id_user_child_x` (`id_user_child`);

--
-- Indices de la tabla `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`id_receipt`),
  ADD KEY `id_user_child_x` (`id_user_child`);

--
-- Indices de la tabla `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`),
  ADD KEY `id_receipt_child_x` (`id_receipt_child`),
  ADD KEY `id_supply_child_x` (`id_supply_child`);

--
-- Indices de la tabla `supply_details`
--
ALTER TABLE `supply_details`
  ADD PRIMARY KEY (`id_supply`),
  ADD KEY `id_user_child_z` (`id_user_child`);

--
-- Indices de la tabla `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id_transaction`),
  ADD KEY `id_receipt_child_x` (`id_receipt_child`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_service_child_x` (`id_service_child`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `balance`
--
ALTER TABLE `balance`
  MODIFY `id_balance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `receipts`
--
ALTER TABLE `receipts`
  MODIFY `id_receipt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `supply_details`
--
ALTER TABLE `supply_details`
  MODIFY `id_supply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id_transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
