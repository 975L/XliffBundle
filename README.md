XliffBundle
===========

XliffBundle does the following:

- exports xlf files from a database, where columns are languages, to be used as translation files in Symfony (or other).

[Xliff Bundle dedicated web page](https://975l.com/en/pages/xliff-bundle).

Bundle installation
===================

Step 1: Download the Bundle
---------------------------

**We strongly recommend to use this only on the dev part**

Use [Composer](https://getcomposer.org) to install the library
```bash
    composer require-dev c975l/xliff-bundle
```

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding it to the list of registered bundles in the `app/AppKernel.php` file of your project:

```php
<?php
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            // ...
        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            // ...
            $bundles[] = new c975L\XliffBundle\c975LXliffBundle();
        }
    }
}
```

Step 3: Enable the Routes
-------------------------

Then, enable the routes by adding them to the `app/config/routing_dev.yml` file of your project:

```yml
// app/config/routing_dev.yml

c975_l_xliff:
    resource: "@c975LXliffBundle/Controller/"
    type:     annotation
    prefix:   /
```

Step 5: Create MySql table
--------------------------
Use `/Resources/sql/translations.sql` to create the table `translations`. The `DROP TABLE` is commented to avoid dropping by mistake.

Step 4: Define languages to be exported
---------------------------------------
Then, in the `app/config_dev.yml` file of your project, define the following:

```yml
c975_l_xliff:
    #Source language
    source: 'en'
    #List of languages to be exported
    languages: ['en', 'fr', 'es']
```
**The languages MUST match the column's names in the database table.**

How to use
----------
Add `/975l_xliff` to the url of your local web server, this will run the bundle and create the files.

**Please note that the missing translations in a language will be replaced by the source language between brackets. This will break the ability to see from Symfony's toolbar the missing translations but as we rely on the database, we'll still be able to know what are the missing texts.**
