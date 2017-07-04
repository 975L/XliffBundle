/*
 * (c) 2016: 975l <contact@975l.com>
 * (c) 2016: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for translations
-- ----------------------------
-- DROP TABLE IF EXISTS `translations`;
CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(16) DEFAULT NULL,
  `trans_key` varchar(32) DEFAULT NULL,
  `en` varchar(1024) DEFAULT NULL,
  `fr` varchar(1024) DEFAULT NULL,
  `es` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `un_trans_key` (`trans_key`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;