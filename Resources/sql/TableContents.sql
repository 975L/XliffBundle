/*
 * (c) 2016: 975l <contact@975l.com>
 * (c) 2016: Laurent Marquet <laurent.marquet@laposte.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Records of translations
-- ----------------------------
INSERT INTO `translations` VALUES ('1', 'messages', 'label.name', 'Name', 'Nom', null);
INSERT INTO `translations` VALUES ('2', 'messages', 'label.subject', 'Subject', 'Sujet', null);
INSERT INTO `translations` VALUES ('3', 'messages', 'label.email', 'Email', 'Email', null);
INSERT INTO `translations` VALUES ('4', 'messages', 'label.message', 'Message', 'Message', null);
INSERT INTO `translations` VALUES ('5', 'messages', 'placeholder.name', 'My name', 'Mon nom', null);
INSERT INTO `translations` VALUES ('6', 'messages', 'placeholder.subject', 'The subject', 'Le sujet', null);
INSERT INTO `translations` VALUES ('7', 'messages', 'placeholder.email', 'My email', 'Mon email', null);
INSERT INTO `translations` VALUES ('8', 'messages', 'placeholder.message', 'My message', 'Mon message', null);
INSERT INTO `translations` VALUES ('9', 'validators', 'email.not_valid', 'The email is not valid', 'L\'email n\'est pas valide', null);