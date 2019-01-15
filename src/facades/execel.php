<?php

namespace Execel\ExecelFile\Facades;

use Illuminate\Support\Facades\Facade;

class Execel extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'execel';
    }
}