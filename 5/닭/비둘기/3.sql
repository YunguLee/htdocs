-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-10-06 13:24
-- 서버 버전: 10.1.16-MariaDB
-- PHP 버전: 5.6.24

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
-- 테이블 구조 `userimp`
--

CREATE TABLE `userimp` (
  `idx` int(11) NOT NULL,
  `ko_name` varchar(20) NOT NULL,
  `en_name` varchar(30) NOT NULL,
  `biryear` varchar(15) NOT NULL,
  `userid` varchar(30) NOT NULL,
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

INSERT INTO `userimp` (`idx`, `ko_name`, `en_name`, `biryear`, `userid`, `pw`, `phone`, `o_phone`, `agreement`, `e_mail`, `homenumber`, `homeadd`, `dmsend`, `work`, `job_family`, `position`, `workhomenumber`, `workhomeadd`, `work_number`, `fax_number`, `marry`, `maryear`) VALUES
(4, '정승리', 'JungSeungLi', '1999-3-7', '', '123', '031-497-3860', '010-3334-5942', '', 'sodas789@naver.', '143-885', '서울특별시 광진구 긴고랑로15길 21 (중곡동 31-43,파인빌15차)-201호', 'on', '스카이프', '신', '밥먹기', '143-903', '서울특별시 광진구 긴고랑로 1 (중곡동 238-5,타이어테크)-2323', '010-3334-1233', '010-2323-1233', 'on', '1905-6-9'),
(5, '김형준', 'kimhyungjun', '1997-9-12', '', '1234', '031-497-3860', '010-4564-8797', '', 'rlagudwns@naver', '135-964', '서울특별시 강남구 개포로 205 (개포동 1239-19,양재빌딩)-212', 'on', '호디', '청소부', '알바', '153-803', '서울특별시 금천구 가마산로 70 (가산동 535-3,제일정밀사)-201', '010-3323-1232', '010-2321-2313', 'on', '1916-4-7'),
(6, '이민환', 'LeeMinHwan', '2005-6-12', 'nonoji08', 'happy', '031-6894-1554', '010-2313-4544', '', 'nonojo08@naver.', '153-864', '서울특별시 금천구 금하로 596 (시흥동 995-29)-123123', 'on', '노노엔터테인먼트', '운반사', 'Admin', '135-888', '서울특별시 강남구 압구정로 102 (신사동 527-4,형지제2빌딩)-3123', '010-4548-4562', '010-4564-8123', 'on', '1917-9-13');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `userimp`
--
ALTER TABLE `userimp`
  ADD KEY `idx` (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `userimp`
--
ALTER TABLE `userimp`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
