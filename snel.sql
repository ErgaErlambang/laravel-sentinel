-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Sep 2018 pada 21.40
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'DbOQLL2U5JkA6LQUgd4DDUmG7h7tNKBE', 1, NULL, '2018-08-29 20:33:20', '2018-08-29 20:33:20'),
(2, 2, 'BoXLJjJWnnW2jdCOLMU6AgZiWC3UnD3e', 1, NULL, '2018-08-29 20:35:20', '2018-08-29 20:35:20'),
(3, 3, '2lzXzH8UUC0qnN238hqS3nCDZVvGM5Vp', 1, NULL, '2018-08-29 20:37:14', '2018-08-29 20:37:14'),
(4, 4, 'qTM58CO0xJBxSGQfFEdXnsOS4tVQRDBY', 1, NULL, '2018-08-30 06:04:20', '2018-08-30 06:04:20'),
(5, 5, 'SvHoqI5NpMatvtt3XO49UGWmxrGWc1OZ', 1, NULL, '2018-08-30 06:05:24', '2018-08-30 06:05:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawans`
--

CREATE TABLE `karyawans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `karyawans`
--

INSERT INTO `karyawans` (`id`, `nama`, `alamat`, `phone`, `created_at`, `updated_at`) VALUES
(13, 'Dimas', 'Jl.yUWXHy4JHE', '+6289397494', '2018-09-02 12:19:01', '2018-09-02 12:19:01'),
(14, 'Budi', 'Jl.D9JyAjIIZq6R5', '+6244464062', '2018-09-02 12:19:01', '2018-09-02 12:19:01'),
(15, 'Reno', 'Jl.O79OtK8XNe', '+6286311781', '2018-09-02 12:19:01', '2018-09-02 12:19:01'),
(16, 'Vitra', 'Jl.EJYaRHacOY6ecm', '+6235036359', '2018-09-02 12:19:01', '2018-09-02 12:19:01'),
(17, 'Ajeng', 'Jl.BDfjUWQZuXGLljG', '+6230801096', '2018-09-02 12:19:01', '2018-09-02 12:19:01'),
(18, 'Bayu', 'Jl.N8LwQaPxq4GmEGH', '+6262480548', '2018-09-02 12:19:01', '2018-09-02 12:19:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_07_02_230147_migration_cartalyst_sentinel', 1),
(6, '2018_08_30_024448_Product', 1),
(12, '2018_08_30_095839_create_karyawans', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, 'ZsCL14vMR01hUhXsroPuRcUiCuQ1MKUL', '2018-08-29 20:42:49', '2018-08-29 20:42:49'),
(2, 1, 'VX6FPx38G1TzX9YcjD6gjRFUZptx9awJ', '2018-08-29 20:51:05', '2018-08-29 20:51:05'),
(12, 2, 'PzlAb0UgkE8jHbS80Hndq3R6H52VaU41', '2018-08-29 22:24:12', '2018-08-29 22:24:12'),
(14, 2, 'VqM4EXMNKoIymVs4S39NUJ9fujOikGS3', '2018-08-29 23:57:20', '2018-08-29 23:57:20'),
(19, 1, 'V9SBJSbZFANo6JrgWrKbO4fSIUTLbRtp', '2018-08-30 00:09:18', '2018-08-30 00:09:18'),
(20, 2, 'aFSSeU3r2s5UtQEwTXE9bKFYmu4srHad', '2018-08-30 00:22:15', '2018-08-30 00:22:15'),
(21, 1, 'wMf4PrHkdWBpTbv52xurAEDxjcKclH39', '2018-08-30 02:15:24', '2018-08-30 02:15:24'),
(24, 2, 'f4ercT5pTtPIGf7IxIo7dozwXnUxjgEp', '2018-08-30 03:12:17', '2018-08-30 03:12:17'),
(43, 1, 'FKxBpFtvKuftRBx0p4ObX6W5dXmePXJP', '2018-08-30 05:01:18', '2018-08-30 05:01:18'),
(54, 2, 'QAD2HCqtxTEmWBgRpaQ0ouJhhRiHeRnr', '2018-08-30 06:14:54', '2018-08-30 06:14:54'),
(56, 3, 'FaETsueHu21HPmDdv6l1O4Pe8rhxIm6p', '2018-09-02 11:45:25', '2018-09-02 11:45:25'),
(57, 3, 'N6MUASl19woKWcRfgPYCTVjNSvZkQexZ', '2018-09-02 12:08:01', '2018-09-02 12:08:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `created_at`, `updated_at`) VALUES
(1, 'OOPs', 'Object Oriented Programming in PHP is faster and easier to execute.Object oriented programming (OOP) was first introduced in php4. Only few features of OOP were available in php4. Advance features and major concept of the object oriented programming in PHP is introduced from version 5 which is commonly known as php5.', NULL, NULL),
(2, 'Class', 'Class : Basic concept of class was introduced from php4 which is the main piller of oop but complete features of class is introduced in php5 such as access modifier or interface. There are almost same basic architecture between php4 and php5 except use of visibility, we will define visibility in php classes in depth It is very easy to define class in PHP. Classes are simply defined by using class keyword in PHP.', NULL, NULL),
(3, 'Object', 'Classes are nothing without objects. Object is a instance of class. Objects of class can be created by using new keyword Note — PHP OOP allows objects to point out themselves using $this. You can use $this while working within a method but if you are working outside of class then you would use the object name. $object= new myClass(); You can also create multiple object for a class. The process of creating an object is also known as instantiation. Class and object', NULL, NULL),
(4, 'Concept of Abstraction in PHP', 'Concept of Abstraction in PHP Concept of Abstraction in PHP is important php oop (object oriented programming) concept. To show the needed/relevant information or details without showing all information which is not necessary is called abstraction. Abstraction focus only what the object does instead of how. Concept of Abstraction in PHP', NULL, NULL),
(5, 'Concept of Encapsulation in PHP', 'Encapsulation is an OOP (Object Oriented Programming) concept in PHP. Wrapping some data in single unit is called Encapsulation. Encapsulation is used to safe data or information in an object from other it means encapsulation is mainly used for protection purpose.In technology era, it is essential to maintain your privacy so for security we are making private method sometime.Private method means it can be accessed withing same class.Concept of Encapsulation in PHP', NULL, NULL),
(6, 'Visibility in PHP Classes', 'Encapsulation is an OOP (Object Oriented Programming) concept in PHP. Wrapping some data in single unit is called Encapsulation. Encapsulation is used to safe data or information in an object from other it means encapsulation is mainly used for protection purpose. In technology era, it is essential to Public Visibility in PHP OOP : If we set any method as public then it means it can be accessible from anywhere either from inside the class, outside the class and in child class.There are no any limitation for public accessors . Visibility in PHP Classes', NULL, NULL),
(7, 'Inheritance in PHP', 'Inheritance is the php oops concept which is based around the concept of base classes or superclasses and derived classes or subclasses. Base classes or Super Classes are also known as parent classes and similarly, derived classes or subclasses are known as child classes. Inheritance in PHP', NULL, NULL),
(8, 'custom facade', 'Benefits of creating custom facade in Laravel 5.2 is it that you don\'t have to write same function again and again, to avoid repetition you can create a helper class or can say facade class. Facades basically provide a static interface to a class that give access to an object from the service container. custom facade', NULL, NULL),
(9, 'remove duplicate values', 'array_unique() function are used to remove duplicate data from given array. Now question is what value will be removed if there are two or more array values are same, in that scenario it will keep first appearance value in array and removed others. remove duplicate values', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', NULL, NULL, NULL),
(2, 'manager', 'Manager', NULL, NULL, NULL),
(3, 'visitor', 'Visitor', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-08-29 20:33:20', '2018-08-29 20:33:20'),
(2, 2, '2018-08-29 20:35:20', '2018-08-29 20:35:20'),
(3, 3, '2018-08-29 20:37:14', '2018-08-29 20:37:14'),
(4, 3, '2018-08-30 06:04:21', '2018-08-30 06:04:21'),
(5, 3, '2018-08-30 06:05:24', '2018-08-30 06:05:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2018-08-29 23:54:36', '2018-08-29 23:54:36'),
(2, NULL, 'ip', '127.0.0.1', '2018-08-29 23:54:36', '2018-08-29 23:54:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `location`, `created_at`, `updated_at`) VALUES
(1, 'admin@mail.com', '$2y$10$pFdBBxZZQlolrM5wln9Hn.p2VrH4/jDnlvwx88yzaDVrPfQwOGqlK', NULL, '2018-09-02 11:34:01', 'Admin', 'Tes', 'Bandung', '2018-08-29 20:33:20', '2018-09-02 11:34:01'),
(2, 'manager@mail.com', '$2y$10$Av0c.12EwbjqseihI2vJ5uAlqAYuD2guA6DOjxYVeXr.gTY/UzShG', NULL, '2018-08-30 06:14:54', 'manager', 'test', 'Jakarta', '2018-08-29 20:35:20', '2018-08-30 06:14:54'),
(3, 'visitor@mail.com', '$2y$10$3JSL0Ce2SYbPhoZo5imRFu1ftK1qHMqNbXcDXLrPiT5EdT9IKx/mW', NULL, '2018-09-02 12:08:01', 'Visitor', ' Test', 'Surabaya', '2018-08-29 20:37:14', '2018-09-02 12:08:01'),
(5, 'test@visitor', '$2y$10$0sXgS5qfPC5DUWfZn6jNnOsK4OwABjUr8maMcyk7/gdwsncZQwAbC', NULL, '2018-08-30 06:05:58', 'test', 'visitor', 'bandung', '2018-08-30 06:05:24', '2018-08-30 06:05:58');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karyawans`
--
ALTER TABLE `karyawans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indeks untuk tabel `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indeks untuk tabel `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indeks untuk tabel `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `karyawans`
--
ALTER TABLE `karyawans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
