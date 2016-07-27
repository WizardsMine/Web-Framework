<?php

$loader = require __DIR__ . '/vendor/autoload.php';

\Wizard\Kernel\App::$root = __DIR__;

$uri = substr($_SERVER['REQUEST_URI'], strpos($_SERVER['PHP_SELF'], '/index.php'));
$method = $_SERVER['REQUEST_METHOD'];

try {
    $App = new \Wizard\Kernel\App($uri, $method);

    $App->prepare();

    $App->start();

    $App->send();

} catch (\Wizard\Exception\WizardRuntimeException $e) {
    $e->showErrorPage();
} catch (\Throwable $e) {
    \Wizard\Exception\WizardRuntimeException::showStaticErrorPage($e);
}



