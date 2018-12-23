<?php

namespace Aranyasen\LaravelAdminer;

use Illuminate\Routing\Controller;

class AdminerController extends Controller {

    public function index()
    {
        require('adminer-with-plugins.php');
        return new EmptyResponse();
    }
}
