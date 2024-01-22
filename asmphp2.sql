-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 22, 2024 lúc 05:20 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asmphp2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `answers`
--

INSERT INTO `answers` (`id`, `content`, `question_id`) VALUES
(1, '2', 1),
(2, '3', 1),
(3, '56', 1),
(4, '300', 1),
(5, 'âs', 2),
(6, 'dssdds', 2),
(7, 'âs', 2),
(8, 'dssdds', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `group`
--

CREATE TABLE `group` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `length` int(11) NOT NULL,
  `plays` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `update_at` date DEFAULT NULL,
  `status` enum('active','inactive','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `group`
--

INSERT INTO `group` (`id`, `name`, `length`, `plays`, `created_at`, `update_at`, `status`) VALUES
(1, 'Toán', 0, 10, '2024-01-02', NULL, 'active'),
(2, 'Văn', 12, 20, '2024-01-15', NULL, 'active'),
(3, 'Anh 123', 12, 23, '2024-01-02', NULL, 'active'),
(4, 'sgfsg', 12, 45, '2024-01-09', NULL, 'active'),
(5, 'Toán 123', 12, 23, '2024-01-02', NULL, 'active'),
(6, 'văn 612671', 12, 45, '2024-01-09', NULL, 'active');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `questions`
--

INSERT INTO `questions` (`id`, `content`, `group_id`, `answer_id`) VALUES
(1, '1 + 1 = ?', 1, 2),
(2, '2 + 2 = ?', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` text DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `birth_day` date DEFAULT NULL,
  `created_at` date NOT NULL,
  `update_at` date DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL,
  `role` enum('admin','client') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `user_name`, `full_name`, `gender`, `avatar`, `email`, `telephone`, `password`, `address`, `birth_day`, `created_at`, `update_at`, `status`, `role`) VALUES
(1, 'hien1234512', 'Hiến', 'female', 'Screenshot (12).png', 'dqhien2004@gmail.com', '056564546', '$2y$10$DDqJ7JeVdgGIIbMGSN6DBeW7KcUDAaX82gIgYNwfJV.EOVllMfJgK', 'sss, , , ', '2024-01-03', '2024-01-21', '2024-01-22', 'active', 'admin'),
(5, 'admin', '', '', '', 'dqhien2004@gmail.com', '', '$2y$10$FdJe5jXiTAMVVnroI.hyeeuq1vXqDEIwitzXI36ZrxJ3uSwG205Sm', '', '0000-00-00', '2024-01-22', NULL, 'active', 'admin');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `group`
--
ALTER TABLE `group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
