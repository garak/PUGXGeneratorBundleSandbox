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

If you find a more elegant solution for last point, feel free to opena a Pull Request.
