<?php

namespace LeBarbuCodeur\LaravelArtisan\Tests;

use Illuminate\Support\Arr;
use LeBarbuCodeur\LaravelArtisan\LaravelArtisanFacade;

class LaravelArtisanFacadeTest extends TestCase
{
    public function test_can_access_the_facade()
    {
        $this->assertEquals(
            Arr::get(LaravelArtisanFacade::list()->getData(), 'commands'),
            LaravelArtisanFacade::getCommandsList(),
        );
    }
}
