<?php

namespace Mmes\Vite\Facades;

use October\Rain\Support\Facade;

class Vite extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'vite';
    }
}
