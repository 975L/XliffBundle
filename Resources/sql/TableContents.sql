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
INSERT INTO `translations` VALUES ('10', 'validators', 'name.min_length', 'My name must be at least {{ limit }} characters long', 'Mon nom doit faire au moins {{ limit }} caractères', null);
INSERT INTO `translations` VALUES ('11', 'validators', 'name.max_length', 'My name cannot be longer than {{ limit }} characters', 'Mon nom ne doit pas excéder {{ limit }} caractères', null);
INSERT INTO `translations` VALUES ('12', 'validators', 'message.min_length', 'My message must be at least {{ limit }} characters long', 'Mon message doit faire au moins {{ limit }} caractères', null);
INSERT INTO `translations` VALUES ('13', 'validators', 'message.max_length', 'My message cannot be longer than {{ limit }} characters', 'Mon message ne doit pas excéder {{ limit }} caractères', null);
INSERT INTO `translations` VALUES ('14', 'validators', 'subject.min_length', 'The subject must be at least {{ limit }} characters long', 'Le sujet doit faire au moins {{ limit }} caractères', null);
INSERT INTO `translations` VALUES ('15', 'validators', 'subject.max_length', 'The subject cannot be longer than {{ limit }} characters', 'Le sujet ne doit pas excéder {{ limit }} caractères', null);
INSERT INTO `translations` VALUES ('16', 'messages', 'label.send', 'Send', 'Envoyer', null);
INSERT INTO `translations` VALUES ('17', 'messages', 'mail.sent', 'My email has been well sent!', 'Mon email a bien été envoyé !', null);