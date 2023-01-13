<?php

namespace LeBarbuCodeur\LaravelArtisan;

use Illuminate\Support\Facades\Facade;

class LaravelArtisanFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-artisan';
    }
}
