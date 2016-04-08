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
INSERT INTO `translations` VALUES ('16', 'messages', 'label.send', 'I send', 'J\'envoie', null);
INSERT INTO `translations` VALUES ('17', 'messages', 'message.sent', 'My message has been well sent!', 'Mon message a bien été envoyé !', null);
INSERT INTO `translations` VALUES ('19', 'messages', 'text.contact', 'Contact', 'Contact', 'Contacto');
INSERT INTO `translations` VALUES ('22', 'messages', 'text.abuse', 'Report abuse', 'Rapporter un abus', null);
INSERT INTO `translations` VALUES ('24', 'validators', 'short.not_blank', 'The shortcut cannot be empty', 'Le raccourci ne peut pas etre vide', null);
INSERT INTO `translations` VALUES ('25', 'messages', 'value.report_abuse', 'Report abuse on', 'Rapport d\'abus sur', null);
INSERT INTO `translations` VALUES ('26', 'messages', 'info.updated_page', 'Latest page update', 'Mise à jour de la page', null);
INSERT INTO `translations` VALUES ('27', 'messages', 'info.site_online', 'Site online', 'Mise en ligne du site', null);
INSERT INTO `translations` VALUES ('28', 'messages', 'cookiePolicy', 'Cookies Policy', 'Politique Cookies', null);
INSERT INTO `translations` VALUES ('29', 'messages', 'cookieBanner', 'By continuing your visit to this site, you accept the use of cookies to make statistics of visits, and the session ID.', 'En poursuivant votre navigation sur ce site, vous acceptez l’utilisation de Cookies pour réaliser des statistiques de visites, ainsi que l\'identification de session.', null);
INSERT INTO `translations` VALUES ('30', 'messages', 'text.only_french', 'This text is only available in french.', 'Ce texte est seulement disponible en français.', null);
INSERT INTO `translations` VALUES ('31', 'messages', 'text.legal_notice', 'Legal notice', 'Mentions légales', null);
INSERT INTO `translations` VALUES ('32', 'messages', 'text.terms_of_use', 'Terms of use', 'Conditions d\'utilisation', null);
INSERT INTO `translations` VALUES ('33', 'messages', 'text.privacy_policy', 'Privacy policy', 'Règles de confidentialité', null);
INSERT INTO `translations` VALUES ('34', 'messages', 'text.cookies_policy', 'Cookies policy', 'Utilisation des cookies', null);
INSERT INTO `translations` VALUES ('35', 'messages', 'text.publication_rights', 'Publication rights', 'Droits de publication', null);
INSERT INTO `translations` VALUES ('36', 'messages', 'text.point_error', 'I point out the error', 'Je signale l\'erreur', null);
INSERT INTO `translations` VALUES ('37', 'messages', 'text.err404', 'The page I request is not available. Thank you to check the link in the address bar.', 'La page que je demande n\'est pas disponible. Merci de vérifier le lien dans la barre d\'adresse.', null);
INSERT INTO `translations` VALUES ('38', 'messages', 'text.err500', 'We have detected an internal error :-( We ask you to excuse us.', 'Nous avons détecté une erreur interne :-( Nous vous prions de nous en excuser.', null);
INSERT INTO `translations` VALUES ('39', 'messages', 'text.err', 'We have detected an error :-( We ask you to excuse us.', 'Nous avons détecté une erreur :-( Nous vous prions de nous en excuser.', null);
INSERT INTO `translations` VALUES ('40', 'messages', 'text.err401', 'I can not access this resource because access is restricted and requires identification.', 'Je ne peux pas accéder à cette ressource car l\'accès est restreint et nécessite une identification.', null);
INSERT INTO `translations` VALUES ('41', 'messages', 'text.err403', 'I can not access this resource because access is restricted.', 'Je ne peux pas accéder à cette ressource car l\'accès est restreint.', null);
INSERT INTO `translations` VALUES ('42', 'messages', 'text.err410', 'The page I requested does not exist anymore.', 'La page que je demande n\'existe plus.', null);
INSERT INTO `translations` VALUES ('43', 'messages', 'text.redirection', 'Redirection', 'Redirection', null);
INSERT INTO `translations` VALUES ('44', 'messages', 'label.foreground_color', 'Foreground color', 'Couleur avant-plan', null);
INSERT INTO `translations` VALUES ('45', 'messages', 'label.background_color', 'Background color', 'Couleur de fond', null);
INSERT INTO `translations` VALUES ('46', 'messages', 'label.domain', 'Domain', 'Domaine', null);
INSERT INTO `translations` VALUES ('47', 'messages', 'label.extension', 'Extension', 'Extension', null);
INSERT INTO `translations` VALUES ('48', 'messages', 'label.creation', 'Creation', 'Création', null);
INSERT INTO `translations` VALUES ('49', 'messages', 'label.verification', 'Verification', 'Vérification', null);
INSERT INTO `translations` VALUES ('50', 'messages', 'label.renewal', 'Renewal', 'Renouvellement', null);
INSERT INTO `translations` VALUES ('51', 'messages', 'text.not_concerned', 'Not concerned', 'Non concerné', null);
INSERT INTO `translations` VALUES ('52', 'messages', 'text.soon_available', '(Soon available)', '(Bientot disponible)', null);
INSERT INTO `translations` VALUES ('53', 'messages', 'text.not_yet', 'Not yet', 'Pas encore', null);
INSERT INTO `translations` VALUES ('54', 'messages', 'text.maybe_not_exist', '[Maybe not exists anymore]', '[N\'existe peut-être plus]', null);
INSERT INTO `translations` VALUES ('55', 'messages', 'label.httpcode', 'Return http code', 'Code de retour http', null);
INSERT INTO `translations` VALUES ('57', 'messages', 'label.signin', 'Sign in', 'Me connecter', null);
INSERT INTO `translations` VALUES ('58', 'messages', 'label.register', 'Register', 'M\'enregistrer', null);
INSERT INTO `translations` VALUES ('61', 'messages', 'label.password', 'Password', 'Mot de passe', null);
INSERT INTO `translations` VALUES ('62', 'validators', 'firstname.min_length', 'My firstname must be at least {{ limit }} characters long', 'Mon nom doit faire au moins {{ limit }} caractères', null);
INSERT INTO `translations` VALUES ('63', 'validators', 'firstname.max_length', 'My firstname cannot be longer than {{ limit }} characters', 'Mon nom ne doit pas excéder {{ limit }} caractères', null);
INSERT INTO `translations` VALUES ('64', 'validators', 'lastname.max_length', 'My lastname cannot be longer than {{ limit }} characters', 'Mon prénom ne doit pas excéder {{ limit }} caractères', null);
INSERT INTO `translations` VALUES ('65', 'validators', 'lastname.min_length', 'My lastname must be at least {{ limit }} characters long', 'Mon prénom doit faire au moins {{ limit }} caractères', null);
INSERT INTO `translations` VALUES ('66', 'messages', 'label.gender', 'Gender', 'Genre', null);
INSERT INTO `translations` VALUES ('67', 'messages', 'label.firstname', 'Firstname', 'Prénom', null);
INSERT INTO `translations` VALUES ('68', 'messages', 'label.lastname', 'Lastname', 'Nom', null);
INSERT INTO `translations` VALUES ('69', 'messages', 'placeholder.lastname', 'My lastname', 'Mon nom', null);
INSERT INTO `translations` VALUES ('70', 'messages', 'placeholder.firstname', 'My firstname', 'Mon prénom', null);
INSERT INTO `translations` VALUES ('71', 'messages', 'label.woman', 'Woman', 'Femme', null);
INSERT INTO `translations` VALUES ('72', 'messages', 'label.man', 'Man', 'Homme', null);
INSERT INTO `translations` VALUES ('73', 'messages', 'label.account_activated', 'Account activated', 'Compte activé', null);
INSERT INTO `translations` VALUES ('74', 'messages', 'label.account_created', 'Account created waiting validation', 'Compte créé en attente de validation', null);
INSERT INTO `translations` VALUES ('75', 'validators', 'gender.choose_valid', 'Choose a valid gender', 'Choisir un genre valide', null);
INSERT INTO `translations` VALUES ('76', 'messages', 'label.challenge', 'I solve this little challenge', 'Je résouds ce petit challenge', null);
INSERT INTO `translations` VALUES ('77', 'messages', 'label.change_password', 'Change password', 'Changement de mot de passe', null);
INSERT INTO `translations` VALUES ('78', 'messages', 'label.password_already_requested', 'Password already requested', 'Mot de passe déjà demandé', null);
INSERT INTO `translations` VALUES ('79', 'messages', 'label.mail_password_sent', 'Mail with password reset sent', 'Mail avec ré-initialisation de mot de passe envoyé', null);
INSERT INTO `translations` VALUES ('80', 'messages', 'label.request_password_change', 'Request for password change', 'Demande de changement de mot de passe', null);
INSERT INTO `translations` VALUES ('81', 'messages', 'label.reset_password', 'Reset of password', 'Ré-initialisation du mot de passe', null);
INSERT INTO `translations` VALUES ('82', 'messages', 'label.reset_content', 'Reset content', 'Ré-initialisation contenu', null);
INSERT INTO `translations` VALUES ('83', 'validators', 'label.error_challenge', 'Wrong answer to the challenge', 'Mauvaise réponse au challenge', null);
INSERT INTO `translations` VALUES ('84', 'messages', 'label.or', 'OR', 'OU', null);
INSERT INTO `translations` VALUES ('85', 'forms', 'form.reset_password_info', 'I use this form to reset my password', 'J\'utilise ce formulaire pour ré-initialiser mon mot de passe', null);
INSERT INTO `translations` VALUES ('86', 'messages', 'label.forgot_password', 'Forgot password', 'Mot de passe oublié', null);
INSERT INTO `translations` VALUES ('87', 'messages', 'label.user_profile_show', 'User profile', 'Profil utilisateur', null);
INSERT INTO `translations` VALUES ('88', 'messages', 'label.user_profile_edit', 'Edit user profile', 'Édition profil utilisateur', null);
INSERT INTO `translations` VALUES ('89', 'messages', 'label.edit', 'Edit', 'Éditer', null);
INSERT INTO `translations` VALUES ('90', 'messages', 'label.signout', 'Sign out', 'Me déconnecter', null);
INSERT INTO `translations` VALUES ('91', 'forms', 'form.already_signedin_warning', 'You have already signed in', 'Vous êtes déjà connecté', null);
INSERT INTO `translations` VALUES ('92', 'messages', 'label.view_profile', 'View my profile', 'Voir mon profil', null);
INSERT INTO `translations` VALUES ('93', 'messages', 'label.url', 'Url', 'Lien', null);
INSERT INTO `translations` VALUES ('94', 'messages', 'label.homepage', 'Homepage', 'Accueil', null);
INSERT INTO `translations` VALUES ('95', 'validators', 'url.invalid', 'The url \'{{ value }}\' is not a valid', 'L\'url \'{{ value }}\' n\'est pas valide', null);
INSERT INTO `translations` VALUES ('96', 'validators', 'host.invalid', 'The host \'{{ value }}\' could not be resolved', 'Le serveur \'{{ value }}\' ne peut pas etre trouvé', null);
INSERT INTO `translations` VALUES ('97', 'messages', 'label.en', 'English', 'English', null);
INSERT INTO `translations` VALUES ('98', 'messages', 'label.fr', 'Français', 'Français', null);
INSERT INTO `translations` VALUES ('99', 'messages', 'label.locale', 'Preferred language', 'Langue préférée', null);
INSERT INTO `translations` VALUES ('100', 'validators', 'password.requirement', 'The password must be from 8 to 48 characters long and contain at least 1 letter, 1 digit and 1 sign within @#$%^*', 'Le mot de passe doit faire de 8 à 48 caractères et contenir au moins 1 lettre, 1 chiffre et 1 signe parmi @#$%^*', null);