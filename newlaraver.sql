-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 04, 2023 lúc 11:12 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `newlaraver`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `data`
--

CREATE TABLE `data` (
  `id` int(10) UNSIGNED NOT NULL,
  `personId` int(11) NOT NULL,
  `path` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `flag` varchar(191) NOT NULL DEFAULT '1',
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `data`
--

INSERT INTO `data` (`id`, `personId`, `path`, `name`, `flag`, `create_at`) VALUES
(3, 1, 'js/data/Fukada Eimi', '2.jpg', '1', '2023-03-31 17:45:51'),
(4, 1, 'js/data/Fukada Eimi', '1.jpg', '1', '2023-03-31 17:46:23'),
(5, 1, 'js/data/Fukada Eimi', '3.jpg', '1', '2023-03-31 17:46:31'),
(6, 1, 'js/data/Fukada Eimi', '4.jpg', '1', '2023-03-31 17:46:37'),
(7, 2, 'js/data/Rina Ishihara', '1.jpg', '1', '2023-04-02 13:38:09'),
(8, 2, 'js/data/Rina Ishihara', '2.jpg', '1', '2023-04-02 13:38:17'),
(9, 2, 'js/data/Rina Ishihara', '3.jpg', '1', '2023-04-02 13:38:28'),
(10, 2, 'js/data/Rina Ishihara', '4.jpg', '1', '2023-04-02 13:38:36'),
(11, 3, 'js/data/Takizawa Laura', '1.jpg', '1', '2023-04-02 13:41:53'),
(12, 3, 'js/data/Takizawa Laura', '2.jpg', '1', '2023-04-02 13:42:19'),
(13, 3, 'js/data/Takizawa Laura', '3.jpg', '1', '2023-04-02 13:42:25'),
(14, 3, 'js/data/Takizawa Laura', '4.jpg', '1', '2023-04-02 13:42:31'),
(15, 4, 'js/data/Yua Mikami', '1.jpg', '1', '2023-04-02 13:44:06'),
(16, 4, 'js/data/Yua Mikami', '2.jpg', '1', '2023-04-02 13:44:49'),
(17, 4, 'js/data/Yua Mikami', '3.jpg', '1', '2023-04-02 13:44:55'),
(18, 4, 'js/data/Yua Mikami', '4.jpg', '1', '2023-04-02 13:45:01'),
(19, 5, 'js/data/Bao Thy', '1.jpg', '1', '2023-04-02 13:48:39'),
(20, 5, 'js/data/Bao Thy', '2.jpg', '1', '2023-04-02 13:48:45'),
(21, 5, 'js/data/Bao Thy', '3.jpg', '1', '2023-04-02 13:48:52'),
(22, 5, 'js/data/Bao Thy', '4.jpg', '1', '2023-04-02 13:48:58'),
(23, 6, 'js/data/Tuan Hung', '1.jpg', '1', '2023-04-02 13:49:39'),
(24, 6, 'js/data/Tuan Hung', '2.jpg', '1', '2023-04-02 13:49:58'),
(25, 6, 'js/data/Tuan Hung', '3.jpg', '1', '2023-04-02 13:50:10'),
(26, 6, 'js/data/Tuan Hung', '4.jpg', '1', '2023-04-02 13:50:17'),
(27, 7, 'js/data/Minh Vuong', '1.jpg', '1', '2023-04-02 13:50:34'),
(28, 7, 'js/data/Minh Vuong', '2.jpg', '1', '2023-04-02 13:50:40'),
(29, 7, 'js/data/Minh Vuong', '3.jpg', '1', '2023-04-02 13:50:46'),
(30, 7, 'js/data/Minh Vuong', '4.jpg', '1', '2023-04-02 13:50:54'),
(31, 8, 'js/data/Anh Quan Ido', '1.jpg', '1', '2023-04-02 13:51:11'),
(32, 8, 'js/data/Anh Quan Ido', '2.jpg', '1', '2023-04-02 13:51:18'),
(33, 8, 'js/data/Anh Quan Ido', '3.jpg', '1', '2023-04-02 13:51:24'),
(34, 8, 'js/data/Anh Quan Ido', '4.jpg', '1', '2023-04-02 13:51:30'),
(35, 9, 'js/data/Lionel Messi', '1.jpg', '1', '2023-04-02 13:51:44'),
(36, 9, 'js/data/Lionel Messi', '2.jpg', '1', '2023-04-02 13:51:59'),
(37, 9, 'js/data/Lionel Messi', '3.jpg', '1', '2023-04-02 13:52:07'),
(38, 9, 'js/data/Lionel Messi', '4.jpg', '1', '2023-04-02 13:52:14'),
(39, 10, 'js/data/Suarez', '1.jpg', '1', '2023-04-02 13:52:48'),
(40, 10, 'js/data/Suarez', '2.jpg', '1', '2023-04-02 13:53:00'),
(41, 10, 'js/data/Suarez', '3.jpg', '1', '2023-04-02 13:53:08'),
(42, 10, 'js/data/Suarez', '4.jpg', '1', '2023-04-02 13:53:15'),
(43, 11, 'js/data/Pique', '1.jpg', '1', '2023-04-02 13:53:28'),
(44, 11, 'js/data/Pique', '2.jpg', '1', '2023-04-02 13:53:37'),
(45, 11, 'js/data/Pique', '3.jpg', '1', '2023-04-02 13:53:43'),
(46, 11, 'js/data/Pique', '4.jpg', '1', '2023-04-02 13:53:51'),
(47, 12, 'js/data/Sergio Busquets', '1.jpg', '1', '2023-04-02 13:54:02'),
(48, 12, 'js/data/Sergio Busquets', '3.jpg', '1', '2023-04-02 13:55:05'),
(49, 12, 'js/data/Sergio Busquets', '4.jpg', '1', '2023-04-02 13:55:26'),
(50, 12, 'js/data/Sergio Busquets', '2.jpg', '1', '2023-04-02 13:56:00'),
(51, 13, 'js/data/Stegen', '1.jpg', '1', '2023-04-02 13:57:14'),
(52, 13, 'js/data/Stegen', '2.jpg', '1', '2023-04-02 13:57:23'),
(53, 13, 'js/data/Stegen', '3.jpg', '1', '2023-04-02 13:57:31'),
(54, 13, 'js/data/Stegen', '4.jpg', '1', '2023-04-02 13:57:38'),
(55, 14, 'js/data/Jordi Alba', '1.jpg', '1', '2023-04-02 13:57:54'),
(56, 14, 'js/data/Jordi Alba', '2.jpg', '1', '2023-04-02 13:58:04'),
(57, 14, 'js/data/Jordi Alba', '3.jpg', '1', '2023-04-02 14:00:35'),
(58, 14, 'js/data/Jordi Alba', '4.jpg', '1', '2023-04-02 14:00:43'),
(59, 21, 'js/data/Duy Manh', '1.jpg', '1', '2023-04-02 14:01:27'),
(60, 21, 'js/data/Duy Manh', '2.jpg', '1', '2023-04-02 14:06:12'),
(61, 21, 'js/data/Duy Manh', '3.jpg', '1', '2023-04-02 14:06:22'),
(62, 21, 'js/data/Duy Manh', '4.jpg', '1', '2023-04-02 14:06:31'),
(63, 22, 'js/data/Antoine Griezmann', '1.jpg', '1', '2023-04-03 03:15:36'),
(64, 22, 'js/data/Antoine Griezmann', '2.jpg', '1', '2023-04-03 03:15:48'),
(65, 22, 'js/data/Antoine Griezmann', '3.jpg', '1', '2023-04-03 03:15:58'),
(66, 22, 'js/data/Antoine Griezmann', '4.jpg', '1', '2023-04-03 03:16:11'),
(67, 23, 'js/data/Frenkie de Jong', '1.jpeg', '1', '2023-04-03 16:50:22'),
(68, 23, 'js/data/Frenkie de Jong', '2.jpg', '1', '2023-04-03 17:44:28'),
(69, 23, 'js/data/Frenkie de Jong', '3.jpg', '1', '2023-04-03 17:44:38'),
(70, 23, 'js/data/Frenkie de Jong', '4.jpg', '1', '2023-04-03 17:44:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 2),
(6, '2023_03_24_151343_person', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('phamnam1991@gmail.com', '$2y$10$c7xcKSuiQlxI5d2qE/0n1OJsXXosY5wNVnwH2YzfV8FVwQEDVvdmS', '2023-03-19 02:24:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `person`
--

CREATE TABLE `person` (
  `id` int(10) UNSIGNED NOT NULL,
  `personName` varchar(191) NOT NULL,
  `flag` varchar(191) NOT NULL DEFAULT '1',
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `person`
--

INSERT INTO `person` (`id`, `personName`, `flag`, `create_at`) VALUES
(1, 'Fukada Eimi', '1', '2023-03-26 06:33:03'),
(2, 'Rina Ishihara', '1', '2023-03-26 06:33:44'),
(3, 'Takizawa Laura', '1', '2023-03-26 06:34:01'),
(4, 'Yua Mikami', '1', '2023-03-27 18:03:49'),
(5, 'Bao Thy', '1', '2023-03-27 18:03:49'),
(6, 'Tuan Hung', '1', '2023-03-27 18:04:49'),
(7, 'Minh Vuong', '1', '2023-03-27 18:04:49'),
(8, 'Anh Quan Ido', '1', '2023-03-27 18:05:36'),
(9, 'Lionel Messi', '1', '2023-03-27 18:05:36'),
(10, 'Suarez', '1', '2023-03-27 18:05:59'),
(11, 'Pique', '1', '2023-03-27 18:05:59'),
(12, 'Sergio Busquets', '1', '2023-03-27 18:06:17'),
(13, 'Stegen', '1', '2023-03-27 18:06:17'),
(14, 'Jordi Alba', '1', '2023-03-27 18:06:31'),
(21, 'Duy Manh', '1', '2023-03-31 16:22:39'),
(22, 'Antoine Griezmann', '1', '2023-04-02 15:56:10'),
(23, 'Frenkie de Jong', '1', '2023-04-03 16:45:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'pham nam', 'phamnam1991@gmail.com', NULL, '$2y$10$mxUVKp.w.PENZsTekhxFm.5omXxjPQH63hk0F3xwPPJB.18LP1U3i', 'DRvOxQ116K6FqFnwLE9VFrmA6ulHR9PlB1w1d5vn6tIsXNqaL7txU8x7bt6o', '2023-03-08 08:32:17', '2023-03-08 08:32:17'),
(2, 'NAMPP', 'nampphaui@gmail.com', NULL, '$2y$10$1jlPkwlULUOD/2tr2lDYPeg5bD2n1NC.Fga7GtMGqUxxGr4r86vBm', 'rrrFEEpPkZoqdo0sf2uyXjbWwN40aXbQP09JUFh7VVIiCbaS5qLPPuQI9F26', '2023-03-19 02:24:53', '2023-03-19 02:24:53');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `data`
--
ALTER TABLE `data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `person`
--
ALTER TABLE `person`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
