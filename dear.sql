-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 22-12-08 12:28
-- 서버 버전: 10.4.25-MariaDB
-- PHP 버전: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `dear`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `chat`
--

CREATE TABLE `chat` (
  `text` text NOT NULL,
  `date` date NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `chat`
--

INSERT INTO `chat` (`text`, `date`, `time`) VALUES
('dd', '0000-00-00', ''),
('dd', '0000-00-00', ''),
('다들 뭐하냥', '0000-00-00', ''),
('심심한데.. 같이 놀분 구함', '0000-00-00', ''),
('<?php echo $member[\'profile_image\']; ?>아 응!원', '0000-00-00', ''),
('<?php echo $member[\'profile_image\']; ?>아 응!원', '0000-00-00', ''),
('<?php echo $member[name\']; ?>', '0000-00-00', ''),
('조유리 최고', '2022-07-24', '12:12');

-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `idx` int(11) NOT NULL,
  `id` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `profile_image` text NOT NULL DEFAULT 'https://i.ibb.co/Jknj97C/profile.png',
  `intro` text NOT NULL DEFAULT '소개 문구가 없습니다.',
  `bg_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `member`
--

INSERT INTO `member` (`idx`, `id`, `pw`, `name`, `adress`, `sex`, `profile_image`, `intro`, `bg_image`) VALUES
(1, 'admin', '$2y$10$crvWQLmA3Yew2wAaxtJqAeqC.3tpdpMNxXAbmmcAmqQAjbAiJv3ty', '관리자', '관리자 주소', '남', 'admin@naver.com', '', ''),
(2, 'test1', '$2y$10$diFbTu./6rrQoMLEjjkpLeYKGYojXyHmIySjHuDDnqfA3jDRFnf8O', '테스트계정', '대구', '남', 'leebkgyu97@gmail.com', '', ''),
(3, 'usertest', '$2y$10$yBGpn.GtYxS/Ev6SnEZnh.y6Oppl96Ck2P0YhZEyGK8RuhFXVtRR2', '1234', '1234', '남', '1234@naver.com', '', ''),
(4, 'oopseong', '$2y$10$F7FK4ggNEyCEia7KsoUHcOLHui7uXkhMmiuOKACJNxTHR827OYFfy', '박민성', '01012345678', '', 'https://i.ibb.co/8dx4pDN/images.jpg', '날씨가 츄.. 아니 추움 ❄️', 'https://i.ibb.co/jhGScXt/Ek4-YW7m-U0-AAPj-UA.jpg'),
(5, 'test2', '$2y$10$qdEqggbYCZSlvcWgv7iil.Acr07e.w.EV0aptpw5c8zXwN0LtEXZO', '김디어s', '01023456789s', '', 'https://i.ibb.co/Jknj97C/profile.png', '소개글을 입력해주세요.s', 'https://i.ibb.co/jhGScXt/Ek4-YW7m-U0-AAPj-UA.jpg');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
