-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-10-06 04:29
-- 서버 버전: 10.1.13-MariaDB
-- PHP 버전: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `userim`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `test`
--

CREATE TABLE `test` (
  `idx` int(11) NOT NULL,
  `ko_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `test`
--

INSERT INTO `test` (`idx`, `ko_name`) VALUES
(1, 'ddddd<br/>');

-- --------------------------------------------------------

--
-- 테이블 구조 `userimp`
--

CREATE TABLE `userimp` (
  `idx` int(11) NOT NULL,
  `ko_name` varchar(20) NOT NULL,
  `en_name` varchar(30) NOT NULL,
  `biryear` varchar(15) NOT NULL,
  `pw` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `o_phone` varchar(15) NOT NULL,
  `agreement` varchar(3) NOT NULL,
  `e_mail` varchar(15) NOT NULL,
  `homenumber` varchar(100) NOT NULL,
  `homeadd` varchar(100) NOT NULL,
  `dmsend` varchar(5) NOT NULL,
  `work` varchar(20) NOT NULL,
  `job_family` varchar(15) NOT NULL,
  `position` varchar(15) NOT NULL,
  `workhomenumber` varchar(100) NOT NULL,
  `workhomeadd` varchar(100) NOT NULL,
  `work_number` varchar(20) NOT NULL,
  `fax_number` varchar(20) NOT NULL,
  `marry` varchar(3) NOT NULL,
  `maryear` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `userimp`
--

INSERT INTO `userimp` (`idx`, `ko_name`, `en_name`, `biryear`, `pw`, `phone`, `o_phone`, `agreement`, `e_mail`, `homenumber`, `homeadd`, `dmsend`, `work`, `job_family`, `position`, `workhomenumber`, `workhomeadd`, `work_number`, `fax_number`, `marry`, `maryear`) VALUES
(4, '정승리', 'JungSeungLi', '1999-3-7', '123', '031-497-3860', '010-3334-5942', '', 'sodas789@naver.', '143-885', '서울특별시 광진구 긴고랑로15길 21 (중곡동 31-43,파인빌15차)-201호', 'on', '스카이프', '신', '밥먹기', '143-903', '서울특별시 광진구 긴고랑로 1 (중곡동 238-5,타이어테크)-2323', '010-3334-1233', '010-2323-1233', 'on', '1905-6-9');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `userimp`
--
ALTER TABLE `userimp`
  ADD KEY `idx` (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `test`
--
ALTER TABLE `test`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 테이블의 AUTO_INCREMENT `userimp`
--
ALTER TABLE `userimp`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
