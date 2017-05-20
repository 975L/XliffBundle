# XliffBundle

This bundle exports columns as languages, from a database table, in xlf files, to be used as translation files in Symfony (or other).

MySql Table
===========

- Use `/Resources/sql/TableCreation.sql` to create the table translations.
The `DROP TABLE` is commented to avoid dropping by mistake.
This will create a table named `translations` with 3 languages: en, fr ,es

- Use `/Resources/sql/TableContents.sql` to fill the table with some useful translations.
This part will be updated regurlarly.

Bundle installation
===================

Step 1: Download the Bundle
---------------------------

**We strongly recommend to use this only on the dev part**

Add the following to your `composer.json > require-dev section`
```
"require-dev": {
    ...
    "c975l/xliff-bundle": "1.*"
},
```
Then open a command console, enter your project directory and update composer,
by executing the following command, to download the latest stable version of this bundle:

```bash
$ composer update
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
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

        // ...
    }

    // ...
}
```

Step 3: Enable the Routes
-------------------------

Then, enable the routes by adding them to the `app/config/routing_dev.yml` file of your project:

```yml
// app/config/routing_dev.yml

...
c975_l_xliff:
    resource: "@c975LXliffBundle/Controller/"
    type:     annotation
    prefix:   /
```

Step 4: Define languages to be exported
---------------------------------------

Then define the list of languages to be exported in the `app/config_dev.yml` file of your project:

```yml
// app/config_dev.yml

...
c975_l_xliff:
    source: 'en'
    languages: ['en', 'fr', 'es']
```
**The languages MUST match the column's names in the database table.**

Usage
=====

A route named `/975l_xliff` can be called from your local web server, this will run the bundle and create the files

Please note that the missing translations in a language will be replaced by the english text between brackets,
this will break the ability to see from Symfony's toolbar the missing translations but as we rely on the database,
we'll still be able to know what are the missing texts.