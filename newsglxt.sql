-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2018 年 11 月 30 日 01:21
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `newsglxt`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `news_tb`
-- 

CREATE TABLE `news_tb` (
  `newsid` int(11) NOT NULL auto_increment,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `picpath` varchar(50) default NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY  (`newsid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=225 ;

-- 
-- 导出表中的数据 `news_tb`
-- 

INSERT INTO `news_tb` VALUES (103, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (102, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (69, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (70, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (71, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (224, '123', '<p>asdada</p>\r\n', '', '2018-11-21 15:19:02');
INSERT INTO `news_tb` VALUES (99, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (100, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (101, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (55, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (56, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (83, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (84, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (66, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (53, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (93, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (94, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (95, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (96, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (97, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (98, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (89, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (90, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (91, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (92, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (86, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (87, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (88, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (85, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (82, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (81, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (80, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (79, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (72, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (73, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (74, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (75, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (76, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (77, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (78, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (104, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (105, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (106, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (107, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (108, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (109, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (110, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (111, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (112, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (113, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (114, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (115, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (116, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (117, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (118, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (119, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (120, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (121, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (122, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (123, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (124, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (125, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (126, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (127, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (128, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (129, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (130, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (131, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (132, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (133, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (134, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (135, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (136, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (137, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (138, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (139, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (140, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (141, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (142, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (143, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (144, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (145, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (146, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (147, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (148, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (149, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (150, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (151, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (152, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (153, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (154, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (155, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (156, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (157, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (158, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (159, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (160, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (161, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (162, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (163, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (164, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (165, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (166, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (167, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (168, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (169, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (170, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (171, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (172, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (173, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (174, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (175, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (176, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (177, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (178, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (179, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (180, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (181, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (182, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (183, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (184, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (185, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (186, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (187, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (188, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (189, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (190, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (191, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (192, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (193, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (194, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (195, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (196, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (197, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (198, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (199, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (200, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (201, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (202, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (203, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (204, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (205, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (206, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (207, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (208, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (209, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (210, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (211, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (212, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (213, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (214, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (215, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (216, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (217, 'gfhgfhfghfgh', '<p>fghfghfghgfhf</p>\r\n', '', '2018-10-26 10:07:49');
INSERT INTO `news_tb` VALUES (218, 'dsgfsd', '<p>sdfsdfs</p>\r\n', '', '2018-10-26 10:07:42');
INSERT INTO `news_tb` VALUES (219, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (220, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');
INSERT INTO `news_tb` VALUES (221, 'kkkkkkkkkk', '<p>kkkkkkkkkkkkkkkk</p>\r\n', '', '2018-10-26 10:17:56');
INSERT INTO `news_tb` VALUES (222, 'fsdfsd', '<p>sdfsdfsdf</p>\r\n', '', '2018-10-31 09:12:28');
INSERT INTO `news_tb` VALUES (223, 'dfgdfdfgdfg', '<p>dfgdfgd</p>\r\n', '', '2018-10-26 10:17:48');

-- --------------------------------------------------------

-- 
-- 表的结构 `userstb`
-- 

CREATE TABLE `userstb` (
  `userid` int(11) NOT NULL auto_increment,
  `username` varchar(10) NOT NULL,
  `psw` varchar(32) NOT NULL,
  PRIMARY KEY  (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- 导出表中的数据 `userstb`
-- 

INSERT INTO `userstb` VALUES (2, 'feng', '202cb962ac59075b964b07152d234b70');
INSERT INTO `userstb` VALUES (3, 'abc', '202cb962ac59075b964b07152d234b70');
INSERT INTO `userstb` VALUES (4, 'cys', '202cb962ac59075b964b07152d234b70');
