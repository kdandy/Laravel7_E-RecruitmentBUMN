-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Feb 2023 pada 01.39
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelrekrute`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agamas`
--

CREATE TABLE `agamas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `hasil_akhirs`
--

CREATE TABLE `hasil_akhirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peserta_id` bigint(20) UNSIGNED NOT NULL,
  `lowongan_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban_pesertas`
--

CREATE TABLE `jawaban_pesertas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uji_kompetensi_peserta_id` bigint(20) UNSIGNED NOT NULL,
  `soal_id` bigint(20) UNSIGNED NOT NULL,
  `jawaban` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bs` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lampirans`
--

CREATE TABLE `lampirans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `foto_ktp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_ijazah` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_transkip` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_npwp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lowongans`
--

CREATE TABLE `lowongans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berita_id` bigint(20) UNSIGNED NOT NULL,
  `pendidikan_terakhir_id` bigint(20) UNSIGNED NOT NULL,
  `posisi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`posisi`)),
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipk_min` double DEFAULT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2020_06_26_060011_create_pendidikan_terakhirs_table', 1),
(5, '2020_06_27_080931_create_posisis_table', 1),
(6, '2020_06_27_082626_create_beritas_table', 1),
(7, '2020_06_27_095318_create_lowongans_table', 1),
(8, '2020_06_30_211141_create_soals_table', 1),
(9, '2020_07_01_090535_create_pesertas_table', 1),
(10, '2020_07_04_120205_create_lampirans_table', 1),
(11, '2020_07_06_145029_create_uji_kompetensis_table', 1),
(12, '2020_07_08_095840_create_uji_kompetensi_pesertas_table', 1),
(13, '2020_07_08_101226_create_jawaban_pesertas_table', 1),
(14, '2020_07_10_133206_create_uji_kesehatans_table', 1),
(15, '2020_07_10_140348_create_uji_kesehatan_pesertas_table', 1),
(16, '2020_07_13_203100_create_uji_wawancaras_table', 1),
(17, '2020_07_13_213103_create_uji_wawancara_pesertas_table', 1),
(18, '2020_08_01_163337_create_agamas_table', 1),
(19, '2020_09_15_104851_create_hasil_akhirs_table', 1);

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
-- Struktur dari tabel `pendidikan_terakhirs`
--

CREATE TABLE `pendidikan_terakhirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesertas`
--

CREATE TABLE `pesertas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `lowongan_id` bigint(20) UNSIGNED NOT NULL,
  `NIK` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` tinyint(4) NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warga_negara` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_sekarang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_ktp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlp_rumah` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tlp_hp` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transportasi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ijazah_terakhir` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_lulus` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lembaga` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipk` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posisis`
--

CREATE TABLE `posisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `soals`
--

CREATE TABLE `soals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soal` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kunci` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `uji_kesehatans`
--

CREATE TABLE `uji_kesehatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lowongan_id` bigint(20) UNSIGNED NOT NULL,
  `tgl_uji` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `uji_kesehatan_pesertas`
--

CREATE TABLE `uji_kesehatan_pesertas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uji_kesehatan_id` bigint(20) UNSIGNED NOT NULL,
  `peserta_id` bigint(20) UNSIGNED NOT NULL,
  `surat_kesehatan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surat_narkoba` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detak_jantung` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tes_lari` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `uji_kompetensis`
--

CREATE TABLE `uji_kompetensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lowongan_id` bigint(20) UNSIGNED NOT NULL,
  `tgl_ujian` date NOT NULL,
  `durasi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `uji_kompetensi_pesertas`
--

CREATE TABLE `uji_kompetensi_pesertas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uji_kompetensi_id` bigint(20) UNSIGNED NOT NULL,
  `peserta_id` bigint(20) UNSIGNED NOT NULL,
  `nilai` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `uji_wawancaras`
--

CREATE TABLE `uji_wawancaras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lowongan_id` bigint(20) UNSIGNED NOT NULL,
  `tgl_uji` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `uji_wawancara_pesertas`
--

CREATE TABLE `uji_wawancara_pesertas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uji_wawancara_id` bigint(20) UNSIGNED NOT NULL,
  `peserta_id` bigint(20) UNSIGNED NOT NULL,
  `nilai` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `uuid`, `name`, `username`, `password`, `role`, `foto`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'e96769c0-c891-4155-85ae-0dc068e9b01f', 'admin', 'admin123', '$2y$10$rSTfQxC4E5l/6BpGCTmE1uFoLFyJettMHMQmNUnuMU9rckjNVF3R.', '2', 'default.jpg', '1', NULL, '2023-02-26 00:36:21', '2023-02-26 00:36:21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agamas`
--
ALTER TABLE `agamas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `beritas_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil_akhirs`
--
ALTER TABLE `hasil_akhirs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hasil_akhirs_peserta_id_foreign` (`peserta_id`),
  ADD KEY `hasil_akhirs_lowongan_id_foreign` (`lowongan_id`);

--
-- Indeks untuk tabel `jawaban_pesertas`
--
ALTER TABLE `jawaban_pesertas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jawaban_pesertas_uji_kompetensi_peserta_id_foreign` (`uji_kompetensi_peserta_id`);

--
-- Indeks untuk tabel `lampirans`
--
ALTER TABLE `lampirans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lowongans`
--
ALTER TABLE `lowongans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lowongans_berita_id_foreign` (`berita_id`),
  ADD KEY `lowongans_pendidikan_terakhir_id_foreign` (`pendidikan_terakhir_id`);

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
-- Indeks untuk tabel `pendidikan_terakhirs`
--
ALTER TABLE `pendidikan_terakhirs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesertas`
--
ALTER TABLE `pesertas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posisis`
--
ALTER TABLE `posisis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soals`
--
ALTER TABLE `soals`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `uji_kesehatans`
--
ALTER TABLE `uji_kesehatans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uji_kesehatans_lowongan_id_foreign` (`lowongan_id`);

--
-- Indeks untuk tabel `uji_kesehatan_pesertas`
--
ALTER TABLE `uji_kesehatan_pesertas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uji_kesehatan_pesertas_uji_kesehatan_id_foreign` (`uji_kesehatan_id`),
  ADD KEY `uji_kesehatan_pesertas_peserta_id_foreign` (`peserta_id`);

--
-- Indeks untuk tabel `uji_kompetensis`
--
ALTER TABLE `uji_kompetensis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uji_kompetensis_lowongan_id_foreign` (`lowongan_id`);

--
-- Indeks untuk tabel `uji_kompetensi_pesertas`
--
ALTER TABLE `uji_kompetensi_pesertas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uji_kompetensi_pesertas_uji_kompetensi_id_foreign` (`uji_kompetensi_id`),
  ADD KEY `uji_kompetensi_pesertas_peserta_id_foreign` (`peserta_id`);

--
-- Indeks untuk tabel `uji_wawancaras`
--
ALTER TABLE `uji_wawancaras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uji_wawancaras_lowongan_id_foreign` (`lowongan_id`);

--
-- Indeks untuk tabel `uji_wawancara_pesertas`
--
ALTER TABLE `uji_wawancara_pesertas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uji_wawancara_pesertas_uji_wawancara_id_foreign` (`uji_wawancara_id`),
  ADD KEY `uji_wawancara_pesertas_peserta_id_foreign` (`peserta_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agamas`
--
ALTER TABLE `agamas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hasil_akhirs`
--
ALTER TABLE `hasil_akhirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jawaban_pesertas`
--
ALTER TABLE `jawaban_pesertas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lampirans`
--
ALTER TABLE `lampirans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lowongans`
--
ALTER TABLE `lowongans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `pendidikan_terakhirs`
--
ALTER TABLE `pendidikan_terakhirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesertas`
--
ALTER TABLE `pesertas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posisis`
--
ALTER TABLE `posisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `soals`
--
ALTER TABLE `soals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `uji_kesehatans`
--
ALTER TABLE `uji_kesehatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `uji_kesehatan_pesertas`
--
ALTER TABLE `uji_kesehatan_pesertas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `uji_kompetensis`
--
ALTER TABLE `uji_kompetensis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `uji_kompetensi_pesertas`
--
ALTER TABLE `uji_kompetensi_pesertas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `uji_wawancaras`
--
ALTER TABLE `uji_wawancaras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `uji_wawancara_pesertas`
--
ALTER TABLE `uji_wawancara_pesertas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `beritas`
--
ALTER TABLE `beritas`
  ADD CONSTRAINT `beritas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hasil_akhirs`
--
ALTER TABLE `hasil_akhirs`
  ADD CONSTRAINT `hasil_akhirs_lowongan_id_foreign` FOREIGN KEY (`lowongan_id`) REFERENCES `lowongans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `hasil_akhirs_peserta_id_foreign` FOREIGN KEY (`peserta_id`) REFERENCES `pesertas` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jawaban_pesertas`
--
ALTER TABLE `jawaban_pesertas`
  ADD CONSTRAINT `jawaban_pesertas_uji_kompetensi_peserta_id_foreign` FOREIGN KEY (`uji_kompetensi_peserta_id`) REFERENCES `uji_kompetensi_pesertas` (`id`);

--
-- Ketidakleluasaan untuk tabel `lowongans`
--
ALTER TABLE `lowongans`
  ADD CONSTRAINT `lowongans_berita_id_foreign` FOREIGN KEY (`berita_id`) REFERENCES `beritas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lowongans_pendidikan_terakhir_id_foreign` FOREIGN KEY (`pendidikan_terakhir_id`) REFERENCES `pendidikan_terakhirs` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `uji_kesehatans`
--
ALTER TABLE `uji_kesehatans`
  ADD CONSTRAINT `uji_kesehatans_lowongan_id_foreign` FOREIGN KEY (`lowongan_id`) REFERENCES `lowongans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `uji_kesehatan_pesertas`
--
ALTER TABLE `uji_kesehatan_pesertas`
  ADD CONSTRAINT `uji_kesehatan_pesertas_peserta_id_foreign` FOREIGN KEY (`peserta_id`) REFERENCES `pesertas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `uji_kesehatan_pesertas_uji_kesehatan_id_foreign` FOREIGN KEY (`uji_kesehatan_id`) REFERENCES `uji_kesehatans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `uji_kompetensis`
--
ALTER TABLE `uji_kompetensis`
  ADD CONSTRAINT `uji_kompetensis_lowongan_id_foreign` FOREIGN KEY (`lowongan_id`) REFERENCES `lowongans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `uji_kompetensi_pesertas`
--
ALTER TABLE `uji_kompetensi_pesertas`
  ADD CONSTRAINT `uji_kompetensi_pesertas_peserta_id_foreign` FOREIGN KEY (`peserta_id`) REFERENCES `pesertas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `uji_kompetensi_pesertas_uji_kompetensi_id_foreign` FOREIGN KEY (`uji_kompetensi_id`) REFERENCES `uji_kompetensis` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `uji_wawancaras`
--
ALTER TABLE `uji_wawancaras`
  ADD CONSTRAINT `uji_wawancaras_lowongan_id_foreign` FOREIGN KEY (`lowongan_id`) REFERENCES `lowongans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `uji_wawancara_pesertas`
--
ALTER TABLE `uji_wawancara_pesertas`
  ADD CONSTRAINT `uji_wawancara_pesertas_peserta_id_foreign` FOREIGN KEY (`peserta_id`) REFERENCES `pesertas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `uji_wawancara_pesertas_uji_wawancara_id_foreign` FOREIGN KEY (`uji_wawancara_id`) REFERENCES `uji_wawancaras` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
