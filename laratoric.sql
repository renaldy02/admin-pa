/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100121
 Source Host           : localhost
 Source Database       : laratoric

 Target Server Type    : MySQL
 Target Server Version : 100121
 File Encoding         : utf-8

 Date: 02/18/2019 10:47:56 AM
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `log_activities`
-- ----------------------------
DROP TABLE IF EXISTS `log_activities`;
CREATE TABLE `log_activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(200) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `method` varchar(100) DEFAULT NULL,
  `ip` varchar(200) DEFAULT NULL,
  `agent` varchar(200) DEFAULT NULL,
  `user_id` int(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `log_activities`
-- ----------------------------
BEGIN;
INSERT INTO `log_activities` VALUES ('3', 'Access Login', 'http://localhost:8000/login', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '0', '2019-02-14 04:33:40', '2019-02-14 04:33:40'), ('5', 'Access Home', 'http://localhost:8000', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 04:43:48', '2019-02-14 04:43:48'), ('6', 'Success Login', 'http://localhost:8000', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 04:47:25', '2019-02-14 04:47:25'), ('7', 'Success Logout', 'http://localhost:8000/logout', 'POST', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 04:47:29', '2019-02-14 04:47:29'), ('8', 'Access Login', 'http://localhost:8000/login', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '0', '2019-02-14 04:47:29', '2019-02-14 04:47:29'), ('9', 'Access Login', 'http://localhost:8000/login', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '0', '2019-02-14 04:49:27', '2019-02-14 04:49:27'), ('10', 'Success Login', 'http://localhost:8000', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 04:51:51', '2019-02-14 04:51:51'), ('11', 'Success Logout', 'http://localhost:8000/logout', 'POST', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 04:51:59', '2019-02-14 04:51:59'), ('12', 'Access Login', 'http://localhost:8000/login', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '0', '2019-02-14 04:51:59', '2019-02-14 04:51:59'), ('13', 'Success Logout', 'http://localhost:8000/logout', 'POST', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 05:12:54', '2019-02-14 05:12:54'), ('14', 'Access Login', 'http://localhost:8000/login', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '0', '2019-02-14 05:12:54', '2019-02-14 05:12:54'), ('15', 'Success Login', 'http://localhost:8000', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 05:13:07', '2019-02-14 05:13:07'), ('16', 'Access Data User', 'http://localhost:8000/manajemen-user/user', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 05:13:10', '2019-02-14 05:13:10'), ('17', 'Access Data User', 'http://localhost:8000/manajemen-user/user', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 05:13:21', '2019-02-14 05:13:21'), ('18', 'Access Data User', 'http://localhost:8000/manajemen-user/user', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 05:14:12', '2019-02-14 05:14:12'), ('19', 'Access Data User', 'http://localhost:8000/manajemen-user/user', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 05:35:02', '2019-02-14 05:35:02'), ('20', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 05:45:19', '2019-02-14 05:45:19'), ('21', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 05:46:30', '2019-02-14 05:46:30'), ('22', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 05:48:39', '2019-02-14 05:48:39'), ('23', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 05:49:15', '2019-02-14 05:49:15'), ('24', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 05:49:42', '2019-02-14 05:49:42'), ('25', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 05:49:44', '2019-02-14 05:49:44'), ('26', 'Success Login', 'http://localhost:8000', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 05:49:47', '2019-02-14 05:49:47'), ('27', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 05:50:00', '2019-02-14 05:50:00'), ('28', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 05:50:39', '2019-02-14 05:50:39'), ('29', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 05:57:44', '2019-02-14 05:57:44'), ('30', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:02:56', '2019-02-14 06:02:56'), ('31', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:04:26', '2019-02-14 06:04:26'), ('32', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:05:31', '2019-02-14 06:05:31'), ('33', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:06:18', '2019-02-14 06:06:18'), ('34', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:22:57', '2019-02-14 06:22:57'), ('35', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:23:33', '2019-02-14 06:23:33'), ('36', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:25:35', '2019-02-14 06:25:35'), ('37', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:25:46', '2019-02-14 06:25:46'), ('38', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:27:49', '2019-02-14 06:27:49'), ('39', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:27:53', '2019-02-14 06:27:53'), ('40', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:29:43', '2019-02-14 06:29:43'), ('41', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:29:50', '2019-02-14 06:29:50'), ('42', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:29:56', '2019-02-14 06:29:56'), ('43', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:31:10', '2019-02-14 06:31:10'), ('44', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:31:14', '2019-02-14 06:31:14'), ('45', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:31:55', '2019-02-14 06:31:55'), ('46', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:32:40', '2019-02-14 06:32:40'), ('47', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:33:09', '2019-02-14 06:33:09'), ('48', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:35:26', '2019-02-14 06:35:26'), ('49', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:38:51', '2019-02-14 06:38:51'), ('50', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:39:47', '2019-02-14 06:39:47'), ('51', 'Access Data User', 'http://localhost:8000/manajemen-user/user', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:43:17', '2019-02-14 06:43:17'), ('52', 'Access Add User', 'http://localhost:8000/manajemen-user/add-user', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:43:27', '2019-02-14 06:43:27'), ('53', 'Access Data User', 'http://localhost:8000/manajemen-user/user', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:43:34', '2019-02-14 06:43:34'), ('54', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:43:53', '2019-02-14 06:43:53'), ('55', 'Success Login', 'http://localhost:8000', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:45:14', '2019-02-14 06:45:14'), ('56', 'Success Login', 'http://localhost:8000', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:45:21', '2019-02-14 06:45:21'), ('57', 'Success Login', 'http://localhost:8000', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 06:45:23', '2019-02-14 06:45:23'), ('58', 'Success Login', 'http://localhost:8000', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 07:19:35', '2019-02-14 07:19:35'), ('59', 'Success Login', 'http://localhost:8000', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 07:20:42', '2019-02-14 07:20:42'), ('60', 'Success Logout', 'http://localhost:8000/logout', 'POST', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-14 07:20:46', '2019-02-14 07:20:46'), ('61', 'Access Login', 'http://localhost:8000/login', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '0', '2019-02-14 07:20:46', '2019-02-14 07:20:46'), ('62', 'Access Login', 'http://localhost:8000/login', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '0', '2019-02-14 07:22:16', '2019-02-14 07:22:16'), ('63', 'Access Login', 'http://localhost:8000/login', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '0', '2019-02-15 07:56:53', '2019-02-15 07:56:53'), ('64', 'Success Login', 'http://localhost:8000', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-15 07:57:06', '2019-02-15 07:57:06'), ('65', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-15 07:58:11', '2019-02-15 07:58:11'), ('66', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-15 08:09:53', '2019-02-15 08:09:53'), ('67', 'Access Log Activity', 'http://localhost:8000/activity', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-15 08:11:26', '2019-02-15 08:11:26'), ('68', 'Access Log Activity', 'http://localhost:8000/activity', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-15 08:11:40', '2019-02-15 08:11:40'), ('69', 'Access Log Activity', 'http://localhost:8000/activity', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-15 08:12:46', '2019-02-15 08:12:46'), ('70', 'Access Log Activity', 'http://localhost:8000/activity', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-15 08:14:03', '2019-02-15 08:14:03'), ('71', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-15 08:14:23', '2019-02-15 08:14:23'), ('72', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-15 08:15:14', '2019-02-15 08:15:14'), ('73', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-15 08:16:22', '2019-02-15 08:16:22'), ('74', 'Access Profile', 'http://localhost:8000/profile', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-15 08:17:07', '2019-02-15 08:17:07'), ('75', 'Access Log Activity', 'http://localhost:8000/activity', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-15 08:17:09', '2019-02-15 08:17:09'), ('76', 'Access Log Activity', 'http://localhost:8000/activity', 'GET', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.96 Safari/537.36', '2', '2019-02-15 08:23:34', '2019-02-15 08:23:34');
COMMIT;

-- ----------------------------
--  Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `migrations`
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1'), ('2', '2014_10_12_100000_create_password_resets_table', '1'), ('3', '2019_02_12_065139_entrust_setup_tables', '2');
COMMIT;

-- ----------------------------
--  Table structure for `password_resets`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `password_resets`
-- ----------------------------
BEGIN;
INSERT INTO `password_resets` VALUES ('ilhamsabar@gmail.com', '$2y$10$Re75UPdj5J5iXh6h2q3IW.jzsdG44a87mpnZbx2Uic79fGK5oMOvu', '2019-02-14 04:49:21');
COMMIT;

-- ----------------------------
--  Table structure for `permission_role`
-- ----------------------------
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `permission_role`
-- ----------------------------
BEGIN;
INSERT INTO `permission_role` VALUES ('1', '1'), ('3', '3');
COMMIT;

-- ----------------------------
--  Table structure for `permissions`
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `permissions`
-- ----------------------------
BEGIN;
INSERT INTO `permissions` VALUES ('1', 'create-user', 'create user', 'create user', null, null, null, null, null), ('3', 'default', 'Default', 'Defaults', '2019-02-14 03:47:58', '2019-02-14 03:47:58', null, null, null);
COMMIT;

-- ----------------------------
--  Table structure for `role_user`
-- ----------------------------
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `role_user`
-- ----------------------------
BEGIN;
INSERT INTO `role_user` VALUES ('2', '1'), ('3', '2');
COMMIT;

-- ----------------------------
--  Table structure for `roles`
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `roles`
-- ----------------------------
BEGIN;
INSERT INTO `roles` VALUES ('1', 'root', 'root', 'all access menu', null, null), ('2', 'admin', 'Admin', 'admin menu', '2019-02-13 08:55:36', '2019-02-13 08:55:36'), ('3', 'default', 'default', 'default roles', '2019-02-14 03:48:40', '2019-02-14 03:48:40');
COMMIT;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
--  Records of `users`
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('2', 'admin', 'ilhamsabar@gmail.com', null, '$2y$10$p1WtK2u4P/C4nne17NjVau2uioUiQ0gKetj/1yJRoXnvfIt1jXhd.', '15aZovz2yO4cFNksKmShfPHflPrrNncT7Xot7hJRvPLt85PykswWflf1fYBU', '2019-02-12 07:05:49', '2019-02-14 06:38:50', null, null, '2', null, 'http://localhost:8000/files/profile/admin-134.jpg'), ('3', 'ilham', 'djilhamsabar@gmail.com', null, '$2y$10$vQLnB7WyrNJBICDrB.zlo.t8Wp3ls8vZPCdRGQ19qBsbT31.9ogy2', 'Y0tleNBlNWEsH9lFR0u4T9hUHhOR6bFTjXgZ5fKVlxHhJ7f4HIkNSnSzdnA8', '2019-02-14 03:07:38', '2019-02-14 03:07:38', null, '2', '3', null, null);
COMMIT;

-- ----------------------------
--  View structure for `v_access_logs`
-- ----------------------------
DROP VIEW IF EXISTS `v_access_logs`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_access_logs` AS select `users`.`name` AS `name`,`log_activities`.`subject` AS `subject`,`log_activities`.`url` AS `url`,`log_activities`.`method` AS `method`,`log_activities`.`ip` AS `ip`,`log_activities`.`agent` AS `agent`,`log_activities`.`created_at` AS `created_at`,`log_activities`.`updated_at` AS `updated_at`,`log_activities`.`id` AS `id`,`users`.`id` AS `users_id` from (`log_activities` left join `users` on((`log_activities`.`user_id` = `users`.`id`)));

-- ----------------------------
--  View structure for `v_roles_permission`
-- ----------------------------
DROP VIEW IF EXISTS `v_roles_permission`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_roles_permission` AS select `users`.`name` AS `name`,`roles`.`name` AS `role_name`,`permissions`.`name` AS `permission_name` from ((((`users` join `role_user` on((`users`.`id` = `role_user`.`user_id`))) join `roles` on((`role_user`.`role_id` = `roles`.`id`))) join `permission_role` on((`roles`.`id` = `permission_role`.`role_id`))) join `permissions` on((`permission_role`.`permission_id` = `permissions`.`id`)));

-- ----------------------------
--  View structure for `v_users_role`
-- ----------------------------
DROP VIEW IF EXISTS `v_users_role`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_users_role` AS select `roles`.`name` AS `role_name`,`users`.`name` AS `name`,`users`.`email` AS `email`,`users`.`created_at` AS `created_at`,`users`.`updated_at` AS `updated_at`,`users`.`id` AS `id` from ((`users` join `role_user` on((`users`.`id` = `role_user`.`user_id`))) join `roles` on((`roles`.`id` = `role_user`.`role_id`)));

SET FOREIGN_KEY_CHECKS = 1;
