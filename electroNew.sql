-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2020 at 12:00 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electro`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `product_id` int(20) NOT NULL,
  `order_id` int(20) NOT NULL,
  `qty` int(20) NOT NULL,
  `price_sale` int(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `product_id`, `order_id`, `qty`, `price_sale`, `created_at`, `updated_at`) VALUES
(11, 2, 17, 1, 9899100, '2020-05-19 18:20:32', '2020-05-19 18:20:32'),
(14, 4, 20, 1, 209000, '2020-05-24 08:07:47', '2020-05-24 08:07:47'),
(15, 4, 21, 1, 209000, '2020-05-24 08:09:08', '2020-05-24 08:09:08'),
(16, 4, 22, 5, 209000, '2020-05-24 08:22:50', '2020-05-24 08:22:50'),
(17, 3, 22, 2, 34199050, '2020-05-24 08:22:50', '2020-05-24 08:22:50'),
(20, 1, 24, 1, 19950000, '2020-05-24 23:14:35', '2020-05-24 23:14:35'),
(23, 1, 27, 1, 19950000, '2020-05-24 23:20:59', '2020-05-24 23:20:59'),
(24, 1, 28, 1, 19950000, '2020-05-27 20:19:51', '2020-05-27 20:19:51'),
(25, 1, 29, 1, 19950000, '2020-05-27 20:25:37', '2020-05-27 20:25:37');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `cate_slug`, `cate_status`, `created_at`, `updated_at`) VALUES
(1, 'Apple', 'apple', '1', '2020-04-10 07:03:13', '2020-04-10 07:03:13'),
(2, 'Asus', 'asus', '1', '2020-04-10 07:03:21', '2020-04-10 07:03:21'),
(6, 'Dell', 'dell', '1', '2020-05-06 07:16:08', '2020-05-06 07:16:08'),
(8, 'HP', 'hp', '1', '2020-06-04 19:04:08', '2020-06-04 19:04:08'),
(9, 'Lenovo', 'lenovo', '1', '2020-06-04 19:04:21', '2020-06-04 19:04:21');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUser` int(10) UNSIGNED NOT NULL,
  `idPro` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `idUser`, `idPro`, `content`, `created_at`, `updated_at`) VALUES
(110, 11, 2, 'sản phẩm quá tốt! dùng rất bền và mượt', '2020-05-24 18:26:31', '2020-05-24 18:26:31'),
(111, 14, 1, 'Sản Phẩm Quá tuyệt vời!', '2020-05-24 18:28:17', '2020-05-24 18:28:17'),
(112, 11, 1, 'Tôi chưa hài lòng lắm về sản phẩm này. Mong cải thiện thêm', '2020-05-24 18:29:35', '2020-05-24 18:29:35'),
(113, 11, 9, 'Quá tốt', '2020-06-06 23:25:35', '2020-06-06 23:25:35'),
(114, 11, 9, 'Quá tuyệt vời', '2020-06-06 23:26:22', '2020-06-06 23:26:22'),
(115, 11, 10, 'vjhfjhhhhhhhhhhhhh', '2020-06-09 02:29:02', '2020-06-09 02:29:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_02_020700_create_categories_table', 1),
(6, '2020_04_03_055342_create_products_table', 2),
(7, '2020_04_25_130124_create_orders_table', 3),
(8, '2020_05_20_124235_create_roles_table', 4),
(9, '2020_05_20_124434_create_permissions_table', 4),
(10, '2020_05_20_124501_create_user_roles_table', 4),
(11, '2020_05_20_124529_create_role_permissions_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `nameguest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailguest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` int(11) NOT NULL DEFAULT 0,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `receive` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `nameguest`, `emailguest`, `phone`, `address`, `total`, `note`, `status`, `receive`, `created_at`, `updated_at`) VALUES
(24, 11, 'Trần Thắng', 'Meothanglzd1@gmail.com', '907875', 'Bình Tú', 19950000, NULL, 1, 0, '2020-05-24 23:14:35', '2020-06-09 02:31:08'),
(27, 11, 'Trần Thắng', 'Meothanglzd1@gmail.com', '907875', 'Bình Tú', 19950000, 'Nhanh nhất có thể cho tôi', 1, 0, '2020-05-24 23:20:59', '2020-05-27 20:16:14'),
(28, 11, 'Trần Thắng', 'Meothanglzd1@gmail.com', '907875', 'Bình Tú', 19950000, 'okok', 0, 0, '2020-05-27 20:19:51', '2020-05-27 20:19:51'),
(29, 11, 'Trần Thắng', 'Meothanglzd1@gmail.com', '907875', 'Bình Tú', 19950000, '123', 1, 1, '2020-05-27 20:25:37', '2020-05-27 20:27:08');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'view-user', 'Xem thể thành viên', NULL, NULL, NULL),
(2, 'create-user', 'Thêm thành viên', NULL, NULL, NULL),
(3, 'edit-user', 'Sửa thành viên', NULL, NULL, NULL),
(4, 'delete-user', 'Xóa thành viên', NULL, NULL, NULL),
(5, 'view-category', 'Xem thể danh mục', NULL, NULL, NULL),
(6, 'create-category', 'Thêm danh mục', NULL, NULL, NULL),
(7, 'edit-category', 'Sửa danh mục', NULL, NULL, NULL),
(8, 'delete-category', 'Xóa Danh Mục', NULL, NULL, NULL),
(9, 'history-category', 'Xem lịch sử xóa DM', NULL, NULL, NULL),
(10, 'view-product', 'Xem sản phẩm', NULL, NULL, NULL),
(11, 'create-product', 'Thêm sản phẩm', NULL, NULL, NULL),
(12, 'edit-product', 'Sửa sản phẩm', NULL, NULL, NULL),
(13, 'delete-product', 'Xóa sản phẩm', NULL, NULL, NULL),
(14, 'action-product', 'Action product', NULL, NULL, NULL),
(15, 'view-order', 'Xem đơn đặc hàng', NULL, NULL, NULL),
(16, 'delete-order', 'Xóa đơn đặc hàng', NULL, NULL, NULL),
(17, 'action-order', 'Duyệt đơn hàng', NULL, NULL, NULL),
(18, 'history-order', 'Lịch sử Xóa đơn hàng', NULL, NULL, NULL),
(19, 'delete-slide', 'Xóa slides', NULL, NULL, NULL),
(20, 'create-slide', 'Thêm slides', NULL, NULL, NULL),
(21, 'delete-role', 'Xóa Gruop User', NULL, NULL, NULL),
(22, 'create-role', 'Thêm nhóm quản trị', NULL, NULL, NULL),
(23, 'edit-role', 'Sửa nhóm quản trị', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_sale` tinyint(4) NOT NULL DEFAULT 0,
  `pro_detail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_amount` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `pro_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pro_hot` tinyint(4) NOT NULL DEFAULT 0,
  `pro_price` int(11) NOT NULL DEFAULT 0,
  `pro_cate_id` int(11) NOT NULL DEFAULT 0,
  `pro_total_rating` int(11) DEFAULT NULL COMMENT 'Tổng lượt đánh giá\r\n',
  `pro_total_number` int(11) DEFAULT NULL COMMENT 'Điểm đánh giá\r\n',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_slug`, `pro_type`, `pro_content`, `pro_sale`, `pro_detail`, `pro_amount`, `status`, `pro_image`, `pro_hot`, `pro_price`, `pro_cate_id`, `pro_total_rating`, `pro_total_number`, `created_at`, `updated_at`) VALUES
(1, 'Apple Macbook Air 13\" ( 2019 )', 'apple-macbook-air-13', '1', 'MacBook Pro 13 inch 2019 với chip Intel thế hệ thứ 8 cho sức mạnh gấp đôi so với trước, được tích hợp Touch Bar, Touch ID, màn hình Retina True Tone và chip bảo mật Apple T2.', 5, 'AMD Dual Core R3-3200U,4GB,15.6\'//Ultra Slim 200nits//FHD 1920x1080,AMD Radeon™ Vega 3 Graphics,PCIEG3x2 NVME 256GB M.2 SSD,1.35 kg (Without Battery)  1.60 kg (with 2 cell battery),HD Web Camera,2x USB 2.0; 1x Micro SD; 1x HDMI; 1x USB3.1 Type A (Gen1); 1x USB3.1 Type C,37WHrs', 106, 1, 'macair-1.jpg', 1, 21000000, 1, 2, 6, '2020-04-09 17:00:00', '2020-06-09 02:59:27'),
(2, 'Asus VivoBook A512DA', 'asus-vivobook-a512da', '2', 'Bất kể là công việc hay giải trí, dòng Laptop Asus Vivobook 15 luôn có thể hỗ trợ bạn hết mình. Hãy cùng HANOICOMPUTER tìm hiểu Laptop Asus VivoBook A512DA-EJ421T – một trong những chiếc máy tính tiêu biểu cho dòng sản phẩm', 10, 'AMD Dual Core R3-3200U,4GB,15.6\'//Ultra Slim 200nits//FHD 1920x1080,AMD Radeon™ Vega 3 Graphics,PCIEG3x2 NVME 256GB M.2 SSD,1.35 kg (Without Battery)  1.60 kg (with 2 cell battery),HD Web Camera,2x USB 2.0; 1x Micro SD; 1x HDMI; 1x USB3.1 Type A (Gen1); 1x USB3.1 Type C,37WHrs', 453, 1, 'asus1.jpg', 1, 10999000, 2, 1, 3, '2020-04-10 17:00:00', '2020-06-09 02:59:28'),
(3, 'Apple Macbook Pro 13\" (2019)', 'macbook-pro-2019', '3', 'MacBook Pro 13 inch năm nay có ngoại hình không thay đổi nhưng có sự nâng cấp ngoạn mục về sức mạnh hiệu năng.', 5, 'AMD Dual Core R3-3200U,4GB,15.6\'//Ultra Slim 200nits//FHD 1920x1080,AMD Radeon™ Vega 3 Graphics,PCIEG3x2 NVME 256GB M.2 SSD,1.35 kg (Without Battery)  1.60 kg (with 2 cell battery),HD Web Camera,2x USB 2.0; 1x Micro SD; 1x HDMI; 1x USB3.1 Type A (Gen1); 1x USB3.1 Type C,37WHrs', 29, 1, 'macpro-1.jpg', 1, 35999000, 1, 0, 0, '2020-04-10 17:00:00', '2020-06-09 02:57:52'),
(4, 'Dell An10', 'dell-10', '4', 'raats toots ', 5, 'chất lượng tốt nhất', 17, 0, 'asus_z.jpg', 1, 220000, 6, 0, 0, '2020-05-21 04:33:37', '2020-05-24 08:23:21'),
(8, 'Acer Nitro AN515 43 R9FD', 'acer-nitro-an515-43-r9fd', '1', 'quá đẹp', 0, ',,,,,,,,', 12, 0, 'asus1.jpg', 0, 200000, 2, NULL, NULL, '2020-06-04 20:18:40', '2020-06-04 20:18:40'),
(9, 'Asus Gaming ROG', 'asus-gaming-rog', '1', 'tốt quá nhiều', 0, ',,,,,,,,', 23, 0, 'asus1.jpg', 0, 325555, 8, 1, 5, '2020-06-04 20:19:29', '2020-06-09 01:31:25'),
(10, 'Lenovo IdeaPad L340', 'lenovo-ideapad-l340', '5', 'đẹp hoàn hảo', 0, ',,,,,,,,', 23, 0, 'acer-nitro-an515-43-r5-nhq6zsv003-600x600.jpg', 0, 2334000, 9, NULL, NULL, '2020-06-04 20:20:02', '2020-06-04 20:20:02');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `name`, `created_at`, `update_at`) VALUES
(1, 'Game', '2020-06-05 03:03:16', '2020-06-05 03:03:16'),
(2, 'Design', '2020-06-05 03:03:16', '2020-06-05 03:03:16'),
(3, 'Office', '2020-06-05 03:03:26', '2020-06-05 03:03:26'),
(4, 'Business', '2020-06-05 03:03:26', '2020-06-05 03:03:26'),
(5, 'Compact', '2020-06-05 03:03:42', '2020-06-05 03:03:42');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `ra_product_id` int(11) NOT NULL DEFAULT 0,
  `ra_number` tinyint(4) NOT NULL DEFAULT 0 COMMENT 'sao đánh giá cho 1 user',
  `ra_content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ra_user_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `ra_product_id`, `ra_number`, `ra_content`, `ra_user_id`, `created_at`, `updated_at`) VALUES
(17, 2, 3, 'tốt tôi hài lòng về nó!', 11, '2020-05-24 18:27:00', '2020-05-24 18:27:00'),
(18, 1, 4, 'OKOK', 14, '2020-05-24 18:28:26', '2020-05-24 18:28:26'),
(19, 1, 2, 'Không hài lòng', 11, '2020-05-24 18:29:50', '2020-05-24 18:29:50'),
(20, 9, 5, 'okokokok', 11, '2020-06-09 01:31:25', '2020-06-09 01:31:25');

-- --------------------------------------------------------

--
-- Table structure for table `reply_comments`
--

CREATE TABLE `reply_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `rep_user_id` int(11) DEFAULT 0,
  `rep_comment_id` int(11) NOT NULL,
  `rep_product_id` int(11) NOT NULL DEFAULT 0,
  `rep_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rep_content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reply_comments`
--

INSERT INTO `reply_comments` (`id`, `rep_user_id`, `rep_comment_id`, `rep_product_id`, `rep_name`, `rep_content`, `created_at`, `updated_at`) VALUES
(29, 1, 107, 1, 'Mai Linh', 'Cảm ơn bạn đã test', '2020-01-01 10:46:08', '2020-01-01 10:46:08'),
(36, 11, 111, 1, 'Trần Thắng', 'Bạn nói sai rùi!', '2020-05-24 18:30:08', '2020-05-24 18:30:08'),
(37, 11, 113, 9, 'Linh', 'hay ghe', '2020-06-06 23:25:58', '2020-06-06 23:25:58'),
(38, 11, 113, 9, 'Linh', 'koko', '2020-06-06 23:26:35', '2020-06-06 23:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'AdminFull', NULL, NULL, NULL),
(3, 'Nhân viên', NULL, NULL, NULL),
(9, 'Xem Nội Dung', NULL, '2020-05-20 18:54:59', '2020-05-20 18:54:59');

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`id`, `role_id`, `permission_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(237, 2, 1, NULL, '2020-06-05 02:03:52', '2020-06-05 02:03:52'),
(238, 2, 2, NULL, '2020-06-05 02:03:52', '2020-06-05 02:03:52'),
(239, 2, 3, NULL, '2020-06-05 02:03:52', '2020-06-05 02:03:52'),
(240, 2, 4, NULL, '2020-06-05 02:03:52', '2020-06-05 02:03:52'),
(241, 2, 5, NULL, '2020-06-05 02:03:52', '2020-06-05 02:03:52'),
(242, 2, 6, NULL, '2020-06-05 02:03:52', '2020-06-05 02:03:52'),
(243, 2, 7, NULL, '2020-06-05 02:03:52', '2020-06-05 02:03:52'),
(244, 2, 8, NULL, '2020-06-05 02:03:52', '2020-06-05 02:03:52'),
(245, 2, 9, NULL, '2020-06-05 02:03:52', '2020-06-05 02:03:52'),
(246, 2, 10, NULL, '2020-06-05 02:03:52', '2020-06-05 02:03:52'),
(247, 2, 11, NULL, '2020-06-05 02:03:52', '2020-06-05 02:03:52'),
(248, 2, 12, NULL, '2020-06-05 02:03:52', '2020-06-05 02:03:52'),
(249, 2, 13, NULL, '2020-06-05 02:03:52', '2020-06-05 02:03:52'),
(250, 2, 14, NULL, '2020-06-05 02:03:52', '2020-06-05 02:03:52'),
(251, 2, 15, NULL, '2020-06-05 02:03:52', '2020-06-05 02:03:52'),
(252, 2, 16, NULL, '2020-06-05 02:03:52', '2020-06-05 02:03:52'),
(253, 2, 17, NULL, '2020-06-05 02:03:52', '2020-06-05 02:03:52'),
(254, 2, 18, NULL, '2020-06-05 02:03:52', '2020-06-05 02:03:52'),
(255, 2, 19, NULL, '2020-06-05 02:03:52', '2020-06-05 02:03:52'),
(256, 2, 20, NULL, '2020-06-05 02:03:52', '2020-06-05 02:03:52'),
(257, 2, 21, NULL, '2020-06-05 02:03:52', '2020-06-05 02:03:52'),
(258, 2, 22, NULL, '2020-06-05 02:03:52', '2020-06-05 02:03:52'),
(259, 2, 23, NULL, '2020-06-05 02:03:52', '2020-06-05 02:03:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(255) NOT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `sex`, `phone`, `birthday`, `address`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$8MdwdiPC8B2BTgMMvmbecuNoumhYk1B.Axiv0n8M3zQRX4kQ90JjK', '0', 585842292, '1996-11-01', 'Hà Nội', 2, NULL, '2020-04-06 20:15:23', '2020-04-06 20:15:23'),
(3, 'vantoan', 'trantoanpro12b11@gmail.com', NULL, '$2y$10$EQnlC.PSbc0nlzE0hvJIh.UVMrvMT0W4xKrSyx95c6uZ7Dc6yFIa6', '1', 585842292, '1996-11-01', 'Hà Nội', 1, NULL, '2020-04-06 20:33:58', '2020-04-06 20:33:58'),
(4, 'admin1', 'admin1@gmail.com', NULL, '$2y$10$pqXFJw1w9k4vR5eI1KYm3uj.5ZURRTWGRPz9HLIhp94yhLd.QJjCq', '0', 585842292, '1996-11-01', 'Hà Nội', 2, NULL, '2020-04-07 02:44:14', '2020-04-07 02:44:14'),
(5, 'meothang', 'adminthang', NULL, '$2y$10$YU7R9Oe/0zaDxirXKVnPOOBgdou6gFySWyqtX.32U6KCkNuC/8p16', '0', 944126886, '1996-11-01', '78 văn chương', 3, NULL, '2020-04-11 06:45:58', '2020-04-11 06:45:58'),
(8, 'nvthang', 'nvthang@gmail.com', NULL, '$2y$10$VMQ8n4PNV7hs4kR8dRYSbO9uINLstY8/Qfzi6mfxt1dAhSRBPhPJi', '1', 944126876, '1996-11-01', '78 văn chương', 2, NULL, '2020-04-14 07:22:19', '2020-04-14 07:22:19'),
(11, 'Trần Thắng', 'Meothanglzd1@gmail.com', NULL, '$2y$10$BRwowVsGWalYKoweS1VJUO3xgr.a9qKlM5x8RrW4Qf5K1VF8DaG5q', '1', 907875, NULL, 'Bình Tú', NULL, 'UVoO5eJoNaGAurIZRhTA6iBEHmPELAAU7VhVYlDZaaU3GeszLWF18okHxG0P', '2020-05-20 23:38:42', '2020-05-20 23:38:42'),
(13, 'Thanh Abc', 'thanh6bb@gmail.com', NULL, '$2y$10$VFEyv1Zv.pjEWfTbY/wZiOhuzeXNf4nZ.54hEkXNgnJIYqi7evnpO', '0', 9935892, NULL, 'Thang Binh', NULL, NULL, '2020-05-20 23:43:37', '2020-05-20 23:43:37'),
(14, 'Linh Mai', 'mailinh6bb@gmail.com', NULL, '$2y$10$Iaw.p8vaWCx9k42akCrkmOGwAsvQHSnuX4HkGC2GAT/XwH78Vf/Gm', NULL, 9709706, NULL, 'Thăng Bình', NULL, 'YOCQJueo0EzWnwrPODyHg67YnJ6F1k21ZYhDoOoA8b37R8hadPjcBnkUIvtC', '2020-05-24 18:27:45', '2020-05-24 18:27:45'),
(15, 'abcddddd', 'abc123@gmail.com', NULL, '$2y$10$XoWqYb0FeSrvssHYMDZwH.PVZ2jlxKeNfJSOSORlSCirnMs81IxFi', NULL, 2143142, NULL, 'aaaaaaaaaaaa', NULL, 'jVQXzlebClSpWfdyG9dtRP0lR1nj3sQwp77Cx9DX', '2020-06-04 19:23:46', '2020-06-04 19:23:46');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_id`, `role_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(7, 11, 2, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD KEY `categories_cate_slug_index` (`cate_slug`),
  ADD KEY `categories_cate_status_index` (`cate_status`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_iduser_foreign` (`idUser`),
  ADD KEY `comment_idtintuc_foreign` (`idPro`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_pro_slug_index` (`pro_slug`),
  ADD KEY `products_pro_cate_id_index` (`pro_cate_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_ra_product_id_index` (`ra_product_id`),
  ADD KEY `ratings_ra_user_id_index` (`ra_user_id`);

--
-- Indexes for table `reply_comments`
--
ALTER TABLE `reply_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reply_comments_rep_user_id_index` (`rep_user_id`),
  ADD KEY `reply_comments_rep_article_id_index` (`rep_product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reply_comments`
--
ALTER TABLE `reply_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=260;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
