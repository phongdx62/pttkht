-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 07, 2019 lúc 04:37 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quan-ly-tiem-cat-toc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `datlich`
--

CREATE TABLE `datlich` (
  `madl` int(11) NOT NULL,
  `makh` int(10) UNSIGNED NOT NULL,
  `makg` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `datlich`
--

INSERT INTO `datlich` (`madl`, `makh`, `makg`) VALUES
(1, 3, 1),
(2, 2, 24),
(9, 6, 13),
(10, 2, 1),
(11, 2, 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu`
--

CREATE TABLE `dichvu` (
  `madv` int(10) UNSIGNED NOT NULL,
  `tendv` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `dongia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dichvu`
--

INSERT INTO `dichvu` (`madv`, `tendv`, `mota`, `dongia`) VALUES
(1, 'RỬA MẶT SÁNG DA, SẠCH BÃ NHỜN', 'Quy trình rửa mặt thiết kế riêng cho phái mạnh cuốn trôi bụi bẩn & tế bào chết, mang đến cho bạn làn da sạch khỏe, không bóng nhờn. Skinner girl với đôi tay mềm mại massage khắp khuôn mặt, ve vuốt từ vành tai đến sau gáy giúp các chàng trai thư giãn phục hồi sinh lực.', 10000),
(3, 'CHĂM SÓC DA MẶT BẰNG CÔNG NGHỆ CAO', 'Lột bay hết mụn cám bởi thiết bị độc quyền chỉ có tại 30Shine. Làn da mặt nhạy cảm sẽ được giữ ẩm bởi tinh chất hoa hồng chỉ có ở Spa cao cấp, giúp các chàng trai sở hữu ngay khuôn mặt sáng, mịn, cuốn hút phái nữ.', 20000),
(4, 'GỘI ĐẦU MASSAGE BẤM HUYỆT', 'Tận hưởng suối nước mát lạnh lan toả khắp mái đầu. Đôi tay Skinner Girl khéo léo massage bấm huyệt đưa bạn chìm vào cảm giác khoan khoái, quên hết mọi ưu phiền cuộc sống.', 20000),
(5, 'TƯ VẤN KIỂU TÓC THEO KHUÔN MẶT', 'Stylist tại 30Shine sẽ tư vấn chọn kiểu đẹp trai nhất phù hợp với những đặc điểm riêng (khuôn mặt, chất tóc…) của các chàng trai theo BST kiểu tóc chuyên nam độc quyền 2018.', 0),
(6, 'CẮT TẠO KIỂU BỞI STYLIST HÀNG ĐẦU', '20 năm để mãi 1 mái tóc, đã đến lúc bạn hãy lột xác. Đội ngũ Stylist chuyên nam đẳng cấp VN tự tin sáng tạo cho bạn những kiểu tóc vượt xa mong đợi.', 50000),
(7, 'CẠO MẶT ÊM ÁI - GỘI XẢ KỸ CÀNG', 'Cạo mặt êm ái giúp da sáng mịn. Gội xả kỹ càng sau cắt để bạn luôn hoàn hảo trước mỗi buổi hẹn quan trọng. Không lo tóc con bám dính nhờ giấy cuốn cổ đặc biệt từ 30Shine, chẳng cần lo lắng gội xả lại khi về nhà', 10000),
(8, 'VUỐT SÁP/GÔM TẠO KIỂU CAO CẤP', '30Shine sử dụng 100% sáp gôm cao cấp giúp giữ nếp hoàn hảo dù bạn đội mũ BH. Sáp cao cấp giúp tóc chắc khoẻ tránh gàu, gãy rụng so với loại thường.', 0),
(9, 'UỐN TÓC NAM THỜI TRANG', 'Dịch vụ uốn tóc nam tại 30Shine sẽ giúp bạn sở hữu các kiểu tóc lãng tử mà vẫn không kém phần phong độ. Bạn sẽ không còn lo lắng tóc cứng khó tạo kiểu hay giữ mãi một kiểu phom tóc thẳng quen thuộc nhàm chán.', 260000),
(10, 'NHUỘM MÀU THỜI TRANG', 'Nhuộm tóc đang trở thành xu hướng làm đẹp cho nam giới. Nhuộm tóc không những giúp tôn da mặt trở nên sáng hơn, mà nó còn là cách để các chàng trai thể hiện phong cách, khí chất riêng của mình! Dịch vụ nhuộm tóc thời trang cho nam tại 30Shine mức giá hấp dẫn chỉ 180K. Không chỉ sử dụng màu nhuộm cao cấp, lên đúng màu, stylist còn tư vấn cho bạn cách bảo vệ màu tóc hiệu quả nhất.', 180000),
(11, 'PROTEIN PHỤC HỒI TÓC HƯ TỔN - 99K', 'Được coi như “thần dược” giúp tóc mượt, khoẻ mạnh, Dưỡng tóc Protein cao cấp đặc biệt phù hợp cho tóc đã qua xử lý uốn, nhuộm, tẩy nhiều lần.', 99000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvudalam`
--

CREATE TABLE `dichvudalam` (
  `madvdl` int(10) UNSIGNED NOT NULL,
  `madv` int(10) UNSIGNED NOT NULL,
  `sohd` int(10) UNSIGNED NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dichvudalam`
--

INSERT INTO `dichvudalam` (`madvdl`, `madv`, `sohd`, `soluong`, `dongia`) VALUES
(1, 1, 1, 10, 100000),
(4, 3, 1, 5, 20000),
(5, 3, 3, 5, 150000),
(6, 5, 2, 2, 150000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `sohd` int(10) UNSIGNED NOT NULL,
  `makh` int(10) UNSIGNED NOT NULL,
  `manv` int(10) UNSIGNED NOT NULL,
  `gio` time NOT NULL,
  `ngaylap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`sohd`, `makh`, `manv`, `gio`, `ngaylap`) VALUES
(1, 3, 3, '09:00:00', '2019-01-01'),
(2, 2, 3, '10:00:00', '2019-01-01'),
(3, 1, 6, '09:30:00', '2019-02-01'),
(8, 1, 4, '10:10:00', '2019-01-01'),
(9, 3, 4, '02:55:00', '2019-01-01'),
(10, 2, 2, '08:08:00', '2019-01-01'),
(11, 9, 6, '00:00:00', '0000-00-00'),
(12, 6, 10, '09:30:00', '2018-02-09'),
(13, 1, 10, '00:50:00', '2019-01-01'),
(14, 2, 10, '10:00:00', '2019-02-02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(10) UNSIGNED NOT NULL,
  `tenkh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `taikhoan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `activ` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `diachi`, `email`, `sdt`, `taikhoan`, `matkhau`, `activ`, `status`) VALUES
(1, 'Vương Thị Vấn', 'Bắc Cạn', 'vuongthivan169@gmail.com', '0123456789', 'vuongthivan', '25f9e794323b453885f5181f1b624d0b', '', '1'),
(2, 'Vang', 'Ha Noi', 'homangtrang169@gmail.com', '0973540339', 'cauvang', '25f9e794323b453885f5181f1b624d0b', '', '1'),
(3, 'Hai Au', 'Ha Noi', 'gdnhell169@gmail.com', '0123456789', 'haiau', '25f9e794323b453885f5181f1b624d0b', '', '1'),
(4, 'Nguyễn Diễm My', 'Thái Bình', 'nguyendiemmy169@gmail.com', '0123456789', 'nguyendiemmy', '25f9e794323b453885f5181f1b624d0b', '', '1'),
(5, 'Lương Mạnh Dũng', 'Hà Nam', 'luongmanhdung169@gmail.com', '0123456789', 'luongmanhdung', '25f9e794323b453885f5181f1b624d0b', '', '1'),
(6, 'Trần Kiều Mỹ', 'Hà Nội', 'trankieumy169@gmail.com', '0123456789', 'trankieumy', '25f9e794323b453885f5181f1b624d0b', '', '1'),
(7, 'Kiều Mỹ Linh', 'Hà Nội', 'kieumylinh169@gmail.com', '0123456789', 'kieumylinh', '25f9e794323b453885f5181f1b624d0b', '', '1'),
(8, 'Hoàng Văn Quân', 'Hà Tây', 'hoangvanquan169@gmail.com', '0123456789', 'hoangvanquan', '25f9e794323b453885f5181f1b624d0b', '', '1'),
(9, 'Nguyễn Thị Linh', 'Hà Nội', 'nguyenthilinh@gmail.com', '0123456789', 'nguyenthilinh', '25f9e794323b453885f5181f1b624d0b', '', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khunggio`
--

CREATE TABLE `khunggio` (
  `makg` int(4) NOT NULL,
  `gio` time NOT NULL,
  `ngay` date NOT NULL,
  `tinhtrang` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khunggio`
--

INSERT INTO `khunggio` (`makg`, `gio`, `ngay`, `tinhtrang`) VALUES
(1, '09:00:00', '2019-01-11', 'Còn chỗ'),
(2, '09:30:00', '2019-01-11', 'Hết chỗ'),
(3, '10:00:00', '2019-01-11', 'Hết chỗ'),
(4, '10:30:00', '2019-01-11', 'Hết chỗ'),
(5, '11:00:00', '2019-01-11', 'Hết chỗ'),
(6, '11:30:00', '2019-01-11', 'Còn chỗ'),
(7, '12:00:00', '2019-01-11', 'Hết chỗ'),
(8, '12:30:00', '2019-01-11', 'Còn chỗ'),
(9, '13:00:00', '2019-01-11', 'Hết chỗ'),
(10, '13:30:00', '2019-01-11', 'Hết chỗ'),
(11, '14:00:00', '2019-01-11', 'Hết chỗ'),
(12, '14:30:00', '2019-01-11', 'Hết chỗ'),
(13, '15:00:00', '2019-01-11', 'Còn chỗ'),
(14, '15:30:00', '2019-01-11', 'Hết chỗ'),
(15, '16:00:00', '2019-01-11', 'Hết chỗ'),
(16, '16:30:00', '2019-01-11', 'Còn chỗ'),
(17, '17:00:00', '2019-01-11', 'Hết chỗ'),
(18, '17:30:00', '2019-01-11', 'Còn chỗ'),
(19, '18:00:00', '2019-01-11', 'Hết chỗ'),
(20, '18:30:00', '2019-01-11', 'Còn chỗ'),
(21, '09:00:00', '2019-01-12', 'Còn chỗ'),
(22, '09:30:00', '2019-01-12', 'Còn chỗ'),
(23, '10:00:00', '2019-01-12', 'Còn chỗ'),
(24, '10:30:00', '2019-01-12', 'Còn chỗ'),
(25, '11:00:00', '2019-01-12', 'Còn chỗ'),
(26, '11:30:00', '2019-01-12', 'Còn chỗ'),
(27, '12:00:00', '2019-01-12', 'Hết chỗ'),
(28, '12:30:00', '2019-01-12', 'Hết chỗ'),
(29, '13:00:00', '2019-01-12', 'Còn chỗ'),
(30, '13:30:00', '2019-01-12', 'Còn chỗ'),
(31, '14:00:00', '2019-01-12', 'Hết chỗ'),
(32, '14:30:00', '2019-01-12', 'Còn chỗ'),
(33, '15:00:00', '2019-01-12', 'Còn chỗ'),
(34, '15:30:00', '2019-01-12', 'Hết chỗ'),
(35, '16:00:00', '2019-01-12', 'Còn chỗ'),
(36, '16:30:00', '2019-01-12', 'Hết chỗ'),
(37, '17:00:00', '2019-01-12', 'Còn chỗ'),
(38, '17:30:00', '2019-01-12', 'Còn chỗ'),
(39, '18:00:00', '2019-01-12', 'Hết chỗ'),
(40, '18:30:00', '2019-01-12', 'Còn chỗ'),
(41, '09:00:00', '2019-01-13', 'Còn chỗ'),
(42, '09:30:00', '2019-01-13', 'Còn chỗ'),
(43, '10:00:00', '2019-01-13', 'Còn chỗ'),
(44, '10:30:00', '2019-01-13', 'Còn chỗ'),
(45, '11:00:00', '2019-01-13', 'Còn chỗ'),
(46, '11:30:00', '2019-01-13', 'Còn chỗ'),
(47, '12:00:00', '2019-01-13', 'Còn chỗ'),
(48, '12:30:00', '2019-01-13', 'Còn chỗ'),
(49, '13:00:00', '2019-01-13', 'Còn chỗ'),
(50, '13:30:00', '2019-01-13', 'Còn chỗ'),
(51, '14:00:00', '2019-01-13', 'Hết chỗ'),
(52, '14:30:00', '2019-01-13', 'Hết chỗ'),
(53, '15:00:00', '2019-01-13', 'Còn chỗ'),
(54, '15:30:00', '2019-01-13', 'Còn chỗ'),
(55, '16:00:00', '2019-01-13', 'Hết chỗ'),
(56, '16:30:00', '2019-01-13', 'Còn chỗ'),
(57, '17:00:00', '2019-01-13', 'Hết chỗ'),
(58, '17:30:00', '2019-01-13', 'Còn chỗ'),
(59, '18:00:00', '2019-01-13', 'Còn chỗ'),
(60, '18:30:00', '2019-01-13', 'Còn chỗ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `manv` int(10) UNSIGNED NOT NULL,
  `tennv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `luong` int(11) NOT NULL,
  `thuong` int(11) NOT NULL,
  `ca` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `taikhoan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `capbac` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`manv`, `tennv`, `diachi`, `sdt`, `email`, `gioitinh`, `ngaysinh`, `luong`, `thuong`, `ca`, `taikhoan`, `matkhau`, `capbac`) VALUES
(1, 'Nguyễn Quỳnh Nga', 'Hà Đông - Hà Nội', '0123456789', 'ddnhell169@gmail.com', '0', '1990-01-01', 50000000, 0, '0', 'admin', '25f9e794323b453885f5181f1b624d0b', 'Nhà quản lý'),
(2, 'Trần Văn Hùng', 'Hà Đông - Hà Nội', '0123456789', 'gdnhell169@gmail.com', '1', '1993-01-02', 20000000, 0, '0', 'nvcattoc', '25f9e794323b453885f5181f1b624d0b', 'Nhân viên cắt tóc'),
(3, 'Lương Bích Hữu', 'Hà Đông - Hà Nội', '0123456789', 'haiau@gmail.com', '0', '1995-01-02', 20000000, 0, '1-3', 'nvletan', '25f9e794323b453885f5181f1b624d0b', 'Nhân viên lễ tân'),
(4, 'Trần Thúy Nga', 'Hà Đông - Hà Nội', '0123456789', 'thuynga@gmail.com', '0', '1996-01-03', 20000000, 0, '2-5', 'nvgoidau', '25f9e794323b453885f5181f1b624d0b', 'Nhân viên gội đầu'),
(5, 'Phùng Thần Chưởng', 'Hà Đông - Hà Nội', '0123456789', 'ptc@gmail.com', '1', '1991-01-09', 20000000, 0, '1-5', 'nvbaove', '25f9e794323b453885f5181f1b624d0b', 'Nhân viên bảo vệ'),
(6, 'Trần Kiều Ân', 'Hà Nội', '0973540339', 'cauvang@gmail.com', '0', '1998-10-10', 15000000, 1500000, '4-8', 'trankieuan', '25f9e794323b453885f5181f1b624d0b', 'Nhân viên gội đầu'),
(7, 'Phan Đức Long', 'Hà Tây', '0123489889', 'phanduclong@gmail.com', '1', '1997-10-09', 10000000, 0, '1-5', 'phanduclong', '25f9e794323b453885f5181f1b624d0b', 'Nhân viên cắt tóc'),
(9, 'Đào Thị Mận', '14', '098898988', 'ddnhell@gmail.com', '0', '1911-10-18', 20000000, 4000000, '7-11', 'daothiman', '25f9e794323b453885f5181f1b624d0b', 'Nhân viên lễ tân'),
(10, 'Tên Thật Là Dài Xem Sao', 'Thái Nguyên', '0100660899', 'haha169@gmail.com', '0', '1998-10-19', 25000000, 0, '', 'kiemtra', '25f9e794323b453885f5181f1b624d0b', 'Nhân viên lễ tân'),
(13, 'Kiều Thùy Trinh', 'Nha Trang', '0070080990', 'kieuthuytrinh169@gmail.com', '0', '1995-09-19', 15000000, 0, '', 'kieuthuytrinh', 'c4ca4238a0b923820dcc509a6f75849b', 'Nhân viên gội đầu'),
(14, 'Đường Ngoằn nghoèo', 'Xoắn Quẩy', '0366779508', 'xoanquay169@gmail.com', '1', '1993-03-19', 0, 0, '', 'xoanquay', '25f9e794323b453885f5181f1b624d0b', 'Nhân viên bảo vệ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `matt` int(10) UNSIGNED NOT NULL,
  `madvdl` int(10) UNSIGNED NOT NULL,
  `manv` int(10) UNSIGNED NOT NULL,
  `makh` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhtoan`
--

INSERT INTO `thanhtoan` (`matt`, `madvdl`, `manv`, `makh`) VALUES
(1, 1, 3, 7),
(2, 1, 3, 6),
(6, 4, 3, 9);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `datlich`
--
ALTER TABLE `datlich`
  ADD PRIMARY KEY (`madl`),
  ADD KEY `makh` (`makh`),
  ADD KEY `makg` (`makg`);

--
-- Chỉ mục cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`madv`);

--
-- Chỉ mục cho bảng `dichvudalam`
--
ALTER TABLE `dichvudalam`
  ADD PRIMARY KEY (`madvdl`),
  ADD KEY `sohd` (`sohd`),
  ADD KEY `madv` (`madv`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`sohd`),
  ADD KEY `makh` (`makh`),
  ADD KEY `manv` (`manv`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `khunggio`
--
ALTER TABLE `khunggio`
  ADD PRIMARY KEY (`makg`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`manv`);

--
-- Chỉ mục cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`matt`),
  ADD KEY `madvdl` (`madvdl`),
  ADD KEY `manv` (`manv`),
  ADD KEY `makh` (`makh`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `datlich`
--
ALTER TABLE `datlich`
  MODIFY `madl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `madv` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `dichvudalam`
--
ALTER TABLE `dichvudalam`
  MODIFY `madvdl` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `sohd` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `khunggio`
--
ALTER TABLE `khunggio`
  MODIFY `makg` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `manv` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `matt` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `datlich`
--
ALTER TABLE `datlich`
  ADD CONSTRAINT `datlich_ibfk_1` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`),
  ADD CONSTRAINT `datlich_ibfk_2` FOREIGN KEY (`makg`) REFERENCES `khunggio` (`makg`);

--
-- Các ràng buộc cho bảng `dichvudalam`
--
ALTER TABLE `dichvudalam`
  ADD CONSTRAINT `dichvudalam_ibfk_1` FOREIGN KEY (`sohd`) REFERENCES `hoadon` (`sohd`),
  ADD CONSTRAINT `dichvudalam_ibfk_2` FOREIGN KEY (`madv`) REFERENCES `dichvu` (`madv`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`);

--
-- Các ràng buộc cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD CONSTRAINT `thanhtoan_ibfk_1` FOREIGN KEY (`madvdl`) REFERENCES `dichvudalam` (`madvdl`),
  ADD CONSTRAINT `thanhtoan_ibfk_2` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`),
  ADD CONSTRAINT `thanhtoan_ibfk_3` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
