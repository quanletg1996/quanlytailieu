-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 01, 2017 lúc 01:02 SA
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `giaoan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `capnhat`
--

CREATE TABLE `capnhat` (
  `ID` int(10) NOT NULL,
  `TaiLieuMaTaiLieu` varchar(10) NOT NULL,
  `GiaoVienMaGiaoVien` int(10) NOT NULL,
  `NgayCapNhat` date DEFAULT NULL,
  `TomTatND` varchar(255) DEFAULT NULL,
  `PhuCap` bit(1) DEFAULT NULL,
  `VaiTro` varchar(255) DEFAULT NULL,
  `NguoiKiemDuyet` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `capnhat`
--

INSERT INTO `capnhat` (`ID`, `TaiLieuMaTaiLieu`, `GiaoVienMaGiaoVien`, `NgayCapNhat`, `TomTatND`, `PhuCap`, `VaiTro`, `NguoiKiemDuyet`) VALUES
(1, 'GTLTKTLT', 5, '2017-08-01', 'Cập nhật các ví dụ mới về code C++', b'0', 'Chính', 'Phó Khoa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangnhap`
--

CREATE TABLE `dangnhap` (
  `taikhoan` varchar(20) NOT NULL,
  `matkhau` varchar(20) NOT NULL,
  `loai` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `dangnhap`
--

INSERT INTO `dangnhap` (`taikhoan`, `matkhau`, `loai`) VALUES
('admin', '123456', 'ad'),
('nguyenvana', '123456', 'gv'),
('tranthib', '123456', 'gv');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaovien`
--

CREATE TABLE `giaovien` (
  `MaGiaoVien` int(10) NOT NULL,
  `TenGiaoVien` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `giaovien`
--

INSERT INTO `giaovien` (`MaGiaoVien`, `TenGiaoVien`) VALUES
(1, 'Nguễn Văn A'),
(2, 'Trần Thị B'),
(3, 'Nguyễn Trần C'),
(4, 'Lê Văn D'),
(5, 'Trần Văn E'),
(6, 'Cao Thị F'),
(7, 'Ngyễn Thị G'),
(8, 'Lê Thị H'),
(9, 'Cao Trần I'),
(10, 'Phùng Văn K'),
(11, 'Nguyễn Trần Thị L'),
(12, 'Đoàn Văn M'),
(13, 'Đinh Văn N'),
(14, 'Lê Nguyễn Văn F'),
(15, 'Nguyễn W');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `MaMonHoc` int(10) NOT NULL,
  `TenMonHoc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`MaMonHoc`, `TenMonHoc`) VALUES
(1, 'Nhập môn lập trình'),
(2, 'Kỹ thuật lập trình'),
(3, 'Lập trình hướnng đối tượng'),
(4, 'Toán rời rạc'),
(5, 'Cơ sở dữ liệu'),
(6, 'Nhập môn web'),
(7, 'Ứng dụng web'),
(8, 'Lập trình mobile'),
(9, 'Phân tích thiết kế hệ thống'),
(10, 'Lập trình window');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `soan`
--

CREATE TABLE `soan` (
  `ID` int(10) NOT NULL,
  `TaiLieuMaTaiLieu` varchar(10) NOT NULL,
  `GiaoVienMaGiaoVien` int(10) NOT NULL,
  `TienDo` varchar(255) DEFAULT NULL,
  `NgayBD` date DEFAULT NULL,
  `NgayDK` date DEFAULT NULL,
  `NgayHT` date DEFAULT NULL,
  `VaiTro` varchar(255) DEFAULT NULL,
  `PhuCap` bit(1) DEFAULT NULL,
  `NguoiKiemDuyet` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `soan`
--

INSERT INTO `soan` (`ID`, `TaiLieuMaTaiLieu`, `GiaoVienMaGiaoVien`, `TienDo`, `NgayBD`, `NgayDK`, `NgayHT`, `VaiTro`, `PhuCap`, `NguoiKiemDuyet`) VALUES
(1, 'GTTHNMLT', 1, '100%', '2016-01-01', '2016-08-01', '2016-07-22', 'Soạn chính', b'1', 'Trưởng Khoa'),
(2, 'GTTHNMLT', 2, '100%', '2016-01-01', '2016-08-01', '2016-07-22', 'Soạn phụ', b'1', 'Trưởng Khoa'),
(3, 'BGNMLT', 3, '100%', '2015-03-01', '2015-10-01', '2015-09-01', 'Soạn chính', b'1', 'Phó Khoa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tailieu`
--

CREATE TABLE `tailieu` (
  `MaTaiLieu` varchar(10) NOT NULL,
  `MonHocMaMonHoc` int(10) NOT NULL,
  `TenTaiLieu` varchar(255) DEFAULT NULL,
  `ThongTin` varchar(255) DEFAULT NULL,
  `LoaiTaiLieu` varchar(255) DEFAULT NULL,
  `NXB` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tailieu`
--

INSERT INTO `tailieu` (`MaTaiLieu`, `MonHocMaMonHoc`, `TenTaiLieu`, `ThongTin`, `LoaiTaiLieu`, `NXB`) VALUES
('BGCSDL', 5, 'Bài giảng cơ sở dữ liệu', 'Viết mới', 'Bài giảng', 'Không có'),
('BGKTLT', 2, 'Bài giảng Kỹ thuật lập trình', 'Viết mới', 'Bài giảng', 'Không có'),
('BGLTHDT', 3, 'Bài giảng lập trình hướng đối tượng', 'Viết mới', 'Bài giảng', 'Không có'),
('BGLTMB', 8, 'Bài giảng lập trình mobile', 'Viết mới', 'Bài giảng', 'Không có'),
('BGLTW', 10, 'Bài giảng lập trình window', 'Viết mới', 'Bài giảng', 'Không có'),
('BGNMLT', 1, 'Bài giảng Nhập môn lập trình', 'Viết mới', 'Bài giảng', 'Không có'),
('BGNMW', 6, 'Bài giảng nhập môn web', 'Viết mới', 'Bài giảng', 'Không có'),
('BGPTTKHT', 9, 'Bài giảng phân tính thiết kế hệ thống', 'Viết mới', 'Bài giảng', 'Không có'),
('BGTRR', 4, 'Bài giảng toán rời rạc', 'Viết mới', 'Bài giảng', 'Không có'),
('BGUDW', 7, 'Bài giảng ứng dụng web', 'Viết mới', 'Bài giảng', 'Không có'),
('GTLTCSDL', 5, 'Giáo trình lý thuyết cơ sở dữ liệu', 'Viết mới', 'Giáo trình', 'Trường Đại học Công nghệ Sài Gòn'),
('GTLTKTLT', 2, 'Giáo trình lý thuyết Kỹ thuật lập trình', 'Cập nhật', 'Giáo trình', 'Trường đại học Công nghệ Sài Gòn'),
('GTLTLTHDT', 3, 'Giáo trình lý thuyết lập trình hướng đối tượng', 'Viết mới', 'Giáo trình', 'Trường Đại học Công nghệ Sài Gòn'),
('GTLTLTMB', 8, 'Giáo trình lý thuyết lập trình mobile', 'Viết mới ', 'Giáo trình', 'Trường Đại học Công nghệ Sài Gòn '),
('GTLTLTW', 10, 'Giáo trình lý thuyết lập trình window', 'Viết mới', 'Giáo trình', 'Trường Đại học Công nghệ Sài Gòn'),
('GTLTNMLT', 1, 'Giáo trình lý thuyết Nhập môn lập trình', 'viết mới', 'Giáo trình', 'Trường Đại học Công nghệ Sài Gòn'),
('GTLTNMW', 6, 'Giáo trình lý thuyết nhập môn web', 'Viết mới', 'Giáo trình', 'Trường Đại học Công nghệ Sài Gòn'),
('GTLTPTTKHT', 9, 'Giáo trình lý thuyết phân tích thiết kế hệ thống', 'Viết mới', 'Giáo trình', 'Trường Đại học Công Nghệ Sài Gòn'),
('GTLTTRR', 4, 'Giáo trình lý thuyết toán rời rạc', 'Viết mới', 'Giáo trình', 'Trường Đại học Công nghệ Sài Gòn'),
('GTLTUDW', 7, 'Giáo trình lý thuyết ứng dụng web', 'Viết mới', 'Giáo trình', 'Trường Đại học Công nghệ Sài Gòn'),
('GTTHCSDL', 5, 'Giáo trình thực hành Cơ sở dữ liệu', 'Viết mới', 'Giáo trình', 'Trường Đại học Công nghệ Sài Gòn'),
('GTTHKTLT', 2, 'Giáo trình Thực hành Kỹ thuật lập trình', 'Cập nhật', 'Giáo trình', 'Trường Đại học Công nghệ Sài Gòn'),
('GTTHLTHDT', 3, 'Giáo trình thực hành lập trình hướng đối tượng', 'Viết mới', 'Giáo trình', 'Trường Đại học Công nghệ Sài Gòn'),
('GTTHLTMB', 8, 'Giáo trình thực hành lập trình mobile', 'Viết mới', 'Giáo trình', 'Trường Đại học Công nghệ Sài Gòn '),
('GTTHLTW', 10, 'Giáo trình thực hành window ', 'Viết mới', 'Giáo trình', 'Trường Đại học Công nghệ Sài Gòn'),
('GTTHNMLT', 1, 'Giáo trình thực hành Nhập môn lập trình', 'Viết mới', 'Giáo trình', 'Trường Đại học Công nghệ Sài Gòn'),
('GTTHNMW', 6, 'Giáo trình thực hành nhập môn web', 'Viết mới', 'Giáo trình', 'Trường Đại học Công nghệ Sài Gòn'),
('GTTHTRR', 4, 'Giáo trình thực hành toán rời rạc', 'Viết mới', 'Giáo trình', 'Trường Đại học Công nghệ Sài Gòn'),
('GTTHUDW', 7, 'Giáo trình thực hành ứng dụng web', 'Viết mới', 'Giáo trình', 'Trường Đại học Công Nghệ Sài Gòn');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `capnhat`
--
ALTER TABLE `capnhat`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FKCapNhat489858` (`GiaoVienMaGiaoVien`),
  ADD KEY `FKCapNhat764022` (`TaiLieuMaTaiLieu`);

--
-- Chỉ mục cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`MaGiaoVien`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MaMonHoc`);

--
-- Chỉ mục cho bảng `soan`
--
ALTER TABLE `soan`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FKSoan23161` (`GiaoVienMaGiaoVien`),
  ADD KEY `FKSoan694548` (`TaiLieuMaTaiLieu`);

--
-- Chỉ mục cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  ADD PRIMARY KEY (`MaTaiLieu`),
  ADD KEY `FKTaiLieu5164` (`MonHocMaMonHoc`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `capnhat`
--
ALTER TABLE `capnhat`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `soan`
--
ALTER TABLE `soan`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `capnhat`
--
ALTER TABLE `capnhat`
  ADD CONSTRAINT `FKCapNhat489858` FOREIGN KEY (`GiaoVienMaGiaoVien`) REFERENCES `giaovien` (`MaGiaoVien`),
  ADD CONSTRAINT `FKCapNhat764022` FOREIGN KEY (`TaiLieuMaTaiLieu`) REFERENCES `tailieu` (`MaTaiLieu`);

--
-- Các ràng buộc cho bảng `soan`
--
ALTER TABLE `soan`
  ADD CONSTRAINT `FKSoan23161` FOREIGN KEY (`GiaoVienMaGiaoVien`) REFERENCES `giaovien` (`MaGiaoVien`),
  ADD CONSTRAINT `FKSoan694548` FOREIGN KEY (`TaiLieuMaTaiLieu`) REFERENCES `tailieu` (`MaTaiLieu`);

--
-- Các ràng buộc cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  ADD CONSTRAINT `FKTaiLieu5164` FOREIGN KEY (`MonHocMaMonHoc`) REFERENCES `monhoc` (`MaMonHoc`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
