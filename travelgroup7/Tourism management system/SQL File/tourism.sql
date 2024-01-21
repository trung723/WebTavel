-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 12:33 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
USE tourism1;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `permission` varchar(255) CHARACTER SET latin1 NOT NULL,
  `createuser` varchar(255) DEFAULT NULL,
  `deleteuser` varchar(255) DEFAULT NULL,
  `createbid` varchar(255) DEFAULT NULL,
  `updatebid` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `permission`, `createuser`, `deleteuser`, `createbid`, `updatebid`) VALUES
(1, 'Superuser', NULL, '1', '1', '1'),
(2, 'Admin', '1', NULL, '1', '1'),
(3, 'User', NULL, NULL, '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `Staffid` varchar(255) DEFAULT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Status` int(11) NOT NULL DEFAULT 1,
  `Photo` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT 'avatar15.jpg',
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `Staffid`, `AdminName`, `UserName`, `FirstName`, `LastName`, `MobileNumber`, `Email`, `Status`, `Photo`, `Password`, `AdminRegdate`) VALUES
(2, '10002', 'Admin', 'admin', 'Vũ', 'Tú  ', 770546590, 'admin@gmail.com', 1, 'face19.jpg', '81dc9bdb52d04dc20036dbd8313ed055', '2021-06-21 10:18:39'),
(9, '10003', 'Admin', 'thanhtrung', 'Thành', 'Trung ', 757537271, 'tt@gmail.com', 1, 'face27.jpg', '81dc9bdb52d04dc20036dbd8313ed055', '2021-06-21 07:08:48'),
(29, 'U002', 'User', 'tienhao', 'Tiến', 'Hào', 770546590, 'th@gmail.com', 1, 'avatar15.jpg', '81dc9bdb52d04dc20036dbd8313ed055', '2021-07-21 14:26:42');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `BookingId` int(11) NOT NULL,
  `PackageId` int(11) DEFAULT NULL,
  `UserEmail` varchar(100) DEFAULT NULL,
  `FromDate` varchar(100) DEFAULT NULL,
  `ToDate` varchar(100) DEFAULT NULL,
  `Comment` mediumtext DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL,
  `CancelledBy` varchar(5) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`BookingId`, `PackageId`, `UserEmail`, `FromDate`, `ToDate`, `Comment`, `RegDate`, `status`, `CancelledBy`, `UpdationDate`) VALUES
(13, 5, 'gerald@gmail.com', '2020-12-11', '2020-12-11', 'Tôi cần đặt chuyến đi du lịch Hạ Long', '2020-12-11 12:13:17', 1, '', '2021-01-14 18:35:06'),
(14, 2, 'tuvu@gmail.com', '2021-01-12', '2021-01-15', 'Một nơi tắm nắng', '2021-01-12 19:49:39', 2, 'u', '2021-01-14 11:20:42'),
(15, 4, 'boycodon@gmail.com', '2021-01-14', '2021-01-16', 'Một nơi du lịch văn hóa', '2021-01-14 08:19:44', 2, 'u', '2021-02-15 08:56:58'),
(16, 2, 'thanhtrung@gmail.com', '2021-03-26', '2021-03-31', 'Tôi thực sự muốn đi thăm nơi này', '2021-03-24 22:48:36', 0, NULL, NULL),
(17, 6, 'admin@gmail.com', '2021-07-28', '2021-07-30', 'Chuyến đi nghỉ mát', '2021-07-24 09:51:52', 2, 'a', '2021-07-24 10:04:22'),
(18, 1, 'admin@gmail.com', '2021-07-24', '2021-07-26', 'Chuyến đi vui vẻ', '2021-07-24 09:59:34', 1, NULL, '2021-07-24 10:01:21');

-- --------------------------------------------------------

--
-- Table structure for table `tblcompany`
--

CREATE TABLE `tblcompany` (
  `id` int(11) NOT NULL,
  `regno` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `companyname` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `companyemail` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `country` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `companyphone` int(10) NOT NULL,
  `companyaddress` varchar(255) CHARACTER SET latin1 NOT NULL,
  `companylogo` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT 'avatar15.jpg',
  `status` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT '0',
  `developer` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `creationdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcompany`
--

INSERT INTO `tblcompany` (`id`, `regno`, `companyname`, `companyemail`, `country`, `companyphone`, `companyaddress`, `companylogo`, `status`, `developer`, `creationdate`) VALUES
(4, '1002', 'St.Tuvucoder', 'tuvux14@gmail.com', 'VietNam', 770546590, 'HaNoi', 'church.jpg', '1', 'tuvux14', '2021-02-02 12:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbltourpackages`
--

CREATE TABLE `tbltourpackages` (
  `PackageId` int(11) NOT NULL,
  `PackageName` varchar(200) DEFAULT NULL,
  `PackageType` varchar(150) DEFAULT NULL,
  `PackageLocation` varchar(100) DEFAULT NULL,
  `PackagePrice` int(11) DEFAULT NULL,
  `PackageFetures` varchar(255) DEFAULT NULL,
  `PackageDetails` mediumtext DEFAULT NULL,
  `PackageImage` varchar(100) DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
)  ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Dumping data for table `tbltourpackages`
--

/*INSERT INTO `tbltourpackages` (
  `PackageId`, 
  `PackageName`, 
  `PackageType`, 
  `PackageLocation`, 
  `PackagePrice`, 
  `PackageFetures`, 
  `PackageDetails`, 
  `PackageImage`, 
  `Creationdate`, 
  `UpdationDate`
) VALUES
(1, N'Vịnh Hạ Long', N'Du lịch sinh thái, giải trí', N'Miền Bắc', 10000000, N'Điều hòa nhiệt độ, Ban công, Có Vệ tinh, Quạt trần, Máy sấy tóc', N'Du lịch Hạ Long - 1 trong 7 kỳ quan thiên nhiên thế giới, ...', 'ditich9.jpg', '2017-05-13 14:23:44', '2021-03-26 13:49:15'),
(2, N'Phú Quốc', N'Du lịch biển, ẩm thực', N'Miền Nam', 5100000, N'Ưu đãi giá, Khách sạn, và các hoạt động giải trí', N'Du lịch Phú Quốc nổi tiếng với những bãi biển đẹp, hoang sơ như Bãi Sao, ...', 'ditich12.jpg', '2024-05-13 15:24:26', '2024-07-24 09:56:27'),
(3, N'Hội An', N'Du lịch Văn hoá, Lịch sử', N'Miền Trung',7000000, N'Chăm sóc khách hàng, khách sạn, và các hoạt động giải trí.', N'Du lịch Hội An, du khách có dịp chiêm ngưỡng những di sản kiến trúc độc đáo có từ hàng trăm năm trước ...', 'ditich16.jpg', '2024-05-13 16:00:58', '2024-03-26 13:39:45'),
(4, N'Đảo Cát Bà', N'Du lịch biển, giải trí', N'Miền Bắc', 12000000, N'Quà tặng đặc biệt, ưu đãi nếu đi theo nhóm', N'Du lịch Hải Phòng còn hấp dẫn du khách bởi ẩm thực mang nét đặc trưng riêng của phố cảng ...', 'ditich21.jpg', '2024-05-13 22:42:10', '2024-03-26 13:45:43'),
(5, N'Sài Gòn', N'Du lịch Văn hoá, Lịch sử', N'Miền Nam', 15000000, N'Có hướng dẫn viên du lịch, ưu đãi nếu đi theo nhóm', N'Đến với địa điểm du lịch Sài Gòn, du khách không chỉ được ngắm cảnh phố xá nhộn nhịp, đông vui mà còn được ...', 'ditich18.jpg', '2024-05-13 22:42:10', '2024-03-26 13:45:43'),
(6, N'Hà Nội', N'Du lịch văn hóa, lịch sử, ẩm thực', N'Miền Bắc', 11000000, N'Tặng quà, khách sạn, hoạt động giải trí', N'Thủ đô Hà Nội ngàn năm văn hiến là một trong những nơi mà bất kỳ người Việt Nam nào cũng muốn được đặt chân đến một lần trong đời. ...', 'ditich8.jpg', '2024-05-14 08:01:08', '2024-07-24 09:57:12');
*/

-- --------------------------------------------------------
INSERT INTO `tbltourpackages` (
  `PackageId`, 
  `PackageName`, 
  `PackageType`, 
  `PackageLocation`, 
  `PackagePrice`, 
  `PackageFetures`, 
  `PackageDetails`, 
  `PackageImage`, 
  `Creationdate`, 
  `UpdationDate`
) VALUES
(1, N'Vịnh Hạ Long', 'Du lịch sinh thái, giải trí', 'Miền Bắc', 10000000, 'Điều hòa nhiệt độ, Ban công, Có Vệ tinh, Quạt trần, Máy sấy tóc', 'Du lịch Hạ Long - 1 trong 7 kỳ quan thiên nhiên thế giới, ...', 'ditich9.jpg', '2017-05-13 14:23:44', '2021-03-26 13:49:15'),
(2, N'Phú Quốc', 'Du lịch biển, ẩm thực', 'Miền Nam', 5100000, 'Ưu đãi giá, Khách sạn, và các hoạt động giải trí', 'Du lịch Phú Quốc nổi tiếng với những bãi biển đẹp, hoang sơ như Bãi Sao, ...', 'ditich12.jpg', '2024-05-13 15:24:26', '2024-07-24 09:56:27'),
(3, N'Hội An', 'Du lịch Văn hoá, Lịch sử', 'Miền Trung',7000000, 'Chăm sóc khách hàng, khách sạn, và các hoạt động giải trí.', 'Du lịch Hội An, du khách có dịp chiêm ngưỡng những di sản kiến trúc độc đáo có từ hàng trăm năm trước ...', 'ditich16.jpg', '2024-05-13 16:00:58', '2024-03-26 13:39:45'),
(4, N'Đảo Cát Bà', 'Du lịch biển, giải trí', 'Miền Bắc', 12000000, 'Quà tặng đặc biệt, ưu đãi nếu đi theo nhóm', 'Du lịch Hải Phòng còn hấp dẫn du khách bởi ẩm thực mang nét đặc trưng riêng của phố cảng ...', 'ditich21.jpg', '2024-05-13 22:42:10', '2024-03-26 13:45:43'),
(5, N'Sài Gòn', 'Du lịch Văn hoá, Lịch sử', 'Miền Nam', 15000000, 'Có hướng dẫn viên du lịch, ưu đãi nếu đi theo nhóm', 'Đến với địa điểm du lịch Sài Gòn, du khách không chỉ được ngắm cảnh phố xá nhộn nhịp, đông vui mà còn được ...', 'ditich18.jpg', '2024-05-13 22:42:10', '2024-03-26 13:45:43'),
(6, N'Hà Nội', 'Du lịch văn hóa, lịch sử, ẩm thực', 'Miền Bắc', 11000000, 'Tặng quà, khách sạn, hoạt động giải trí', 'Thủ đô Hà Nội ngàn năm văn hiến là một trong những nơi mà bất kỳ người Việt Nam nào cũng muốn được đặt chân đến một lần trong đời. ...', 'ditich8.jpg', '2024-05-14 08:01:08', '2024-07-24 09:57:12');

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `MobileNumber` char(10) DEFAULT NULL,
  `EmailId` varchar(70) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `MobileNumber`, `EmailId`, `Password`, `RegDate`, `UpdationDate`) VALUES
(14, 'Tu Vu', '0770546590', 'gerald@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2024-01-15 14:00:35', '2024-07-24 09:49:44'),
(16, 'Thanh Trung', '0770546590', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2024-07-24 08:34:08', NULL),
(15, 'TienHao', '0770546591', 'john@gmail.com', '12345', '2024-07-24 08:34:08', NULL);


--
-- Indexes for dumped tables
--

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`BookingId`);

--
-- Indexes for table `tblcompany`
--
ALTER TABLE `tblcompany`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  ADD PRIMARY KEY (`PackageId`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `EmailId` (`EmailId`),
  ADD KEY `EmailId_2` (`EmailId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `BookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblcompany`
--
ALTER TABLE `tblcompany`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
