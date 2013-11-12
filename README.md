PUGXGeneratorBundle sandbox
===========================

A sandbox for [PUGXGeneratorBundle](https://github.com/PUGX/PUGXGeneratorBundle).

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

