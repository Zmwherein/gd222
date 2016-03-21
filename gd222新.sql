-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 �?03 �?01 �?10:26
-- 服务器版本: 5.5.40
-- PHP 版本: 5.5.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `gd222`
--

-- --------------------------------------------------------

--
-- 表的结构 `gd_company`
--

CREATE TABLE IF NOT EXISTS `gd_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) NOT NULL COMMENT '地址',
  `email` varchar(81) NOT NULL COMMENT '邮箱',
  `tel` varchar(20) NOT NULL COMMENT '电话',
  `site` varchar(100) NOT NULL COMMENT '网站',
  `title` varchar(50) NOT NULL COMMENT '网站标题',
  `keywords` varchar(255) NOT NULL COMMENT '关键字',
  `description` varchar(255) NOT NULL COMMENT '描述',
  `mob` char(15) NOT NULL COMMENT '手机',
  `arrive` mediumtext NOT NULL COMMENT '如何到达',
  `copy` varchar(80) NOT NULL COMMENT 'copy',
  `beian` char(52) NOT NULL COMMENT '备案号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='公司信息表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `gd_company`
--

INSERT INTO `gd_company` (`id`, `address`, `email`, `tel`, `site`, `title`, `keywords`, `description`, `mob`, `arrive`, `copy`, `beian`) VALUES
(1, '广东省广州市白云区太和镇北太路1633号&lt;br/&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;民营科技园白云火炬大厦1802-1803', '222@gd222.com', '4008-168-332', 'www.gd222.com', 'gd222', 'gd222 二二二', '广东二二二科技有限公司', '181 2789 3222', '乘地铁至龙归站B1出口转乘735路公交至863中心站；其他公交：563路、650路、701路、728路、758路、828路', '©二二二科技', '粤ICP备14026457号-1');

-- --------------------------------------------------------

--
-- 表的结构 `gd_func`
--

CREATE TABLE IF NOT EXISTS `gd_func` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '功能名',
  `url` varchar(100) NOT NULL COMMENT '链接',
  `class` char(10) NOT NULL COMMENT '类名',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='功能表' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `gd_func`
--

INSERT INTO `gd_func` (`id`, `name`, `url`, `class`) VALUES
(1, '易商分销', 'http://www.eeecms.com', 'fx'),
(2, '网站建设', '/index.php/Home/Index/webbuild', 'wz'),
(3, '服务平台', 'http://gd222.cn/weixingongzhongpingtai/', 'fw'),
(4, '营销推广', '/index.php/Home/Index/marketing', 'yx'),
(5, '硬件推广', '/index.php/Home/Index/hardware', 'yj');

-- --------------------------------------------------------

--
-- 表的结构 `gd_menu`
--

CREATE TABLE IF NOT EXISTS `gd_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` char(15) NOT NULL COMMENT '标题',
  `rid` tinyint(4) NOT NULL COMMENT '上级id',
  `url` varchar(100) NOT NULL COMMENT 'url链接',
  `sort` tinyint(4) NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='菜单表' AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `gd_menu`
--

INSERT INTO `gd_menu` (`id`, `title`, `rid`, `url`, `sort`) VALUES
(1, '菜单列表', 0, '', 0),
(2, '菜单列表', 1, '/index.php/Admin/Menu/index', 0),
(3, '功能列表', 0, '', 0),
(4, '功能列表', 3, '/index.php/Admin/Func/index', 0),
(5, '导航栏', 0, '', 0),
(6, '导航栏列表', 5, '/index.php/Admin/Nav/index', 0),
(7, '公司信息', 0, '', 1),
(8, '公司信息', 7, '/index.php/Admin/Company/index', 0),
(9, '新闻列', 0, '', 0),
(10, '新闻列表', 9, '/index.php/Admin/News/index', 0),
(11, '建站留言', 0, '', 0),
(12, '建站留言', 11, '/index.php/Admin/webBuild/index', 0),
(13, '联系我们', 0, '', 0),
(14, '联系我们', 13, '/index.php/Admin/Connect/index', 0);

-- --------------------------------------------------------

--
-- 表的结构 `gd_message`
--

CREATE TABLE IF NOT EXISTS `gd_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(24) NOT NULL COMMENT '姓名',
  `email` varchar(100) NOT NULL COMMENT '电子邮箱',
  `tel` varchar(15) NOT NULL COMMENT '手机号码',
  `message` text NOT NULL COMMENT '建站留言',
  `is_web` tinyint(2) NOT NULL COMMENT '判别id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='建站留言表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `gd_message`
--

INSERT INTO `gd_message` (`id`, `name`, `email`, `tel`, `message`, `is_web`) VALUES
(1, 'ds厅', '', '18819279602', '行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，', 1),
(2, '小小小', 'abner_jzming@163.com', '18819548951', ' 广东省广州市白云区太和镇北太路1633号   民营科技园白云火炬大厦1802-1803  广东省广州市白云区太和镇北太路1633号   民营科技园白云火炬大厦1802-1803  广东省广州市白云区太和镇北太路1633号   民营科技园白云火炬大厦1802-1803  广东省广州市白云区太和镇北太路1633号   民营科技园白云火炬大厦1802-1803  广东省广州市白云区太和镇北太路1633号   民营科技园白云火炬大厦1802-1803 ', 0);

-- --------------------------------------------------------

--
-- 表的结构 `gd_nav`
--

CREATE TABLE IF NOT EXISTS `gd_nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '导航名',
  `url` varchar(100) NOT NULL COMMENT '链接',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='导航表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `gd_nav`
--

INSERT INTO `gd_nav` (`id`, `name`, `url`) VALUES
(1, '网站首页', '/'),
(2, '新闻动态', '/index.php/Home/News/index'),
(3, '关于我们', '/index.php/Home/About/index'),
(4, '联系我们', '/index.php/Home/Contact/index');

-- --------------------------------------------------------

--
-- 表的结构 `gd_news`
--

CREATE TABLE IF NOT EXISTS `gd_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `title` varchar(72) NOT NULL COMMENT '标题',
  `pic` varchar(100) NOT NULL COMMENT '图片',
  `intro` mediumtext NOT NULL COMMENT '简介',
  `content` text NOT NULL COMMENT '内容',
  `date` int(11) NOT NULL COMMENT '发布日期',
  `click` int(10) unsigned NOT NULL COMMENT '点击数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='新闻动态表' AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `gd_news`
--

INSERT INTO `gd_news` (`id`, `title`, `pic`, `intro`, `content`, `date`, `click`) VALUES
(2, '好2', '/Public/images/20151210/1449742177.png', '很多时候大家都会对网站排名靠上的站进行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，', '&lt;p&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: å¾®è½¯é›…é»‘; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;很多时候大家都会对网站排名靠上的站进行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: å¾®è½¯é›…é»‘; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;很多时候大家都会对网站排名靠上的站进行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;img src=&quot;/Public/Upload/image/20151210/1449742173108917.png&quot; title=&quot;1449742173108917.png&quot; alt=&quot;c1.png&quot;/&gt;&lt;/p&gt;', 1449797137, 8),
(3, '好3', '/Public/images/20151210/1449742368.png', '很多时候大家都会对网站排名靠上的站进行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，', '&lt;p&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: å¾®è½¯é›…é»‘; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;很多时候大家都会对网站排名靠上的站进行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: å¾®è½¯é›…é»‘; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;很多时候大家都会对网站排名靠上的站进行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: å¾®è½¯é›…é»‘; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;很多时候大家都会对网站排名靠上的站进行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: å¾®è½¯é›…é»‘; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;很多时候大家都会对网站排名靠上的站进行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;/p&gt;', 1449797073, 3),
(4, '好4', '/Public/images/20151210/1449742382.png', '很多时候大家都会对网站排名靠上的站进行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，', '&lt;p&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: å¾®è½¯é›…é»‘; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;很多时候大家都会对网站排名靠上的站进行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: å¾®è½¯é›…é»‘; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;很多时候大家都会对网站排名靠上的站进行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: å¾®è½¯é›…é»‘; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;很多时候大家都会对网站排名靠上的站进行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;/p&gt;', 1449797062, 4),
(5, '好5 ', '/Public/images/20151210/1449742397.png', '很多时候大家都会对网站排名靠上的站进行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，', '&lt;p&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: å¾®è½¯é›…é»‘; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;很多时候大家都会对网站排名靠上的站进行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: å¾®è½¯é›…é»‘; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;很多时候大家都会对网站排名靠上的站进行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: å¾®è½¯é›…é»‘; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;很多时候大家都会对网站排名靠上的站进行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;/p&gt;', 1449742387, 21),
(6, '好6', '/Public/images/20151210/1449742413.png', '很多时候大家都会对网站排名靠上的站进行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，', '&lt;p&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: å¾®è½¯é›…é»‘; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;很多时候大家都会对网站排名靠上的站进行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: å¾®è½¯é›…é»‘; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;很多时候大家都会对网站排名靠上的站进行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: å¾®è½¯é›…é»‘; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;很多时候大家都会对网站排名靠上的站进行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;/p&gt;', 1449742401, 7),
(11, '好11', '/Public/images/20151211/1449797926.png', '行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，', '&lt;p&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: 微软雅黑; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: 微软雅黑; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: 微软雅黑; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: 微软雅黑; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;/p&gt;', 1449797911, 1),
(7, '好7', '/Public/images/20151211/1449796832.png', '行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，', '&lt;p&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: 微软雅黑; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: 微软雅黑; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: 微软雅黑; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: 微软雅黑; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: 微软雅黑; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: 微软雅黑; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;/p&gt;', 1449797086, 5),
(8, '好8', '/Public/images/20151211/1449796847.png', '行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，', '&lt;p&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: 微软雅黑; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: 微软雅黑; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: 微软雅黑; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;/p&gt;', 1449797097, 12),
(9, '好9', '/Public/images/20151211/1449796863.png', '行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，', '&lt;p&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: 微软雅黑; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: 微软雅黑; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: 微软雅黑; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: 微软雅黑; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;span style=&quot;color: rgb(175, 178, 191); font-family: 微软雅黑; font-size: 12px; line-height: 24px; text-indent: 16px;&quot;&gt;行观察，可能排名在第一页的，或者比较你的网站排名还靠前的还没有你的网站收录和外链多，&lt;/span&gt;&lt;/p&gt;', 1449797113, 12);

-- --------------------------------------------------------

--
-- 表的结构 `gd_user`
--

CREATE TABLE IF NOT EXISTS `gd_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '用户名',
  `password` varchar(50) NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='管理员表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `gd_user`
--

INSERT INTO `gd_user` (`id`, `name`, `password`) VALUES
(1, 'admin', 'a6ec5a7b854d204b74cd90a8306a957e');

-- --------------------------------------------------------

--
-- 表的结构 `gd_user_log`
--

CREATE TABLE IF NOT EXISTS `gd_user_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(100) NOT NULL COMMENT 'ip地址',
  `time` bigint(11) NOT NULL COMMENT '时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='后台登录日志表' AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `gd_user_log`
--

INSERT INTO `gd_user_log` (`id`, `ip`, `time`) VALUES
(1, '127.0.0.1', 1449719116),
(2, '127.0.0.1', 1449719210),
(3, '127.0.0.1', 1449719341),
(4, '127.0.0.1', 1449719564),
(5, '127.0.0.1', 1449796452),
(6, '127.0.0.1', 1449801144),
(7, '127.0.0.1', 1449801751),
(8, '127.0.0.1', 1449827249),
(9, '127.0.0.1', 1453272736),
(10, '127.0.0.1', 1453276669),
(11, '127.0.0.1', 1456712308),
(12, '127.0.0.1', 1456716515),
(13, '127.0.0.1', 1456736420),
(14, '127.0.0.1', 1456794370);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
