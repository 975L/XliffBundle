# Changelog

v2.2.1
------
- Suppressed composer.lock (19/01/2020)

v2.2
----
- Changed doctrine-bundle version (19/01/2020)

v2.1.1
------
- Modified ChangeLog.md (05/08/2019)

v2.1
----
- Made use of apply spaceless (05/08/2019)

v2.0
----
**Upgrading from v1.x? Check UPGRADE.md**
- Created branch 1.x (01/07/2019)
- Made use of c975L/ConfigBundle (01/07/2019)


v1.x
====

v1.5.1.1
--------
- Changed Github's author reference url (08/04/2019)

v1.5.1
------
- Made use of Twig namespace (07/03/2019)

v1.5
----
- Modified Entity to use typehint (15/02/2019)
- Documented the possibility to use `php bin/console make:migration` (15/02/2019)

v1.4.8
------
- Removed deprecations for @Method (13/02/2019)
- Implemented AstractController instead of Controller (13/02/2019)
- Modified Dependencyinjection rootNode to be not empty (13/02/2019)

v1.4.7
------
- Modified required versions in `composer.json` (25/12/2018)

v1.4.6
------
- Updated composer.json (01/09/2018)
- Added rector to composer dev part (23/12/2018)
- Modified required versions in composer (23/12/2018)

v1.4.5
------
- Added link to BuyMeCoffee (24/08/2018)
- Added link to apidoc (24/08/2018)
- Added documentation (24/08/2018)
- Re-wrote Repositry methods (24/08/2018)
- Removed FQCN (24/08/2018)
- Created XliffServiceInterface (24/08/2018)

v1.4.4.1
--------
- Suppressed unused file (30/07/2018)

v1.4.4
------
- Removed 'Action' in Controllers method as not requested anymore (29/07/2018)
- Use of Yoda-style (29/07/2018)
- Made Controller more SOLID compliant (29/07/2018)
- Added services.yml to auto-wire (29/07/2018)

v1.4.3
------
- Added missing title in `Resources/views/pagescreate.html.twig` (01/04/2018)

v1.4.2
------
- Corrected page naming display (26/03/2018)

v1.4.1
------
- Updated `README.md` (04/03/2018)

v1.4
----
- Changes in `README.md` (16/08/2017)
- Change about composer download in `README.md` (04/02/2018)
- Add support in `composer.json`+ use of ^ for versions request (04/02/2018)
- Changed Route and Route name [BC-Break] (04/03/2018)
- Added `layout.html.twig` template to enable overiding it (04/03/2018)
- Changed the way `rootTranslations` is defined (04/03/2018)

v1.3.1
------
- Run PHP CS-Fixer (18/07/2017)
- Remove of .travis.yml as tests have to be defined before

v1.3
----
- Renaming of file Resources/sql/TableCreation.sql to translations.sql (13/06/2017)
- Suppression of file Resources/sql/TableContents.sql
- Update of README.md (04/07/2017)

v1.2.2
------
- Changes in README.md (05/06/2017)
- Renaming of ChangeLog.md

v1.2.1
------
- Correction for default language when target is null (05/06/2017)

v1.2
----
- Simplification of rootNode (23/05/2017)
- Renaming of DefaultController.php to XliffController.php

v1.1
----
- Suppression of Tests folders as none are done (20/05/2017)

v1.0
----
- Add of the name of Route to export trnaslations files (20/05/2017)
- Renaming of files/folders
- Change in the index.html.twig
- Add as a variable in config_dev.yml of the path to export translations files
- Use of Symfony/FileSytem for creation of files

v0.7.2
------
- Suppression of files not needed (20/05/2017)

v0.7.1.1
--------
- Correction in query to use the sourceLanguage (11/05/2017)

v0.7.1
------
- Set-up of the source language to export in `app/config_dev.yml` file of the project (11/05/2017)

v0.7
----
- Set-up of the languages to export in `app/config_dev.yml` file of the project (11/05/2017)

v0.6.2
------
- Modifications in README.md due to `composer -require-dev` does not exist (15/03/2017)

v0.6.1
------
- Corrections in composer.json and travis.yml (15/03/2017)

v0.6
----
- Add of Changelog (09/12/2016)
- Suppress of the selection of translations where en is NOT null to allow one language which is not english (09/12/2016)
