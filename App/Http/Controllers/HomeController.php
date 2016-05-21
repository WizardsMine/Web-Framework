<?php

namespace App\Http\Controllers;

use Wizard\Http\App\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return ['page' => 'home.template', [
            'message' => 'Congratulations, you managed to successfully install the Wizard Framework'
        ]];
    }
}


