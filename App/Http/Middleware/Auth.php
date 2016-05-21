<?php

namespace App\Http\Middleware;

use Wizard\Http\Interfaces\MiddlewareInterface;
use Wizard\App\Middleware;

class Auth extends Middleware implements MiddlewareInterface
{

    public function handle()
    {
        return [true];
    }

}