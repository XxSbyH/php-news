-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2018 年 11 月 16 日 03:45
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `mydb`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `users`
-- 

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  `psw` varchar(40) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- 导出表中的数据 `users`
-- 

INSERT INTO `users` VALUES (1, 'sby', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA25');
INSERT INTO `users` VALUES (2, 'sby2', 'caf1a3dfb505ffed0d024130f58c5cfa');
