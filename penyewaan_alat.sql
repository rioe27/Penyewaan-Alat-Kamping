-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2020 pada 07.17
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penyewaan_alat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_alat`
--

CREATE TABLE `data_alat` (
  `ID_alat` int(25) NOT NULL,
  `kode` varchar(80) DEFAULT NULL,
  `nama_alat` varchar(80) DEFAULT NULL,
  `kategori` varchar(80) DEFAULT NULL,
  `stok_alat` int(80) DEFAULT NULL,
  `warna` varchar(10) DEFAULT NULL,
  `harga_sewa` int(80) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_alat`
--

INSERT INTO `data_alat` (`ID_alat`, `kode`, `nama_alat`, `kategori`, `stok_alat`, `warna`, `harga_sewa`, `deskripsi`, `gambar`) VALUES
(16, 'A1', 'Tenda', 'Tenda', 5, 'hijau', 5000, 'Kap 4-5 Org', 'tenda4c-520x269.png'),
(17, 'B1', 'tas', 'Carrier(Tas)', 5, 'Hitam', 10000, 'Carrier vol 50-60L																																																		', '50b-520x520.png'),
(18, 'A2', 'Dome Go Java 2', 'Tenda', 5, 'biru', 10000, 'Kap 2-3 orang																				', 'tenda2e-520x2691.png'),
(19, 'C1', 'Kompor', 'Cooking Set', 10, 'Putih', 20000, '																																				', 'kompor2.png'),
(20, 'C2', 'Nesting', 'Cooking Set', 5, 'hitam', 5000, '																														', 'nesting.png'),
(21, 'C3', 'Kompor', 'Cooking Set', 10, 'hitam', 5000, '																				', 'kompor2.png'),
(22, 'D1', 'Jacket', 'Jacket', 5, 'Biru', 5000, '																				', 'jaket.png'),
(23, 'b24', 'jaket', 'Jacket', 10, 'Biru', 5000, '																														', 'jaket1.png'),
(24, 'E1', 'Head Lamp', 'Lighting', 10, 'Putih', 6000, '																														', 'headlamp-520x5201.png'),
(25, 'b21', 'Kompor', 'Cooking Set', 20, 'putih', 100000, '										', 'kompor1.png'),
(26, 'b1', 'sleeping bag', 'Other Equipment', 10, 'hitam', 10000, '', 'sleeping bag.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `denda`
--

CREATE TABLE `denda` (
  `id_denda` int(11) NOT NULL,
  `ID_sewa` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nama_alat` varchar(50) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `denda` int(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `denda`
--

INSERT INTO `denda` (`id_denda`, `ID_sewa`, `nama`, `nama_alat`, `tgl_pengembalian`, `denda`, `keterangan`) VALUES
(12, 0, 'mumu', 'tenda dome,jaket', '0000-00-00', 24000, 'telat 2 tahun'),
(13, 0, 'mumu', 'tenda dome,jaket', '0000-00-00', 24000, 'telat 1 tahun'),
(14, 0, 'mumu', 'tenda dome,jaket', '0000-00-00', 0, ''),
(15, 0, 'mumu', 'tenda dome,jaket', '0000-00-00', 0, ''),
(16, 0, 'mumu', 'tenda dome,jaket', '0000-00-00', 0, ''),
(17, 0, 'mumu', 'tenda dome,jaket', '0000-00-00', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerusakan_alat`
--

CREATE TABLE `kerusakan_alat` (
  `id_kerusakan` int(80) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kategori_barang` varchar(15) NOT NULL,
  `jumlah` int(90) NOT NULL,
  `label_alat` varchar(20) NOT NULL,
  `status_alat` varchar(80) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kerusakan_alat`
--

INSERT INTO `kerusakan_alat` (`id_kerusakan`, `nama_barang`, `kategori_barang`, `jumlah`, `label_alat`, `status_alat`, `keterangan`) VALUES
(1, 'HT', 'Other Equipment', 1, 'A01', 'Selesai Di Perbaiki', 'tidak menyala'),
(2, 'kompor', 'Cooking Set', 1, 'A02', 'Perbaiki', 'tidak menyala'),
(3, 'kompor', 'Cooking Set', 2, 'a2', 'Perbaiki', 'tidak menyala');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumen`
--

CREATE TABLE `konsumen` (
  `id_konsumen` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_tlpn` int(20) NOT NULL,
  `id_akun` int(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsumen`
--

INSERT INTO `konsumen` (`id_konsumen`, `nama`, `alamat`, `no_tlpn`, `id_akun`) VALUES
(1, 'Kaka', 'candi', 1314, 12),
(2, 'mumu', 'candi', 121, 13),
(3, 'yusudw', 'adad', 1314, 13),
(4, 'sas', 'asa', 454, 13),
(5, 'Kaka', 'adad', 1314, 13),
(6, 'Kaka', 'adad', 121313, 13),
(7, 'mumu', 'candi', 121, 13),
(8, 'Kaka', 'candi', 1213, 15),
(9, 'budi', 'candi', 1314, 20),
(10, 'Rudi', 'jl candi', 12324, 24);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `no_tlpn` int(80) NOT NULL,
  `tgl_transfer` date NOT NULL,
  `bank` varchar(80) NOT NULL,
  `no_rekening` int(80) DEFAULT NULL,
  `atas_nama` varchar(100) NOT NULL,
  `nominal_tf` int(80) NOT NULL,
  `biaya_sewa` int(80) NOT NULL,
  `bukti_tf` varchar(255) NOT NULL,
  `status` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `nama`, `no_tlpn`, `tgl_transfer`, `bank`, `no_rekening`, `atas_nama`, `nominal_tf`, `biaya_sewa`, `bukti_tf`, `status`) VALUES
(1, 'mumu', 12131, '2019-11-04', 'BRI', 121313, 'Mumu', 100000, 200000, '', 'Lunas'),
(3, 'Rudi', 12324, '2019-11-13', 'MANDIRI', 0, 'Budi sudarsono', 10000, 0, 'headlamp-520x520.png', 'Lunas'),
(4, 'SA', 134, '2019-11-14', 'MANDIRI', NULL, 'SA', 900, 0, 'headlamp-520x520.png', ''),
(5, 'Kaka', 12324, '2019-11-13', 'BNI', NULL, 'asa', 5000, 0, '50b-520x520.png', ''),
(6, 'budi', 12324, '2019-11-06', 'BRI', 8127313, 'Budi sudarsono', 5000, 0, 'lampu-520x520.png', 'Lunas'),
(7, 'kaka', 2147483647, '2019-11-28', 'BNI', 12131, 'candi', 9000, 0, 'jaket.png', 'belum lunas'),
(8, 'budi', 1212, '2019-11-28', 'BRI', 8127313, 'asad', 9000, 0, 'jaket.png', 'lunas'),
(9, 'rudi', 9012, '2019-12-03', 'BNI', 900, 'rudi', 10000, 0, 'nesting.png', 'Lunas'),
(10, 'budi', 12324, '2019-12-06', 'BRI', 12131, 'Budi sudarsono', 9000, 0, 'tenda4c-520x269.png', 'belum lunas'),
(11, 'deki', 1324, '2019-12-06', 'BNI', 813, 'deki', 10000, 0, 'kompor1.png', 'belum lunas'),
(12, 'rioe', 875632, '2019-12-09', 'BNI', 97631, 'Budi sudarsono', 50000, 0, 'sleeping bag.png', 'Lunas'),
(13, 'sugeng', 123, '2019-12-09', 'BNI', 4686, 'sandy', 2000, 0, 'sleeping bag.png', 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `ID_pengembalian` int(11) NOT NULL,
  `nama_alat` varchar(255) NOT NULL,
  `tgl_penyewaan` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `deskripsi_kondisi_alat` text NOT NULL,
  `ID_sewa` int(11) NOT NULL,
  `status_pengembalian` varchar(80) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `jumlah_alat` int(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`ID_pengembalian`, `nama_alat`, `tgl_penyewaan`, `tgl_pengembalian`, `deskripsi_kondisi_alat`, `ID_sewa`, `status_pengembalian`, `nama`, `jumlah_alat`) VALUES
(1, 'tenda dome 1,jaket 2', '2019-11-05', '2019-11-04', 'lengkap', 1, 'Di Kembalikan', 'Rydi', 0),
(2, '', '2019-11-20', '2019-11-21', '', 0, 'belum di kembalikan', 'budi', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewaan`
--

CREATE TABLE `penyewaan` (
  `ID_sewa` int(80) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `no_tlpn` int(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nama_alat` varchar(255) NOT NULL,
  `tgl_penyewaan` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `biaya_sewa` int(11) NOT NULL,
  `jumlah_alat` int(11) NOT NULL,
  `harga_sewa` int(11) NOT NULL,
  `subtotal` int(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `denda` int(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `ID_alat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyewaan`
--

INSERT INTO `penyewaan` (`ID_sewa`, `nama`, `no_tlpn`, `alamat`, `nama_alat`, `tgl_penyewaan`, `tgl_pengembalian`, `biaya_sewa`, `jumlah_alat`, `harga_sewa`, `subtotal`, `status`, `denda`, `keterangan`, `ID_alat`) VALUES
(3, 'jaja', 12324, 'jl candi', '', '2019-11-21', '2019-11-23', 0, 0, 0, 0, 'Di Kembalikan', 9000, '', 0),
(20, 'sinbi', 82222222, 'ssssssss', 'Tenda', '2019-11-01', '2019-11-29', 0, 1, 5000, 5000, '', 0, '', 0),
(22, 'budi', 2147483647, 'jl candi', 'Tenda', '2019-11-25', '2019-11-27', 0, 3, 5000, 15000, '', 0, '', 0),
(23, 'budi', 2147483647, 'jl candi', 'Nesting', '2019-11-25', '2019-11-27', 0, 1, 5000, 5000, 'Di Kembalikan', 0, 'kerusakan alat', 0),
(26, 'rudii', 231, 'jl candi', 'Kompor', '2019-12-02', '2019-12-04', 0, 1, 20000, 20000, 'Di Kembalikan', 1000, 'rusak alat', 0),
(27, 'sa', 2147483647, 'ada', 'Kompor', '2019-12-02', '2019-12-10', 0, 1, 20000, 20000, 'Belum Di Kembalikan', 0, '', 0),
(28, 'ORIE KURNIA TIRTA SANDY', 2147483647, 'jl candi', 'Kompor', '2019-12-01', '2019-12-03', 0, 1, 20000, 20000, 'Di Kembalikan', 0, 'kurasakan alat ', 0),
(33, 'deki', 1324, 'jl tidar', 'tas', '2019-12-06', '2019-12-11', 0, 2, 10000, 20000, '', 0, '', 0),
(34, 'deki', 1324, 'jl tidar', 'Dome Go Java 2', '2019-12-06', '2019-12-11', 0, 1, 10000, 10000, '', 0, '', 0),
(35, 'rioe', 875632, 'jl tidar no 26', 'Kompor', '2019-12-09', '2019-12-12', 0, 1, 20000, 20000, '', 0, '', 0),
(36, 'rioe', 875632, 'jl tidar no 26', 'Dome Go Java 2', '2019-12-09', '2019-12-12', 0, 3, 10000, 30000, '', 0, '', 0),
(37, 'budi', 1314, 'candi', 'Dome Go Java 2', '2019-12-07', '2019-12-11', 0, 1, 10000, 10000, '', 0, '', 0),
(38, 'budi', 1314, 'candi', 'Tenda', '2019-12-07', '2019-12-11', 0, 10, 5000, 50000, '', 0, '', 0);

--
-- Trigger `penyewaan`
--
DELIMITER $$
CREATE TRIGGER `sewa` BEFORE UPDATE ON `penyewaan` FOR EACH ROW BEGIN
 UPDATE data_alat SET stok_alat=stok_alat-NEW.jumlah_alat
 WHERE ID_alat =NEW.ID_alat;

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(255) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(5, 'rioe2', '123456', 1),
(16, 'koko', 'admin', 2),
(18, 'gudang', 'gudang', 3),
(19, 'owner', 'owner', 4),
(20, 'budi', '1234567', 1),
(21, 'bajingan', '123456', 1),
(22, 'sandi', '12345678', 1),
(23, 'sa', 'asa', 1),
(24, 'rino', '123456', 1),
(25, 'helmi', '1234567', 1),
(26, 'susi', '12345678', 1),
(27, 'rio', '123456', 1),
(28, 'rudi', '123456', 1),
(29, 'susi', '123456', 1),
(30, 'babi', '123456', 1),
(31, 'deki', '123456', 1),
(32, 'rioe', '123456', 1);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `v_penyewaan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_penyewaan` (
`ID_sewa` int(80)
,`nama` varchar(80)
,`no_tlpn` int(15)
,`alamat` varchar(255)
,`nama_alat` varchar(255)
,`tgl_penyewaan` date
,`tgl_pengembalian` date
,`biaya_sewa` int(11)
,`jumlah_alat` int(11)
,`harga_sewa` int(11)
,`subtotal` int(20)
,`status` varchar(50)
,`denda` int(50)
,`keterangan` varchar(50)
,`ID_alat` int(11)
,`subtotal2` bigint(21)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_penyewaan`
--
DROP TABLE IF EXISTS `v_penyewaan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_penyewaan`  AS  select `penyewaan`.`ID_sewa` AS `ID_sewa`,`penyewaan`.`nama` AS `nama`,`penyewaan`.`no_tlpn` AS `no_tlpn`,`penyewaan`.`alamat` AS `alamat`,`penyewaan`.`nama_alat` AS `nama_alat`,`penyewaan`.`tgl_penyewaan` AS `tgl_penyewaan`,`penyewaan`.`tgl_pengembalian` AS `tgl_pengembalian`,`penyewaan`.`biaya_sewa` AS `biaya_sewa`,`penyewaan`.`jumlah_alat` AS `jumlah_alat`,`penyewaan`.`harga_sewa` AS `harga_sewa`,`penyewaan`.`subtotal` AS `subtotal`,`penyewaan`.`status` AS `status`,`penyewaan`.`denda` AS `denda`,`penyewaan`.`keterangan` AS `keterangan`,`penyewaan`.`ID_alat` AS `ID_alat`,(`penyewaan`.`jumlah_alat` * `penyewaan`.`harga_sewa`) AS `subtotal2` from `penyewaan` where 1 ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_alat`
--
ALTER TABLE `data_alat`
  ADD PRIMARY KEY (`ID_alat`);

--
-- Indeks untuk tabel `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`id_denda`);

--
-- Indeks untuk tabel `kerusakan_alat`
--
ALTER TABLE `kerusakan_alat`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indeks untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`ID_pengembalian`);

--
-- Indeks untuk tabel `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD PRIMARY KEY (`ID_sewa`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_alat`
--
ALTER TABLE `data_alat`
  MODIFY `ID_alat` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `denda`
--
ALTER TABLE `denda`
  MODIFY `id_denda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `kerusakan_alat`
--
ALTER TABLE `kerusakan_alat`
  MODIFY `id_kerusakan` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id_konsumen` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `ID_pengembalian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `penyewaan`
--
ALTER TABLE `penyewaan`
  MODIFY `ID_sewa` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
