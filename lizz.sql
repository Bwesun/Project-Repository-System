-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Nov 12, 2018 at 01:02 PM
-- Server version: 5.0.27
-- PHP Version: 5.2.1
-- 
-- Database: `lizz`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `id` int(2) NOT NULL auto_increment,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` (`id`, `username`, `password`) VALUES 
(1, 'admin', 'admin'),
(2, 'innocent', 'admin');

-- --------------------------------------------------------

-- 
-- Table structure for table `project`
-- 

CREATE TABLE `project` (
  `id` int(3) NOT NULL auto_increment,
  `author` varchar(20) NOT NULL,
  `regnum` varchar(20) NOT NULL,
  `level` varchar(4) NOT NULL,
  `year` varchar(5) NOT NULL,
  `topic` varchar(225) NOT NULL,
  `abs` varchar(2000) NOT NULL,
  `filename` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

-- 
-- Dumping data for table `project`
-- 

INSERT INTO `project` (`id`, `author`, `regnum`, `level`, `year`, `topic`, `abs`, `filename`) VALUES 
(6, 'wdf', 'ndcs/2015/240', 'ND', '2017', 'Design and Implementation of an Online Disxussuion Forum', 'Computer Science Department,\r\nDirectorate of Science and Technology,\r\nNILEST, Samaru, Zaria\r\nNigeria.\r\n© 2018 Computer Science Department, NILEST Computer Science Department,\r\nDirectorate of Science and Technology,\r\nNILEST, Samaru, Zaria\r\nNigeria.\r\n© 2018 Computer Science Department, NILEST Computer Science Department,\r\nDirectorate of Science and Technology,\r\nNILEST, Samaru, Zaria\r\nNigeria.\r\n© 2018 Computer Science Department, NILEST Computer Science Department,\r\nDirectorate of Science and Technology,\r\nNILEST, Samaru, Zaria\r\nNigeria.\r\n© 2018 Computer Science Department, NILEST Computer Science Department,\r\nDirectorate of Science and Technology,\r\nNILEST, Samaru, Zaria\r\nNigeria.\r\n© 2018 Computer Science Department, NILEST Computer Science Department,\r\nDirectorate of Science and Technology,\r\nNILEST, Samaru, Zaria\r\nNigeria.\r\n© 2018 Computer Science Department, NILEST Computer Science Department,\r\nDirectorate of Science and Technology,\r\nNILEST, Samaru, Zaria\r\nNigeria.\r\n© 2018 Computer Science Department, NILEST ', '9781590590201-c1.pdf'),
(13, 'Stephen Bukar', 'NDCS/2015/246', 'ND', '2017', 'Design and Implementation of a Departmental Website', 'The world is fast becoming a global village due to the effect of globalization and rapid growth in technology. This has enabled information sharing among various people of the world, thereby solving basic societal problems and bringing about rapid development. The study designs and implements an online discussion forum where computer science students of NILEST can come together and interact online. Various forums such as students’, staff and general forums in general can be integrated into this online forum. Faced with the challenges many computer sciences students face when trying to execute some of their projects, I the researcher deem it fit to create a social platform where students can register, log in, ask IT questions and get quality answers from users and admin, create numerous computer and ICT related topics to inform others, and get others to read their thoughts and projects and reply their posts. Concerning methodology, the system was created using HTML, PHP and MySQL technology. The aim of the system is to create an online discussion forum where users can create various topics, reply topics and moderate topics by the administrator of the site. ', 'chapter one.htm'),
(14, 'Stephen Bukar', 'NDCS/2015/246', 'ND', '2017', 'Design and Implementation of a Departmental Website', 'The world is fast becoming a global village due to the effect of globalization and rapid growth in technology. This has enabled information sharing among various people of the world, thereby solving basic societal problems and bringing about rapid development. The study designs and implements an online discussion forum where computer science students of NILEST can come together and interact online. Various forums such as students’, staff and general forums in general can be integrated into this online forum. Faced with the challenges many computer sciences students face when trying to execute some of their projects, I the researcher deem it fit to create a social platform where students can register, log in, ask IT questions and get quality answers from users and admin, create numerous computer and ICT related topics to inform others, and get others to read their thoughts and projects and reply their posts. Concerning methodology, the system was created using HTML, PHP and MySQL technology. The aim of the system is to create an online discussion forum where users can create various topics, reply topics and moderate topics by the administrator of the site. ', 'TROUBLE.htm'),
(15, 'Matur Innocent Joshu', 'NDCS/2015/240', 'ND', '2017', 'Design and Implementation of an Online Discussion Forum', 'The world is fast becoming a global village due to the effect of globalization and rapid growth in technology. This has enabled information sharing among various people of the world, thereby solving basic societal problems and bringing about rapid development. The study designs and implements an online discussion forum where computer science students of NILEST can come together and interact online. Various forums such as students’, staff and general forums in general can be integrated into this online forum. Faced with the challenges many computer sciences students face when trying to execute some of their projects, I the researcher deem it fit to create a social platform where students can register, log in, ask IT questions and get quality answers from users and admin, create numerous computer and ICT related topics to inform others, and get others to read their thoughts and projects and reply their posts. Concerning methodology, the system was created using HTML, PHP and MySQL technology. The aim of the system is to create an online discussion forum where users can create various topics, reply topics and moderate topics by the administrator of the site. ', 'CHAPTER ONE.htm'),
(16, 'Abdul Dari', 'HNDCS/2015/240', 'HND', '2018', 'Design and Construction of a Simple USB Port Charger', 'The world is fast becoming a global village due to the effect of globalization and rapid growth in technology. This has enabled information sharing among various people of the world, thereby solving basic societal problems and bringing about rapid development. The study designs and implements an online discussion forum where computer science students of NILEST can come together and interact online. Various forums such as students’, staff and general forums in general can be integrated into this online forum. Faced with the challenges many computer sciences students face when trying to execute some of their projects, I the researcher deem it fit to create a social platform where students can register, log in, ask IT questions and get quality answers from users and admin, create numerous computer and ICT related topics to inform others, and get others to read their thoughts and projects and reply their posts. Concerning methodology, the system was created using HTML, PHP and MySQL technology. The aim of the system is to create an online discussion forum where users can create various topics, reply topics and moderate topics by the administrator of the site. ', 'CHAPTER ONE.htm'),
(17, 'Matthew Candiance', 'HNDCS/2015/241', 'ND', '2015', 'Design and Construction of a Simple USB Port Charger', 'The world is fast becoming a global village due to the effect of globalization and rapid growth in technology. This has enabled information sharing among various people of the world, thereby solving basic societal problems and bringing about rapid development. The study designs and implements an online discussion forum where computer science students of NILEST can come together and interact online. Various forums such as students’, staff and general forums in general can be integrated into this online forum. Faced with the challenges many computer sciences students face when trying to execute some of their projects, I the researcher deem it fit to create a social platform where students can register, log in, ask IT questions and get quality answers from users and admin, create numerous computer and ICT related topics to inform others, and get others to read their thoughts and projects and reply their posts. Concerning methodology, the system was created using HTML, PHP and MySQL technology. The aim of the system is to create an online discussion forum where users can create various topics, reply topics and moderate topics by the administrator of the site.', 'CHAPTER ONE.htm'),
(18, 'Mshelia Mark', 'HNDCS/2015/246', 'HND', '2016', 'Design and Implemenation of an Online Voing System', 'The world is fast becoming a global village due to the effect of globalization and rapid growth in technology. This has enabled information sharing among various people of the world, thereby solving basic societal problems and bringing about rapid development. The study designs and implements an online discussion forum where computer science students of NILEST can come together and interact online. Various forums such as students’, staff and general forums in general can be integrated into this online forum. Faced with the challenges many computer sciences students face when trying to execute some of their projects, I the researcher deem it fit to create a social platform where students can register, log in, ask IT questions and get quality answers from users and admin, create numerous computer and ICT related topics to inform others, and get others to read their thoughts and projects and reply their posts. Concerning methodology, the system was created using HTML, PHP and MySQL technology. The aim of the system is to create an online discussion forum where users can create various topics, reply topics and moderate topics by the administrator of the site.', 'trouble.htm'),
(19, 'Stephen Bukar', 'NDCS/2016-343', 'HND', '2015', 'Design and Construction of a Simple USB Port Charger', 'Design and Construction of a Simple USB Port ChargerDesign and Construction of a Simple USB Port ChargerDesign and Construction of a Simple USB Port ChargerDesign and Construction of a Simple USB Port ChargerDesign and Construction of a Simple USB Port ChargerDesign and Construction of a Simple USB Port ChargerDesign and Construction of a Simple USB Port ChargerDesign and Construction of a Simple USB Port ChargerDesign and Construction of a Simple USB Port ChargerDesign and Construction of a Simple USB Port ChargerDesign and Construction of a Simple USB Port ChargerDesign and Construction of a Simple USB Port ChargerDesign and Construction of a Simple USB Port ChargerDesign and Construction of a Simple USB Port ChargerDesign and Construction of a Simple USB Port ChargerDesign and Construction of a Simple USB Port ChargerDesign and Construction of a Simple USB Port ChargerDesign and Construction of a Simple USB Port ChargerDesign and Construction of a Simple USB Port ChargerDesign and Construction of a Simple USB Port ChargerDesign and Construction of a Simple USB Port ChargerDesign and Construction of a Simple USB Port Charger', 'CHAPTER ONE.htm'),
(20, 'Lizza Dashe', 'NDCS/2016/300', 'ND', '2019', 'DESIGN OF A HUMAN BEING', 'INTRODUCTION\r\nInformation is power and an essential ingredient in decision-making. To obtain timely, relevant and quality information for study or research work, it is important to know the various sources of information available. This module is expected to deepen our knowledge of sources of information in print, non- print and electronic formats. It presents the definition, types, formats, and categories of information sources. The module also shows where information sources could be found e.g. archives, libraries and the Internet.\r\n\r\nDEFINITION OF INFORMATION/ INFORMATION SOURCE\r\nInformation is processed data. An information source is where you get your information from; this can be a book or a Website. Information sources are the various means by which information is recorded for use by an individual or an organization. It is the means by which a person is informed about something or knowledge is availed to someone, a group of people or an organization. Information sources can be observations, people, speeches, documents, pictures, organizations. Information sources can be in print, non-print and electronic media or format.\r\nTypes of Information Sources\r\n', 'INTRODUCTION GROUP 2 real.htm');

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `id` int(4) NOT NULL auto_increment,
  `regnum` varchar(15) NOT NULL,
  `sname` varchar(15) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `oname` varchar(15) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `date` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `phone` (`phone`),
  UNIQUE KEY `regnum` (`regnum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` (`id`, `regnum`, `sname`, `fname`, `oname`, `gender`, `date`, `email`, `phone`, `username`, `password`) VALUES 
(1, 'ndcs/2015/240', 'Joshua', 'Yusuf', 'Waas', 'male', '2018-08-30', 'shallomgebe@gmail.com', '09033774488', 'shallom', 'admin'),
(2, 'HNDCS/2017/073', 'Matur', 'Innocent', 'Joshua', 'male', '1998-05-15', 'maturinnocent@gmail.com', '08144529253', 'innocent', '1111'),
(3, 'NDCS/2016/246', 'Bassey', 'Martins', '', 'male', '', 'bassey@gmail.com', '09033774483', 'bassey', '2222'),
(4, '', '', '', '', '', '', '', '', '', ''),
(5, 'NDCS/2016-343', 'MOSES', 'TAIOW', 'ELIZABETH', 'female', '2018-09-14', 'ELIAZBEHMOSESTAIWO@EMAIL.COM', '08167970671', 'TOMI BABY', 'LOVE'),
(6, 'NDCS/2016-342', 'ADEYINKA', 'JOHN', 'MOSES', 'male', '1997-09-10', 'MOSESJOHN@EMAIL', '08122447657', 'JOHN', '1234'),
(7, 'NDCS/2018/300', 'lIZZ', 'NELSON', 'DASHE', 'male', '2018-10-11', 'eli@gmail.com', '09088776655', 'lizz', 'lizz');
