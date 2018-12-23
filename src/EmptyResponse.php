<?php

namespace Aranyasen\LaravelAdminer;

use Illuminate\Http\Response;

class EmptyResponse extends Response
{
    public function send()
    {
    }
}