-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jun 2025 pada 03.25
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artventure`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `produk_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_13_211610_create_products_table', 1),
(5, '2024_06_12_201600_create_produks_table', 2),
(6, '2024_06_23_002912_create_carts_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `rec_address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'in progress',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `produk_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `name`, `rec_address`, `phone`, `status`, `user_id`, `produk_id`, `created_at`, `updated_at`) VALUES
(23, 'Unggul Widya Saputra', 'Jl Semeru Barat 6 no 1', '08971761666', 'in progress', 2, 37, '2025-06-04 18:06:45', '2025-06-04 18:06:45'),
(24, 'Unggul Widya Saputra', 'Jl Semeru Barat 6 no 1', '08971761666', 'in progress', 2, 31, '2025-06-04 18:17:09', '2025-06-04 18:17:09'),
(25, 'Unggul Widya Saputra', 'Jl Semeru Barat 6 no 1', '08971761666', 'in progress', 2, 34, '2025-06-04 18:17:09', '2025-06-04 18:17:09'),
(26, 'Unggul Widya Saputra', 'Jl Semeru Barat 6 no 1', '08971761666', 'in progress', 2, 32, '2025-06-04 18:47:51', '2025-06-04 18:47:51'),
(27, 'Unggul Widya Saputra', 'Jl Semeru Barat 6 no 1', '08971761666', 'in progress', 2, 35, '2025-06-04 18:52:10', '2025-06-04 18:52:10'),
(28, 'Unggul Widya Saputra', 'Jl Semeru Barat 6 no 1', '08971761666', 'in progress', 2, 38, '2025-06-04 18:56:48', '2025-06-04 18:56:48'),
(29, 'Unggul Widya Saputra', 'Jl Semeru Barat 6 no 1', '08971761666', 'in progress', 2, 30, '2025-06-04 18:59:05', '2025-06-04 18:59:05'),
(30, 'Unggul Widya Saputra', 'Jl Semeru Barat 6 no 1', '08971761666', 'in progress', 2, 28, '2025-06-04 19:10:53', '2025-06-04 19:10:53'),
(31, 'Unggul Widya Saputra', 'Jl Semeru Barat 6 no 1', '08971761666', 'On The Way', 2, 29, '2025-06-04 19:15:27', '2025-06-04 19:16:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('unggulwidyasaputra@gmail.com', '$2y$12$Rxr79UHnuSIWzE8zj2ITI.uvLjYLh4TCh0LgUufSVQpnR6dijPVlW', '2025-05-22 07:01:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `product_name`, `created_at`, `updated_at`) VALUES
(21, 'Paintings', '2025-05-20 10:32:48', '2025-05-20 10:32:48'),
(22, 'Sculptures', '2025-05-20 10:32:59', '2025-05-20 10:32:59'),
(23, 'Prints', '2025-05-20 10:33:21', '2025-05-20 10:33:21'),
(26, 'Photography', '2025-05-20 10:33:55', '2025-05-20 10:33:55'),
(28, 'Digital Art', '2025-05-20 10:34:25', '2025-05-20 10:34:25'),
(33, 'Mixed Media', '2025-06-04 09:20:16', '2025-06-04 09:20:16'),
(34, 'Illustrations', '2025-06-04 10:09:46', '2025-06-04 10:09:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produks`
--

CREATE TABLE `produks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produks`
--

INSERT INTO `produks` (`id`, `title`, `description`, `image`, `price`, `category`, `quantity`, `created_at`, `updated_at`) VALUES
(27, 'The Silent Port', 'An evocative oil painting capturing a desolate port at dawn, shrouded in mist. The muted colors and heavy brushstrokes convey a profound sense of solitude and calm before the day\'s activity.', '1749053799.png', '3200', 'Paintings', '1', '2025-06-04 09:16:39', '2025-06-04 09:16:50'),
(28, 'City of Neon Dreams', 'A vibrant digital painting depicting a futuristic cityscape bathed in the glow of neon lights and holographic advertisements. It\'s a dynamic blend of cyberpunk aesthetics and urban energy.', '1749053879.png', '950', 'Digital Art', '1', '2025-06-04 09:17:59', '2025-06-04 09:18:14'),
(29, 'Echoes of the Past', 'A striking mixed media piece combining vintage photographs, handwritten letters, and acrylic paint. It explores themes of memory, nostalgia, and the lingering presence of history.', '1749054060.png', '1500', 'Mixed Media', '1', '2025-06-04 09:21:00', '2025-06-04 09:21:15'),
(30, 'The Guardian of the Spire', 'A detailed pencil drawing of a fantastical creature, part gargoyle, part eagle, perched atop a gothic spire. The intricate linework and shading bring this mythical being to life.', '1749054170.png', '720', 'Illustrations', '1', '2025-06-04 09:22:50', '2025-06-04 10:10:11'),
(31, 'Serenity in Motion', 'A graceful ceramic sculpture depicting a figure in a fluid, balletic pose. The smooth, glazed finish enhances the sense of calm and movement.', '1749054288.png', '3100', 'Sculptures', '1', '2025-06-04 09:24:48', '2025-06-04 09:25:00'),
(32, 'Cosmic Bloom', 'A stunning abstract print featuring an explosion of colors and organic shapes, reminiscent of a supernova or a celestial garden. Perfect for adding a vibrant focal point.', '1749054349.png', '480', 'Prints', '1', '2025-06-04 09:25:49', '2025-06-04 09:26:00'),
(33, 'Urban Symphony', 'A monochrome photograph capturing the rhythmic patterns and towering structures of a bustling metropolis. The interplay of light and shadow highlights the city\'s unique architectural harmony.', '1749054424.png', '600', 'Photography', '1', '2025-06-04 09:27:04', '2025-06-04 10:51:44'),
(34, 'Ancestral Spirits', 'A powerful wood carving featuring intricate patterns and symbolic figures, inspired by ancient tribal art. The raw texture of the wood adds to its primal beauty.', '1749054503.png', '1900', 'Sculptures', '1', '2025-06-04 09:28:23', '2025-06-04 09:28:43'),
(35, 'Wood Carving', 'A powerful wood carving, seemingly ancient and weathered, showcasing intricate patterns and symbolic figures inspired by ancient tribal art.', '1749054836.png', '2100', 'Sculptures', '1', '2025-06-04 09:33:56', '2025-06-04 09:34:08'),
(36, 'Stardust Illustration', 'An enchanting illustration, rendered in soft pastels, depicts a whimsical figure with a gentle smile and long, auburn hair, crafting intricate constellations from stardust.', '1749054913.png', '680', 'Illustrations', '1', '2025-06-04 09:35:13', '2025-06-04 10:10:27'),
(37, 'Industrial Painting', 'A compelling acrylic painting capturing a gritty industrial landscape beneath a breathtaking, dramatic sky.', '1749054990.png', '1950', 'Paintings', '1', '2025-06-04 09:36:30', '2025-06-04 10:51:58'),
(38, 'Abstract Painting', 'A large-scale abstract painting characterized by bold textures, energetic lines, and a harmonious clash of primary colors, rendered in a dynamic and expressive style.', '1749055070.png', '3800', 'Paintings', '1', '2025-06-04 09:37:50', '2025-06-04 09:38:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('ASgNMelSywpMbjxAWDe4xjk8WmswGXjJTQyNYb0M', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTkdsdlBqOElPUThWYVdJdGt0ZmNhRk9aSGV5a2RiRXpnQ1VVU1hERSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1750263215);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', NULL, '$2y$12$tGf8G0rSAlE5WgEIOkPBs.LQlhiueYBP187kg9UtjQPFTusEbi98O', 'BGgM0Zmo1OEhPxzImgRkQJ8mFiUvfb5LLrB5qEcpm5D7WQGnNuThhxD6JeCJ', '2024-05-18 17:37:50', '2024-05-18 17:37:50'),
(2, 'Unggul Widya Saputra', 'unggulwidyasaputra@gmail.com', 'user', NULL, '$2y$12$9PziR2Mr4UrouaXx2IecxOYqvo0nJVl0hcEQjpmlUtp3sqpYLwb4a', NULL, '2025-05-29 05:31:38', '2025-05-29 05:31:38'),
(3, 'user1', 'user1@gmail.com', 'user', NULL, '$2y$12$h4viYk.5IICAtB97ujOUzu5MS4NuLGvUtwf56Wev4uXhpLpx4pp0q', NULL, '2025-05-29 05:35:53', '2025-05-29 05:35:53'),
(4, 'user2', 'user2@gmail.com', 'user', NULL, '$2y$12$pzkGTGdGx.Irh.gUKoBUBuhO/JJcEuJWsTIYa4s8N3YZj7rEQ7xmS', NULL, '2025-05-29 05:37:05', '2025-05-29 05:37:05'),
(5, 'user3', 'user3@gmail.com', 'user', NULL, '$2y$12$CjyLO1i4bKyqNQUh/Vd.vOuQ6OEy4eOfbv15w7HDgH7CnZvQr24cm', NULL, '2025-05-29 05:39:26', '2025-05-29 05:39:26'),
(6, 'user4', 'user4@gmail.com', 'user', NULL, '$2y$12$LlDMFRpAxnPlPVH.dF8qqO69J0NOVANsxY4ghumpMb6O7v50iU3T.', NULL, '2025-05-29 05:41:32', '2025-05-29 05:41:32'),
(7, 'user5', 'user5@gmail.com', 'user', NULL, '$2y$12$xMYtxmX.mLt8pmAn6aqCNuPGt6NP334kzAc5EKvniRkWqO9YXGO4u', NULL, '2025-05-29 05:42:13', '2025-05-29 05:42:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_produk_id_foreign` (`produk_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT untuk tabel `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_produk_id_foreign` FOREIGN KEY (`produk_id`) REFERENCES `produks` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
