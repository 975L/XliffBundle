# XliffBundle

XliffBundle does the following:

- exports xlf files from a database, where columns are languages, to be used as translation files in Symfony (or other).

[XliffBundle dedicated web page](https://975l.com/en/pages/xliff-bundle).

[XliffBundle API documentation](https://975l.com/apidoc/c975L/XliffBundle.html).

## Bundle installation

### Step 1: Download the Bundle

Use [Composer](https://getcomposer.org) to install the library

```bash
    composer require-dev c975l/xliff-bundle
```

We strongly recommend to **use this only on the dev part**

### Step 2: Enable the Bundle

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

### Step 3: Enable the Routes

Then, enable the routes by adding them to the `app/config/routing_dev.yml` file of your project:

```yml
// app/config/routing_dev.yml

c975_l_xliff:
    resource: "@c975LXliffBundle/Controller/"
    type:     annotation
    prefix:   /
```

### Step 5: Create MySql table

You can use `php bin/console make:migration` to create the migration file as documented in [Symfony's Doctrine docs](https://symfony.com/doc/current/doctrine.html) OR use `/translations.sql` to create the table `translations`. The `DROP TABLE` is commented to avoid dropping by mistake.

### Step 4: Define languages to be exported

v2.0+ of c975LXliffBundle uses [c975L/ConfigBundle](https://github.com/975L/ConfigBundle) to manage configuration parameters. Use the Route "/xliff/config" with the proper user role to modify them.

**Upgrading from v1.x? Check [UPGRADE.md](UPGRADE.md).**

## How to use

Call your localhost with `/xliff/create`, this will run the bundle and create the xlf files.

Please note that **the missing translations in a language will be replaced by the source language between brackets. This will break the ability to see from Symfony's toolbar the missing translations, but as we rely on the database, we'll still be able to know what are the missing texts.**

If this project **help you to reduce time to develop**, you can sponsor me via the "Sponsor" button at the top :)
