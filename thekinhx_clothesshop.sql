-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2021 at 10:47 AM
-- Server version: 10.3.16-MariaDB-cll-lve
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thekinhx_clothesshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `ao`
--

CREATE TABLE `ao` (
  `id` int(10) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `gia` int(255) NOT NULL,
  `hinh` text NOT NULL,
  `idloaiao` int(10) NOT NULL,
  `idloaisize` int(10) NOT NULL,
  `idloaimau` int(10) NOT NULL,
  `soluong` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ao`
--

INSERT INTO `ao` (`id`, `ten`, `mota`, `gia`, `hinh`, `idloaiao`, `idloaisize`, `idloaimau`, `soluong`) VALUES
(43, 'Áo Thun TN TC Secret Garden M10', 'Mô tả sản phẩm Chất liệu: Cotton Compact Thành phần: 100% cotton', 185000, 'http://shopggwp.xyz/FileUpload/f233c8ce-ff76-0f00-c5b5-0017bfdb3d81.jpg', 2, 6, 10, 99),
(44, 'Áo Khoác Dù Đơn Giản F03', 'ÁO KHOÁC DÙ ĐA TÍNH NĂNG - Trượt nước - Chống UV Chất liệu: Vải Dù Thành phần: 100% poly - Vải dù bền, dai và nhẹ - Ưu điểm vượt trội là thoáng khí', 299000, 'http://shopggwp.xyz/FileUpload/2ae6ace3-ac4a-0500-c450-0017214f4388.jpg', 1, 4, 13, 100),
(45, 'Sơ Mi TD TC Đơn Giản Solid M11', 'Chất liệu: Kate Thành phần: 12% modal và 88% superfine - Ít nhăn và dễ ủi - Nhanh khô và thoáng mát HDSD: - Áo sơ mi màu phơi trong bóng râm để tránh bạc màu phần vai áo - Áo sơ mi trắng có thể phơi ngoài nắng để áo trắng sáng hơn ( không phơi quá lâu )', 204000, 'http://shopggwp.xyz/FileUpload/8e558e69-2f1c-1b00-6091-00173fc26381.jpg', 5, 4, 4, 0),
(46, 'Áo Khoác Dù Đơn Giản F04', 'ÁO KHOÁC DÙ ĐA TÍNH NĂNG - Trượt nước - Chống UV Chất liệu: Vải Dù Thành phần: 100% poly - Vải dù bền, dai và nhẹ - Ưu điểm vượt trội là thoáng khí', 299000, 'http://shopggwp.xyz/FileUpload/1c01b001-04f0-0600-f1cd-0017214f68e6.jpg', 1, 4, 14, 0),
(47, 'Áo Thun 3 Lỗ TC Đơn Giản Minimal M6', 'Chất liệu: Cotton 2 Chiều Thành phần: 100% cotton - Thân thiện - Thấm hút thoát ẩm - Mềm mại - Kiểm soát mùi - Điều hòa nhiệt + Họa tiết thêu đắp giống - HDSD: + Nên giặt chung với sản phẩm cùng màu + Không dùng thuốc tẩy hoặc xà phòng có tính tẩy mạnh + Nên phơi trong bóng râm để giữ sp bền màu', 150000, 'http://shopggwp.xyz/FileUpload/d04137fe-50f3-0100-083a-0017bfd60482.jpg', 2, 6, 10, 0),
(48, 'Áo Thun 3 Lỗ R Đơn Giản Solid M2', 'Chất liệu: Cotton 2 chiều Thành phần: 100% Cotton - Co dãn 2 chiều - Thấm hút mồ hôi tốt mang lại cảm giác thoáng mát', 120000, 'http://shopggwp.xyz/FileUpload/02ca973a-5a44-0e00-8ad5-00178e90c38b.jpg', 2, 5, 9, 100),
(49, 'Áo Thun 3 Lỗ TC Typography M2', 'Chất liệu: Cotton 2 chiều Thành phần: 100% Cotton - Co dãn 2 chiều - Thấm hút mồ hôi tốt mang lại cảm giác thoáng mát HDSD: - Giặt tay để sản phẩm giữ được độ bền cao - Ủi sản phẩm bằng bàn ủi hơi nước hoặc ủi khi sản phẩm còn ẩm để dễ dàng làm phẳng', 140000, 'http://shopggwp.xyz/FileUpload/1508cc85-5efd-0d00-4007-001731a21172.jpg', 2, 5, 12, 0),
(50, 'Áo Thun Cổ Trụ TC Đơn Giản J01', 'Chất liệu: Cotton 4 Chiều Thành phần: 95% cotton 5% Spandex - Co giãn tốt - Độ bền cao', 150000, 'http://shopggwp.xyz/FileUpload/07c438fd-b77c-2000-59ad-00175850a79a.jpg', 2, 4, 12, 0),
(51, 'Áo Thun Cổ Trụ TC Đơn Giản D01', 'Chất liệu: Cotton 2 chiều Thành phần: 100% Cotton - Co dãn 2 chiều - Thấm hút mồ hôi tốt mang lại cảm giác thoáng mát HDSD: - Giặt tay để sản phẩm giữ được độ bền cao - Ủi sản phẩm bằng bàn ủi hơi nước hoặc ủi khi sản phẩm còn ẩm để dễ dàng làm phẳng', 225000, 'http://shopggwp.xyz/FileUpload/dd3f7324-54e7-0400-9f64-00173e5387f1.jpg', 2, 6, 17, 0),
(53, 'Áo Thun Cổ Trụ TC Đơn Giản H04 ', 'Chất liệu: vải cá sấu cotton/poly Thành phần: 72% cotton 28% poly - Thoáng mát và thoải mái - Sợi vải nhanh khô  HDSD: - Không sử dụng thuốc tẩy hoặc bột giặt có độ tẩy cao - Tránh phơi dưới ánh nắng trực tiếp để bảo quản màu sắc', 205000, 'http://shopggwp.xyz/FileUpload/57e4e720-945d-0900-fda0-001700f6b074.jpg', 2, 5, 3, 0),
(54, 'Áo Thun TN TC Anubis Ver3', 'Chất liệu: Cotton 2 chiều Thành phần: 100% Cotton - Co dãn 2 chiều - Thấm hút mồ hôi tốt mang lại cảm giác thoáng mát - In nước logo Anubis', 185000, 'http://shopggwp.xyz/FileUpload/849180cb-8fc9-0f00-b344-001784269eea.jpg', 2, 6, 4, 0),
(55, 'SƠ MI DÀI TAY NAM 4SMDT016TRK', 'Chất liệu: 88% Poly, 12% Moadal thoáng khí, mềm mát  Kiểu dáng: Body fit ôm người, tôn dáng, nổi bật ưu điểm cơ thể  Thiết kế: Tỉ mỉ trên từng chi tiết, màu sắc của khuy áo và đường chỉ cần phải phù hợp với màu của  vải 100%  Ưu điểm: Số lượng kim trên áo somi của Bi là 8 mũi/ 1 cm. Gấp 2 lần so với sơ mi ngoài thị trường', 449000, 'http://shopggwp.xyz/FileUpload/4smdt016trk01-449k_245fbef34f534ed1a9135854d1147e1d_master.jpg', 5, 6, 4, 0),
(56, 'ÁO SƠ MI NAM DÀI TAY 4SMDS002HOG', 'Chất liệu: 88% Poly, 12% Moadal thoáng khí, mềm mát  Kiểu dáng: Body fit ôm người, tôn dáng, nổi bật ưu điểm cơ thể  Thiết kế: Tỉ mỉ trên từng chi tiết, màu sắc của khuy áo và đường chỉ cần phải phù hợp với màu của  vải 100%  Ưu điểm: Số lượng kim trên áo somi của Bi là 8 mũi/ 1 cm. Gấp 2 lần so với sơ mi ngoài thị trường', 585000, 'http://shopggwp.xyz/FileUpload/4smds002hog01-585k__2__75107f5c138f41b79f380487a0113c6d_master.jpg', 5, 4, 9, 0),
(57, 'Bộ quần áo thể thao thun lạnh ba sọc nam', 'với nhu cầu ăn mặc ngày càng sành điệu năng động của các bạn trẻ . Shop chúng tôi vừa mới cho ra mẩu bộ quần áo thể thao nam nữ ba sọc đáp mọi nhu cầu của các bạn hiện nay sành điệu, cá tính năng động mang đến làng gió mới cho thời trang Việt năng tằm thời trang trẻ thêm đẳng cấp mới của giới sành điệu', 97000, 'http://shopggwp.xyz/FileUpload/12cbf80f2f5eb5441f571df7043b984a.jpg', 2, 4, 4, 0),
(58, 'MEDUSA POLO SHIRT', 'Classic cotton piqué polo shirt embellished with a golden Medusa motif.', 11800000, 'http://shopggwp.xyz/FileUpload/90_A87427-A237141_A2386_10_MedusaPoloShirt-T-shirtsandPolos-versace-online-store_5_1.jpg', 2, 4, 2, 0),
(59, 'GV PINSTRIPE PRINT T-SHIRT', 'A graphic design, this organic cotton t-shirt features the logo mixed with the GV Pinstripe print. In an iconoclastic twist on a classic pattern, pinstripes are shuffled, remixed and fused with subtle hints of Gianni Versace\'s signature. Perfectly casual when worn alone, the t-shirt layers well under tailored jackets', 15270000, 'http://shopggwp.xyz/FileUpload/90_A89002-A235263_A1382_10_GVPinstripePrintT-Shirt-T-shirtsandPolos-versace-online-store_0_2.jpg', 2, 4, 10, 0),
(60, 'ÁO PHÔNG NAM APTTK216', 'Chất liệu: 100% COTTON – Đặc tính: IN CAO SU TRÊN TÚI – Phom: Regular – Màu: Xám đậm, be, trắng kem', 260000, 'http://shopggwp.xyz/FileUpload/APHTK216-1.jpg', 2, 12, 13, 0),
(61, 'Áo polo nam POMTK201', 'Chất liệu: COTTON + SPANDEX – Đặc tính: CỒ VÀ TAY PHỐI BO KHÁC MÀU', 320000, 'http://shopggwp.xyz/FileUpload/POMTK201-33.jpg', 2, 4, 10, 0),
(62, 'ÁO SƠ MI NAM STDTK117', 'Chất liệu: 49% RAYON, 49% NYLON, 2% SPANDEX – Màu sắc: xanh da trời, xanh indigo', 369000, 'http://shopggwp.xyz/FileUpload/STDTK117-1.jpg', 5, 4, 11, 0),
(63, 'ÁO KHOÁC NAM AKBCN105', 'Chất liệu: Vải cao cấp – Màu:  xanh indigo', 580000, 'http://shopggwp.xyz/FileUpload/AKBCN105-7.jpg', 1, 6, 3, 0),
(64, 'ÁO KHOÁC NAM KNMTK102', 'Chất liệu: Vải cao cấp – Màu:  đen', 399000, 'http://shopggwp.xyz/FileUpload/KNMTK102-2.jpg', 1, 12, 10, 0),
(65, 'ÁO POLO NAM POMTK202', 'Chất liệu: COTTON + SPANDEX – Đặc tính: CỒ VÀ TAY PHỐI BO KHÁC MÀU, Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát. – Màu: trắng phối đỏ,', 330000, 'http://shopggwp.xyz/FileUpload/POMTK202-1.jpg', 2, 6, 2, 0),
(66, 'Áo sơ mi nam tay dài Cổ spread form FITTED - 10F20SHL045', 'Chất liệu: 100% cotton  Đặc tính: Chống thấm nước tốt, tránh bám bụi.', 480000, 'http://shopggwp.xyz/FileUpload/mausac_white_10f20shl045__1__25fd1ddb0c7048a9925b49fbd522ab20_1024x1024.jpg', 5, 4, 4, 0),
(67, 'Áo Polo nam phối rib decor FITTED form - 10F20POL016', 'Chất liệu: 100% cotton.  Đặc tính: Hút ẩm tốt, thấm hút tốt, mềm mại.', 380000, 'http://shopggwp.xyz/FileUpload/mausac_apple_10f20pol016__1__98fc6d2929ec4ee6a64d07040c758b35_1024x1024.jpg', 2, 12, 12, 0),
(68, 'Áo sơ mi nam tay dài hộp ly to form REGULAR - 10F20SHL053', 'Chất liệu: 100% cotton  Đặc tính: Chống thấm nước tốt, tránh bám bụi.', 420000, 'http://shopggwp.xyz/FileUpload/mausac_white_10f20shl042__1__1b6463f81a694a9891b09a7ed4142915_1024x1024.jpg', 5, 6, 4, 0),
(69, 'Áo sơ mi nam tay dài SOLID form OVERSIZE - 10F20SHL031', 'Chất liệu: 100% cotton  Đặc tính: Chống thấm nước tốt, tránh bám bụi.', 550000, 'http://shopggwp.xyz/FileUpload/mausac_black_10f20shl031__1__c825731865054f5dafb26c6bcd8a3525_1024x1024.jpg', 5, 5, 10, 0),
(70, 'Áo khoác Jean nam trơn form Loose - 10F20DJA003', 'Chiếc áo DENIM JACKET đối với các chàng trai dường như chưa bao giờ ngừng tỏa nhiệt. Vì thế, ROUTINE lại mang đến cho những đồng đội của mình chiếc áo denim jacket màu xám chất ngất, ấn tượng bởi phong cách streetstyle bụi bặm.  Chẳng còn gì \"xịn xò\" hơn khi bạn mix chiếc áo khoác denim với phong cách “denim in denim” với chiếc quần jeans cùng màu.', 650000, 'http://shopggwp.xyz/FileUpload/mausac_mindigo_10f20dja003__5__6e05a7b20d834a1198b772bbec675530_1024x1024.jpg', 1, 12, 3, 0),
(71, 'Áo polo nam basic point label form Fitted - 10F20POL026', 'Chất liệu: 100% cotton  Đặc tính: Co giãn, hút ẩm tốt và thấm hút mồ hôi.', 420000, 'http://shopggwp.xyz/FileUpload/mausac_black_10f20tsh041__1__137d4d895d724d999e3680c870825c34_1024x1024.jpg', 2, 4, 10, 0),
(72, ' Áo thun nam tay ngắn Raglane form Regular - 10F20TSH041', 'Chất liệu: 100% cotton  Đặc tính: Co giãn, hút ẩm tốt và thấm hút mồ hôi.', 290000, 'http://shopggwp.xyz/FileUpload/mausac_white_10f20pol026__1__2cc1d083b0c943db86d250fc74c0ff78_1024x1024.jpg', 2, 6, 4, 0),
(73, 'Áo Khoác Nam Hoodie 8K20', 'Áo Khoác Nam Hoodie 8K20.  Màu sắc: Đỏ,', 335000, 'http://shopggwp.xyz/FileUpload/hoodie-do-8k20_dd688bc845ee402ab37ab05278fcf0bb_master.jpg', 1, 4, 2, 0),
(74, 'Áo Khoác Dù Raplan Nam Xanh Rêu 9K33', 'Áo Khoác Dù Raplan Nam 9K33  Chất liệu: Vải Dù Raplan dày dặn', 385000, 'http://shopggwp.xyz/FileUpload/ao_khoac_du_nam_celeb__4_-min_5153f770c6654a44bcc8498b5321befc_master.jpg', 1, 5, 17, 0),
(75, 'Áo Khoác Nam Da Đen 8K63', 'Áo Khoác Nam Da Đen 8K63', 890000, 'http://shopggwp.xyz/FileUpload/ao-khoac-da-mau-den__1_9aa5e866b14f4bb7be910432b6037f25_master.jpg', 1, 4, 10, 0),
(76, 'Áo Khoác Dù Nam Có Mũ 9K33', 'Áo Khoác Dù Nam Có Mũ 9K33', 385000, 'http://shopggwp.xyz/FileUpload/9k33_12145a7edc6246d0bf387445c9987678_master.jpg', 1, 12, 17, 0),
(77, 'Áo Sơ Mi Nam Tay Ngắn Cổ Trụ Màu Đen CM21', 'Áo Sơ Mi Nam Tay Ngắn Cổ Trụ Màu Đen CM21', 315000, 'http://shopggwp.xyz/FileUpload/cm21-315-m-l-xl-2xl2_9310eed94a954bc1a3dace1855b12851_a5d3ea008d9642c6b93f1235bfc48143_master.jpg', 5, 4, 10, 0),
(78, 'Áo Sơ Mi Nam Vải Lụa Hồng Phấn 8SCM04', 'Áo Sơ Mi Nam Vải Lụa Hồng Phấn 8SCM04', 190000, 'http://shopggwp.xyz/FileUpload/8scm04-3-size-m-l-xl-190k-mau-hong-phan_84b706100a2c47bb815ef5491d679479_master.jpg', 5, 4, 9, 0),
(79, 'Áo Thun Nam Tay Ngắn Màu Hồng Nhạt Gân 9B24', 'Áo Thun Nam Tay Ngắn Màu Hồng Nhạt Gân 9B24', 225000, 'http://shopggwp.xyz/FileUpload/ao-thun-nam-mau-hong-nhat__1_a4fcabbf462549fdb2ec881c857624e5_grande.jpg', 2, 5, 9, 100),
(80, 'Áo Thun Polo Đen Pocket TP06', 'Áo Thun Polo Đen Pocket TP06', 385000, 'http://shopggwp.xyz/FileUpload/7-ta9000-tx01-1_9e27cabf4c3646988c475b57dd71a81b_b75ca3c4ec5d4d118ccbe40d2f6b3e28_grande.jpg', 2, 5, 10, 0),
(81, 'Áo Thun Nam Tay Dài Màu Trắng Phối Chữ 9F01', 'Áo Thun Nam Tay Dài Màu Trắng Phối Chữ 9F01', 380000, 'http://shopggwp.xyz/FileUpload/ao-thun-nam-tay-dai-mau-trang__2__da8acef87a64474186b9464ce157904b_grande.jpg', 2, 5, 4, 0),
(82, 'Áo Thun Polo Kem Thêu Bướm TP12', 'Áo Thun Polo Kem Thêu Bướm TP12', 385000, 'http://shopggwp.xyz/FileUpload/5-ta9000-tx01-1_9b64bd6bac1d4d1c921f20242e995204_082dca1e7637454bbcb147af46858c38_grande.jpg', 2, 6, 9, 0),
(83, 'ÁO T SHIRT NAM CỔ TRÒN COTTON', 'ÁO T SHIRT NAM CỔ TRÒN COTTON', 149000, 'http://shopggwp.xyz/FileUpload/H17TS20137.jpg', 2, 5, 11, 0),
(84, 'ÁO POLO NAM CỘC TAY', 'ÁO POLO NAM CỘC TAY', 399000, 'http://shopggwp.xyz/FileUpload/H17TP20152.jpg', 2, 5, 4, 0),
(85, 'Áo POLO THỂ THAO NAM', 'Áo POLO THỂ THAO NAM', 499000, 'http://shopggwp.xyz/FileUpload/W77TP20251.jpg', 2, 5, 10, 0),
(86, 'ÁO HOODIE NAM', 'ÁO HOODIE NAM', 549000, 'http://shopggwp.xyz/FileUpload/H17TH20085.jpg', 1, 6, 7, 0),
(87, 'ÁO KHOÁC BOMBER NAM', 'ÁO KHOÁC BOMBER NAM', 599000, 'http://shopggwp.xyz/FileUpload/H17TJ20155.jpg', 1, 5, 7, 0),
(88, 'ÁO KHOÁC NAM 5 TRONG 1', 'ÁO KHOÁC NAM 5 TRONG 1', 699000, 'http://shopggwp.xyz/FileUpload/H17TJ20079.jpg', 1, 6, 3, 0),
(89, 'ÁO ACTIVE DRI-BALANCE NAM', 'ÁO ACTIVE DRI-BALANCE NAM', 349000, 'http://shopggwp.xyz/FileUpload/H17TS19015-01.jpg', 2, 5, 17, 0),
(90, 'ÁO THUN NAM CỘC TAY CỔ TIM DRI-BALANCE', 'ÁO THUN NAM CỘC TAY CỔ TIM DRI-BALANCE', 399000, 'http://shopggwp.xyz/FileUpload/H17TS17010.jpg', 2, 4, 11, 0),
(91, 'ÁO HOODIE NAM FRENCH TERRY', 'ÁO HOODIE NAM FRENCH TERRY', 549000, 'http://shopggwp.xyz/FileUpload/H17TH18003.jpg', 1, 5, 13, 0),
(92, 'ÁO SOMI M2SMN3021005', 'ÁO SOMI M2SMN3021005', 285000, 'http://shopggwp.xyz/FileUpload/532202153248_IMG_3616.jpg', 5, 4, 3, 0),
(93, 'ÁO SOMI M2SMN3021006', 'ÁO SOMI M2SMN3021006', 285000, 'http://shopggwp.xyz/FileUpload/535202153519_IMG_3612.jpg', 5, 5, 14, 0),
(94, 'ÁO THUN U1ATN2011007', 'ÁO THUN U1ATN2011007', 265000, 'http://shopggwp.xyz/FileUpload/505202150508_IMG_0195.jpg', 2, 4, 4, 0),
(95, 'ÁO THUN M2ATN4011003', 'ÁO THUN M2ATN4011003', 290000, 'http://shopggwp.xyz/FileUpload/511202151110_IMG_0181.jpg', 2, 6, 14, 0),
(96, 'ÁO THUN M2ATN4011002', 'ÁO THUN M2ATN4011002', 290000, 'http://shopggwp.xyz/FileUpload/531202153129_IMG_0168.jpg', 2, 4, 10, 0),
(97, 'ÁO THUN M2ATN4011001', 'ÁO THUN M2ATN4011001', 290000, 'http://shopggwp.xyz/FileUpload/515202151517_IMG_0174.jpg', 2, 6, 4, 0),
(98, 'ÁO SOMI M1SMD4011003', 'ÁO SOMI M1SMD4011003', 285000, 'http://shopggwp.xyz/FileUpload/231202143152_IMG_1675.jpg', 5, 4, 12, 0),
(99, 'ÁO SOMI M1SMD4011002', 'ÁO SOMI M1SMD4011002', 285000, 'http://shopggwp.xyz/FileUpload/251202135122_IMG_1671.jpg', 5, 12, 14, 0),
(100, 'ÁO THUN U1ATN120006', 'ÁO THUN U1ATN120006', 225000, 'http://shopggwp.xyz/FileUpload/4452021104559_IMG_1945.jpg', 2, 4, 12, 0),
(101, 'ÁO THUN U1ATN120005', 'ÁO THUN U1ATN120005', 265000, 'http://shopggwp.xyz/FileUpload/4542021105459_IMG_2717.jpg', 2, 6, 10, 0),
(102, 'ÁO SOMI M2SMN3021007', 'ÁO SOMI M2SMN3021007', 285000, 'http://shopggwp.xyz/FileUpload/517202151726_IMG_3623.jpg', 5, 4, 11, 0),
(103, 'Áo nữ #1', 'Áo nữ #1', 600000, 'http://shopggwp.xyz/FileUpload/169127417_2822837171311841_1308800584766834868_n.jpg', 2, 6, 10, 30);

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `idcthd` int(10) NOT NULL,
  `idhd` int(10) NOT NULL,
  `idao` int(10) NOT NULL DEFAULT 0,
  `soluong` int(11) NOT NULL DEFAULT 1,
  `idloaiao` int(10) NOT NULL,
  `idloaisize` int(10) NOT NULL,
  `idloaimau` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`idcthd`, `idhd`, `idao`, `soluong`, `idloaiao`, `idloaisize`, `idloaimau`) VALUES
(17, 69, 43, 1, 0, 0, 0),
(26, 70, 43, 12, 1, 4, 2),
(34, 74, 48, 1, 1, 4, 2),
(35, 75, 47, 1, 1, 4, 2),
(36, 76, 47, 1, 1, 4, 2),
(37, 77, 47, 1, 1, 4, 2),
(38, 78, 53, 1, 1, 4, 2),
(39, 79, 43, 1, 1, 4, 2),
(40, 80, 48, 1, 5, 12, 13);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `idhd` int(10) NOT NULL,
  `tenuser` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`idhd`, `tenuser`, `status`) VALUES
(69, '', 1),
(70, 'a', 1),
(72, 'a', 0),
(73, 'sonthai1', 0),
(74, 'asdasd', 1),
(75, 'asdasd', 1),
(76, 'admin', 1),
(77, '', 1),
(78, 'testdp1', 1),
(79, 'testdp1', 1),
(80, 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaiao`
--

CREATE TABLE `loaiao` (
  `idloaiao` int(10) NOT NULL,
  `tenloaiao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaiao`
--

INSERT INTO `loaiao` (`idloaiao`, `tenloaiao`) VALUES
(1, 'Áo Khoác'),
(2, 'Áo Thun'),
(5, 'Áo Sơ Mi');

-- --------------------------------------------------------

--
-- Table structure for table `LoaiMau`
--

CREATE TABLE `LoaiMau` (
  `idmau` int(10) NOT NULL,
  `tenmau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `LoaiMau`
--

INSERT INTO `LoaiMau` (`idmau`, `tenmau`) VALUES
(2, 'Red'),
(3, 'Blue'),
(4, 'White'),
(7, 'White grey'),
(8, 's'),
(9, 'Pink'),
(10, 'Black'),
(11, 'Cyan'),
(12, 'Yellow'),
(13, 'Grey'),
(14, 'Orange'),
(17, 'Green'),
(18, 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `loaisizeAo`
--

CREATE TABLE `loaisizeAo` (
  `idsizeao` int(10) NOT NULL,
  `tensizeao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaisizeAo`
--

INSERT INTO `loaisizeAo` (`idsizeao`, `tensizeao`) VALUES
(4, 'M'),
(5, 'L'),
(6, 'XL'),
(12, 'S'),
(13, 'xxl11'),
(14, 'xxlwww');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(10) NOT NULL,
  `tentaikhoan` varchar(255) NOT NULL,
  `anh_avt` varchar(100) NOT NULL,
  `tenhienthi` varchar(100) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `diachi` varchar(100) NOT NULL,
  `sodienthoai` varchar(100) NOT NULL,
  `isADmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `tentaikhoan`, `anh_avt`, `tenhienthi`, `matkhau`, `email`, `diachi`, `sodienthoai`, `isADmin`) VALUES
(2, 'sondeptrai', '', '', '11be96009b1b24fc52543c13c3bfa6f5', '', '', '', 0),
(3, 'soncute', '', '', 'a1ecaa5c7767be2c8111a047069ac2e4', '', '', '', 0),
(5, 'soncute123', '', '', '123456789', '', '', '', 0),
(6, 'thaithanhson', '', '', '5bd35e20088db481b30cb132af9121b3', '', '', '', 0),
(14, 'sondeptrai1', '', '', '5bd35e20088db481b30cb132af9121b3', '', '', '', 0),
(15, 'sonveydeptrai1', '', '', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', 0),
(16, 'sonveydeptrai2', '', '', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', 0),
(18, 'thanhson1', '', '', 'c4ca4238a0b923820dcc509a6f75849b', '', '', '', 0),
(19, 'text', '', '', 'c4ca4238a0b923820dcc509a6f75849b', '', '', '', 0),
(20, 'aaaa', '', '', 'c4ca4238a0b923820dcc509a6f75849b', '', '', '', 0),
(22, 'thanhson14520', '', '', '5bd35e20088db481b30cb132af9121b3', '', '', '', 0),
(23, 'admin', 'http://shopggwp.xyz/FileUpload/avt/136354571_727268277962693_654801654982949618_n.jpg', 'ADMIN ', '21232f297a57a5a743894a0e4a801fc3', 'sonthaithanh99@gmail.com', '703 taqqbuu', '0912782956', 1),
(24, 'sonthai1', '', 'Sơn', '202cb962ac59075b964b07152d234b70', '', '', '', 0),
(25, 'sonthai12', '', 'Thanh Sơn', 'c4ca4238a0b923820dcc509a6f75849b', '', '', '', 0),
(26, 'sonthaithanh1', '', 'Thanh Sơn', 'c4ca4238a0b923820dcc509a6f75849b', '', '', '', 0),
(27, 'sonthai111', '', 'Sơn', 'c4ca4238a0b923820dcc509a6f75849b', '', '', '', 0),
(28, 'asdzxc', '', 'Sơn', '202cb962ac59075b964b07152d234b70', '', '', '', 0),
(29, 'asdasd', '', 'Thanh Sơn', '202cb962ac59075b964b07152d234b70', '', '', '', 0),
(30, 'sonthai1', '', 'Sơn', 'c4ca4238a0b923820dcc509a6f75849b', '', '', '', 0),
(32, 'testdp1', '', 'Nguyễn Văn A', '5e9efeebd8a860a7805658a42e7b03fa', '', '', '', 0),
(34, 'sonthai1', '', 'Sơn', 'c4ca4238a0b923820dcc509a6f75849b', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ao`
--
ALTER TABLE `ao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loaiao` (`idloaiao`),
  ADD KEY `loaisizeao` (`idloaisize`),
  ADD KEY `loaimau` (`idloaimau`);

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`idcthd`),
  ADD KEY `id` (`idhd`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idhd`),
  ADD KEY `iduser` (`tenuser`);

--
-- Indexes for table `loaiao`
--
ALTER TABLE `loaiao`
  ADD PRIMARY KEY (`idloaiao`);

--
-- Indexes for table `LoaiMau`
--
ALTER TABLE `LoaiMau`
  ADD PRIMARY KEY (`idmau`);

--
-- Indexes for table `loaisizeAo`
--
ALTER TABLE `loaisizeAo`
  ADD PRIMARY KEY (`idsizeao`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ao`
--
ALTER TABLE `ao`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `idcthd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idhd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `loaiao`
--
ALTER TABLE `loaiao`
  MODIFY `idloaiao` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `LoaiMau`
--
ALTER TABLE `LoaiMau`
  MODIFY `idmau` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `loaisizeAo`
--
ALTER TABLE `loaisizeAo`
  MODIFY `idsizeao` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ao`
--
ALTER TABLE `ao`
  ADD CONSTRAINT `loaiao` FOREIGN KEY (`idloaiao`) REFERENCES `loaiao` (`idloaiao`),
  ADD CONSTRAINT `loaimau` FOREIGN KEY (`idloaimau`) REFERENCES `LoaiMau` (`idmau`),
  ADD CONSTRAINT `loaisizeao` FOREIGN KEY (`idloaisize`) REFERENCES `loaisizeAo` (`idsizeao`);

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `id` FOREIGN KEY (`idhd`) REFERENCES `hoadon` (`idhd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
