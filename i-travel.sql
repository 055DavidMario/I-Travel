-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2022 pada 08.25
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i-travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hargas`
--

CREATE TABLE `hargas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `harga` double DEFAULT NULL,
  `promo` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `hargas`
--

INSERT INTO `hargas` (`id`, `harga`, `promo`, `created_at`, `updated_at`) VALUES
(1, 1500000, NULL, NULL, NULL),
(2, 1000000, NULL, NULL, NULL),
(3, 750000, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_19_081747_create_hargas_table', 1),
(6, '2022_12_19_081822_create_wisatas_table', 1),
(7, '2022_12_19_081904_create_transportasis_table', 1),
(8, '2022_12_19_081925_create_tikets_table', 1),
(9, '2022_12_19_081955_create_transaksis_table', 1),
(10, '2022_12_24_141339_create_reviews_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tikets`
--

CREATE TABLE `tikets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transportasi` bigint(20) UNSIGNED NOT NULL,
  `id_harga` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_destinasi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_tiket` date DEFAULT NULL,
  `waktu_perjalanan` time NOT NULL DEFAULT current_timestamp(),
  `transit` int(11) DEFAULT 0,
  `makan` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tikets`
--

INSERT INTO `tikets` (`id`, `id_transportasi`, `id_harga`, `nama_destinasi`, `tanggal_tiket`, `waktu_perjalanan`, `transit`, `makan`, `created_at`, `updated_at`) VALUES
(10000, 1, 2, 'Bali -> Jakarta', '2023-01-15', '01:45:00', 0, 0, NULL, NULL),
(10001, 1, 1, 'Bali -> Medan', '2023-01-15', '01:55:00', 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tiket` bigint(20) UNSIGNED NOT NULL,
  `id_harga` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_penumpang` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_penumpang` int(2) DEFAULT NULL,
  `no_hp` double DEFAULT NULL,
  `no_bayar` int(16) DEFAULT NULL,
  `total_harga` double DEFAULT NULL,
  `qr` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_transaksi` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportasis`
--

CREATE TABLE `transportasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_transportasi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transportasis`
--

INSERT INTO `transportasis` (`id`, `nama_transportasi`, `created_at`, `updated_at`) VALUES
(1, 'Pesawat', NULL, NULL),
(2, 'Bus', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user1', 'user1@gmail.com', NULL, '$2y$10$.xClzzzOYR40whOrpJcwiO27qnd1hq2DZv/23vs.UDgJgnutvnxTO', 'user', 'X5kt2DtBELKFRVD0UOvcUfKaKSFU5EObTJoIuGcqLjL0zw4WNFifcmEvw7d0', '2022-12-25 16:15:16', '2022-12-25 16:15:16'),
(3, 'admin1', 'admin1@gmail.com', NULL, '$2y$10$kMiBH/GT4UNCUQKkJfymp.JDFdBUh6I9fkMeTJhcvC1zr4ZR.Ab8u', 'admin', 'ErbqK0CuJcqdUQW4JfYBP1dFWO578DerPOIg6MMAK2GRS8w4fPPhkSjcNJTJ', '2022-12-25 19:29:18', '2022-12-25 19:29:18'),
(7, 'Komang Wibisana', 'wibisana2911@gmail.com', NULL, '$2y$10$7g28ptE8BFVYVfkzRTeZ1O7JKVlEfXYag822U3nC.ZqjAmJLgCq7.', 'admin', 'RPJcdHkr8qEWxy1E3X4L2x3UYkJxDcGD4blmK9x180BJHVWAzqw2EDcYIUea', '2022-12-26 23:22:41', '2022-12-26 23:22:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisatas`
--

CREATE TABLE `wisatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_wisata` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `wisatas`
--

INSERT INTO `wisatas` (`id`, `nama_wisata`, `gambar`, `deskripsi`, `lokasi`, `date`, `created_at`, `updated_at`) VALUES
(1000, 'Pantai Dreamland', 'Pantai Dreamland', 'Pantai Dreamland berada di Bukit Ungasan Desa Pecatu, dan masih berada di satu jalur untuk menuju ke', 'Bukit Ungasan Desa Pecatu, Bali', '2022-12-17', NULL, NULL),
(1001, 'Pantai Pandawa', 'Pantai Pandawa', 'Pantai Pandawa ini berlokasi di Kuta Selatan, Badung, Bali.', 'Kuta Selatan, Badung, Bali', '2022-12-17', NULL, NULL),
(1002, 'Garuda Wisnu Kencana', 'Garuda Wisnu Kencana', 'Taman Budaya Garuda Wisnu Kencana merupakan sebuah icon spesial untuk bali dan juga untuk Indonesia ', 'Badung, Bali', '2022-12-17', NULL, NULL),
(1003, 'dwhjqgdgagjkdajd', NULL, 'sfddadsfsae', 'dsadwera', '2022-12-21', '2022-12-29 22:39:15', '2022-12-29 22:39:15'),
(1004, 'hgjkhijkshfgheios', NULL, 'sfhiuhifhkahwkofkla', 'dsadwera', '2022-12-13', '2022-12-29 22:40:26', '2022-12-29 23:04:53');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `hargas`
--
ALTER TABLE `hargas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tikets`
--
ALTER TABLE `tikets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tiket_transportasi` (`id_transportasi`),
  ADD KEY `id_harga` (`id_harga`);

--
-- Indeks untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transaksi_tiket` (`id_tiket`),
  ADD KEY `fk_transaksi_harga` (`id_harga`),
  ADD KEY `fk_transaksi_user` (`id_user`);

--
-- Indeks untuk tabel `transportasis`
--
ALTER TABLE `transportasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `wisatas`
--
ALTER TABLE `wisatas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hargas`
--
ALTER TABLE `hargas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tikets`
--
ALTER TABLE `tikets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10002;

--
-- AUTO_INCREMENT untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transportasis`
--
ALTER TABLE `transportasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `wisatas`
--
ALTER TABLE `wisatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1010;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tikets`
--
ALTER TABLE `tikets`
  ADD CONSTRAINT `fk_tiket_transportasi` FOREIGN KEY (`id_transportasi`) REFERENCES `transportasis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tikets_ibfk_1` FOREIGN KEY (`id_harga`) REFERENCES `hargas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD CONSTRAINT `fk_transaksi_harga` FOREIGN KEY (`id_harga`) REFERENCES `hargas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_transaksi_tiket` FOREIGN KEY (`id_tiket`) REFERENCES `tikets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_transaksi_user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
