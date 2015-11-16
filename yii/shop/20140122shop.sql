-- MySQL dump 10.13  Distrib 5.5.20, for Win32 (x86)
--
-- Host: localhost    Database: shop
-- ------------------------------------------------------
-- Server version	5.5.20

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `msg` text,
  `sender` varchar(32) NOT NULL DEFAULT '',
  `receiver` varchar(32) NOT NULL DEFAULT '',
  `color` char(7) NOT NULL DEFAULT '',
  `biaoqing` varchar(32) NOT NULL DEFAULT '',
  `add_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=628 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` VALUES (21,'双方的身份','牛魔王','郁金香','#77FFEE','有点脸红','2013-11-10 16:11:34'),(22,'双方的身份sdfsf','牛魔王','郁金香','#D1BBFF','有点脸红','2013-11-10 16:12:53'),(23,'双方的身份sdfsffgdg是多少','牛魔王','郁金香','#D1BBFF','有点脸红','2013-11-10 16:13:10'),(24,'双方的身份sdfsffgdg是多少斯蒂芬森','牛魔王','郁金香','#D1BBFF','有点脸红','2013-11-10 16:13:26'),(25,'案发地点沙发上','牛魔王','诸葛','#006400','使劲安慰','2013-11-10 16:15:11'),(26,'舒服舒服','牛魔王','甜甜','#9F88FF','微笑','2013-11-10 16:17:01'),(27,'双方都的说法','牛魔王','诸葛','#0000FF','含情脉脉','2013-11-10 16:18:40'),(28,'eajfjalkfdj','牛魔王','恶魔','#800080','不知所措','2013-12-13 17:26:19'),(29,'我们就这样一直写，，，老师的数据库就。。。。来吧','牛魔王','恶魔','#800080','不知所措','2013-12-13 17:26:43'),(30,'哇','牛魔王','所有的人','','','2013-12-13 17:27:35'),(31,'这么快写完了','牛魔王','所有的人','','','2013-12-13 17:27:42'),(623,'有人吗？？','牛魔王','所有的人','','','2013-12-27 10:45:41'),(624,'1111','牛魔王','所有的人','','','2013-12-27 10:47:13'),(625,'有人吗？？','牛魔王','所有的人','','','2013-12-27 10:48:43'),(626,'有人吗？？','牛魔王','所有的人','','','2013-12-27 10:56:38'),(627,'有人吗？？','牛魔王','所有的人','','','2013-12-27 14:15:34');
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sw_auth`
--

DROP TABLE IF EXISTS `sw_auth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_auth` (
  `auth_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `auth_name` varchar(20) NOT NULL COMMENT '名称',
  `auth_pid` smallint(6) unsigned NOT NULL COMMENT '父id',
  `auth_c` varchar(32) NOT NULL DEFAULT '' COMMENT '模块',
  `auth_a` varchar(32) NOT NULL DEFAULT '' COMMENT '操作方法',
  `auth_path` varchar(32) NOT NULL COMMENT '全路径',
  `auth_level` tinyint(4) NOT NULL DEFAULT '0' COMMENT '基别',
  PRIMARY KEY (`auth_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sw_auth`
--

LOCK TABLES `sw_auth` WRITE;
/*!40000 ALTER TABLE `sw_auth` DISABLE KEYS */;
INSERT INTO `sw_auth` VALUES (1,'商品管理',0,'','','1',0),(2,'订单管理',0,'','','2',0),(3,'广告管理',0,'','','3',0),(4,'商品列表',1,'Goods','showlist','1-4',1),(5,'添加商品',1,'Goods','add','1-5',1),(6,'商品分类',1,'Goods','cate','1-6',1),(7,'用户评论',1,'User','comment','1-7',1),(8,'订单列表',2,'Order','showlist','2-8',1),(9,'订单打印',2,'Order','print','2-9',1),(10,'添加订单',2,'Order','add','2-10',1),(11,'广告列表',3,'Advert','showlist','3-11',1),(12,'广告位置',3,'Advert','position','3-12',1),(13,'系统管理',0,'','','13',0),(14,'角色管理',13,'Role','showlist','13-14',1),(15,'权限管理',13,'Auth','showlist','13-15',1),(16,'会员管理',0,'User','showlist','16',0),(17,'商品回收站',1,'Goods','huishou','1-17',1),(18,'商品删除',4,'Goods','del','1-4-18',2),(19,'商品修改',4,'Goods','upd','1-4-19',2),(20,'管理员列表',13,'Manager','showlist','13-20',1);
/*!40000 ALTER TABLE `sw_auth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sw_category`
--

DROP TABLE IF EXISTS `sw_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(64) NOT NULL DEFAULT '',
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sw_category`
--

LOCK TABLES `sw_category` WRITE;
/*!40000 ALTER TABLE `sw_category` DISABLE KEYS */;
INSERT INTO `sw_category` VALUES (1,'手机'),(2,'电脑'),(3,'相机'),(4,'耳机'),(5,'电池');
/*!40000 ALTER TABLE `sw_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sw_goods`
--

DROP TABLE IF EXISTS `sw_goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_goods` (
  `goods_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `goods_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品名称',
  `goods_weight` int(11) NOT NULL DEFAULT '0' COMMENT '重量',
  `goods_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '价格',
  `goods_number` int(11) NOT NULL DEFAULT '100' COMMENT '数量',
  `goods_category_id` int(11) NOT NULL DEFAULT '0' COMMENT '分类',
  `goods_brand_id` int(11) NOT NULL DEFAULT '0' COMMENT '品牌',
  `goods_introduce` text COLLATE utf8_unicode_ci COMMENT '详细介绍',
  `goods_big_img` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品图片',
  `goods_small_img` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '商品小图',
  `goods_create_time` int(11) NOT NULL DEFAULT '0' COMMENT '添加时间',
  `goods_last_time` int(11) NOT NULL DEFAULT '0',
  `abc` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`goods_id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='商品表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sw_goods`
--

LOCK TABLES `sw_goods` WRITE;
/*!40000 ALTER TABLE `sw_goods` DISABLE KEYS */;
INSERT INTO `sw_goods` VALUES (2,'诺基亚N855qq',111,1000.00,201,3,1,'<p>诺基亚N85参数</p>\r\n<div> </div>\r\n<div>\r\n<table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n    <tbody>\r\n        <tr>\r\n            <td bgcolor=\"#f1f7fc\" colspan=\"2\">\r\n            <p><b>基本参数</b></p>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">手机昵称</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">N85</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">上市日期</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">2008年10月</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">手机类型</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">3G手机；拍照手机；智能手机</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">手机制式</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">GSM</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">支持频段</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">GSM850/900/1800/1900MHz</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">数据传输</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">GPRS、EDGE</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">屏幕材质</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">AMOLED</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">屏幕色彩</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">1600万色</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">主屏尺寸</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">2.6英寸</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">主屏参数</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">QVGA 320×240像素</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">铃音描述</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">可选MP3、WAV、AAC或和弦Midi铃声等格式</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">操作系统</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">Symbian OS v9.3操作系统与S60 v3.2平台的组合</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">机身内存</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">74MB 内部动态存储空间<br />\r\n            78MB 内置NAND闪存</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">存储卡</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">支持MicroSD(T-Flash)卡扩展最大至8GB</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">电池规格</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">1200毫安时锂电池</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">标配</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">诺基亚 N85<br />\r\n            诺基亚电池（BL-5K）<br />\r\n            诺基亚旅行充电器（AC-10）<br />\r\n            诺基亚视频数据线（CA-75U）<br />\r\n            诺基亚数据线（CA-101）<br />\r\n            诺基亚音乐耳机（HS-45、AD-54）<br />\r\n            诺基亚 8 GB microSD 卡（MU-43）<br />\r\n            《用户手册》<br />\r\n            《快速入门》</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">理论通话时间</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">6.9 小时</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">理论待机时间</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">363 小时</td>\r\n        </tr>\r\n        <tr>\r\n            <td bgcolor=\"#f1f7fc\" colspan=\"2\">\r\n            <p><b>产品外形</b></p>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">外观设计</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">双向滑盖</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">产品尺寸</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">103×50×16mm<br />\r\n            体积：76 立方厘米</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">手机重量</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">128克</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">产品天线</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">内置</td>\r\n        </tr>\r\n        <tr>\r\n            <td bgcolor=\"#f1f7fc\" colspan=\"2\">\r\n            <p><b>拍照功能</b></p>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"550\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 8px 0px;\" colspan=\"2\">\r\n            <table cellspacing=\"1\" cellpadding=\"0\" border=\"0\" align=\"left\">\r\n                <tbody>\r\n                    <tr>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">定时器</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\"> </td>\r\n                    </tr>\r\n                </tbody>\r\n            </table>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">摄像头</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">内置</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">摄像头像素</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">500万像素</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">连拍功能</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">支持</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">LED闪光灯</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">双LED 闪光灯</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">数码变焦</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">20 倍数码变焦</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">拍摄模式</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">静止、连拍、自动定时器、摄像</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">照片特效</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">正常、怀旧、黑白、负片、逼真</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">拍照描述</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">支持最大2592×1944分辨率照片拍摄<br />\r\n            支持JPEG、Exif格式<br />\r\n            白平衡模式：自动、阳光、阴天、白炽灯、荧光灯<br />\r\n            感光度模式：高、中、低、自动</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">视频拍摄</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">最高支持640 x 480 像素（VGA）、30 帧/秒</td>\r\n        </tr>\r\n        <tr>\r\n            <td bgcolor=\"#f1f7fc\" colspan=\"2\">\r\n            <p><b>娱乐功能</b></p>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"550\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 8px 0px;\" colspan=\"2\">\r\n            <table cellspacing=\"1\" cellpadding=\"0\" border=\"0\" align=\"left\">\r\n                <tbody>\r\n                    <tr>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">收音机</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">TV-OUT</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">录音功能</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">电子书</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\"> </td>\r\n                    </tr>\r\n                </tbody>\r\n            </table>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">视频播放</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">内置RealPlayer播放器, 支持MPEG4、H.264/AVC、H.263/3GP、RealVideo等视频格式全屏播放</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">音乐播放</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">内置播放器, 支持mp3、.wma、.aac、eAAC、eAAC+格式</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">游戏</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">内置</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">Java功能</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">支持Java MIDP 2.0 CLDC 1.1</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">Flash功能</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">第3.0版Flash lite播放器</td>\r\n        </tr>\r\n        <tr>\r\n            <td bgcolor=\"#f1f7fc\" colspan=\"2\">\r\n            <p><b>数据功能</b></p>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"550\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 8px 0px;\" colspan=\"2\">\r\n            <table cellspacing=\"1\" cellpadding=\"0\" border=\"0\" align=\"left\">\r\n                <tbody>\r\n                    <tr>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">蓝牙功能</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\"> </td>\r\n                    </tr>\r\n                </tbody>\r\n            </table>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">数据线接口</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">USB数据线 3.5mm立体声耳机插孔</td>\r\n        </tr>\r\n        <tr>\r\n            <td bgcolor=\"#f1f7fc\" colspan=\"2\">\r\n            <p><b>基本功能</b></p>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"550\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 8px 0px;\" colspan=\"2\">\r\n            <table cellspacing=\"1\" cellpadding=\"0\" border=\"0\" align=\"left\">\r\n                <tbody>\r\n                    <tr>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">短信(SMS)</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">彩信(MMS)</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">免提通话</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">情景模式</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">闹钟功能</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                    </tr>\r\n                    <tr>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">日历功能</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\"> </td>\r\n                    </tr>\r\n                </tbody>\r\n            </table>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">输入方式</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">键盘</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">通话记录</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">未接来电+已接来电+已拨电话记录</td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"100\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\">通讯录</td>\r\n            <td width=\"450\" bgcolor=\"#ffffff\">S60标准化名片式通讯录</td>\r\n        </tr>\r\n        <tr>\r\n            <td bgcolor=\"#f1f7fc\" colspan=\"2\">\r\n            <p><b>网络功能</b></p>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"550\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 8px 0px;\" colspan=\"2\">\r\n            <table cellspacing=\"1\" cellpadding=\"0\" border=\"0\" align=\"left\">\r\n                <tbody>\r\n                    <tr>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">电子邮件</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">WWW浏览器</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">WAP浏览器</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\"> </td>\r\n                    </tr>\r\n                </tbody>\r\n            </table>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td bgcolor=\"#f1f7fc\" colspan=\"2\">\r\n            <p><b>商务功能</b></p>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"550\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 8px 0px;\" colspan=\"2\">\r\n            <table cellspacing=\"1\" cellpadding=\"0\" border=\"0\" align=\"left\">\r\n                <tbody>\r\n                    <tr>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">飞行模式</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">语音拨号</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">备忘录</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">日程表</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">世界时间</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                    </tr>\r\n                    <tr>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\"> </td>\r\n                    </tr>\r\n                </tbody>\r\n            </table>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td bgcolor=\"#f1f7fc\" colspan=\"2\">\r\n            <p><b>其他功能</b></p>\r\n            </td>\r\n        </tr>\r\n        <tr>\r\n            <td width=\"550\" valign=\"center\" bgcolor=\"#ffffff\" align=\"left\" style=\"padding: 8px 0px;\" colspan=\"2\">\r\n            <table cellspacing=\"1\" cellpadding=\"0\" border=\"0\" align=\"left\">\r\n                <tbody>\r\n                    <tr>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">GPS功能</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">电子词典</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">待机图片</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">计算器</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">来电铃声识别</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                    </tr>\r\n                    <tr>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">来电图片识别</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">来电防火墙</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">动画屏保</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">图形菜单</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">秒表</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                    </tr>\r\n                    <tr>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\" bgcolor=\"#c5d7ed\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" bgcolor=\"#f1f7fc\" align=\"middle\" style=\"padding: 2px; font-weight: bold;\">单位换算</td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                        <td width=\"100\" style=\"padding: 5px 0px 5px 10px;\">\r\n                        <table width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\">\r\n                            <tbody>\r\n                                <tr>\r\n                                    <td width=\"100%\" align=\"middle\" style=\"padding: 2px; float: none;\"> </td>\r\n                                </tr>\r\n                            </tbody>\r\n                        </table>\r\n                        </td>\r\n                    </tr>\r\n                </tbody>\r\n            </table>\r\n            </td>\r\n        </tr>\r\n    </tbody>\r\n</table>\r\n</div>\r\n<p> </p>','32_G_1242110760868.jpg','images/200905/thumb_img/32_thumb_G_1242110760196.jpg',1242110760,1376313168,'');
/*!40000 ALTER TABLE `sw_goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sw_manager`
--

DROP TABLE IF EXISTS `sw_manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_manager` (
  `mg_id` int(11) NOT NULL AUTO_INCREMENT,
  `mg_name` varchar(32) NOT NULL,
  `mg_pwd` varchar(32) NOT NULL,
  `mg_time` int(10) unsigned NOT NULL COMMENT '时间',
  `mg_role_id` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '角色id',
  PRIMARY KEY (`mg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sw_manager`
--

LOCK TABLES `sw_manager` WRITE;
/*!40000 ALTER TABLE `sw_manager` DISABLE KEYS */;
INSERT INTO `sw_manager` VALUES (1,'admin','123456',0,0),(2,'tom','123456',0,1),(3,'linken','123456',0,2),(4,'mary','123456',1387785044,2),(5,'yuehan','123456',1387785056,2);
/*!40000 ALTER TABLE `sw_manager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sw_role`
--

DROP TABLE IF EXISTS `sw_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_role` (
  `role_id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) NOT NULL COMMENT '角色名称',
  `role_auth_ids` varchar(128) NOT NULL DEFAULT '' COMMENT '权限ids,1,2,5',
  `role_auth_ac` text COMMENT '模块-操作',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sw_role`
--

LOCK TABLES `sw_role` WRITE;
/*!40000 ALTER TABLE `sw_role` DISABLE KEYS */;
INSERT INTO `sw_role` VALUES (1,'经理','1,4,19,5,6,2,8,9,3,11,12','Goods-showlist,Goods-add,Goods-cate,Order-showlist,Order-print,Advert-showlist,Advert-position,Goods-upd'),(2,'主管','1,4,5,6,7,2,8,9,10','Goods-showlist,Goods-add,Goods-cate,User-comment,Order-showlist,Order-print,Order-add');
/*!40000 ALTER TABLE `sw_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sw_user`
--

DROP TABLE IF EXISTS `sw_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sw_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `username` varchar(128) NOT NULL DEFAULT '' COMMENT '登录名',
  `password` varchar(32) NOT NULL DEFAULT '' COMMENT '登录密码',
  `user_email` varchar(64) NOT NULL DEFAULT '' COMMENT '邮箱',
  `user_sex` tinyint(4) NOT NULL DEFAULT '1' COMMENT '性别',
  `user_qq` varchar(32) NOT NULL DEFAULT '' COMMENT 'qq',
  `user_tel` varchar(32) NOT NULL DEFAULT '' COMMENT '手机',
  `user_xueli` tinyint(4) NOT NULL DEFAULT '1' COMMENT '学历',
  `user_hobby` varchar(32) NOT NULL DEFAULT '' COMMENT '爱好',
  `user_introduce` text COMMENT '简介',
  `user_time` int(11) DEFAULT NULL,
  `last_time` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=utf8 COMMENT='会员表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sw_user`
--

LOCK TABLES `sw_user` WRITE;
/*!40000 ALTER TABLE `sw_user` DISABLE KEYS */;
INSERT INTO `sw_user` VALUES (1,'zhangsanff','1234','zhangsan@163.com',1,'','',1,'','',NULL,0),(133,'jack','abc','jack@qq.com',3,'1234987','13245653478',4,'','I am jack',NULL,0),(134,'xiaoming','123','',1,'','',1,'','',NULL,0),(135,'tom','12345','tom@11.com',2,'12347654','13245653478',4,'','I am tom',NULL,0),(136,'tom','12345','tom@11.com',2,'12347654','13245653478',4,'','I am tom',NULL,0),(137,'jack','abcd','jack@qq.com',3,'3456123','13167895432',5,'1,2,4','I am jack',NULL,0),(138,'jack','abcd','jack@qq.com',3,'3456123','13167895432',5,'1,2,4','I am jack',NULL,0),(139,'jack','abcd','jack@qq.com',3,'3456123','13167895432',5,'1,2,4','I am jack',NULL,0),(140,'admin','123','jack@qq.com',3,'123456','13167895432',3,'1,2','sfsfs',NULL,0);
/*!40000 ALTER TABLE `sw_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `td_book`
--

DROP TABLE IF EXISTS `td_book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `td_book` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `td_book`
--

LOCK TABLES `td_book` WRITE;
/*!40000 ALTER TABLE `td_book` DISABLE KEYS */;
/*!40000 ALTER TABLE `td_book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tencent_qq`
--

DROP TABLE IF EXISTS `tencent_qq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tencent_qq` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tencent_qq`
--

LOCK TABLES `tencent_qq` WRITE;
/*!40000 ALTER TABLE `tencent_qq` DISABLE KEYS */;
/*!40000 ALTER TABLE `tencent_qq` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-01-22 17:18:18
