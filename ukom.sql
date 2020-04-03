-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Mar 2020 pada 14.03
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukom`
--

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `laporan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `laporan` (
`id_pengaduan` int(11)
,`judul` text
,`tgl_pengaduan` date
,`nik` varchar(16)
,`isi_laporan` text
,`foto` varchar(256)
,`status` enum('menunggu verifikasi','proses','selesai')
,`nama` varchar(35)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `telp` varchar(13) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`, `created_at`) VALUES
('3363288247827', 'Lionel Messi', 'messi', '$2y$10$cCXsK.wfjvTf5fq684ztH.t8dJHDt0X49wUrc9ujD2KUSJhIzOLIC', '4472686827382', '2020-03-30 08:48:12'),
('847383686363637', 'Prio Arief G', 'prio', '$2y$10$grXwao2k596d8hhV6nclMu.5rzsedRNPWy4.nQbeq1Cdw8byTLLoi', '3777778282727', '2020-03-29 09:14:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `judul` text NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` varchar(16) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(256) NOT NULL,
  `status` enum('menunggu verifikasi','proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `judul`, `tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`) VALUES
(7, 'Tawuran', '2020-03-30', '847383686363637', 'Hey prioarief!\r\n\r\nA sign in attempt requires further verification because we did not recognize your device. To complete the sign in, enter the verification code on the unrecognized device.\r\n\r\nDevice: Firefox on Windows\r\nVerification code: 819653\r\n\r\nIf you did not attempt to sign in to your account, your password may be compromised. Visit https://github.com/settings/admin to create a new, strong password for your GitHub account.\r\n\r\nIf you\'d like to automatically verify devices in the future, consider enabling two-factor authentication on your account. Visit https://help.github.com/articles/configuring-two-factor-authentication learn about two-factor authentication.\r\n\r\nIf you decide to enable two-factor authentication, ensure you retain access to one or more account recovery methods. See https://help.github.com/articles/configuring-two-factor-authentication-recovery-methods in the GitHub Help.\r\n\r\nThanks,\r\nThe GitHub Team', '7ed9ea4c2ed98cf4ab214214099b3445.jpg', 'menunggu verifikasi'),
(8, 'BARCELONA KALAH TEROSSS', '2020-03-30', '3363288247827', 'Barcelona Kalah, Messi Menghindar Ditanya Nasib Valverde', 'def32a18ac9027d064054df794e9c49c.jpg', 'menunggu verifikasi'),
(9, 'Banjir', '2020-03-30', '3363288247827', 'DOSEN\r\n\r\n    Aktivitas dosen pada perkuliahan online: (a) ada atau tidak ada materi ajar; (b) kualitas isi forum diskusi) akan dilakukan evaluasi secara berkala dalam rangka penilaian kinerja dosen;\r\n    Modul digital Mata Kuliah disusun oleh Tim Penyusun Modul Mata Kuliah;\r\n    Dosen pengampu disarankan menambahkan bahan bacaan/referensi tambahan, tautan eksternal, video dan jurnal yang relevan dengan materi;\r\n    Dosen harus menyusun topik diskusi pada konten forum diskusi sebelum dilaksanakan perkuliahan online;\r\n    Dosen memberikan soal latihan pada menu assignment dan quizz sebagai ter formatif;\r\n\r\n MAHASISWA\r\n\r\n    Mahasiswa mempelajari file modul digital dan materi lainnya secara mandiri;\r\n    Apabila belum terdapat file modul digital atau bentuk materi lainnya, mahasiswa segera konfirmasi kepada dosen pengampu;\r\n    Mahasiswa mengerjakan dan mengumpulkan latihan/tugas kepada dosen melalui menu assignment dan quizz, sesuai kesepakatan dari dosen pengampu;\r\n    Mahasiswa berpartisipasi aktif dalam forum diskusi dalam bentuk: (a) Menjawab pertanyaan yang diberikan dosen pengampu; (b) Komentar dalam forum diskusi tidak sekedar absen “saya hadir”, “saya setuju dengan pendapat di atas”, dan lain sejenisnya; (c) Menanggapi pertanyaan dari mahasiswa lainnya;\r\n    Absensi mahasiswa dalam perkuliahan online dilihat dari 2 hal: (a) mengumpulkan tugas (b) aktif dalam forum diskusi.', 'tawuran1.jpg', 'proses'),
(10, 'Banjir', '2020-03-31', '847383686363637', 'DOSEN\r\n\r\n    Aktivitas dosen pada perkuliahan online: (a) ada atau tidak ada materi ajar; (b) kualitas isi forum diskusi) akan dilakukan evaluasi secara berkala dalam rangka penilaian kinerja dosen;\r\n    Modul digital Mata Kuliah disusun oleh Tim Penyusun Modul Mata Kuliah;\r\n    Dosen pengampu disarankan menambahkan bahan bacaan/referensi tambahan, tautan eksternal, video dan jurnal yang relevan dengan materi;\r\n    Dosen harus menyusun topik diskusi pada konten forum diskusi sebelum dilaksanakan perkuliahan online;\r\n    Dosen memberikan soal latihan pada menu assignment dan quizz sebagai ter formatif;\r\n\r\n MAHASISWA\r\n\r\n    Mahasiswa mempelajari file modul digital dan materi lainnya secara mandiri;\r\n    Apabila belum terdapat file modul digital atau bentuk materi lainnya, mahasiswa segera konfirmasi kepada dosen pengampu;\r\n    Mahasiswa mengerjakan dan mengumpulkan latihan/tugas kepada dosen melalui menu assignment dan quizz, sesuai kesepakatan dari dosen pengampu;\r\n    Mahasiswa berpartisipasi aktif dalam forum diskusi dalam bentuk: (a) Menjawab pertanyaan yang diberikan dosen pengampu; (b) Komentar dalam forum diskusi tidak sekedar absen “saya hadir”, “saya setuju dengan pendapat di atas”, dan lain sejenisnya; (c) Menanggapi pertanyaan dari mahasiswa lainnya;\r\n    Absensi mahasiswa dalam perkuliahan online dilihat dari 2 hal: (a) mengumpulkan tugas (b) aktif dalam forum diskusi.', 'tawuran1.jpg', 'proses'),
(11, 'Banjir', '2020-03-10', '847383686363637', 'DOSEN\r\n\r\n    Aktivitas dosen pada perkuliahan online: (a) ada atau tidak ada materi ajar; (b) kualitas isi forum diskusi) akan dilakukan evaluasi secara berkala dalam rangka penilaian kinerja dosen;\r\n    Modul digital Mata Kuliah disusun oleh Tim Penyusun Modul Mata Kuliah;\r\n    Dosen pengampu disarankan menambahkan bahan bacaan/referensi tambahan, tautan eksternal, video dan jurnal yang relevan dengan materi;\r\n    Dosen harus menyusun topik diskusi pada konten forum diskusi sebelum dilaksanakan perkuliahan online;\r\n    Dosen memberikan soal latihan pada menu assignment dan quizz sebagai ter formatif;\r\n\r\n MAHASISWA\r\n\r\n    Mahasiswa mempelajari file modul digital dan materi lainnya secara mandiri;\r\n    Apabila belum terdapat file modul digital atau bentuk materi lainnya, mahasiswa segera konfirmasi kepada dosen pengampu;\r\n    Mahasiswa mengerjakan dan mengumpulkan latihan/tugas kepada dosen melalui menu assignment dan quizz, sesuai kesepakatan dari dosen pengampu;\r\n    Mahasiswa berpartisipasi aktif dalam forum diskusi dalam bentuk: (a) Menjawab pertanyaan yang diberikan dosen pengampu; (b) Komentar dalam forum diskusi tidak sekedar absen “saya hadir”, “saya setuju dengan pendapat di atas”, dan lain sejenisnya; (c) Menanggapi pertanyaan dari mahasiswa lainnya;\r\n    Absensi mahasiswa dalam perkuliahan online dilihat dari 2 hal: (a) mengumpulkan tugas (b) aktif dalam forum diskusi.', 'tawuran1.jpg', 'proses'),
(12, 'Jalanan Rusak', '2020-03-17', '3363288247827', 'DOSEN\r\n\r\n    Aktivitas dosen pada perkuliahan online: (a) ada atau tidak ada materi ajar; (b) kualitas isi forum diskusi) akan dilakukan evaluasi secara berkala dalam rangka penilaian kinerja dosen;\r\n    Modul digital Mata Kuliah disusun oleh Tim Penyusun Modul Mata Kuliah;\r\n    Dosen pengampu disarankan menambahkan bahan bacaan/referensi tambahan, tautan eksternal, video dan jurnal yang relevan dengan materi;\r\n    Dosen harus menyusun topik diskusi pada konten forum diskusi sebelum dilaksanakan perkuliahan online;\r\n    Dosen memberikan soal latihan pada menu assignment dan quizz sebagai ter formatif;\r\n\r\n MAHASISWA\r\n\r\n    Mahasiswa mempelajari file modul digital dan materi lainnya secara mandiri;\r\n    Apabila belum terdapat file modul digital atau bentuk materi lainnya, mahasiswa segera konfirmasi kepada dosen pengampu;\r\n    Mahasiswa mengerjakan dan mengumpulkan latihan/tugas kepada dosen melalui menu assignment dan quizz, sesuai kesepakatan dari dosen pengampu;\r\n    Mahasiswa berpartisipasi aktif dalam forum diskusi dalam bentuk: (a) Menjawab pertanyaan yang diberikan dosen pengampu; (b) Komentar dalam forum diskusi tidak sekedar absen “saya hadir”, “saya setuju dengan pendapat di atas”, dan lain sejenisnya; (c) Menanggapi pertanyaan dari mahasiswa lainnya;\r\n    Absensi mahasiswa dalam perkuliahan online dilihat dari 2 hal: (a) mengumpulkan tugas (b) aktif dalam forum diskusi.', 'tawuran1.jpg', 'proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur untuk view `laporan`
--
DROP TABLE IF EXISTS `laporan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `laporan`  AS  select `pengaduan`.`id_pengaduan` AS `id_pengaduan`,`pengaduan`.`judul` AS `judul`,`pengaduan`.`tgl_pengaduan` AS `tgl_pengaduan`,`pengaduan`.`nik` AS `nik`,`pengaduan`.`isi_laporan` AS `isi_laporan`,`pengaduan`.`foto` AS `foto`,`pengaduan`.`status` AS `status`,`masyarakat`.`nama` AS `nama` from (`pengaduan` join `masyarakat` on((`masyarakat`.`nik` = `pengaduan`.`nik`))) where (`pengaduan`.`status` = 'proses') ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`),
  ADD KEY `nik` (`nik`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`),
  ADD KEY `id_pengaduan` (`id_pengaduan`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `masyarakat` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD CONSTRAINT `tanggapan_ibfk_1` FOREIGN KEY (`id_pengaduan`) REFERENCES `pengaduan` (`id_pengaduan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tanggapan_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
