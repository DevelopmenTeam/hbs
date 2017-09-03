<?php

return [

  /*
  |--------------------------------------------------------------------------
  | Default Filesystem Disk
  |--------------------------------------------------------------------------
  |
  | Here you may specify the default filesystem disk that should be used
  | by the framework. The "local" disk, as well as a variety of cloud
  | based disks are available to your application. Just store away!
  |
  */

  'es' => [
    'items' => [
      [
        'text' => 'Inicio',
        'icon' => 'fa fa-home icon-menu--color',
        'url' => '#home_hbs'
      ],
      [
        'text' => 'Acerca de Nosotros',
        'icon' => 'fa fa-podcast icon-menu--color',
        'url' => '#about'
      ],
      [
        'text' => 'Servicios',
        'icon' => 'fa fa-cogs icon-menu--color',
        'url' => '#services'
      ],
      [
        'text' => 'Equipo',
        'icon' => 'fa fa-users icon-menu--color',
        'url' => '#team'
      ],
      [
        'text' => 'Contáctenos',
        'icon' => 'fa fa-envelope icon-menu--color',
        'url' => '#contact'
      ],
    ],

    'social' => [
      [
        'icon' => 'fa fa-home',
        'url' => '#'
      ],
      [
        'icon' => 'fa fa-cog',
        'url' => '#'
      ],
      [
        'icon' => 'fa fa-code',
        'url' => '#'
      ],
    ],

  ],

];
