<?php

namespace Aranyasen\LaravelAdminer;

use Illuminate\Routing\Controller;

class AdminerController extends Controller
{
    public function index(): void
    {
        require('adminer-with-plugins.php');
    }
}
