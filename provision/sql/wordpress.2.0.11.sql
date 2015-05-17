-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: wordpress2_0_11
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

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
-- Table structure for table `wp_categories`
--

DROP TABLE IF EXISTS `wp_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_categories` (
  `cat_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(55) NOT NULL DEFAULT '',
  `category_nicename` varchar(200) NOT NULL DEFAULT '',
  `category_description` longtext NOT NULL,
  `category_parent` bigint(20) NOT NULL DEFAULT '0',
  `category_count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_ID`),
  KEY `category_nicename` (`category_nicename`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_categories`
--

LOCK TABLES `wp_categories` WRITE;
/*!40000 ALTER TABLE `wp_categories` DISABLE KEYS */;
INSERT INTO `wp_categories` VALUES (1,'Uncategorized','uncategorized','',0,1);
/*!40000 ALTER TABLE `wp_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_comments`
--

DROP TABLE IF EXISTS `wp_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_post_ID` int(11) NOT NULL DEFAULT '0',
  `comment_author` tinytext NOT NULL,
  `comment_author_email` varchar(100) NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` enum('0','1','spam') NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) NOT NULL DEFAULT '',
  `comment_type` varchar(20) NOT NULL DEFAULT '',
  `comment_parent` bigint(20) NOT NULL DEFAULT '0',
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_ID`),
  KEY `comment_approved` (`comment_approved`),
  KEY `comment_post_ID` (`comment_post_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_comments`
--

LOCK TABLES `wp_comments` WRITE;
/*!40000 ALTER TABLE `wp_comments` DISABLE KEYS */;
INSERT INTO `wp_comments` VALUES (1,1,'Mr WordPress','','http://wordpress.org/','','2015-05-17 05:33:05','2015-05-17 05:33:05','Hi, this is a comment.<br />To delete a comment, just log in and view the post&#039;s comments. There you will have the option to edit or delete them.',0,'1','','',0,0);
/*!40000 ALTER TABLE `wp_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_linkcategories`
--

DROP TABLE IF EXISTS `wp_linkcategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_linkcategories` (
  `cat_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cat_name` tinytext NOT NULL,
  `auto_toggle` enum('Y','N') NOT NULL DEFAULT 'N',
  `show_images` enum('Y','N') NOT NULL DEFAULT 'Y',
  `show_description` enum('Y','N') NOT NULL DEFAULT 'N',
  `show_rating` enum('Y','N') NOT NULL DEFAULT 'Y',
  `show_updated` enum('Y','N') NOT NULL DEFAULT 'Y',
  `sort_order` varchar(64) NOT NULL DEFAULT 'rand',
  `sort_desc` enum('Y','N') NOT NULL DEFAULT 'N',
  `text_before_link` varchar(128) NOT NULL DEFAULT '<li>',
  `text_after_link` varchar(128) NOT NULL DEFAULT '<br />',
  `text_after_all` varchar(128) NOT NULL DEFAULT '</li>',
  `list_limit` int(11) NOT NULL DEFAULT '-1',
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_linkcategories`
--

LOCK TABLES `wp_linkcategories` WRITE;
/*!40000 ALTER TABLE `wp_linkcategories` DISABLE KEYS */;
INSERT INTO `wp_linkcategories` VALUES (1,'Blogroll','N','Y','N','Y','Y','rand','N','<li>','<br />','</li>',-1);
/*!40000 ALTER TABLE `wp_linkcategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_links`
--

DROP TABLE IF EXISTS `wp_links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_links` (
  `link_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `link_url` varchar(255) NOT NULL DEFAULT '',
  `link_name` varchar(255) NOT NULL DEFAULT '',
  `link_image` varchar(255) NOT NULL DEFAULT '',
  `link_target` varchar(25) NOT NULL DEFAULT '',
  `link_category` bigint(20) NOT NULL DEFAULT '0',
  `link_description` varchar(255) NOT NULL DEFAULT '',
  `link_visible` enum('Y','N') NOT NULL DEFAULT 'Y',
  `link_owner` int(11) NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) NOT NULL DEFAULT '',
  `link_notes` mediumtext NOT NULL,
  `link_rss` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`link_id`),
  KEY `link_category` (`link_category`),
  KEY `link_visible` (`link_visible`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_links`
--

LOCK TABLES `wp_links` WRITE;
/*!40000 ALTER TABLE `wp_links` DISABLE KEYS */;
INSERT INTO `wp_links` VALUES (1,'http://blogs.linux.ie/xeer/','Donncha','','',1,'','Y',1,0,'0000-00-00 00:00:00','','','http://blogs.linux.ie/xeer/feed/'),(2,'http://zengun.org/weblog/','Michel','','',1,'','Y',1,0,'0000-00-00 00:00:00','','','http://zengun.org/weblog/feed/'),(3,'http://boren.nu/','Ryan','','',1,'','Y',1,0,'0000-00-00 00:00:00','','','http://boren.nu/feed/'),(4,'http://photomatt.net/','Matt','','',1,'','Y',1,0,'0000-00-00 00:00:00','','','http://xml.photomatt.net/feed/'),(5,'http://zed1.com/journalized/','Mike','','',1,'','Y',1,0,'0000-00-00 00:00:00','','','http://zed1.com/journalized/feed/'),(6,'http://www.alexking.org/','Alex','','',1,'','Y',1,0,'0000-00-00 00:00:00','','','http://www.alexking.org/blog/wp-rss2.php'),(7,'http://dougal.gunters.org/','Dougal','','',1,'','Y',1,0,'0000-00-00 00:00:00','','','http://dougal.gunters.org/feed/');
/*!40000 ALTER TABLE `wp_links` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_options`
--

DROP TABLE IF EXISTS `wp_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_options` (
  `option_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL DEFAULT '0',
  `option_name` varchar(64) NOT NULL DEFAULT '',
  `option_can_override` enum('Y','N') NOT NULL DEFAULT 'Y',
  `option_type` int(11) NOT NULL DEFAULT '1',
  `option_value` longtext NOT NULL,
  `option_width` int(11) NOT NULL DEFAULT '20',
  `option_height` int(11) NOT NULL DEFAULT '8',
  `option_description` tinytext NOT NULL,
  `option_admin_level` int(11) NOT NULL DEFAULT '1',
  `autoload` enum('yes','no') NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`option_id`,`blog_id`,`option_name`),
  KEY `option_name` (`option_name`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_options`
--

LOCK TABLES `wp_options` WRITE;
/*!40000 ALTER TABLE `wp_options` DISABLE KEYS */;
INSERT INTO `wp_options` VALUES (1,0,'siteurl','Y',1,'http://localhost:8080/2_0_11',20,8,'WordPress web address',1,'yes'),(2,0,'blogname','Y',1,'2_0_11',20,8,'Blog title',1,'yes'),(3,0,'blogdescription','Y',1,'Just another WordPress weblog',20,8,'Short tagline',1,'yes'),(5,0,'users_can_register','Y',1,'0',20,8,'',1,'yes'),(6,0,'admin_email','Y',1,'password@passwordpasswordpassword.com',20,8,'',1,'yes'),(7,0,'start_of_week','Y',1,'1',20,8,'',1,'yes'),(8,0,'use_balanceTags','Y',1,'0',20,8,'',1,'yes'),(9,0,'use_smilies','Y',1,'1',20,8,'',1,'yes'),(10,0,'require_name_email','Y',1,'1',20,8,'',1,'yes'),(11,0,'comments_notify','Y',1,'1',20,8,'',1,'yes'),(12,0,'posts_per_rss','Y',1,'10',20,8,'',1,'yes'),(13,0,'rss_excerpt_length','Y',1,'50',20,8,'',1,'yes'),(14,0,'rss_use_excerpt','Y',1,'0',20,8,'',1,'yes'),(15,0,'mailserver_url','Y',1,'mail.example.com',20,8,'',1,'yes'),(16,0,'mailserver_login','Y',1,'login@example.com',20,8,'',1,'yes'),(17,0,'mailserver_pass','Y',1,'password',20,8,'',1,'yes'),(18,0,'mailserver_port','Y',1,'110',20,8,'',1,'yes'),(19,0,'default_category','Y',1,'1',20,8,'',1,'yes'),(20,0,'default_comment_status','Y',1,'open',20,8,'',1,'yes'),(21,0,'default_ping_status','Y',1,'open',20,8,'',1,'yes'),(22,0,'default_pingback_flag','Y',1,'1',20,8,'',1,'yes'),(23,0,'default_post_edit_rows','Y',1,'10',20,8,'',1,'yes'),(24,0,'posts_per_page','Y',1,'10',20,8,'',1,'yes'),(25,0,'what_to_show','Y',1,'posts',20,8,'',1,'yes'),(26,0,'date_format','Y',1,'F j, Y',20,8,'',1,'yes'),(27,0,'time_format','Y',1,'g:i a',20,8,'',1,'yes'),(28,0,'links_updated_date_format','Y',1,'F j, Y g:i a',20,8,'',1,'yes'),(29,0,'links_recently_updated_prepend','Y',1,'<em>',20,8,'',1,'yes'),(30,0,'links_recently_updated_append','Y',1,'</em>',20,8,'',1,'yes'),(31,0,'links_recently_updated_time','Y',1,'120',20,8,'',1,'yes'),(32,0,'comment_moderation','Y',1,'0',20,8,'',1,'yes'),(33,0,'moderation_notify','Y',1,'1',20,8,'',1,'yes'),(34,0,'permalink_structure','Y',1,'',20,8,'',1,'yes'),(35,0,'gzipcompression','Y',1,'0',20,8,'',1,'yes'),(36,0,'hack_file','Y',1,'0',20,8,'',1,'yes'),(37,0,'blog_charset','Y',1,'UTF-8',20,8,'',1,'yes'),(38,0,'moderation_keys','Y',1,'',20,8,'',1,'no'),(39,0,'active_plugins','Y',1,'',20,8,'',1,'yes'),(40,0,'home','Y',1,'http://localhost:8080/2_0_11',20,8,'',1,'yes'),(41,0,'category_base','Y',1,'',20,8,'',1,'yes'),(42,0,'ping_sites','Y',1,'http://rpc.pingomatic.com/',20,8,'',1,'yes'),(43,0,'advanced_edit','Y',1,'0',20,8,'',1,'yes'),(44,0,'comment_max_links','Y',1,'2',20,8,'',1,'yes'),(45,0,'gmt_offset','Y',1,'0',20,8,'',1,'yes'),(46,0,'default_email_category','Y',1,'1',20,8,'Posts by email go to this category',1,'yes'),(47,0,'recently_edited','Y',1,'',20,8,'',1,'no'),(48,0,'use_linksupdate','Y',1,'0',20,8,'',1,'yes'),(49,0,'template','Y',1,'default',20,8,'',1,'yes'),(50,0,'stylesheet','Y',1,'default',20,8,'',1,'yes'),(51,0,'comment_whitelist','Y',1,'1',20,8,'',1,'yes'),(52,0,'page_uris','Y',1,'a:1:{s:5:\"about\";s:5:\"about\";}',20,8,'',1,'yes'),(53,0,'blacklist_keys','Y',1,'',20,8,'',1,'no'),(54,0,'comment_registration','Y',1,'0',20,8,'',1,'yes'),(55,0,'open_proxy_check','Y',1,'0',20,8,'',1,'yes'),(56,0,'rss_language','Y',1,'en',20,8,'',1,'yes'),(57,0,'html_type','Y',1,'text/html',20,8,'',1,'yes'),(58,0,'use_trackback','Y',1,'0',20,8,'',1,'yes'),(59,0,'default_role','Y',1,'subscriber',20,8,'',1,'yes'),(60,0,'rich_editing','Y',1,'true',20,8,'',1,'yes'),(61,0,'db_version','Y',1,'3441',20,8,'',1,'yes'),(62,0,'uploads_use_yearmonth_folders','Y',1,'1',20,8,'',1,'yes'),(63,0,'upload_path','Y',1,'wp-content/uploads',20,8,'',1,'yes'),(64,0,'secret','Y',1,'a3698b1a945d81cdebfd4dad01f464e2',20,8,'',1,'yes'),(65,0,'wp_user_roles','Y',1,'a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:30:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:19:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:8:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:4:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}',20,8,'',1,'yes');
/*!40000 ALTER TABLE `wp_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_post2cat`
--

DROP TABLE IF EXISTS `wp_post2cat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_post2cat` (
  `rel_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) NOT NULL DEFAULT '0',
  `category_id` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rel_id`),
  KEY `post_id` (`post_id`,`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_post2cat`
--

LOCK TABLES `wp_post2cat` WRITE;
/*!40000 ALTER TABLE `wp_post2cat` DISABLE KEYS */;
INSERT INTO `wp_post2cat` VALUES (1,1,1);
/*!40000 ALTER TABLE `wp_post2cat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_postmeta`
--

DROP TABLE IF EXISTS `wp_postmeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`meta_id`),
  KEY `post_id` (`post_id`),
  KEY `meta_key` (`meta_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_postmeta`
--

LOCK TABLES `wp_postmeta` WRITE;
/*!40000 ALTER TABLE `wp_postmeta` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_postmeta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_posts`
--

DROP TABLE IF EXISTS `wp_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_posts` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext NOT NULL,
  `post_title` text NOT NULL,
  `post_category` int(4) NOT NULL DEFAULT '0',
  `post_excerpt` text NOT NULL,
  `post_status` enum('publish','draft','private','static','object','attachment') NOT NULL DEFAULT 'publish',
  `comment_status` enum('open','closed','registered_only') NOT NULL DEFAULT 'open',
  `ping_status` enum('open','closed') NOT NULL DEFAULT 'open',
  `post_password` varchar(20) NOT NULL DEFAULT '',
  `post_name` varchar(200) NOT NULL DEFAULT '',
  `to_ping` text NOT NULL,
  `pinged` text NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` text NOT NULL,
  `post_parent` bigint(20) NOT NULL DEFAULT '0',
  `guid` varchar(255) NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(100) NOT NULL DEFAULT '',
  `post_mime_type` varchar(100) NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `post_name` (`post_name`),
  KEY `post_status` (`post_status`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_posts`
--

LOCK TABLES `wp_posts` WRITE;
/*!40000 ALTER TABLE `wp_posts` DISABLE KEYS */;
INSERT INTO `wp_posts` VALUES (1,1,'2015-05-17 05:33:05','2015-05-17 05:33:05','Welcome to WordPress. This is your first post. Edit or delete it, then start blogging!','Hello world!',0,'','publish','open','open','','hello-world','','','2015-05-17 05:33:05','2015-05-17 05:33:05','',0,'',0,'','',1),(2,1,'2015-05-17 05:33:05','2015-05-17 05:33:05','This is an example of a WordPress page, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many pages like this one or sub-pages as you like and manage all of your content inside of WordPress.','About',0,'','static','open','open','','about','','','2015-05-17 05:33:05','2015-05-17 05:33:05','',0,'',0,'','',0);
/*!40000 ALTER TABLE `wp_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_usermeta`
--

DROP TABLE IF EXISTS `wp_usermeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_usermeta`
--

LOCK TABLES `wp_usermeta` WRITE;
/*!40000 ALTER TABLE `wp_usermeta` DISABLE KEYS */;
INSERT INTO `wp_usermeta` VALUES (1,1,'wp_user_level','10'),(2,1,'wp_capabilities','a:1:{s:13:\"administrator\";b:1;}');
/*!40000 ALTER TABLE `wp_usermeta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_users`
--

DROP TABLE IF EXISTS `wp_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_users` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) NOT NULL DEFAULT '',
  `user_pass` varchar(64) NOT NULL DEFAULT '',
  `user_nicename` varchar(50) NOT NULL DEFAULT '',
  `user_email` varchar(100) NOT NULL DEFAULT '',
  `user_url` varchar(100) NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(60) NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`),
  KEY `user_login_key` (`user_login`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_users`
--

LOCK TABLES `wp_users` WRITE;
/*!40000 ALTER TABLE `wp_users` DISABLE KEYS */;
INSERT INTO `wp_users` VALUES (1,'admin','ccb59502cb29b34169677e2bd5f134b6','admin','password@passwordpasswordpassword.com','','2015-05-17 05:33:05','',0,'password');
/*!40000 ALTER TABLE `wp_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-17  5:39:56
