<?php

return [
    'driver' => 'file',

    'file' => [
        'path' => __DIR__.'/../Storage/Session'
    ],

    'mysql' => [
        'use_database_config' => true,
        'host'      => 'root',
        'database'  => 'database',
        'user'      => 'root',
        'password'  => '',
        'table'     => ''
    ]
];