# XliffBundle
This bundle exports the content of a database table in xlf files, to be used with Symfony (or other)
It has also two main goals.
1) I haven't found a Bundle that simply exports data from database to xlf.
the ones I've found required to create firstly a xlf file for the default language.
2) It's a kind of personal exercice to see how to deploy a 3rd party bundle and use it.
With the whole bunch of related "actions", github, packagist, etc.

FEEL FREE TO LET ME KNOW WHAT'S WRONG or improve the bundle ;-)


Installation
============

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require c975L/xliff-bundle "@dev"
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
        $bundles = array(
            // ...
            new c975L\XliffBundle\c975LXliffBundle(),
        );

        // ...
    }

    // ...
}
```

Step 3: Enable the Routes
-------------------------

Then, enable the routes by adding it to the `app/config/routing.yml` file of your project:

```yml
// app/config/routing.yml

...
c975_l_xliff:
    resource: "@c975LXliffBundle/Controller/"
    type:     annotation
    prefix:   /
```