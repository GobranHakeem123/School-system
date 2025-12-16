-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 08 مارس 2024 الساعة 18:41
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
  `home_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- بنية الجدول `sections`
--

CREATE TABLE `sections` (
  `sec_id` int(11) NOT NULL,
  `sec_name` varchar(255) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `ser_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `student_attendance`
--

CREATE TABLE `student_attendance` (
  `atten_id` int(11) NOT NULL,
  `result_atten` tinyint(1) DEFAULT NULL,
  `stu_id` int(11) DEFAULT NULL,
  `tea_id` int(11) DEFAULT NULL,
  `sub_id` int(11) DEFAULT NULL,
  `sha_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `subjects`
--

CREATE TABLE `subjects` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
  `home_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
