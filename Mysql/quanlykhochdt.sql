-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 12, 2023 lúc 04:35 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlykhochdt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlykhochdt`
--

CREATE TABLE `quanlykhochdt` (
  `Id` int(11) NOT NULL,
  `HoVaTen` varchar(50) NOT NULL,
  `MaAdmin` varchar(20) NOT NULL,
  `User_name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quanlykhochdt`
--

INSERT INTO `quanlykhochdt` (`Id`, `HoVaTen`, `MaAdmin`, `User_name`, `Password`) VALUES
(10, 'Nguyễn Văn A', '123456', 'nguyenvana123', '12345678'),
(11, 'Nguyễn Văn B', '123456', 'nguyenvana123', '12345678'),
(12, 'Nguyễn Văn C', '123456', 'nguyenvana123', '12345678');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlykhochdt1`
--

CREATE TABLE `quanlykhochdt1` (
  `Id` int(11) NOT NULL,
  `TenMay` varchar(50) NOT NULL,
  `CauHinh` varchar(100) NOT NULL,
  `TrangThai` varchar(100) NOT NULL,
  `SoLuong` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quanlykhochdt1`
--

INSERT INTO `quanlykhochdt1` (`Id`, `TenMay`, `CauHinh`, `TrangThai`, `SoLuong`) VALUES
(2, 'IPHON 11 ', '8 GB RAM / 256 GB ROM', 'Máy Mới', 10),
(3, 'IPHONE xx', '4 GB RAM / 64 GB ROM', 'Điện Thoại Mới', 10),
(4, 'IPHONE Xxxxxx', '4 GB RAM / 64 GB ROM', 'Điện Thoại Mới', 10),
(5, 'IPHONE Xaaa', '4 GB RAM / 64 GB ROM', 'Điện Thoại Mới', 10),
(6, 'IPHONE Xaaaaaaaaa', '4 GB RAM / 64 GB ROM', 'Điện Thoại Mới', 10),
(7, 'IPHONE  22222', '4 GB RAM / 64 GB ROM', 'Điện Thoại Mới', 10),
(8, 'IPHONE X', '4 GB RAM / 64 GB ROM', 'Điện Thoại Mới', 10),
(9, 'IPHONE Xsadasdas', '4 GB RAM / 64 GB ROM', 'Điện Thoại Mới', 10),
(10, 'IPHONE xx', '4 GB RAM / 64 GB ROM', 'Điện Thoại Mới', 10),
(11, 'IPHONE Xxxxxxádasdasd', '4 GB RAM / 64 GB ROM', 'Điện Thoại Mới', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanlykhochdt2`
--

CREATE TABLE `quanlykhochdt2` (
  `Id` int(11) NOT NULL,
  `TenMay` varchar(50) NOT NULL,
  `CauHinh` varchar(100) NOT NULL,
  `TrangThai` varchar(100) NOT NULL,
  `SoLuong` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `quanlykhochdt2`
--

INSERT INTO `quanlykhochdt2` (`Id`, `TenMay`, `CauHinh`, `TrangThai`, `SoLuong`) VALUES
(1, 'SamSung S22', '8 GB RAM / 256 GB ROM', 'Máy Mới', 10),
(2, 'SamSung S22', '4 GB RAM / 64 GB ROM', 'Điện Thoại Mới', 10),
(3, 'SamSung S23', '4 GB RAM / 64 GB ROM', 'Điện Thoại Mới', 10),
(4, 'SamSung S25', '8 GB RAM / 256 GB ROM', 'Điện Thoại Mới', 10);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `quanlykhochdt`
--
ALTER TABLE `quanlykhochdt`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `quanlykhochdt1`
--
ALTER TABLE `quanlykhochdt1`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `quanlykhochdt2`
--
ALTER TABLE `quanlykhochdt2`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `quanlykhochdt`
--
ALTER TABLE `quanlykhochdt`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `quanlykhochdt1`
--
ALTER TABLE `quanlykhochdt1`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `quanlykhochdt2`
--
ALTER TABLE `quanlykhochdt2`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
