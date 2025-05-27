-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2025 pada 06.36
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectpespustkaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `photo` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `publisher`, `year`, `stock`, `photo`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Tempora deserunt debitis expedita eveniet.', 'Miss Magdalen Terry', 'Wunsch, Hayes and Flatley', '2020', 2, NULL, 'Inventore inventore alias temporibus non. Cum laborum quia deserunt sunt omnis. Dicta voluptates corrupti neque expedita vel aspernatur.', '2025-05-06 22:50:13', '2025-05-15 20:17:26'),
(5, 'Suscipit ipsum magnam.', 'Mrs. Lavonne Harber', 'Bergstrom and Sons', '1995', 5, NULL, 'A illo voluptatibus temporibus fugit accusantium excepturi et unde. Autem non architecto sapiente. Harum doloremque quas ratione animi earum porro officia qui.', '2025-05-06 22:50:13', '2025-05-08 10:45:03'),
(6, 'Quia ab maiores qui.', 'Jason O\'Keefe III', 'Quigley, Kessler and Ritchie', '1989', 5, NULL, 'Et repellendus officia aut maiores. Eos debitis ullam omnis non occaecati architecto. Deserunt odit incidunt at sed veritatis et. Omnis porro et dolores eligendi impedit saepe. In et earum qui dignissimos fuga.', '2025-05-06 22:50:13', '2025-05-06 22:50:13'),
(7, 'Alias voluptatem quaerat.', 'Salvador Gulgowski', 'Ziemann-Botsford', '1997', 9, NULL, 'In enim nam quis rem est delectus. Aut suscipit delectus earum id aut recusandae corrupti earum. Culpa quo laudantium ipsa est sit. Perspiciatis voluptas amet ducimus incidunt dolorem reprehenderit hic.', '2025-05-06 22:50:13', '2025-05-06 22:50:13'),
(8, 'Qui eaque laborum expedita.', 'Prof. Thora Upton', 'Stark-Braun', '2002', 8, NULL, 'Dolor iste totam delectus amet. Dolores perspiciatis et labore explicabo rerum. Omnis fugit nostrum sunt eius est iste architecto. Quo est ab ad aut.', '2025-05-06 22:50:13', '2025-05-06 22:50:13'),
(9, 'Consequatur aut possimus.', 'Prof. Yadira O\'Hara MD', 'Friesen, Towne and Schowalter', '1997', 1, NULL, 'Repellat doloribus autem voluptatem omnis. Sit in ipsam architecto minima. Est sint accusantium iste commodi adipisci fugiat.', '2025-05-06 22:50:13', '2025-05-06 22:50:13'),
(10, 'Accusamus ea odit.', 'Mona Bashirian MD', 'Johnston, Abshire and Franecki', '1970', 7, NULL, 'Quis sit quidem eveniet illum. Sit facilis recusandae odio. Minus incidunt iusto iste molestiae ullam excepturi.', '2025-05-06 22:50:13', '2025-05-06 22:50:13'),
(11, 'Repellat et porro alias.', 'Major Miller', 'Reichert, Runolfsson and Klocko', '1973', 3, NULL, 'Voluptas ut excepturi hic. Minus repellendus numquam at at. Fugiat minus veniam ut ut sint voluptatem. Animi fugit consequatur officiis itaque. Aut nihil vel nulla itaque tenetur veniam.', '2025-05-06 22:50:13', '2025-05-06 22:50:13'),
(12, 'Et sunt iusto in.', 'Ms. Savanna Gislason', 'Sanford and Sons', '1991', 10, NULL, 'Aut dignissimos saepe neque et nostrum. Tempora vitae magni tempora reprehenderit vel dolorem occaecati. Nihil quis non doloribus. Numquam eum ipsam non odit ratione sint deleniti.', '2025-05-06 22:50:13', '2025-05-06 22:50:13'),
(13, 'Modi fugiat omnis ex.', 'Miss Lavinia Kulas Jr.', 'Welch, Oberbrunner and O\'Reilly', '1982', 3, NULL, 'Est excepturi distinctio recusandae provident quisquam non aut dolores. Facilis et molestias impedit molestias. Animi quasi cupiditate reiciendis id ea.', '2025-05-06 22:50:13', '2025-05-06 22:50:13'),
(14, 'Voluptatem laboriosam occaecati.', 'Alison Spinka', 'Roberts, Nikolaus and Carter', '1996', 1, NULL, 'Quibusdam molestiae ea et aliquam quidem velit. Atque autem quam architecto sit provident asperiores sunt sit. Voluptate et ipsam ullam praesentium illum fugit. Dolorum dolorem consequatur exercitationem aut.', '2025-05-06 22:50:13', '2025-05-06 22:50:13'),
(15, 'Ullam laudantium velit.', 'Mr. Myron Marquardt', 'Carter Ltd', '2017', 2, NULL, 'Ut quos non aliquam nesciunt cumque. Quis dolores quibusdam inventore voluptates reprehenderit officiis assumenda. Incidunt ad necessitatibus harum.', '2025-05-06 22:50:13', '2025-05-06 22:50:13'),
(16, 'Enim est non suscipit.', 'Linnie Bernhard', 'Kub, Sawayn and Gutkowski', '1989', 5, NULL, 'Quod odit sit fugiat ipsa. Enim dolor numquam laboriosam sed aperiam. Est sint odio tempora perferendis deleniti aut minima. Cumque dolores impedit accusantium. Sunt ut voluptatum necessitatibus qui asperiores recusandae sint necessitatibus.', '2025-05-06 22:50:13', '2025-05-06 22:50:13'),
(17, 'Asperiores est saepe.', 'Emelie Glover', 'Macejkovic-Rempel', '1971', 2, NULL, 'Et inventore illo animi iste. Enim est nihil quia quis. Velit aut et et fugit expedita in minus ducimus. Voluptatem autem fuga est.', '2025-05-06 22:50:13', '2025-05-06 22:50:13'),
(18, 'Ut error.', 'Scarlett Shields I', 'Turcotte, Mitchell and Medhurst', '1970', 8, NULL, 'Rerum vel ex magnam quis qui alias. Culpa sint sint accusantium. Nostrum eligendi atque ratione. Eos magni consequatur vel ipsa dolore.', '2025-05-06 22:50:13', '2025-05-06 22:50:13'),
(19, 'Consectetur neque eos.', 'Kendrick Harvey', 'Bradtke-Boyle', '1991', 5, NULL, 'Rerum omnis optio nihil corporis qui voluptas reprehenderit fugit. Voluptatem veniam suscipit dolores molestiae repellat consectetur. Delectus libero omnis dicta.', '2025-05-06 22:50:13', '2025-05-06 22:50:13'),
(20, 'Earum ex harum.', 'Dr. Catharine Roberts I', 'Olson-Stamm', '1994', 10, NULL, 'Facilis neque dolore aspernatur perspiciatis molestiae aliquid qui. Sint cupiditate corrupti error sapiente. Placeat quod eos dolor atque quia tempora.', '2025-05-06 22:50:13', '2025-05-06 22:50:13'),
(21, 'CEO KOPLAK!', 'Edi Akhiles', 'Laksana', '2013', 3, NULL, NULL, '2025-05-08 10:46:38', '2025-05-08 10:46:38'),
(22, 'Surat Cinta yang Tak Pernah Terkirim', 'Edelweis Almira', 'Zettu', '2015', 1, NULL, NULL, '2025-05-15 18:04:59', '2025-05-15 18:04:59'),
(23, 'Bulan terbelah di langit amerika', 'komikus rif\'am', 'zutto', '2015', 5, NULL, NULL, '2025-05-15 19:49:02', '2025-05-15 19:49:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `borrowings`
--

CREATE TABLE `borrowings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `borrowed_at` date NOT NULL,
  `returned_at` date DEFAULT NULL,
  `status` enum('dipinjam','dikembalikan') NOT NULL DEFAULT 'dipinjam',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `borrowings`
--

INSERT INTO `borrowings` (`id`, `user_id`, `book_id`, `borrowed_at`, `returned_at`, `status`, `created_at`, `updated_at`) VALUES
(2, 17, 17, '2025-04-11', '2025-04-29', 'dipinjam', '2025-05-06 22:50:13', '2025-05-06 22:50:13'),
(4, 18, 13, '2025-04-09', NULL, 'dipinjam', '2025-05-06 22:50:13', '2025-05-06 22:50:13'),
(8, 18, 5, '2025-04-20', '2025-05-02', 'dipinjam', '2025-05-06 22:50:13', '2025-05-06 22:50:13'),
(12, 13, 7, '2025-04-23', '2025-05-06', 'dikembalikan', '2025-05-06 22:50:13', '2025-05-06 22:50:13'),
(15, 13, 18, '2025-04-23', '2025-04-27', 'dikembalikan', '2025-05-06 22:50:13', '2025-05-06 22:50:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_sadas@gmail.com|127.0.0.1', 'i:1;', 1747965175),
('laravel_cache_sadas@gmail.com|127.0.0.1:timer', 'i:1747965175;', 1747965175),
('laravel_cache_spatie.permission.cache', 'a:3:{s:5:\"alias\";a:0:{}s:11:\"permissions\";a:0:{}s:5:\"roles\";a:0:{}}', 1747445494);

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
-- Struktur dari tabel `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `phone`, `address`, `status`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'johndoe@example.com', '081234567890', 'Jl. Mawar No. 123, Jakarta', 'active', '2025-05-07 06:57:02', '2025-05-07 06:57:02'),
(2, 'Jane Smith', 'janesmith@example.com', '081298765432', 'Jl. Melati No. 45, Bandung', 'inactive', '2025-05-07 06:57:02', '2025-05-07 06:57:02'),
(3, 'Robert Brown', 'robertbrown@example.com', '081223344556', 'Jl. Kenanga No. 67, Surabaya', 'active', '2025-05-07 06:57:02', '2025-05-07 06:57:02'),
(4, 'Abdul Aziz', 'abdul.azis2004.aa@gmail.com', '88218830417', 'Kalijati, subang', 'active', '2025-05-15 18:37:16', '2025-05-15 18:40:49');

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
(4, '2022_05_01_1732034_create_books_table', 1),
(5, '2022_05_02_183456_create_reports_table', 1),
(6, '2023_05_01_123456_create_borrowings_table', 1),
(7, '2024_05_01_000000_create_members_table', 1),
(8, '2025_04_27_183651_add_photo_to_books_and_users', 1),
(9, '2025_05_01_171755_create_permission_tables', 1),
(10, '2025_05_01_172032_add_role_to_users_table', 1),
(11, '2025_05_08_065546_create_visits_table', 2),
(12, '2025_05_08_070632_add_visit_date_to_visits_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `type` enum('peminjaman','pengembalian','anggota','lainnya') NOT NULL DEFAULT 'lainnya',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `reports`
--

INSERT INTO `reports` (`id`, `title`, `content`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Laporan 1', 'Isi laporan nomor 1', 'peminjaman', '2025-02-26 22:50:13', '2025-05-06 22:50:13'),
(2, 'Laporan 2', 'Isi laporan nomor 2', 'peminjaman', '2024-12-16 22:50:13', '2025-05-06 22:50:13'),
(3, 'Laporan 3', 'Isi laporan nomor 3', 'pengembalian', '2024-12-25 22:50:13', '2025-05-06 22:50:13'),
(4, 'Laporan 4', 'Isi laporan nomor 4', 'peminjaman', '2024-12-27 22:50:13', '2025-05-06 22:50:13'),
(5, 'Laporan 5', 'Isi laporan nomor 5', 'anggota', '2024-11-22 22:50:13', '2025-05-06 22:50:13'),
(6, 'Laporan 6', 'Isi laporan nomor 6', 'pengembalian', '2024-12-03 22:50:13', '2025-05-06 22:50:13'),
(7, 'Laporan 7', 'Isi laporan nomor 7', 'anggota', '2025-05-02 22:50:13', '2025-05-06 22:50:13'),
(8, 'Laporan 8', 'Isi laporan nomor 8', 'anggota', '2025-04-06 22:50:13', '2025-05-06 22:50:13'),
(9, 'Laporan 9', 'Isi laporan nomor 9', 'pengembalian', '2025-03-11 22:50:13', '2025-05-06 22:50:13'),
(10, 'Laporan 10', 'Isi laporan nomor 10', 'anggota', '2025-04-28 22:50:13', '2025-05-06 22:50:13'),
(11, 'Laporan 11', 'Isi laporan nomor 11', 'anggota', '2024-11-19 22:50:13', '2025-05-06 22:50:13'),
(12, 'Laporan 12', 'Isi laporan nomor 12', 'anggota', '2025-04-02 22:50:13', '2025-05-06 22:50:13'),
(13, 'Laporan 13', 'Isi laporan nomor 13', 'anggota', '2025-01-10 22:50:13', '2025-05-06 22:50:13'),
(14, 'Laporan 14', 'Isi laporan nomor 14', 'pengembalian', '2025-02-20 22:50:13', '2025-05-06 22:50:13'),
(15, 'Laporan 15', 'Isi laporan nomor 15', 'anggota', '2024-12-05 22:50:13', '2025-05-06 22:50:13'),
(16, 'Laporan 16', 'Isi laporan nomor 16', 'pengembalian', '2024-11-13 22:50:13', '2025-05-06 22:50:13'),
(17, 'Laporan 17', 'Isi laporan nomor 17', 'pengembalian', '2025-04-01 22:50:13', '2025-05-06 22:50:13'),
(18, 'Laporan 18', 'Isi laporan nomor 18', 'pengembalian', '2025-04-08 22:50:13', '2025-05-06 22:50:13'),
(19, 'Laporan 19', 'Isi laporan nomor 19', 'peminjaman', '2025-05-02 22:50:13', '2025-05-06 22:50:13'),
(20, 'Laporan 20', 'Isi laporan nomor 20', 'pengembalian', '2025-02-04 22:50:13', '2025-05-06 22:50:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('bxN9tN0WaS9kzrEi6yzOfCdmzJ4SYJmX7TKiBWRb', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiaVFVMFBtM294NDZHRlNKV3NpYmU1ZnBESVNXWDR0ZWg1VDNEbHpMSCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1748226181),
('HOlw2jdMJT4MdyW6GBN5g7dgyL9xIw8RfB0J7Ipm', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieVE5MExQSHVNWHg5WXhmejJDWm13R1p6RHNZSHpweENtMGhRVHhUbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1748249044),
('lUhha7rvxh7X5NKDTqRviuyPvJMwdKKGsZ4qcy9i', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicWdwSE1yQXdHRFdUS1ZOZ1Y0V2UxSWtkazdQV3pnQ3FCVzhLRG9wTyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1748314728),
('Pc7swhfFgseJ2atbrdMvAPpWbsuVpLOckWB5qauX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUDQxNGxTQUJqT2FvZjdFOVlPeFlXRnVMMnZJVVYxckFIVmZmUzNZSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1748226239),
('v6HKv1Xu0xxPWRm9nKrxDRSWOLCtFqYAxxCGBEar', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMUZId0xoR1lJVGNBUHFkRWpPZER4dkNIdDVpRzRJQ0JLWTVMcUE5OCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1748226298);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `photo`, `role`) VALUES
(1, 'Noel Bode', 'tommie07@example.com', '2025-05-06 22:50:12', '$2y$12$hUqm6u0BnTw8BEm/7aH/LuZLUKBYK3DjPQ9Lcpsbz1RZZj6KMyjCS', 'X93wkBnOiP', '2025-05-06 22:50:12', '2025-05-06 22:50:12', NULL, 'user'),
(2, 'Conor Schmidt', 'ernesto.deckow@example.net', '2025-05-06 22:50:12', '$2y$12$hUqm6u0BnTw8BEm/7aH/LuZLUKBYK3DjPQ9Lcpsbz1RZZj6KMyjCS', 'NYc3Nt7YOx', '2025-05-06 22:50:12', '2025-05-06 22:50:12', NULL, 'user'),
(3, 'Jazmyn Marvin', 'twila29@example.com', '2025-05-06 22:50:12', '$2y$12$hUqm6u0BnTw8BEm/7aH/LuZLUKBYK3DjPQ9Lcpsbz1RZZj6KMyjCS', 'I84v6nX10F', '2025-05-06 22:50:12', '2025-05-06 22:50:12', NULL, 'user'),
(4, 'Janiya Reilly', 'ynikolaus@example.org', '2025-05-06 22:50:12', '$2y$12$hUqm6u0BnTw8BEm/7aH/LuZLUKBYK3DjPQ9Lcpsbz1RZZj6KMyjCS', 'u48UzjvHc9', '2025-05-06 22:50:12', '2025-05-06 22:50:12', NULL, 'user'),
(5, 'Mrs. Kaylie Conn II', 'raphaelle.bahringer@example.org', '2025-05-06 22:50:12', '$2y$12$hUqm6u0BnTw8BEm/7aH/LuZLUKBYK3DjPQ9Lcpsbz1RZZj6KMyjCS', '9vYltc09tE', '2025-05-06 22:50:12', '2025-05-06 22:50:12', NULL, 'user'),
(6, 'Grant Ratke', 'muhammad.kris@example.org', '2025-05-06 22:50:12', '$2y$12$hUqm6u0BnTw8BEm/7aH/LuZLUKBYK3DjPQ9Lcpsbz1RZZj6KMyjCS', 'D9AYt74PsN', '2025-05-06 22:50:12', '2025-05-06 22:50:12', NULL, 'user'),
(7, 'Verlie Kuhic', 'adolfo.wilderman@example.org', '2025-05-06 22:50:12', '$2y$12$hUqm6u0BnTw8BEm/7aH/LuZLUKBYK3DjPQ9Lcpsbz1RZZj6KMyjCS', 'SzSSwTO3DY', '2025-05-06 22:50:12', '2025-05-06 22:50:12', NULL, 'user'),
(8, 'Brandt Halvorson', 'gulgowski.berenice@example.org', '2025-05-06 22:50:12', '$2y$12$hUqm6u0BnTw8BEm/7aH/LuZLUKBYK3DjPQ9Lcpsbz1RZZj6KMyjCS', '2erSNClWUr', '2025-05-06 22:50:12', '2025-05-06 22:50:12', NULL, 'user'),
(9, 'Melisa Barrows PhD', 'avery.hammes@example.com', '2025-05-06 22:50:12', '$2y$12$hUqm6u0BnTw8BEm/7aH/LuZLUKBYK3DjPQ9Lcpsbz1RZZj6KMyjCS', '7VCFWWhckc', '2025-05-06 22:50:12', '2025-05-06 22:50:12', NULL, 'user'),
(10, 'Giles Effertz', 'mayer.darien@example.com', '2025-05-06 22:50:12', '$2y$12$hUqm6u0BnTw8BEm/7aH/LuZLUKBYK3DjPQ9Lcpsbz1RZZj6KMyjCS', 'e8o5PJAu3I', '2025-05-06 22:50:12', '2025-05-06 22:50:12', NULL, 'user'),
(11, 'Admin', 'admin@perpustakaan.com', NULL, '$2y$12$XNCEJLelSgLzlkE8pUy.cu0Nisuy.C0mJAzNhGo6LpaowVVgUglPe', NULL, '2025-05-06 22:50:13', '2025-05-06 22:50:13', NULL, 'admin'),
(12, 'Petugas', 'petugas@perpustakaan.com', NULL, '$2y$12$9wNBPGp/yLr0NX3co9aOpuNTYz.E60t4v8p4Z9rHQ/w4qjcVc8XfG', NULL, '2025-05-06 22:50:13', '2025-05-06 22:50:13', NULL, 'petugas'),
(13, 'Anggota', 'anggota@perpustakaan.com', '2025-05-22 19:50:03', '$2y$12$AHN1Cx7.edPNYRCIZSv3aesoY.yMRwEdKve8m/zjjzf.BBTalnDwK', NULL, '2025-05-06 22:50:13', '2025-05-22 19:50:03', NULL, 'anggota'),
(16, 'Dr. Kyle Schinner Sr.', 'margret.grimes@example.com', '2025-05-06 22:50:13', '$2y$12$hUqm6u0BnTw8BEm/7aH/LuZLUKBYK3DjPQ9Lcpsbz1RZZj6KMyjCS', 'nMnzGHcDq0', '2025-05-06 22:50:13', '2025-05-06 22:50:13', NULL, 'anggota'),
(17, 'Miss Lucinda Weber', 'carroll.scot@example.org', '2025-05-06 22:50:13', '$2y$12$hUqm6u0BnTw8BEm/7aH/LuZLUKBYK3DjPQ9Lcpsbz1RZZj6KMyjCS', 'UyMqBKek6X', '2025-05-06 22:50:13', '2025-05-06 22:50:13', NULL, 'anggota'),
(18, 'Dr. Zakary Rau PhD', 'jwest@example.org', '2025-05-06 22:50:13', '$2y$12$hUqm6u0BnTw8BEm/7aH/LuZLUKBYK3DjPQ9Lcpsbz1RZZj6KMyjCS', 'N7A56Yop7r', '2025-05-06 22:50:13', '2025-05-06 22:50:13', NULL, 'anggota'),
(24, 'Felicia Pagac', 'breanne.wyman@example.org', '2025-05-07 06:54:30', '$2y$12$gMkUTS7lbnOYB8l.CPE7AOto523.BshHbx2ZTALK1cunIxZKa5TVq', 'j3D6NM1iOS', '2025-05-07 06:54:30', '2025-05-07 06:54:30', NULL, 'user'),
(25, 'Benton Streich', 'wade80@example.org', '2025-05-07 06:54:30', '$2y$12$gMkUTS7lbnOYB8l.CPE7AOto523.BshHbx2ZTALK1cunIxZKa5TVq', 'JjemOti6mC', '2025-05-07 06:54:30', '2025-05-07 06:54:30', NULL, 'user'),
(26, 'Cathy Price', 'oliver.reichert@example.org', '2025-05-07 06:54:30', '$2y$12$gMkUTS7lbnOYB8l.CPE7AOto523.BshHbx2ZTALK1cunIxZKa5TVq', 'mW44yeUVEv', '2025-05-07 06:54:30', '2025-05-07 06:54:30', NULL, 'user'),
(27, 'Stacey D\'Amore MD', 'vhill@example.com', '2025-05-07 06:54:30', '$2y$12$gMkUTS7lbnOYB8l.CPE7AOto523.BshHbx2ZTALK1cunIxZKa5TVq', 'Nsuf4BQjLb', '2025-05-07 06:54:30', '2025-05-07 06:54:30', NULL, 'user'),
(28, 'Kitty Shanahan', 'burnice.renner@example.com', '2025-05-07 06:54:30', '$2y$12$gMkUTS7lbnOYB8l.CPE7AOto523.BshHbx2ZTALK1cunIxZKa5TVq', 'H3i4hCw6ie', '2025-05-07 06:54:30', '2025-05-07 06:54:30', NULL, 'user'),
(29, 'Miss Mattie Wintheiser', 'isobel88@example.net', '2025-05-07 06:54:30', '$2y$12$gMkUTS7lbnOYB8l.CPE7AOto523.BshHbx2ZTALK1cunIxZKa5TVq', 'DkETdHNUE0', '2025-05-07 06:54:30', '2025-05-07 06:54:30', NULL, 'user'),
(30, 'Nigel Macejkovic', 'marquardt.albert@example.net', '2025-05-07 06:54:30', '$2y$12$gMkUTS7lbnOYB8l.CPE7AOto523.BshHbx2ZTALK1cunIxZKa5TVq', 'cz497QjW66', '2025-05-07 06:54:30', '2025-05-07 06:54:30', NULL, 'user'),
(31, 'Leda Brekke', 'janis.bins@example.net', '2025-05-07 06:54:30', '$2y$12$gMkUTS7lbnOYB8l.CPE7AOto523.BshHbx2ZTALK1cunIxZKa5TVq', '5ay6gwUSFe', '2025-05-07 06:54:30', '2025-05-07 06:54:30', NULL, 'user'),
(32, 'Prof. Allen Kuphal Jr.', 'hilario51@example.com', '2025-05-07 06:54:30', '$2y$12$gMkUTS7lbnOYB8l.CPE7AOto523.BshHbx2ZTALK1cunIxZKa5TVq', 'RLlAVdpAE1', '2025-05-07 06:54:30', '2025-05-07 06:54:30', NULL, 'user'),
(33, 'Elza Johnson', 'angie33@example.com', '2025-05-07 06:54:30', '$2y$12$gMkUTS7lbnOYB8l.CPE7AOto523.BshHbx2ZTALK1cunIxZKa5TVq', 'ZveozbFi01', '2025-05-07 06:54:30', '2025-05-07 06:54:30', NULL, 'user'),
(35, 'Rickey Lebsack DDS', 'hermiston.macey@example.org', '2025-05-07 06:55:11', '$2y$12$Bp.91TzoQBK1cvpJN6UaxeyCZIYbiwsDmo9hRZ9dSpvNbAXKsUPgm', '7pK1T0uE72', '2025-05-07 06:55:11', '2025-05-07 06:55:11', NULL, 'user'),
(36, 'Murl Johnston', 'lesch.jefferey@example.net', '2025-05-07 06:55:11', '$2y$12$Bp.91TzoQBK1cvpJN6UaxeyCZIYbiwsDmo9hRZ9dSpvNbAXKsUPgm', 'EOekPSroa0', '2025-05-07 06:55:11', '2025-05-07 06:55:11', NULL, 'user'),
(37, 'Asa Moen', 'mikel.hettinger@example.org', '2025-05-07 06:55:11', '$2y$12$Bp.91TzoQBK1cvpJN6UaxeyCZIYbiwsDmo9hRZ9dSpvNbAXKsUPgm', 'eLq1Qw0lqN', '2025-05-07 06:55:11', '2025-05-07 06:55:11', NULL, 'user'),
(38, 'Annabel O\'Hara IV', 'wbrekke@example.org', '2025-05-07 06:55:11', '$2y$12$Bp.91TzoQBK1cvpJN6UaxeyCZIYbiwsDmo9hRZ9dSpvNbAXKsUPgm', 'qm7OlL5MgR', '2025-05-07 06:55:11', '2025-05-07 06:55:11', NULL, 'user'),
(39, 'Sharon Turcotte', 'ufarrell@example.org', '2025-05-07 06:55:11', '$2y$12$Bp.91TzoQBK1cvpJN6UaxeyCZIYbiwsDmo9hRZ9dSpvNbAXKsUPgm', 'pxw5ZnZid9', '2025-05-07 06:55:11', '2025-05-07 06:55:11', NULL, 'user'),
(40, 'Luisa Tillman III', 'alabadie@example.org', '2025-05-07 06:55:11', '$2y$12$Bp.91TzoQBK1cvpJN6UaxeyCZIYbiwsDmo9hRZ9dSpvNbAXKsUPgm', 'J2q84ae68Y', '2025-05-07 06:55:11', '2025-05-07 06:55:11', NULL, 'user'),
(41, 'Kendrick Grady', 'silas91@example.net', '2025-05-07 06:55:11', '$2y$12$Bp.91TzoQBK1cvpJN6UaxeyCZIYbiwsDmo9hRZ9dSpvNbAXKsUPgm', '5mwiknN4ab', '2025-05-07 06:55:11', '2025-05-07 06:55:11', NULL, 'user'),
(42, 'Mrs. Dandre Altenwerth', 'jose.prosacco@example.org', '2025-05-07 06:55:11', '$2y$12$Bp.91TzoQBK1cvpJN6UaxeyCZIYbiwsDmo9hRZ9dSpvNbAXKsUPgm', 'isIkJX3aGE', '2025-05-07 06:55:11', '2025-05-07 06:55:11', NULL, 'user'),
(43, 'Thad Williamson', 'johnnie.lakin@example.org', '2025-05-07 06:55:11', '$2y$12$Bp.91TzoQBK1cvpJN6UaxeyCZIYbiwsDmo9hRZ9dSpvNbAXKsUPgm', 'lMSp3meQRY', '2025-05-07 06:55:11', '2025-05-07 06:55:11', NULL, 'user'),
(44, 'Jarod Ruecker', 'zbednar@example.net', '2025-05-07 06:55:11', '$2y$12$Bp.91TzoQBK1cvpJN6UaxeyCZIYbiwsDmo9hRZ9dSpvNbAXKsUPgm', 'nXAMYqh0Iz', '2025-05-07 06:55:11', '2025-05-07 06:55:11', NULL, 'user'),
(45, 'Theresia Dickens', 'wisozk.oral@example.com', '2025-05-07 06:56:32', '$2y$12$MR02uOfDjaKt6i7RERbnguuSJ9952AgOg7y6BHaVavAoaV4ORLrTW', 'nAsLsxTphp', '2025-05-07 06:56:32', '2025-05-07 06:56:32', NULL, 'user'),
(46, 'Eliane Upton', 'dixie.kerluke@example.net', '2025-05-07 06:56:32', '$2y$12$MR02uOfDjaKt6i7RERbnguuSJ9952AgOg7y6BHaVavAoaV4ORLrTW', 'eaAGfLZi5H', '2025-05-07 06:56:32', '2025-05-07 06:56:32', NULL, 'user'),
(47, 'Prof. Abigale Krajcik II', 'witting.arden@example.net', '2025-05-07 06:56:32', '$2y$12$MR02uOfDjaKt6i7RERbnguuSJ9952AgOg7y6BHaVavAoaV4ORLrTW', 'cCO9AOXjIR', '2025-05-07 06:56:32', '2025-05-07 06:56:32', NULL, 'user'),
(48, 'Percival McKenzie', 'dawson.beier@example.com', '2025-05-07 06:56:32', '$2y$12$MR02uOfDjaKt6i7RERbnguuSJ9952AgOg7y6BHaVavAoaV4ORLrTW', 'h5y16TImEF', '2025-05-07 06:56:32', '2025-05-07 06:56:32', NULL, 'user'),
(49, 'Gerald Wunsch', 'moore.ellis@example.net', '2025-05-07 06:56:32', '$2y$12$MR02uOfDjaKt6i7RERbnguuSJ9952AgOg7y6BHaVavAoaV4ORLrTW', 'Fklhvsg4l0', '2025-05-07 06:56:32', '2025-05-07 06:56:32', NULL, 'user'),
(50, 'Karlie Sauer MD', 'anita.nienow@example.net', '2025-05-07 06:56:32', '$2y$12$MR02uOfDjaKt6i7RERbnguuSJ9952AgOg7y6BHaVavAoaV4ORLrTW', 'hEC8NiuPCF', '2025-05-07 06:56:32', '2025-05-07 06:56:32', NULL, 'user'),
(51, 'Prof. Lauriane Littel IV', 'xcorwin@example.net', '2025-05-07 06:56:32', '$2y$12$MR02uOfDjaKt6i7RERbnguuSJ9952AgOg7y6BHaVavAoaV4ORLrTW', 'if71MRNL7j', '2025-05-07 06:56:32', '2025-05-07 06:56:32', NULL, 'user'),
(52, 'Mr. Landen Heidenreich', 'qkunze@example.org', '2025-05-07 06:56:32', '$2y$12$MR02uOfDjaKt6i7RERbnguuSJ9952AgOg7y6BHaVavAoaV4ORLrTW', 'UYBTTbShSM', '2025-05-07 06:56:32', '2025-05-07 06:56:32', NULL, 'user'),
(53, 'Dr. Noel Trantow', 'aconsidine@example.com', '2025-05-07 06:56:32', '$2y$12$MR02uOfDjaKt6i7RERbnguuSJ9952AgOg7y6BHaVavAoaV4ORLrTW', '1OWt2boPWg', '2025-05-07 06:56:32', '2025-05-07 06:56:32', NULL, 'user'),
(54, 'Mazie Oberbrunner', 'therese46@example.org', '2025-05-07 06:56:32', '$2y$12$MR02uOfDjaKt6i7RERbnguuSJ9952AgOg7y6BHaVavAoaV4ORLrTW', 'DWwxRQMAME', '2025-05-07 06:56:32', '2025-05-07 06:56:32', NULL, 'user'),
(55, 'Shanie Jacobs', 'nia76@example.com', '2025-05-07 06:57:02', '$2y$12$8SRDd1v64i6q3KAxkAR6RuaJD1utcf5dNKlTLzprkyZdCASBXQc4S', 'EWc2k433gy', '2025-05-07 06:57:02', '2025-05-07 06:57:02', NULL, 'user'),
(56, 'Juston Swift', 'frami.zelda@example.net', '2025-05-07 06:57:02', '$2y$12$8SRDd1v64i6q3KAxkAR6RuaJD1utcf5dNKlTLzprkyZdCASBXQc4S', 'Ivkjs5dKkA', '2025-05-07 06:57:02', '2025-05-07 06:57:02', NULL, 'user'),
(57, 'Zelma Bogan', 'dorthy03@example.net', '2025-05-07 06:57:02', '$2y$12$8SRDd1v64i6q3KAxkAR6RuaJD1utcf5dNKlTLzprkyZdCASBXQc4S', 'Y7rS1DOcTy', '2025-05-07 06:57:02', '2025-05-07 06:57:02', NULL, 'user'),
(58, 'Jamison Mosciski DDS', 'dooley.breanne@example.net', '2025-05-07 06:57:02', '$2y$12$8SRDd1v64i6q3KAxkAR6RuaJD1utcf5dNKlTLzprkyZdCASBXQc4S', 'RDUItZMIpp', '2025-05-07 06:57:02', '2025-05-07 06:57:02', NULL, 'user'),
(59, 'Mollie Pollich', 'zbernier@example.org', '2025-05-07 06:57:02', '$2y$12$8SRDd1v64i6q3KAxkAR6RuaJD1utcf5dNKlTLzprkyZdCASBXQc4S', 'qMqPLJKr4o', '2025-05-07 06:57:02', '2025-05-07 06:57:02', NULL, 'user'),
(60, 'Dr. Xander Bergnaum Sr.', 'shemar72@example.org', '2025-05-07 06:57:02', '$2y$12$8SRDd1v64i6q3KAxkAR6RuaJD1utcf5dNKlTLzprkyZdCASBXQc4S', 'nHyxqXgsR3', '2025-05-07 06:57:02', '2025-05-07 06:57:02', NULL, 'user'),
(61, 'Mr. Nathen Tromp V', 'cole.obie@example.com', '2025-05-07 06:57:02', '$2y$12$8SRDd1v64i6q3KAxkAR6RuaJD1utcf5dNKlTLzprkyZdCASBXQc4S', 'xWJQAKQAKS', '2025-05-07 06:57:02', '2025-05-07 06:57:02', NULL, 'user'),
(62, 'Katelynn McGlynn', 'myrl46@example.net', '2025-05-07 06:57:02', '$2y$12$8SRDd1v64i6q3KAxkAR6RuaJD1utcf5dNKlTLzprkyZdCASBXQc4S', 'Qnv1zQFvYN', '2025-05-07 06:57:02', '2025-05-07 06:57:02', NULL, 'user'),
(63, 'Willa Sipes', 'iwindler@example.org', '2025-05-07 06:57:02', '$2y$12$8SRDd1v64i6q3KAxkAR6RuaJD1utcf5dNKlTLzprkyZdCASBXQc4S', 'SjEGTcHF92', '2025-05-07 06:57:02', '2025-05-07 06:57:02', NULL, 'user'),
(64, 'Rogers Cormier', 'coleman.berge@example.net', '2025-05-07 06:57:02', '$2y$12$8SRDd1v64i6q3KAxkAR6RuaJD1utcf5dNKlTLzprkyZdCASBXQc4S', 'db0zoMO1eC', '2025-05-07 06:57:02', '2025-05-07 06:57:02', NULL, 'user'),
(65, 'Gardner Auer', 'jayden.shields@example.org', '2025-05-08 00:07:41', '$2y$12$ycAYHywp6Gu2Akw/8ahxxO50ivKead8Dbl8Ngkw1TgiCSDkUEvBFm', 'CRtEB6kImo', '2025-05-08 00:07:41', '2025-05-08 00:07:41', NULL, 'user'),
(66, 'Kaleigh Leuschke', 'tflatley@example.org', '2025-05-08 00:07:41', '$2y$12$ycAYHywp6Gu2Akw/8ahxxO50ivKead8Dbl8Ngkw1TgiCSDkUEvBFm', 'UcYWs3wsWM', '2025-05-08 00:07:42', '2025-05-08 00:07:42', NULL, 'user'),
(67, 'Judson Rolfson', 'arvid.dicki@example.org', '2025-05-08 00:07:41', '$2y$12$ycAYHywp6Gu2Akw/8ahxxO50ivKead8Dbl8Ngkw1TgiCSDkUEvBFm', 'PziszsTPlg', '2025-05-08 00:07:42', '2025-05-08 00:07:42', NULL, 'user'),
(68, 'Jayme Reilly', 'gorczany.hildegard@example.net', '2025-05-08 00:07:41', '$2y$12$ycAYHywp6Gu2Akw/8ahxxO50ivKead8Dbl8Ngkw1TgiCSDkUEvBFm', 'zdjHvz9AtD', '2025-05-08 00:07:42', '2025-05-08 00:07:42', NULL, 'user'),
(69, 'Dr. Clyde McClure', 'qmcdermott@example.com', '2025-05-08 00:07:41', '$2y$12$ycAYHywp6Gu2Akw/8ahxxO50ivKead8Dbl8Ngkw1TgiCSDkUEvBFm', 'xbBCZwvFPg', '2025-05-08 00:07:42', '2025-05-08 00:07:42', NULL, 'user'),
(70, 'Osborne Beier Sr.', 'nhagenes@example.com', '2025-05-08 00:07:41', '$2y$12$ycAYHywp6Gu2Akw/8ahxxO50ivKead8Dbl8Ngkw1TgiCSDkUEvBFm', '0jMmCEYA5v', '2025-05-08 00:07:42', '2025-05-08 00:07:42', NULL, 'user'),
(71, 'Morgan Turcotte', 'king.weissnat@example.com', '2025-05-08 00:07:41', '$2y$12$ycAYHywp6Gu2Akw/8ahxxO50ivKead8Dbl8Ngkw1TgiCSDkUEvBFm', 'BFzsPFlPxE', '2025-05-08 00:07:42', '2025-05-08 00:07:42', NULL, 'user'),
(72, 'Maribel Reichel', 'mallie.abernathy@example.net', '2025-05-08 00:07:41', '$2y$12$ycAYHywp6Gu2Akw/8ahxxO50ivKead8Dbl8Ngkw1TgiCSDkUEvBFm', 'ErPzZ8eZSL', '2025-05-08 00:07:42', '2025-05-08 00:07:42', NULL, 'user'),
(73, 'Wilburn McCullough', 'soledad.koch@example.org', '2025-05-08 00:07:41', '$2y$12$ycAYHywp6Gu2Akw/8ahxxO50ivKead8Dbl8Ngkw1TgiCSDkUEvBFm', 'ACN8RTPbPY', '2025-05-08 00:07:42', '2025-05-08 00:07:42', NULL, 'user'),
(74, 'Edmond Boehm', 'danny.gorczany@example.org', '2025-05-08 00:07:41', '$2y$12$ycAYHywp6Gu2Akw/8ahxxO50ivKead8Dbl8Ngkw1TgiCSDkUEvBFm', 'JfZvUWoK9x', '2025-05-08 00:07:42', '2025-05-08 00:07:42', NULL, 'user'),
(75, 'Tria Aulia', 'triaaullia0106@gmial.com', NULL, '$2y$12$abzOQLDfI9MZLvLC/sDZLeqUlRdjv1qGpRLNv4EpT3HPRJbNdqaUa', NULL, '2025-05-08 18:01:27', '2025-05-08 18:01:27', NULL, 'user'),
(88, 'Anggota 1', 'anggota1@example.com', NULL, '$2y$12$qsO1DPOqdGbfrMMJVB.o.OhyA.hrsxul.iAfjSIq8UzMGaADFKZyy', 'SZ16oPMhrf', '2025-05-22 19:54:58', '2025-05-22 19:54:58', NULL, 'anggota'),
(89, 'Anggota 2', 'anggota2@example.com', NULL, '$2y$12$ImvOH77zlFfMe/pDWE7IuuM8qzvwSoTKWuVdJVtKWLqTyYcyNDEMS', 'LUIy7iEIln', '2025-05-22 19:54:58', '2025-05-22 19:54:58', NULL, 'anggota'),
(90, 'Anggota 3', 'anggota3@example.com', NULL, '$2y$12$c1QH0VEAPcjbSQ1ja/iWNOt60sUGCx/WOAGL/0acyJBQbyxzq2uSC', 'n6Nu5WpVvR', '2025-05-22 19:54:58', '2025-05-22 19:54:58', NULL, 'anggota'),
(91, 'Anggota 4', 'anggota4@example.com', '2025-05-22 20:49:55', '$2y$12$GgQOEQGAhUT3.83qL61Bt.7Ssmg24jNuRxZK42MHfsImmyRwNppli', 'XUYhdie8Su', '2025-05-22 19:54:59', '2025-05-22 20:49:55', NULL, 'anggota'),
(92, 'Anggota 5', 'anggota5@example.com', NULL, '$2y$12$nsp3TaM5MMnDSi8sAOeguO8Wd/VXBLmjExOFvAQkAXb54XifAGSFq', 'cebjvJtCFV', '2025-05-22 19:54:59', '2025-05-22 19:54:59', NULL, 'anggota');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visits`
--

CREATE TABLE `visits` (
  `id_visits` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `enter_at` time NOT NULL,
  `out_at` time DEFAULT NULL,
  `visit_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `visits`
--

INSERT INTO `visits` (`id_visits`, `name`, `date`, `enter_at`, `out_at`, `visit_date`, `created_at`, `updated_at`) VALUES
(1, 'Pengunjung 1', '2025-05-08', '04:07:42', '07:07:42', '2025-05-01', '2025-05-08 00:07:42', '2025-05-08 00:07:42'),
(2, 'Pengunjung 2', '2025-05-08', '04:07:42', '07:07:42', '2025-05-02', '2025-05-08 00:07:42', '2025-05-08 00:07:42'),
(3, 'Pengunjung 3', '2025-05-08', '06:07:42', '07:07:42', '2025-05-05', '2025-05-08 00:07:42', '2025-05-08 00:07:42'),
(4, 'Pengunjung 4', '2025-05-08', '04:07:42', '07:07:42', '2025-05-04', '2025-05-08 00:07:42', '2025-05-08 00:07:42'),
(5, 'Pengunjung 5', '2025-05-08', '06:07:42', '07:07:42', '2025-04-30', '2025-05-08 00:07:42', '2025-05-08 00:07:42'),
(6, 'Pengunjung 6', '2025-05-08', '04:07:42', '07:07:42', '2025-05-07', '2025-05-08 00:07:42', '2025-05-08 00:07:42'),
(7, 'Pengunjung 7', '2025-05-08', '05:07:42', '07:07:42', '2025-04-30', '2025-05-08 00:07:42', '2025-05-08 00:07:42'),
(8, 'Pengunjung 8', '2025-05-08', '06:07:42', '07:07:42', '2025-04-28', '2025-05-08 00:07:42', '2025-05-08 00:07:42'),
(9, 'Pengunjung 9', '2025-05-08', '06:07:42', '07:07:42', '2025-05-06', '2025-05-08 00:07:42', '2025-05-08 00:07:42'),
(10, 'Pengunjung 10', '2025-05-08', '06:07:42', '07:07:42', '2025-04-28', '2025-05-08 00:07:42', '2025-05-08 00:07:42'),
(11, 'Abdul Aziz', '2025-11-11', '07:30:00', '10:00:00', NULL, '2025-05-15 18:16:24', '2025-05-15 18:16:39'),
(12, 'Tria Aulia', '2025-05-16', '09:30:00', '09:30:00', NULL, '2025-05-15 19:52:19', '2025-05-15 19:52:19'),
(13, 'Tria Aulia', '2025-05-23', '10:30:00', '15:00:00', NULL, '2025-05-22 20:54:38', '2025-05-22 20:54:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `borrowings`
--
ALTER TABLE `borrowings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `borrowings_user_id_foreign` (`user_id`),
  ADD KEY `borrowings_book_id_foreign` (`book_id`);

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
-- Indeks untuk tabel `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `members_email_unique` (`email`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- Indeks untuk tabel `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id_visits`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `borrowings`
--
ALTER TABLE `borrowings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
-- AUTO_INCREMENT untuk tabel `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT untuk tabel `visits`
--
ALTER TABLE `visits`
  MODIFY `id_visits` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `borrowings`
--
ALTER TABLE `borrowings`
  ADD CONSTRAINT `borrowings_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `borrowings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
