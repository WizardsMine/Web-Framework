<?php

return [

    '/' => [
        'controller' => 'HomeController@index',
        'middleware' => 'Auth',
        'method' => 'GET',
        'assets' => 'MasterAsset'
    ],
];
