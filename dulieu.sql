-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 21, 2020 lúc 03:25 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dulieu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin1', '123'),
('admin2', '456'),
('admin3', '789'),
('admin4', '0000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `IDNV` text COLLATE utf8_unicode_ci NOT NULL,
  `Hoten` text COLLATE utf8_unicode_ci NOT NULL,
  `IDPB` text COLLATE utf8_unicode_ci NOT NULL,
  `Diachi` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`IDNV`, `Hoten`, `IDPB`, `Diachi`) VALUES
('NV01', 'Nguyen Van A', 'PB01', 'Da Nang'),
('NV02', 'Le Van B', 'PB02', 'Quang Nam'),
('NV03', 'Do Van C', 'PB03', 'Hue'),
('NV04', 'Hoang Thi D', 'PB02', 'Ha Tinh'),
('NV05', 'Dang Van E', 'PB01', 'Quang Binh'),
('NV06', 'Ton Thi T', 'PB04', 'Ha Noi'),
('NV07', 'Tran Thi H', 'PB04', 'Phu Yen');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phongban`
--

CREATE TABLE `phongban` (
  `IDPB` text COLLATE utf8_unicode_ci NOT NULL,
  `TenPB` text COLLATE utf8_unicode_ci NOT NULL,
  `Mota` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phongban`
--

INSERT INTO `phongban` (`IDPB`, `TenPB`, `Mota`) VALUES
('PB01', 'Phong ban so 1', 'AA'),
('PB02', 'Phong ban so 2', 'BB'),
('PB03', 'Phong ban so 3', 'CC'),
('PB04', 'Phong ban so 4', 'DD'),
('PB05', 'Phong ban so 5', 'EE'),
('PB06', 'Phong ban so 6', 'FF');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
