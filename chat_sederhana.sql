-- phpMyAdmin SQL Dump
-- version 2.8.2.4
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 20, 2011 at 07:33 PM
-- Server version: 5.0.24
-- PHP Version: 5.1.6
-- 
-- Database: `chat_sederhana`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_chat`
-- 

CREATE TABLE `tbl_chat` (
  `id_chat` int(10) NOT NULL auto_increment,
  `username` varchar(100) collate latin1_general_ci NOT NULL,
  `pesan` text collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id_chat`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `tbl_chat`
-- 

INSERT INTO `tbl_chat` VALUES (1, 'lumbung', 'halo mbak');
INSERT INTO `tbl_chat` VALUES (2, 'lumbung', 'opo??');
INSERT INTO `tbl_chat` VALUES (3, 'lumbung', 'woey');
INSERT INTO `tbl_chat` VALUES (4, 'lumbung', 'dije ne??');
INSERT INTO `tbl_chat` VALUES (5, 'haha', 'asu');
