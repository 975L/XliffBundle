# Changelog

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