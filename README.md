PUGXGeneratorBundle sandbox
===========================

A sandbox for [PUGXGeneratorBundle](https://github.com/PUGX/PUGXGeneratorBundle).

Screenshots
-----------

(click for fullscreen images)

[![list with sorting details](https://raw.github.com/garak/PUGXGeneratorBundleSandbox/master/src/Garak/SandboxBundle/Resources/public/images/thumbnails/list1.png)](https://raw.github.com/garak/PUGXGeneratorBundleSandbox/master/src/Garak/SandboxBundle/Resources/public/images/screenshots/list1.png "List with sorting details")
[![list with pagination details](https://raw.github.com/garak/PUGXGeneratorBundleSandbox/master/src/Garak/SandboxBundle/Resources/public/images/thumbnails/list2.png)](https://raw.github.com/garak/PUGXGeneratorBundleSandbox/master/src/Garak/SandboxBundle/Resources/public/images/screenshots/list2.png "List with pagination details")
[![list with open filters](https://raw.github.com/garak/PUGXGeneratorBundleSandbox/master/src/Garak/SandboxBundle/Resources/public/images/thumbnails/filters.png)](https://raw.github.com/garak/PUGXGeneratorBundleSandbox/master/src/Garak/SandboxBundle/Resources/public/images/screenshots/filters.png "List with open filters")
[![show](https://raw.github.com/garak/PUGXGeneratorBundleSandbox/master/src/Garak/SandboxBundle/Resources/public/images/thumbnails/show.png)](https://raw.github.com/garak/PUGXGeneratorBundleSandbox/master/src/Garak/SandboxBundle/Resources/public/images/screenshots/show.png "Show")
[![edit](https://raw.github.com/garak/PUGXGeneratorBundleSandbox/master/src/Garak/SandboxBundle/Resources/public/images/thumbnails/edit.png)](https://raw.github.com/garak/PUGXGeneratorBundleSandbox/master/src/Garak/SandboxBundle/Resources/public/images/screenshots/edit.png "Edit")


Setup
-----

* Clone this repo
* run ``composer install``
* run ``app/console doctrine:database:create``
* run ``app/console doctrine:schema:update --force``
* run ``app/console doctrine:fixtures:load --no-interaction``
* Edit ``vendor/components/font-awesome/less/variables.less`` to point ``@fa-font-path``
  to ``/fonts`` (instead of ``../fonts``).

If you find a more elegant solution for last point, feel free to open a Pull Request.


Creating instructions
---------------------

This project has been created following instructions of [PUGXGeneratorBundle](https://github.com/PUGX/PUGXGeneratorBundle).

Details of commands used:

``` bash
$ php app/console doctrine:generate:entity
```

``` bash
$ php app/console doctrine:generate:entities GarakSandboxBundle:User --no-backup
```

``` bash
$ php app/console pugx:generate:crud \
    --entity=GarakSandboxBundle:User \
    --layout=GarakSandboxBundle::layout.html.twig \
    --theme=GarakSandboxBundle:Form:theme.html.twig \
    --with-write --with-filter --with-sort --use-paginator \
    --no-interaction
```

``` bash
$ php app/console faker:populate
```
