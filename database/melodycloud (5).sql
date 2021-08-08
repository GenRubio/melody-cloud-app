-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2021 a las 21:27:16
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `melodycloud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directori_contents`
--

CREATE TABLE `directori_contents` (
  `id` int(11) NOT NULL,
  `dir_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `sound` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `directori_contents`
--

INSERT INTO `directori_contents` (`id`, `dir_id`, `user_id`, `titulo`, `sound`, `created_at`, `updated_at`) VALUES
(9, 8, 15, NULL, '/users/$2y$10$XBirh8I6rT5OOuwktcT1U.Vh/g0qFzBBJ4Yp0FBPB1FTgyzbUdBF2/Eminem/1129599734.mp3', '2021-01-28 05:57:24', '2021-01-28 05:57:24'),
(11, 8, 15, NULL, '/users/$2y$10$XBirh8I6rT5OOuwktcT1U.Vh/g0qFzBBJ4Yp0FBPB1FTgyzbUdBF2/Eminem/1725073450.mp3', '2021-01-28 06:15:11', '2021-01-28 06:15:11'),
(13, 7, 15, NULL, '/users/$2y$10$XBirh8I6rT5OOuwktcT1U.Vh/g0qFzBBJ4Yp0FBPB1FTgyzbUdBF2/Musica/564569782.mp3', '2021-03-24 10:44:35', '2021-03-24 10:44:35'),
(14, 8, 15, NULL, '/users/$2y$10$XBirh8I6rT5OOuwktcT1U.Vh/g0qFzBBJ4Yp0FBPB1FTgyzbUdBF2/Eminem/91797545.mp3', '2021-03-24 10:47:11', '2021-03-24 10:47:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `home_readers`
--

CREATE TABLE `home_readers` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `home_readers`
--

INSERT INTO `home_readers` (`id`, `title`, `description`, `url_image`, `created_at`, `updated_at`) VALUES
(1, 'Hola mundo', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa explicabo cupiditate voluptatibus. Temporibus praesentium minima asperiores totam deserunt vero, ut voluptas illum quisquam deleniti nam\r\n', '/images/home/cloud.jpg', NULL, NULL),
(2, 'Hola mundo', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa explicabo cupiditate voluptatibus. Temporibus praesentium minima asperiores totam deserunt vero, ut voluptas illum quisquam deleniti nam\r\n', '/images/home/musica.jpg', NULL, NULL),
(3, 'Hola mundo', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa explicabo cupiditate voluptatibus. Temporibus praesentium minima asperiores totam deserunt vero, ut voluptas illum quisquam deleniti nam\r\n', '/images/home/amigos.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `home_sections`
--

CREATE TABLE `home_sections` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `home_sections`
--

INSERT INTO `home_sections` (`id`, `title`, `description`, `updated_at`, `created_at`) VALUES
(1, 'Hola1', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa explicabo cupiditate voluptatibus. Temporibus praesentium minima asperiores totam deserunt vero, ut voluptas illum quisquam deleniti nam\r\nofficiis, ea eveniet officia repellendus.', NULL, NULL),
(2, 'Hola', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa explicabo cupiditate voluptatibus. Temporibus praesentium minima asperiores totam deserunt vero, ut voluptas illum quisquam deleniti nam\r\nofficiis, ea eveniet officia repellendus.', NULL, NULL),
(3, 'Hola', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa explicabo cupiditate voluptatibus. Temporibus praesentium minima asperiores totam deserunt vero, ut voluptas illum quisquam deleniti nam\r\nofficiis, ea eveniet officia repellendus.', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `repositorio` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `password`, `remember_token`, `repositorio`, `updated_at`, `created_at`) VALUES
(15, 'Gen', NULL, 'x@gmail.com', '$2y$10$2Vnfc/cYjM1noHHgmSz7t.f1Ap5Dsp3ek32DYmk5hyTZsgjnJ6KSK', 'GvJC8W9ptoMo0NzDXjHekt8Iwd0aXOoNZWE5IKPvCSoY56jj47NoImwZvjpA', '$2y$10$XBirh8I6rT5OOuwktcT1U.Vh/g0qFzBBJ4Yp0FBPB1FTgyzbUdBF2', '2021-01-21 07:43:50', '2021-01-21 07:43:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_directories`
--

CREATE TABLE `user_directories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user_directories`
--

INSERT INTO `user_directories` (`id`, `user_id`, `name`, `updated_at`, `created_at`) VALUES
(7, 15, 'Musica', '2021-01-26 19:48:10', '2021-01-26 19:48:10'),
(8, 15, 'Eminem', '2021-01-26 19:57:07', '2021-01-26 19:57:07'),
(9, 15, 'Nueva', '2021-01-26 20:03:26', '2021-01-26 20:03:26'),
(10, 15, 'Prueba', '2021-01-26 20:05:25', '2021-01-26 20:05:25'),
(11, 15, 'safASF', '2021-01-27 14:47:32', '2021-01-27 14:47:32'),
(12, 15, 'Gen', '2021-01-27 15:31:18', '2021-01-27 15:31:18'),
(13, 15, 'Patatas', '2021-03-24 10:42:44', '2021-03-24 10:42:44');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `directori_contents`
--
ALTER TABLE `directori_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `home_readers`
--
ALTER TABLE `home_readers`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `home_sections`
--
ALTER TABLE `home_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- Indices de la tabla `user_directories`
--
ALTER TABLE `user_directories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `directori_contents`
--
ALTER TABLE `directori_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `home_readers`
--
ALTER TABLE `home_readers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `home_sections`
--
ALTER TABLE `home_sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `user_directories`
--
ALTER TABLE `user_directories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
