<?php

$loader = require __DIR__ . '/vendor/autoload.php';

\Wizard\Kernel\App::$Root = __DIR__;

$uri = substr($_SERVER['REQUEST_URI'], strpos($_SERVER['PHP_SELF'], '/index.php'));
$method = $_SERVER['REQUEST_METHOD'];
$App = new \Wizard\Kernel\App($uri, $method);

$App->make(new \Wizard\Http\HttpKernel());

$App->send();

$App->terminate();


