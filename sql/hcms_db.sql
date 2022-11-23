-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Nov 2022 pada 11.14
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hcms_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `md_bagian`
--

CREATE TABLE `md_bagian` (
  `idmd_bagian` int(11) NOT NULL,
  `kodebagian` varchar(100) DEFAULT NULL,
  `namabagian` varchar(100) DEFAULT NULL,
  `idmd_bidang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `md_bagian`
--

INSERT INTO `md_bagian` (`idmd_bagian`, `kodebagian`, `namabagian`, `idmd_bidang`) VALUES
(3, 'SHE', 'Bidang SHE', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `md_bidang`
--

CREATE TABLE `md_bidang` (
  `idmd_bidang` int(11) NOT NULL,
  `kodebidang` varchar(100) DEFAULT NULL,
  `namabidang` varchar(100) DEFAULT NULL,
  `idmd_organisasi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `md_bidang`
--

INSERT INTO `md_bidang` (`idmd_bidang`, `kodebidang`, `namabidang`, `idmd_organisasi`) VALUES
(1, 'BPS', 'Bidang Pengembangan Sistem', 13),
(2, 'SHE', 'Bidang SHE', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `md_grade`
--

CREATE TABLE `md_grade` (
  `idmd_grade` int(11) NOT NULL,
  `grade` int(11) DEFAULT NULL,
  `gajipokok` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `md_jabatan`
--

CREATE TABLE `md_jabatan` (
  `idmd_jabatan` int(11) NOT NULL,
  `kodejabatan` varchar(100) DEFAULT NULL,
  `namajabatan` varchar(100) DEFAULT NULL,
  `idmd_bagian` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `md_karyawan`
--

CREATE TABLE `md_karyawan` (
  `npk` int(11) NOT NULL,
  `idmd_marital` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tempatlahir` varchar(100) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `jeniskelamin` varchar(100) DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `nik` varchar(100) DEFAULT NULL,
  `alamatsekarang` varchar(200) DEFAULT NULL,
  `nohp` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mulaibekerja` date DEFAULT NULL,
  `tgldiangkat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `md_level`
--

CREATE TABLE `md_level` (
  `idmd_level` int(11) NOT NULL,
  `level` int(11) DEFAULT NULL,
  `namalevel` varchar(150) DEFAULT NULL,
  `mappingso` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `md_level`
--

INSERT INTO `md_level` (`idmd_level`, `level`, `namalevel`, `mappingso`) VALUES
(1, 0, 'Direktorat', 'Direktorat'),
(2, 1, 'General Manager / Sekretaris Perusahaan / Kepala SPI', 'Organisasi'),
(3, 2, 'Senior Manager / Senior Auditor / Senior Coorporate Legal', 'Bidang'),
(4, 3, 'Manager / Kepala Unit QSHE / Coorporate Legal', 'Bagian'),
(5, 4, 'Supervisor', 'Sub Bagian'),
(6, 5, 'Staf / Officer / Fungsional Lainnya', 'Staf'),
(7, 6, 'Pelaksana / Operator', 'Non Staf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `md_marital`
--

CREATE TABLE `md_marital` (
  `idmd_marital` int(11) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `md_marital`
--

INSERT INTO `md_marital` (`idmd_marital`, `status`, `deskripsi`) VALUES
(1, 'BK', 'Belum Kawin'),
(2, 'TK', 'Cerai Hidup / Cerai Mati'),
(3, 'BS', 'Bersuami (Orang Barata)'),
(4, 'K', 'Kawin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `md_organisasi`
--

CREATE TABLE `md_organisasi` (
  `idmd_organisasi` int(11) NOT NULL,
  `kodeorganisasi` varchar(100) DEFAULT NULL,
  `namaorganisasi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `md_organisasi`
--

INSERT INTO `md_organisasi` (`idmd_organisasi`, `kodeorganisasi`, `namaorganisasi`) VALUES
(1, 'DUT', 'Direktorat Utama'),
(2, 'DKS', 'Direktorat Keuangan, SDM & MR'),
(3, 'DOP', 'Direktorat Operasi'),
(4, 'DPS', 'Direktorat Pemasaran'),
(5, 'SKP', 'Sekretariat Perusahaan'),
(6, 'SPI', 'Satuan Pengawasan Intern'),
(7, 'BEJ', 'Biro Enjiniring'),
(8, 'BHC', 'Biro Human Campital'),
(9, 'BHM', 'Biro Hukum'),
(10, 'BKA', 'Biro Keuangan & Akuntansi'),
(11, 'BPU', 'Biro Pengembangan Usaha'),
(12, 'BSC', 'Biro Manajemen Supply Chain'),
(13, 'BSQ', 'Biro Sistem, Mutu & K3LH'),
(14, 'DKP', 'Divisi Industri Komponen & Permesinan'),
(15, 'DGA', 'Divisi Industri Gula & Agro'),
(16, 'DMG', 'Divisi Minyak & Gas'),
(17, 'DSA', 'Divisi Sumber Daya Air'),
(18, 'DPM', 'Divisi Pembangkit'),
(19, 'FOU', 'Pabrik Pengecoran'),
(20, 'PPI', 'Pabrik Peralatan Industri'),
(21, 'TGL', 'Pabrik Hidromekanikal Tegal'),
(22, 'PKT', 'Pabrik Komponen Turbin'),
(23, 'MDN', 'Pabrik Konstruksi Baja Medan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mk_jabatan`
--

CREATE TABLE `mk_jabatan` (
  `idmk_jabatan` int(11) NOT NULL,
  `idmd_jabatan` int(11) DEFAULT NULL,
  `npk` int(11) DEFAULT NULL,
  `idmd_bidang` int(11) DEFAULT NULL,
  `idmd_bagian` int(11) DEFAULT NULL,
  `idmd_organisasi` int(11) DEFAULT NULL,
  `idmd_level` int(11) DEFAULT NULL,
  `tglmulai` datetime DEFAULT NULL,
  `kategorifungsi` varchar(100) DEFAULT NULL,
  `statusjabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mk_pendidikan`
--

CREATE TABLE `mk_pendidikan` (
  `idmk_pendidikan` int(11) NOT NULL,
  `npk` int(11) DEFAULT NULL,
  `levelpendidikan` varchar(100) DEFAULT NULL,
  `jurusan` varchar(200) DEFAULT NULL,
  `institusi` varchar(100) DEFAULT NULL,
  `tahunlulus` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mk_renumerasi`
--

CREATE TABLE `mk_renumerasi` (
  `idmk_renumerasi` int(11) NOT NULL,
  `idmd_grade` int(11) DEFAULT NULL,
  `npk` int(11) DEFAULT NULL,
  `tgldiangkat` datetime DEFAULT NULL,
  `ub_gajipokokkonversi` int(11) DEFAULT NULL,
  `ub_tunjkesejahteraankonversi` int(11) DEFAULT NULL,
  `ub_tunjperalihanupahpokok` int(11) DEFAULT NULL,
  `ub_tunjperalihanjabatan` int(11) DEFAULT NULL,
  `ub_tunjperalihan` int(11) DEFAULT NULL,
  `ub_tunjjabatan` int(11) DEFAULT NULL,
  `ub_upahpokokberlaku` int(11) DEFAULT NULL,
  `uf_gajipokokkonversi` int(11) DEFAULT NULL,
  `uf_tunjkesejahteraankonversi` int(11) DEFAULT NULL,
  `uf_tunjperalihanupahpokok` int(11) DEFAULT NULL,
  `uf_tunjperalihanjabatan` int(11) DEFAULT NULL,
  `uf_tunjperalihan` int(11) DEFAULT NULL,
  `uf_tunjjabatan` int(11) DEFAULT NULL,
  `uf_upahpokokberlaku` int(11) DEFAULT NULL,
  `uf_tunjpenyesuaian` int(11) DEFAULT NULL,
  `statuskeaktifan` varchar(45) DEFAULT NULL,
  `statusdirumahkan` varchar(45) DEFAULT NULL,
  `batchdirumahkan` varchar(45) DEFAULT NULL,
  `tgldirumahkan` varchar(45) DEFAULT NULL,
  `aktivitasobsolete` varchar(45) DEFAULT NULL,
  `aktivitas2022` varchar(45) DEFAULT NULL,
  `subaktivitas` varchar(45) DEFAULT NULL,
  `statuskepegawaian` varchar(45) DEFAULT NULL,
  `tekniknonteknik` varchar(45) DEFAULT NULL,
  `golpend` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `md_bagian`
--
ALTER TABLE `md_bagian`
  ADD PRIMARY KEY (`idmd_bagian`);

--
-- Indeks untuk tabel `md_bidang`
--
ALTER TABLE `md_bidang`
  ADD PRIMARY KEY (`idmd_bidang`);

--
-- Indeks untuk tabel `md_grade`
--
ALTER TABLE `md_grade`
  ADD PRIMARY KEY (`idmd_grade`);

--
-- Indeks untuk tabel `md_jabatan`
--
ALTER TABLE `md_jabatan`
  ADD PRIMARY KEY (`idmd_jabatan`);

--
-- Indeks untuk tabel `md_karyawan`
--
ALTER TABLE `md_karyawan`
  ADD PRIMARY KEY (`npk`),
  ADD UNIQUE KEY `npk_UNIQUE` (`npk`);

--
-- Indeks untuk tabel `md_level`
--
ALTER TABLE `md_level`
  ADD PRIMARY KEY (`idmd_level`);

--
-- Indeks untuk tabel `md_marital`
--
ALTER TABLE `md_marital`
  ADD PRIMARY KEY (`idmd_marital`);

--
-- Indeks untuk tabel `md_organisasi`
--
ALTER TABLE `md_organisasi`
  ADD PRIMARY KEY (`idmd_organisasi`);

--
-- Indeks untuk tabel `mk_jabatan`
--
ALTER TABLE `mk_jabatan`
  ADD PRIMARY KEY (`idmk_jabatan`);

--
-- Indeks untuk tabel `mk_pendidikan`
--
ALTER TABLE `mk_pendidikan`
  ADD PRIMARY KEY (`idmk_pendidikan`);

--
-- Indeks untuk tabel `mk_renumerasi`
--
ALTER TABLE `mk_renumerasi`
  ADD PRIMARY KEY (`idmk_renumerasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `md_bagian`
--
ALTER TABLE `md_bagian`
  MODIFY `idmd_bagian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `md_bidang`
--
ALTER TABLE `md_bidang`
  MODIFY `idmd_bidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `md_grade`
--
ALTER TABLE `md_grade`
  MODIFY `idmd_grade` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `md_jabatan`
--
ALTER TABLE `md_jabatan`
  MODIFY `idmd_jabatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `md_level`
--
ALTER TABLE `md_level`
  MODIFY `idmd_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `md_marital`
--
ALTER TABLE `md_marital`
  MODIFY `idmd_marital` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `md_organisasi`
--
ALTER TABLE `md_organisasi`
  MODIFY `idmd_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `mk_jabatan`
--
ALTER TABLE `mk_jabatan`
  MODIFY `idmk_jabatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mk_pendidikan`
--
ALTER TABLE `mk_pendidikan`
  MODIFY `idmk_pendidikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mk_renumerasi`
--
ALTER TABLE `mk_renumerasi`
  MODIFY `idmk_renumerasi` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
