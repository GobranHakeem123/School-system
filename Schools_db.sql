-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 27 مارس 2024 الساعة 20:32
-- إصدار الخادم: 5.6.38
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Schools_db`
--

-- --------------------------------------------------------

--
-- بنية الجدول `administration`
--

CREATE TABLE `administration` (
  `adm_id` int(11) NOT NULL,
  `adm_name` varchar(255) DEFAULT NULL,
  `adm_job` varchar(255) DEFAULT NULL,
  `tea_id` int(11) DEFAULT NULL,
  `adm_sale` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `assignments`
--

CREATE TABLE `assignments` (
  `home_id` int(11) NOT NULL,
  `homework` varchar(255) DEFAULT NULL,
  `date_home` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `assignments`
--

INSERT INTO `assignments` (`home_id`, `homework`, `date_home`) VALUES
(1, '351351', '2024-03-15'),
(2, '21321', '2024-03-15'),
(3, '1531', '2024-03-15'),
(4, 'Ø¨Ù„Ø§ÙÙ‚Ø§ÙÙ‚Ø§', '2024-03-15'),
(5, '534\r\n31\r\n132131', '2024-03-15'),
(6, '534\r\n31\r\n132131', '2024-03-15'),
(7, ',lk', '2024-03-15');

-- --------------------------------------------------------

--
-- بنية الجدول `cash_box`
--

CREATE TABLE `cash_box` (
  `cash_id` int(11) NOT NULL,
  `cash_amount` decimal(10,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `classes`
--

CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `classes`
--

INSERT INTO `classes` (`class_id`, `class_name`) VALUES
(1, 'أول'),
(2, 'الثاني'),
(0, '');

-- --------------------------------------------------------

--
-- بنية الجدول `employees`
--

CREATE TABLE `employees` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) DEFAULT NULL,
  `staff_job` varchar(255) DEFAULT NULL,
  `tea_id` int(11) DEFAULT NULL,
  `staff_sale` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `employee_attendance`
--

CREATE TABLE `employee_attendance` (
  `atten_staff_id` int(11) NOT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `result_atten` tinyint(1) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `events_news`
--

CREATE TABLE `events_news` (
  `new_id` int(11) NOT NULL,
  `news` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `events_news`
--

INSERT INTO `events_news` (`new_id`, `news`) VALUES
(1, 'بلا بلا بلا'),
(2, 'بلا بلا بلا');

-- --------------------------------------------------------

--
-- بنية الجدول `exams`
--

CREATE TABLE `exams` (
  `exam_id` int(11) NOT NULL,
  `exam_name` varchar(255) DEFAULT NULL,
  `sub_id` int(11) DEFAULT NULL,
  `tea_id` int(11) DEFAULT NULL,
  `stu_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `expenses`
--

CREATE TABLE `expenses` (
  `expense_id` int(11) NOT NULL,
  `expense_name` varchar(255) DEFAULT NULL,
  `expense_amount` decimal(10,2) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `cash_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `financial_resources`
--

CREATE TABLE `financial_resources` (
  `resource_id` int(11) NOT NULL,
  `resource_name` varchar(255) DEFAULT NULL,
  `resource_amount` decimal(10,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `grades`
--

CREATE TABLE `grades` (
  `result_id` int(11) NOT NULL,
  `stu_id` int(11) DEFAULT NULL,
  `sub_id` int(11) DEFAULT NULL,
  `par_id` int(11) DEFAULT NULL,
  `result` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `guardians`
--

CREATE TABLE `guardians` (
  `par_id` int(11) NOT NULL,
  `par_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_par` int(11) DEFAULT NULL,
  `pass_par` varchar(255) DEFAULT NULL,
  `home_id` int(11) DEFAULT NULL,
  `account_par` varchar(10) DEFAULT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'parent'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `guardians`
--

INSERT INTO `guardians` (`par_id`, `par_name`, `address`, `phone_par`, `pass_par`, `home_id`, `account_par`, `usertype`) VALUES
(1, 'admin', 'yemen', 776294103, '123', 111, '8884380419', ''),
(0, '', '', 0, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- بنية الجدول `lessons_table`
--

CREATE TABLE `lessons_table` (
  `sha_id` int(11) NOT NULL,
  `sha_name` varchar(255) DEFAULT NULL,
  `sec_id` int(11) DEFAULT NULL,
  `sub_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `tea_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `lessons_table`
--

INSERT INTO `lessons_table` (`sha_id`, `sha_name`, `sec_id`, `sub_id`, `class_id`, `date`, `time`, `tea_id`) VALUES
(1, 'الاولى', 1, 1, 1, '2024-03-16', '09:26:27', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `notes`
--

CREATE TABLE `notes` (
  `id_note` int(11) NOT NULL,
  `sender_name` varchar(255) DEFAULT NULL,
  `note_text` text,
  `stu_id` int(11) DEFAULT NULL,
  `par_id` int(11) DEFAULT NULL,
  `tea_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `notifications`
--

CREATE TABLE `notifications` (
  `noti_id` int(11) NOT NULL,
  `par_id` int(11) DEFAULT NULL,
  `noti` varchar(255) DEFAULT NULL,
  `stu_id` int(11) DEFAULT NULL,
  `tea_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `notifications`
--

INSERT INTO `notifications` (`noti_id`, `par_id`, `noti`, `stu_id`, `tea_id`) VALUES
(0, NULL, '', NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `sections`
--

CREATE TABLE `sections` (
  `sec_id` int(11) NOT NULL,
  `sec_name` varchar(255) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `sections`
--

INSERT INTO `sections` (`sec_id`, `sec_name`, `class_id`) VALUES
(1, 'ا', 1),
(2, 'ب', 2);

-- --------------------------------------------------------

--
-- بنية الجدول `students`
--

CREATE TABLE `students` (
  `stu_id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `cert_id` int(11) DEFAULT NULL,
  `stu_name` varchar(255) DEFAULT NULL,
  `par_id` int(11) DEFAULT NULL,
  `phone_id` int(11) DEFAULT NULL,
  `pass_stu` varchar(255) DEFAULT NULL,
  `home_id` int(11) DEFAULT NULL,
  `ser_id` int(11) DEFAULT NULL,
  `account_stu` varchar(10) DEFAULT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'student'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `students`
--

INSERT INTO `students` (`stu_id`, `class_id`, `cert_id`, `stu_name`, `par_id`, `phone_id`, `pass_stu`, `home_id`, `ser_id`, `account_stu`, `usertype`) VALUES
(2, 1, 1, 'ahmed', 2, 7629410, '000', 1, 1, '7771883134', ''),
(1, 1, 1, 'admin', 1, 76294103, '123', 1, 1, '7772520190', ''),
(3, 2, 1, 'علي', 2, 7629410, '000', NULL, 2, '7776951548', ''),
(0, NULL, NULL, '', NULL, 0, NULL, NULL, NULL, NULL, ''),
(5, 1, 1, 'stu', 1, 758655, '52', 1, 1, NULL, 'student');

-- --------------------------------------------------------

--
-- بنية الجدول `student_attendance`
--

CREATE TABLE `student_attendance` (
  `atten_id` int(11) NOT NULL,
  `result_atten` varchar(255) DEFAULT NULL,
  `stu_id` int(11) DEFAULT NULL,
  `tea_id` int(11) DEFAULT NULL,
  `sub_id` int(11) DEFAULT NULL,
  `sha_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `student_attendance`
--

INSERT INTO `student_attendance` (`atten_id`, `result_atten`, `stu_id`, `tea_id`, `sub_id`, `sha_id`, `date`, `day`) VALUES
(18, 'حاضر', 1, 0, 0, 0, '2024-03-15', 'Friday'),
(17, 'حاضر', 2, 0, 0, 0, '2024-03-15', 'Friday'),
(16, 'حاضر', 1, 0, 0, 0, '2024-03-15', 'Friday'),
(15, 'حاضر', 2, 0, 0, 0, '2024-03-15', 'Friday'),
(14, 'حاضر', 3, 0, 0, 0, '2024-03-15', 'Friday'),
(13, 'حاضر', 1, 0, 0, 0, '2024-03-15', 'Friday'),
(12, 'حاضر', 2, 0, 0, 0, '2024-03-15', 'Friday'),
(19, 'غائب', 2, 0, 0, 0, '2024-03-15', 'Friday'),
(20, 'غائب', 1, 0, 0, 0, '2024-03-15', 'Friday'),
(21, 'حاضر', 2, 0, 0, 0, '2024-03-15', 'Friday'),
(22, 'حاضر', 1, 0, 0, 0, '2024-03-15', 'Friday'),
(23, 'حاضر', 2, 0, 0, 0, '2024-03-15', 'Friday'),
(24, 'حاضر', 1, 0, 0, 0, '2024-03-15', 'Friday'),
(25, 'حاضر', 2, 0, 0, 0, '2024-03-15', 'Friday'),
(26, 'حاضر', 1, 0, 0, 0, '2024-03-15', 'Friday'),
(27, 'حاضر', 3, 0, 0, 0, '2024-03-15', 'Friday'),
(28, 'حاضر', 3, 0, 0, 0, '2024-03-15', 'Friday'),
(29, 'مستأذن', 3, 0, 0, 0, '2024-03-15', 'Friday'),
(30, 'مستأذن', 3, 0, 0, 0, '2024-03-15', 'Friday'),
(31, 'حاضر', 2, 0, 0, 0, '2024-03-21', 'Thursday'),
(32, 'حاضر', 1, 0, 0, 0, '2024-03-21', 'Thursday');

-- --------------------------------------------------------

--
-- بنية الجدول `subjects`
--

CREATE TABLE `subjects` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `subjects`
--

INSERT INTO `subjects` (`sub_id`, `sub_name`) VALUES
(1, 'قران'),
(2, 'اسلامية'),
(0, '');

-- --------------------------------------------------------

--
-- بنية الجدول `teachers`
--

CREATE TABLE `teachers` (
  `tea_id` int(11) NOT NULL,
  `tea_name` varchar(255) DEFAULT NULL,
  `phone_tea` int(11) DEFAULT NULL,
  `sale_id` int(11) DEFAULT NULL,
  `pass_tea` varchar(255) DEFAULT NULL,
  `sub_id` int(11) DEFAULT NULL,
  `home_id` int(11) DEFAULT NULL,
  `account_tea` varchar(10) DEFAULT NULL,
  `usertype` varchar(255) CHARACTER SET utf8mb4 NOT NULL DEFAULT 'teacher'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `teachers`
--

INSERT INTO `teachers` (`tea_id`, `tea_name`, `phone_tea`, `sale_id`, `pass_tea`, `sub_id`, `home_id`, `account_tea`, `usertype`) VALUES
(1, 'hi', 776294103, 20000, '123', 0, 12, '9996483342', ''),
(2, 'adminn', 776294103, 2030, '123', 1, 1, '7382837', 'teacher');

-- --------------------------------------------------------

--
-- بنية الجدول `tuition_fees`
--

CREATE TABLE `tuition_fees` (
  `mony_id` int(11) NOT NULL,
  `count_mony` int(11) DEFAULT NULL,
  `set_mony` int(11) DEFAULT NULL,
  `stu_id` int(11) DEFAULT NULL,
  `par_id` int(11) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `expense_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `tuition_fees`
--

INSERT INTO `tuition_fees` (`mony_id`, `count_mony`, `set_mony`, `stu_id`, `par_id`, `class_id`, `expense_id`) VALUES
(0, 0, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `usertype` varchar(50) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(11) NOT NULL,
  `user_pass` int(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_account` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`user_id`, `usertype`, `phone`, `user_pass`, `user_name`, `user_account`) VALUES
(10, 'teacher', '7629410', 111, 'nam', '0002102829'),
(12, 'teacher', '1', 0, '', '0007555412'),
(13, 'teacher', '1', 0, '', '0009539288'),
(14, 'teacher', '1', 0, '', '0005429817'),
(15, 'teacher', '1', 0, '', '0008531223'),
(16, 'teacher', '1', 0, '', '0006366663'),
(17, 'teacher', '1', 0, '', '0006239646'),
(18, 'teacher', '1', 0, '', '0002098243'),
(19, 'teacher', '1', 0, '', '0001772277'),
(20, 'teacher', '1', 0, '', '0002566656'),
(21, 'teacher', '1', 0, '', '0007516451'),
(22, 'teacher', '1', 0, '', '0009882287'),
(23, 'teacher', '1', 0, '', '0006862081'),
(24, 'teacher', '1', 0, '', '0004663547');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`adm_id`),
  ADD KEY `tea_id` (`tea_id`),
  ADD KEY `adm_sale` (`adm_sale`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `cash_box`
--
ALTER TABLE `cash_box`
  ADD PRIMARY KEY (`cash_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `tea_id` (`tea_id`),
  ADD KEY `staff_sale` (`staff_sale`);

--
-- Indexes for table `employee_attendance`
--
ALTER TABLE `employee_attendance`
  ADD PRIMARY KEY (`atten_staff_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `events_news`
--
ALTER TABLE `events_news`
  ADD PRIMARY KEY (`new_id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`exam_id`),
  ADD KEY `sub_id` (`sub_id`),
  ADD KEY `tea_id` (`tea_id`),
  ADD KEY `stu_id` (`stu_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expense_id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `cash_id` (`cash_id`);

--
-- Indexes for table `financial_resources`
--
ALTER TABLE `financial_resources`
  ADD PRIMARY KEY (`resource_id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `stu_id` (`stu_id`),
  ADD KEY `sub_id` (`sub_id`),
  ADD KEY `par_id` (`par_id`);

--
-- Indexes for table `guardians`
--
ALTER TABLE `guardians`
  ADD PRIMARY KEY (`par_id`),
  ADD KEY `home_id` (`home_id`);

--
-- Indexes for table `lessons_table`
--
ALTER TABLE `lessons_table`
  ADD PRIMARY KEY (`sha_id`),
  ADD KEY `sec_id` (`sec_id`),
  ADD KEY `sub_id` (`sub_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `tea_id` (`tea_id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id_note`),
  ADD KEY `fk_notes_student` (`stu_id`),
  ADD KEY `fk_notes_parent` (`par_id`),
  ADD KEY `fk_notes_teacher` (`tea_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`noti_id`),
  ADD KEY `par_id` (`par_id`),
  ADD KEY `stu_id` (`stu_id`),
  ADD KEY `tea_id` (`tea_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`sec_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stu_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `cert_id` (`cert_id`),
  ADD KEY `par_id` (`par_id`),
  ADD KEY `phone_id` (`phone_id`),
  ADD KEY `home_id` (`home_id`),
  ADD KEY `ser_id` (`ser_id`);

--
-- Indexes for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD PRIMARY KEY (`atten_id`),
  ADD KEY `stu_id` (`stu_id`),
  ADD KEY `tea_id` (`tea_id`),
  ADD KEY `sub_id` (`sub_id`),
  ADD KEY `sha_id` (`sha_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`tea_id`),
  ADD KEY `sale_id` (`sale_id`),
  ADD KEY `sub_id` (`sub_id`),
  ADD KEY `home_id` (`home_id`);

--
-- Indexes for table `tuition_fees`
--
ALTER TABLE `tuition_fees`
  ADD PRIMARY KEY (`mony_id`),
  ADD KEY `stu_id` (`stu_id`),
  ADD KEY `par_id` (`par_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `expense_id` (`expense_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `usertype` (`usertype`),
  ADD KEY `phone` (`phone`),
  ADD KEY `user_pass` (`user_pass`),
  ADD KEY `user_name` (`user_name`(191));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_attendance`
--
ALTER TABLE `student_attendance`
  MODIFY `atten_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
