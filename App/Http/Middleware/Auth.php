<?php

namespace App\Http\Middleware;

use Wizard\Http\Interfaces\MiddlewareInterface;
use Wizard\Http\App\Middleware;

class Auth extends Middleware implements MiddlewareInterface
{

    public function handle()
    {
        return [true];
    }

}