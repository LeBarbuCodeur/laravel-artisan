<?php

namespace LeBarbuCodeur\LaravelArtisan\Tests;

use LeBarbuCodeur\LaravelArtisan\LaravelArtisanFacade;
use LeBarbuCodeur\LaravelArtisan\LaravelArtisanServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            LaravelArtisanServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'LaravelArtisanFacade' => LaravelArtisanFacade::class,
        ];
    }
}
