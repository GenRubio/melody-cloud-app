-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2021 a las 23:16:53
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
-- Estructura de tabla para la tabla `sounds`
--

CREATE TABLE `sounds` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `url` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sounds`
--

INSERT INTO `sounds` (`id`, `full_name`, `slug`, `author`, `url`, `created_at`, `updated_at`) VALUES
(11, 'California Vacation', 'california-vacation', 'Game - Topic', 'https://youtu.be/QYOPxHNnSwc', NULL, NULL),
(12, 'Don Omar - Virtual Diva', 'don-omar-virtual-diva', 'DonOmarVEVO', 'https://youtu.be/vRBgZ4aMPio', NULL, NULL),
(13, 'Eminem - Without Me (Official Music Video)', 'eminem-without-me-official-music-video', 'EminemVEVO', 'https://youtu.be/YVkUvmDQ3HY', NULL, NULL),
(14, 'Basshunter : Now You\'re Gone', 'basshunter-now-youre-gone', 'Ministry of Sound', 'https://youtu.be/IgFwiCApH7E', NULL, NULL),
(15, 'Eminem - You Don\'t Know (Official Music Video) ft. 50 Cent, Cashis, Lloyd Banks', 'eminem-you-dont-know-official-music-video-ft-50-cent-cashis-lloyd-banks', 'EminemVEVO', 'https://youtu.be/ngH0fkiNo-g', NULL, NULL),
(16, 'THRILL PILL, Егор Крид & MORGENSHTERN - Грустная Песня', 'thrill-pill-morgenshtern', 'THRILL PILL', 'https://youtu.be/pHJZhBLCbu0', NULL, NULL),
(17, 'RSAC x ELLA — NBA (Не мешай) (OFFICIAL VIDEO)', 'rsac-x-ella-nba-official-video', 'RSAC', 'https://youtu.be/sl3AOxaVHuU', NULL, NULL),
(18, 'MiyaGi, Эндшпиль, 9 Грамм – Рапапам', 'miyagi-9', 'Bustazz Records', 'https://youtu.be/RkfMKfUhsKY', NULL, NULL),
(19, 'Onizuka', 'onizuka', 'PNL - Topic', 'https://youtu.be/zl56DFlI65s', NULL, NULL);

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
  `uid` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `password`, `remember_token`, `repositorio`, `uid`, `updated_at`, `created_at`) VALUES
(15, 'Gen', NULL, 'x@gmail.com', '$2y$10$2Vnfc/cYjM1noHHgmSz7t.f1Ap5Dsp3ek32DYmk5hyTZsgjnJ6KSK', '4JqjMHghq2QtStFdS93VB7IjGsxv6rGvMqnEf0md2tFYv1letociwwZLNKR1', '$2y$10$XBirh8I6rT5OOuwktcT1U.Vh/g0qFzBBJ4Yp0FBPB1FTgyzbUdBF2', 'token_uid-32414324', '2021-01-21 07:43:50', '2021-01-21 07:43:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_sounds`
--

CREATE TABLE `user_sounds` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sound_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user_sounds`
--

INSERT INTO `user_sounds` (`id`, `user_id`, `sound_id`, `created_at`, `updated_at`) VALUES
(2, 15, 11, NULL, NULL),
(3, 15, 12, NULL, NULL),
(4, 15, 13, NULL, NULL),
(5, 15, 14, NULL, NULL),
(6, 15, 15, NULL, NULL),
(7, 15, 16, NULL, NULL),
(8, 15, 17, NULL, NULL),
(9, 15, 18, NULL, NULL),
(10, 15, 19, NULL, NULL);

--
-- Índices para tablas volcadas
--

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
-- Indices de la tabla `sounds`
--
ALTER TABLE `sounds`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- Indices de la tabla `user_sounds`
--
ALTER TABLE `user_sounds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

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
-- AUTO_INCREMENT de la tabla `sounds`
--
ALTER TABLE `sounds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `user_sounds`
--
ALTER TABLE `user_sounds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
