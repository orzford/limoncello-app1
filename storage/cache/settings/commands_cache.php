<?php

// THIS FILE IS AUTO GENERATED. DO NOT EDIT IT MANUALLY.
// Generated at: Mon, 02 Mar 2020 16:25:01 +0000

    return array (
  0 => 
  array (
    0 => 'l:app',
    1 => 'Creates and cleans application cache.',
    2 => 'This command creates and cleans caches for routes, settings and etc.',
    3 => 
    array (
      0 => 
      array (
        0 => 'action',
        1 => 'Action such as `cache` or `clear-cache`.',
        3 => 1,
      ),
    ),
    4 => 
    array (
    ),
    5 => 
    array (
      0 => 'Limoncello\\Application\\Commands\\ApplicationCommand',
      1 => 'execute',
    ),
  ),
  1 => 
  array (
    0 => 'l:db',
    1 => 'Migrates and seeds application data.',
    2 => 'This command migrates, seeds and resets application data.',
    3 => 
    array (
      0 => 
      array (
        0 => 'action',
        1 => 'Action such as `migrate`, `seed` or `rollback` data.',
        3 => 1,
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 'path',
        2 => 'Path to a list of migrations or seeds. If not given a path from settings will be used.',
        1 => 'i',
        4 => 2,
      ),
    ),
    5 => 
    array (
      0 => 'Limoncello\\Application\\Commands\\DataCommand',
      1 => 'execute',
    ),
  ),
  2 => 
  array (
    0 => 'l:make',
    1 => 'Creates necessary classes for models, migrations and data seeds.',
    2 => 'This command creates necessary classes for models, migrations and data seeds.',
    3 => 
    array (
      0 => 
      array (
        0 => 'item',
        1 => 'Action such as `data-resource`, `web-resource`, `json-resource` or `resource`.',
        3 => 1,
      ),
      1 => 
      array (
        0 => 'singular',
        1 => 'Singular name in camel case (e.g. `Post`).',
        3 => 1,
      ),
      2 => 
      array (
        0 => 'plural',
        1 => 'Plural name in camel case (e.g. `Posts`).',
        3 => 1,
      ),
    ),
    4 => 
    array (
    ),
    5 => 
    array (
      0 => 'Limoncello\\Application\\Commands\\MakeCommand',
      1 => 'execute',
    ),
  ),
);
