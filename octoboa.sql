-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 03:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `octoboa`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `tag_id` varchar(255) NOT NULL,
  `title_arabic` varchar(255) NOT NULL,
  `title_english` varchar(255) DEFAULT NULL,
  `slug_arabic` varchar(255) NOT NULL,
  `slug_english` varchar(255) DEFAULT NULL,
  `short_description_arabic` text DEFAULT NULL,
  `short_description_english` text DEFAULT NULL,
  `long_description_arabic` longtext DEFAULT NULL,
  `long_description_english` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `category_id`, `tag_id`, `title_arabic`, `title_english`, `slug_arabic`, `slug_english`, `short_description_arabic`, `short_description_english`, `long_description_arabic`, `long_description_english`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '15', '2', 'المجال للعمل', 'Test work', 'المجال-للعمل', 'test-work', 'المجال للعمل', 'Test work', 'المجال للعمل', 'Test work', 'blog-images/bi4hpM4VFCODOG9XsRtrDZ0OkIMVcL0EJKEBSiEa.jpg', 1, '2023-11-20 09:33:16', '2023-11-20 09:34:24');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_arabic` varchar(255) NOT NULL,
  `name_english` varchar(255) DEFAULT NULL,
  `slug_arabic` varchar(255) NOT NULL,
  `slug_english` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_arabic`, `name_english`, `slug_arabic`, `slug_english`, `status`, `created_at`, `updated_at`) VALUES
(15, 'رجل', 'toy', 'رجل', 'toy', 1, '2023-10-30 11:11:17', '2023-11-17 23:23:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_arabic` varchar(255) NOT NULL,
  `title_english` varchar(255) DEFAULT NULL,
  `description_arabic` text NOT NULL,
  `description_english` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title_arabic`, `title_english`, `description_arabic`, `description_english`, `status`, `created_at`, `updated_at`) VALUES
(1, 'المجال للعمل', 'Field to work ?', 'Test work', 'المجال للعمل', 0, '2023-11-19 09:34:39', '2023-11-19 09:34:45');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_10_28_132707_create_services_table', 2),
(7, '2023_10_28_132724_create_blogs_table', 2),
(8, '2023_10_28_132747_create_teams_table', 2),
(9, '2023_10_28_132805_create_product_tags_table', 2),
(10, '2023_10_28_132815_create_categories_table', 2),
(11, '2023_10_28_132651_create_faqs_table', 3),
(12, '2023_11_19_154044_create_tags_table', 4),
(13, '2023_11_19_155700_create_sliders_table', 5),
(14, '2023_11_27_145910_create_portfolios_table', 6),
(15, '2023_11_27_152249_create_testimonials_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_arabic` varchar(255) NOT NULL,
  `name_english` varchar(255) DEFAULT NULL,
  `slug_arabic` varchar(255) NOT NULL,
  `slug_english` varchar(255) DEFAULT NULL,
  `description_arabic` text DEFAULT NULL,
  `description_english` text DEFAULT NULL,
  `cover_image` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `name_arabic`, `name_english`, `slug_arabic`, `slug_english`, `description_arabic`, `description_english`, `cover_image`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'يشاهد', 'Anik', 'يشاهد', 'anik', 'يشاهد قماش', 'good to see', 'portfolio-cover-images/mQZCCqSvX1YdQThyaBHNUL7MHTKcgDzEwudmhiyN.jpg', 'portfolio-images/oOtxNqjLuzApZU8HygtVfgZkXN6kaM3PEc70eQzT.jpg', 0, '2023-11-27 09:13:59', '2023-11-27 09:18:05');

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE `product_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_arabic` varchar(255) NOT NULL,
  `name_english` varchar(255) DEFAULT NULL,
  `slug_arabic` varchar(255) NOT NULL,
  `slug_english` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_arabic` varchar(255) NOT NULL,
  `title_english` varchar(255) DEFAULT NULL,
  `slug_arabic` varchar(255) NOT NULL,
  `slug_english` varchar(255) DEFAULT NULL,
  `short_description_arabic` text DEFAULT NULL,
  `short_description_english` text DEFAULT NULL,
  `long_description_arabic` longtext DEFAULT NULL,
  `long_description_english` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title_arabic`, `title_english`, `slug_arabic`, `slug_english`, `short_description_arabic`, `short_description_english`, `long_description_arabic`, `long_description_english`, `image`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(4, 'المجال-للعمل', 'Fild work', 'المجال-للعمل', 'fild-work', 'المجال للعمل', 'Field to', 'المجال للعمل', 'Field to work', 'service-images/pAvjX4Br4yLmsF4iy6oN41FagWdCY1n7z05dCe39.jpg', 'service-logos/w4ZemRBpaRnkKyOe3MUzplEbokwQuLg6v1fK4uts.jpg', 0, '2023-11-18 08:18:23', '2023-11-20 09:03:31');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title_arabic` varchar(255) NOT NULL,
  `title_english` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_name_arabic` varchar(255) NOT NULL,
  `tag_name_english` varchar(255) DEFAULT NULL,
  `slug_tag_arabic` varchar(255) NOT NULL,
  `slug_tag_english` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name_arabic`, `tag_name_english`, `slug_tag_arabic`, `slug_tag_english`, `status`, `created_at`, `updated_at`) VALUES
(2, 'يشاهد قماش', 'Ball', 'يشاهد-قماش', 'ball', 1, '2023-11-20 09:02:24', '2023-11-20 09:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_arabic` varchar(255) NOT NULL,
  `name_english` varchar(255) DEFAULT NULL,
  `slug_arabic` varchar(255) NOT NULL,
  `slug_english` varchar(255) DEFAULT NULL,
  `designation_arabic` varchar(255) DEFAULT NULL,
  `designation_english` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name_arabic`, `name_english`, `slug_arabic`, `slug_english`, `designation_arabic`, `designation_english`, `facebook`, `twitter`, `linkedin`, `email`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'يشاهد قماش', 'Anik', 'يشاهد-قماش', 'anik', 'مطور ويب', 'Web Developer', 'https://www.facebook.com/anikul.islam.binju', NULL, NULL, NULL, 'team-images/gTmReysGNUyb1HQABaapuhP5KKt94dpKgvdHDUTk.jpg', 1, '2023-11-03 20:37:40', '2023-11-03 20:37:40'),
(5, 'يشاهد قماش', 'Manna', 'يشاهد-قماش', 'manna', 'ر ويب', 'Laravel Developer', 'https://www.facebook.com/manna', NULL, NULL, NULL, 'team-images/dtvNczDpvehRew7gvuJNC3Lq201ckEyPaRfV7lrI.jpg', 1, '2023-11-03 21:14:13', '2023-11-03 21:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_arabic` varchar(255) NOT NULL,
  `name_english` varchar(255) DEFAULT NULL,
  `slug_arabic` varchar(255) DEFAULT NULL,
  `designation_arabic` varchar(255) DEFAULT NULL,
  `designation_english` varchar(255) DEFAULT NULL,
  `slug_english` varchar(255) DEFAULT NULL,
  `description_arabic` text DEFAULT NULL,
  `description_english` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name_arabic`, `name_english`, `slug_arabic`, `designation_arabic`, `designation_english`, `slug_english`, `description_arabic`, `description_english`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'يشاهد', 'watch', 'يشاهد', 'مطور ويب', 'Laravel Developer', 'watch', 'يشاهد', 'ok', 'testimonial-images/VRYV4TKVmZiHyLhnrYAXYLuHgSKcbvcX6wSV0AOg.jpg', 0, '2023-11-27 09:30:17', '2023-11-27 09:30:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '01905256528', '1', '$2y$10$lICcHZy4.lA0XlrQOP6I6uJW4Yziut9oPpR1v77FibQfIGVkO95fC', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_tags`
--
ALTER TABLE `product_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
