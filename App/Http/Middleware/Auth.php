<?php

namespace App\Http\Middleware;

use Wizard\Src\Http\Interfaces\MiddlewareInterface;
use Wizard\Src\Http\App\Middleware;

class Auth extends Middleware implements MiddlewareInterface
{

    public function handle()
    {
        return [true];
    }

}