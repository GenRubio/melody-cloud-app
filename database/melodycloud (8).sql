-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-08-2021 a las 10:53:06
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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `time` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sounds`
--

INSERT INTO `sounds` (`id`, `full_name`, `slug`, `author`, `url`, `time`, `created_at`, `updated_at`) VALUES
(21, 'California Vacation', 'california-vacation', 'Game - Topic', 'https://youtu.be/QYOPxHNnSwc', '4:29', NULL, NULL),
(22, 'Don Omar - Virtual Diva', 'don-omar-virtual-diva', 'DonOmarVEVO', 'https://youtu.be/vRBgZ4aMPio', '5:13', NULL, NULL),
(23, 'Eminem - Without Me (Official Music Video)', 'eminem-without-me-official-music-video', 'EminemVEVO', 'https://youtu.be/YVkUvmDQ3HY', '4:58', NULL, NULL),
(24, 'THRILL PILL, Егор Крид & MORGENSHTERN - Грустная Песня', 'thrill-pill-morgenshtern', 'THRILL PILL', 'https://youtu.be/pHJZhBLCbu0', '3:44', NULL, NULL),
(25, 'Basshunter : Now You\'re Gone', 'basshunter-now-youre-gone', 'Ministry of Sound', 'https://youtu.be/IgFwiCApH7E', '3:3', NULL, NULL),
(26, 'Basshunter DotA (Offical Video)', 'basshunter-dota-offical-video', 'BASSHUNTER', 'https://youtu.be/qTsaS1Tm-Ic', '3:56', NULL, NULL),
(27, 'Naruto Shippuden - Pain\'s Theme (Axhel Remix)', 'naruto-shippuden-pains-theme-axhel-remix', 'Shinzu Music', 'https://youtu.be/FWpAy477GFM', '3:55', NULL, NULL),
(28, 'Naruto Trap Music ⛩ Eternal Mangekyō Sharingan', 'naruto-trap-music-eternal-mangekyo-sharingan', 'Kayou.', 'https://youtu.be/WmsNDyzfYkw', '44:3', NULL, NULL),
(29, 'Eminem - Lose Yourself [HD]', 'eminem-lose-yourself-hd', 'msvogue23', 'https://youtu.be/_Yhyp-_hX2s', '5:23', NULL, NULL),
(30, '\'Till I Collapse', 'till-i-collapse', 'Eminem - Topic', 'https://youtu.be/Obim8BYGnOE', '4:58', NULL, NULL),
(31, 'Eminem - Not Afraid (Official Video)', 'eminem-not-afraid-official-video', 'EminemVEVO', 'https://youtu.be/j5-yKhDd64s', '4:19', NULL, NULL),
(32, 'Miyagi & Эндшпиль feat Симптом - Люби меня (Lyric Video) | YouTube Exclusive', 'miyagi-feat-lyric-video-youtube-exclusive', 'HAJIMAN', 'https://youtu.be/l0ix5DSE6VI', '5:18', NULL, NULL),
(33, 'Anochece / Manifiesto', 'anochece-manifiesto', 'Nach - Topic', 'https://youtu.be/8pumVT4GKAk', '13:10', NULL, NULL),
(34, 'NACH - Manifiesto (Letra/Lyrics)', 'nach-manifiesto-letralyrics', 'RoomOfLyrics', 'https://youtu.be/ysZ7kX3DPNM', '8:60', NULL, NULL),
(35, 'Naruto Shippuden OST - Samidare (Kayou. Remix)', 'naruto-shippuden-ost-samidare-kayou-remix', 'Kayou.', 'https://youtu.be/EZYw45ulY6c', '3:18', NULL, NULL),
(36, 'MiyaGi - Бонни [Official Music Video] HD', 'miyagi-official-music-video-hd', 'One Light Studio', 'https://youtu.be/scUJbiEmiuc', '3:33', NULL, NULL),
(37, 'Tyga \"Real Deal\" (WSHH Exclusive - Official Music Video)', 'tyga-real-deal-wshh-exclusive-official-music-video', 'WORLDSTARHIPHOP', 'https://youtu.be/MDpwpz91bko', '3:30', NULL, NULL);

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
(15, 'Gen', NULL, 'x@gmail.com', '$2y$10$2Vnfc/cYjM1noHHgmSz7t.f1Ap5Dsp3ek32DYmk5hyTZsgjnJ6KSK', 'DMkYGkTPOAEEcB3wRWV2FuAW8V5rzMn8R3m0Yxq8jyKq5XYjLOF0fhnvPez2', '$2y$10$XBirh8I6rT5OOuwktcT1U.Vh/g0qFzBBJ4Yp0FBPB1FTgyzbUdBF2', 'token_uid-32414324', '2021-01-21 07:43:50', '2021-01-21 07:43:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_list_sounds`
--

CREATE TABLE `users_list_sounds` (
  `id` int(11) NOT NULL,
  `user_sound_list_id` int(11) NOT NULL,
  `sound_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users_list_sounds`
--

INSERT INTO `users_list_sounds` (`id`, `user_sound_list_id`, `sound_id`, `created_at`, `updated_at`) VALUES
(1, 1, 31, '2021-08-11 06:18:02', '2021-08-11 06:18:02'),
(2, 3, 34, '2021-08-11 06:19:05', '2021-08-11 06:19:05'),
(3, 3, 33, '2021-08-11 06:19:18', '2021-08-11 06:19:18'),
(4, 4, 37, '2021-08-11 06:33:37', '2021-08-11 06:33:37'),
(5, 6, 26, '2021-08-11 08:48:32', '2021-08-11 08:48:32'),
(6, 6, 25, '2021-08-11 08:48:36', '2021-08-11 08:48:36'),
(7, 5, 35, '2021-08-11 08:51:39', '2021-08-11 08:51:39'),
(8, 5, 28, '2021-08-11 08:52:11', '2021-08-11 08:52:11'),
(9, 5, 27, '2021-08-11 08:52:14', '2021-08-11 08:52:14');

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
(12, 15, 21, NULL, NULL),
(13, 15, 22, NULL, NULL),
(14, 15, 23, NULL, NULL),
(15, 15, 24, NULL, NULL),
(16, 15, 25, NULL, NULL),
(17, 15, 26, NULL, NULL),
(18, 15, 27, NULL, NULL),
(19, 15, 28, NULL, NULL),
(20, 15, 29, NULL, NULL),
(21, 15, 30, NULL, NULL),
(22, 15, 31, NULL, NULL),
(23, 15, 32, NULL, NULL),
(24, 15, 33, NULL, NULL),
(25, 15, 34, NULL, NULL),
(26, 15, 35, NULL, NULL),
(27, 15, 36, NULL, NULL),
(28, 15, 37, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_sound_lists`
--

CREATE TABLE `user_sound_lists` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user_sound_lists`
--

INSERT INTO `user_sound_lists` (`id`, `user_id`, `name`, `slug`, `updated_at`, `created_at`) VALUES
(1, 15, 'Eminem', 'eminem', '2021-08-11 05:07:46', '2021-08-11 05:07:46'),
(2, 15, 'Miyagi', 'miyagi', '2021-08-11 05:12:14', '2021-08-11 05:12:14'),
(3, 15, 'Nach', 'nach', '2021-08-11 06:18:52', '2021-08-11 06:18:52'),
(4, 15, 'Tyga', 'tyga', '2021-08-11 06:33:21', '2021-08-11 06:33:21'),
(5, 15, 'Naruto Sounds', 'naruto-sounds', '2021-08-11 08:45:42', '2021-08-11 08:45:42'),
(6, 15, 'Basshunter', 'basshunter', '2021-08-11 08:48:03', '2021-08-11 08:48:03');

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
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
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
-- Indices de la tabla `users_list_sounds`
--
ALTER TABLE `users_list_sounds`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_sounds`
--
ALTER TABLE `user_sounds`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user_sound_lists`
--
ALTER TABLE `user_sound_lists`
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
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sounds`
--
ALTER TABLE `sounds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `users_list_sounds`
--
ALTER TABLE `users_list_sounds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `user_sounds`
--
ALTER TABLE `user_sounds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `user_sound_lists`
--
ALTER TABLE `user_sound_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
