-- phpMyAdmin SQL Dump
-- version 4.4.3kkkkkkkkkk
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 13 Haz 2015, 13:44:31
-- Sunucu sürümü: 5.6.24
-- PHP Sürümü: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `database`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `en_demo`
--

CREATE TABLE IF NOT EXISTS `en_demo` (
  `id` int(11) NOT NULL,
  `ozellik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `deger` text COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tr_demo`
--

CREATE TABLE IF NOT EXISTS `tr_demo` (
  `id` int(11) NOT NULL,
  `ozellik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `deger` text COLLATE utf8_turkish_ci NOT NULL,
  `durum` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `en_demo`
--
ALTER TABLE `en_demo`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tr_demo`
--
ALTER TABLE `tr_demo`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `en_demo`
--
ALTER TABLE `en_demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `tr_demo`
--
ALTER TABLE `tr_demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
